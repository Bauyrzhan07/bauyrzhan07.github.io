let carts = document.querySelectorAll('.add-cart');
let removedCarts = document.querySelectorAll('.remove');


console.log(removedCarts)

let products = [
    {
        id: 0,
        img: "https://imageproxy.wolt.com/menu/menu-images/60af366805aba2e72c395ad6/61848d4e-3f5b-11ed-aef8-462ec24cafeb_wl_2059.jpg?w=300",
        name: "Snack Box Mixi",
        tag: "SnackBoxMixi",
        price: 3700,
        inCart: 0
    },
    {
        id: 1,
        img: "https://imageproxy.wolt.com/menu/menu-images/60af366805aba2e72c395ad6/618d3b74-3f5b-11ed-aef8-462ec24cafeb_wl_2058.jpg?w=300",
        name: "Snack Box Large",
        tag: "SnackBoxLarge",
        price: 3400,
        inCart: 0
    },
    {
        id: 2,
        img: "https://imageproxy.wolt.com/menu/menu-images/60af366805aba2e72c395ad6/61915e52-3f5b-11ed-aef8-462ec24cafeb_wl_7072.jpg?w=300",
        name: "Напиток 'Вишневый Микс'",
        tag: "Cherry",
        price: 450,
        inCart: 0
    },
    {
        id: 3,
        img: "https://imageproxy.wolt.com/menu/menu-images/60af366805aba2e72c395ad6/61965588-3f5b-11ed-aef8-462ec24cafeb_wl_7073.jpg?w=300",
        name: "Лимонад Ягодный",
        tag: "lemonberry",
        price: 450,
        inCart: 0
    },
    {
        id: 4,
        img: "https://imageproxy.wolt.com/menu/menu-images/60af366805aba2e72c395ad6/619a8130-3f5b-11ed-aef8-462ec24cafeb_wl_4115.jpg?w=300",
        name: "Макфлурри ягодный",
        tag: "Makberry",
        price: 750,
        inCart: 0
    }

];

for (let i = 0; i < carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}




function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers){
        document.querySelector('.cart span').textContent = productNumbers;  
    }

    
}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if (productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    }else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }

    setItems(product);

}

function deleteItem(id){
    let cartItems = localStorage.getItem("productsInCart");
    let cartNum = localStorage.getItem("cartNumbers");
    cartItems = JSON.parse(cartItems);
    cartNum = parseInt(cartNum);
    if(cartItems[id].inCart/cartNum === 1) {
        deleteAll();
    } else {
        
        let price = parseInt(cartItems[id].price);
        let inCart = parseInt(cartItems[id].inCart);
        delete cartItems[id];
        cartItems = JSON.stringify(cartItems);

        

        localStorage.setItem("productsInCart", cartItems);

        let productsAmount = localStorage.getItem("cartNumbers");
        productsAmount = parseInt(productsAmount);
        productsAmount -= inCart;
        
        localStorage.setItem("cartNumbers", productsAmount);

        document.querySelector(".cart span").textContent -= inCart;

        let totalAmount = localStorage.getItem("totalCost");
        totalAmount = parseInt(totalAmount);

        totalAmount -= price * inCart;

        localStorage.setItem("totalCost", totalAmount);


        onLoadCartNumbers();
        displayCart();
    }
    
}


function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {

        if(cartItems[product.id] == undefined) {
            cartItems = {
                ...cartItems,
                [product.id]: product
            }
        }

        cartItems[product.id].inCart += 1;
    }else {
        product.inCart = 1;
        cartItems = {
            [product.id]: product
        }
    }
    
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product){
    let totalAmount = localStorage.getItem("totalCost");
    totalAmount = parseInt(totalAmount);

    if(totalAmount){
        localStorage.setItem("totalCost", totalAmount + product.price);
    }else{
        localStorage.setItem("totalCost", product.price);
    }

    
}


function deleteAll(){
    let productContainer = document.querySelector(".products-container");
    productContainer.innerHTML = '';
    document.querySelector(".cart span").textContent = 0;
    
    localStorage.clear();


    productContainer.innerHTML += `
        <div class="totalContainer">
            Total Cost: 0 KZT
        </div>
    `

}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products-container");


    if(cartItems && productContainer){
        productContainer.innerHTML = '';  
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <div class="removeButton">
                    <button class="remove" onclick="deleteItem(${item.id})"><ion-icon name="trash-outline"></ion-icon></button>
                </div>
                <img src = "${item.img}">
                <span class="nameInside">${item.name}</span>
            </div>
            <div class="quantity">
                <button class="changeAmount" onclick="decreaseItem(${item.id})"><ion-icon class="dec" name="caret-back-outline"></ion-icon></button>
                <span>${item.inCart}</span>
                <button class="changeAmount" onclick="increaseItem(${item.id})"><ion-icon class="inc" name="caret-forward-outline"></ion-icon></button>
            </div>
            <div class="total">
                ${item.inCart * item.price}KZT
            </div>
            `
        });

        let totalAmount = localStorage.getItem("totalCost");
        productContainer.innerHTML += `
        <div class="totalContainer">
            Total Cost: ${totalAmount} KZT
        </div>
        <div class="deleteAll">
            <button class="DeleteButton" onclick="deleteAll()">Delete All</button>
        </div>
        <div class="BuyNow">
            <button class="BuyNowButton" onclick="openOrder()">Buy Now</button>
        </div>
        `

    }

    
}

function displayOrder(){
    document.getElementById("formOrder").style.display = "block";
    document.getElementById("overlayAll").style.display = "block";
    
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    let order = document.querySelector(".orderItems");
    order.innerHTML = '';
    
    Object.values(cartItems).map(item => {
        order.innerHTML += `

            <div class="orderView">
                <div class="Amount">${item.inCart}</div>
                <div class="orderName">${item.name}</div>
                <div class="totalCost">${item.inCart*item.price}</div>
                <div class="orderImg"><img src="${item.img}"></div>
            </div>
        `
    });

    order.innerHTML += `
        <a class="paymentButton" href="payment.html">Go to pay</a> 
    `
    
}

function openOrder(){
    displayOrder();
        
}

function decreaseItem(id){
    
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);


    if(cartItems[id].inCart === 1){
        deleteItem(id);
    }else{
        
        let totalAmount = localStorage.getItem("totalCost");
        let itemsAmount = localStorage.getItem("cartNumbers");   

        totalAmount = parseInt(totalAmount);
        itemsAmount = parseInt(itemsAmount);

        totalAmount -= products[id].price;
        itemsAmount -= 1;
        cartItems[id].inCart -= 1;
        

        document.querySelector(".cart span").textContent -= 1;
        cartItems = JSON.stringify(cartItems);
        
        localStorage.setItem("productsInCart", cartItems);
        localStorage.setItem("cartNumbers", itemsAmount);
        localStorage.setItem("totalCost", totalAmount);
    }

    onLoadCartNumbers();
    displayCart();
}

function increaseItem(id){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    let totalAmount = localStorage.getItem("totalCost");
    let itemsAmount = localStorage.getItem("cartNumbers");
    totalAmount = parseInt(totalAmount);
    itemsAmount = parseInt(itemsAmount);

    totalAmount += cartItems[id].price;
    itemsAmount += 1;
    
    document.querySelector(".cart span").textContent = itemsAmount;
    cartItems[id].inCart += 1;
    
    cartItems = JSON.stringify(cartItems);
    localStorage.setItem("totalCost", totalAmount);
    localStorage.setItem("cartNumbers", itemsAmount);

    localStorage.setItem("productsInCart", cartItems);

    onLoadCartNumbers();
    displayCart();
}
onLoadCartNumbers();
displayCart();
