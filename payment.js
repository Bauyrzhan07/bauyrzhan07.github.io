
let cartItems = localStorage.getItem("productsInCart");
cartItems = JSON.parse(cartItems);
let order = document.querySelector(".selected");
order.innerHTML = '';

Object.values(cartItems).map(item => {
    order.innerHTML += `

        <div class="orderView">
            <div class="AmountPay">${item.inCart}</div>
            <div class="orderName">${item.name}</div>
            <div class="totalCost">${item.inCart*item.price}KZT</div>
            <div class="orderImg"><img src="${item.img_url}"></div>
        </div>
    `
});

let products_tag = document.getElementById("products");
let amount_tag = document.getElementById("amount");
products_tag.value = JSON.stringify(cartItems);
amount_tag.value = localStorage.getItem("totalCost");