let carts = document.querySelectorAll('.inside');
let removedCarts = document.querySelectorAll('.remove');

function deleteItem(id){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
        
    let price = parseInt(cartItems[id].price);
    let inCart = parseInt(cartItems[id].inCart);
    delete cartItems[id];
    cartItems = JSON.stringify(cartItems);

    localStorage.setItem("productsInCart", cartItems);

    let totalAmount = localStorage.getItem("totalCost");
    totalAmount = parseInt(totalAmount);

    totalAmount -= price * inCart;

    localStorage.setItem("totalCost", totalAmount);

    displayCart();  
}


function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    let totalCost = Number(localStorage.getItem('totalCost'));
    cartItems = JSON.parse(cartItems);
    if(totalCost == null) {
        totalCost = 0;
    }

    if(cartItems != null) {

        if(cartItems[product.id] == undefined) {
            product.inCart = 1;
            cartItems = {
                ...cartItems,
                [product.id]: product
            }
        } else {
            cartItems[product.id].inCart += 1;
        }
    }else {
        product.inCart = 1;
        cartItems = {
            [product.id]: product
        }
    }
    localStorage.setItem("totalCost", totalCost + Number(product.price));
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
    
    localStorage.clear();

    productContainer.innerHTML += `
        <div class="totalContainer">
            Общая цена: 0 KZT
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
                <img src = "${item.img_url}" width="200px">
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
        console.log(totalAmount);
        productContainer.innerHTML += `
        <div class="totalContainer">
            Общая цена: ${totalAmount} KZT
        </div>
        <div class="btn-container">
            <button class="btn btn-colored" onclick="deleteAll()"><a>Delete All</a></button>
            <button class="btn btn-colored" onclick="openOrder()"><a>Buy Now</a></button>
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

        totalAmount = parseInt(totalAmount);

        totalAmount -= cartItems[id].price;
        cartItems[id].inCart -= 1;
        
        cartItems = JSON.stringify(cartItems);
        
        localStorage.setItem("productsInCart", cartItems);
        localStorage.setItem("totalCost", totalAmount);
    }
    displayCart();
}

function increaseItem(id){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    let totalAmount = localStorage.getItem("totalCost");
    totalAmount = Number(totalAmount);
    totalAmount += Number(cartItems[id].price);
    
    cartItems[id].inCart += 1;
    
    cartItems = JSON.stringify(cartItems);
    localStorage.setItem("totalCost", totalAmount);

    localStorage.setItem("productsInCart", cartItems);

    displayCart();
}
displayCart();
