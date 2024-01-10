<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<style>
    body {
        font-family: monospace;
        overflow-x: hidden;
        font-synthesis: 15px;
    }

    a {
        text-decoration: none;
    }

    .container {
        width: 1200px;
        margin: auto;
        max-width: 90%;
        transition: transform 1s;
    }

    header img {
        width: 60px;
    }

    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header .iconCart {
        position: relative;
        z-index: 1;
    }

    header .totalQuantity {
        position: absolute;
        top: 0;
        right: 0;
        font-size: x-large;
        background-color: #b31010;
        width: 40px;
        height: 40px;
        color: #fff;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        transform: translateX(20px);
    }

    .listProduct {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .listProduct .item img {
        width: 100%;
        height: 430px;
        object-fit: cover;
    }

    .listProduct .item {
        position: relative;
    }

    .listProduct .item h2 {
        font-weight: 700;
        font-size: x-large;
    }

    .listProduct .item .price {
        font-size: x-large;
    }

    .listProduct .item button {
        position: absolute;
        top: 50%;
        left: 50%;
        background-color: #e6572c;
        color: #fff;
        width: 50%;
        border: none;
        padding: 20px 30px;
        box-shadow: 0 10px 50px #000;
        cursor: pointer;
        transform: translateX(-50%) translateY(100px);
        opacity: 0;
    }

    .listProduct .item:hover button {
        transition: 0.5s;
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }

    .cart {
        color: #fff;
        position: fixed;
        width: 400px;
        max-width: 80vw;
        height: 100vh;
        background-color: #0E0F11;
        top: 0px;
        right: -100%;
        display: grid;
        grid-template-rows: 50px 1fr 50px;
        gap: 20px;
        transition: right 1s;
    }

    .cart .buttons .checkout {
        background-color: #E8BC0E;
        color: #000;
    }

    .cart h2 {
        color: #E8BC0E;
        padding: 20px;
        height: 30px;
        margin: 0;
    }


    .cart .listCart .item {
        display: grid;
        grid-template-columns: 50px 1fr 70px;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;

    }

    .cart .listCart img {
        width: 100%;
        height: 70px;
        object-fit: cover;
        border-radius: 10px;
    }

    .cart .listCart .item .name {
        font-weight: bold;
    }

    .cart .listCart .item .quantity {
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .cart .listCart .item .quantity span {
        display: block;
        width: 50px;
        text-align: center;
    }

    .cart .listCart {
        padding: 20px;
        overflow: auto;
    }

    .cart .listCart::-webkit-scrollbar {
        width: 0;
    }

    .cart .buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        text-align: center;
    }

    .cart .buttons div {
        background-color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        cursor: pointer;
    }

    .cart .buttons a {
        color: #fff;
        text-decoration: none;
    }

    .checkoutLayout {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
        padding: 80px;
    }

    .checkoutLayout .right {
        background-color: rgb(158, 15, 15);
        border-radius: 20px;
        padding: 10px;
        color: #fff;
        height: 538px;
    }

    .checkoutLayout .right .form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        border-bottom: 1px solid #d8d9ee;
        padding-bottom: 20px;
    }

    .checkoutLayout .form h1,
    .checkoutLayout .form .group:nth-child(-n+3) {
        grid-column-start: 1;
        grid-column-end: 3;
    }

    .checkoutLayout .form input,
    .checkoutLayout .form select {
        width: 100%;
        padding: 10px 20px;
        box-sizing: border-box;
        border-radius: 20px;
        margin-top: 10px;
        border: none;
        background-color: #edeef5;
        color: #fff;
    }

    .checkoutLayout .right .return .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .checkoutLayout .right .return .row div:nth-child(2) {
        font-weight: bold;
        font-size: x-large;
    }
    button{
        width: 100%;
        height: 40px;
        border: none;
        border-radius: 20px;
        background-color: black;
        margin-top: 20px;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
    }
    .returnCart h1 {
        border-top: 1px solid #eee;
        padding: 20px 0;
    }

    .returnCart .list .item img {
        height: 80px;
    }

    .returnCart .list .item {
        display: grid;
        grid-template-columns: 80px 1fr 50px 80px;
        align-items: center;
        gap: 20px;
        margin-bottom: 30px;
        padding: 0 10px;
        box-shadow: 0 10px 20px #5555;
        border-radius: 20px;
    }

    .returnCart .list .item .name,
    .returnCart .list .item .returnPrice {
        font-size: large;
        font-weight: bold;
    }

    /*bg*/
    * {
        font-family: 'Roboto', sans-serif;
        margin: 0%;
        padding: 0%;
    }

    body {
        background-color: black;
        color: white;
    }

    nav {
        display: flex;
        justify-content: space-between;
        background-color: black;
        padding: 10px;
        position: fixed;
        top: 0%;
        width: 90%;

    }

    .logo {
        margin-left: 5px;
    }

    .logo h1 {
        border-bottom: 4px solid rgb(247, 2, 2);
        width: 115px;
        border-radius: 2px;
        border-bottom-right-radius: 18px;
        font-family: 'Courgette', cursive;
        font-size: 34px;
        color: rgb(243, 4, 4);
    }

    nav ul {
        display: flex;
        margin-top: 8px;
        margin-right: 46px;
    }

    ul a {
        margin-inline: 31px;
        text-decoration: none;
        color: white;
        margin-top: 6px;
        cursor: pointer;

    }

    nav ul a:hover {
        border-bottom: 2px solid red;
        font-weight: 600;
        color: red;
    }

    ul button {
        width: 70px;
        height: 30px;
        background-color: rgb(224, 4, 4);
        border: none;
        font-size: 18px;
        outline: none;
        color: white;
        border-radius: 2px;
    }

    ul button:hover {
        border: 2px solid red;
        background-color: transparent;
        cursor: pointer;
    }
    
</style>

<body>

    <div class="container">
        <nav>
            <div class="logo">
                <h1>Savoria</h1>
            </div>

            <ul>
                <a href="index.html">Home</a>
                <a href="Cart.html">Cart</a>
                <a href="index.html">Menu</a>
            </ul>
        </nav>
        <div class="checkoutLayout">
            <div class="returnCart">
                <a href="/" style="color: white;">KEEP SHOPPING</a>
                <h1>MY CART</h1>
                <div class="list">

                    <div class="item">
                        <img src="image/1.PNG">
                        <div class="info">
                            <div class="name">Krunch Burger</div>
                            <div class="price">290 Rupees</div>
                        </div>
                        <div class="quantity">1</div>
                        <div class="returnPrice">Rs 290/=</div>

                        <img src="image/2.PNG">
                        <div class="info">
                            <div class="name">Krunch Burger</div>
                            <div class="price">290 Rupees</div>
                        </div>
                        <div class="quantity">1</div>
                        <div class="returnPrice">Rs 290/=</div>

                    </div>
                </div>

            </div>
            <div class="right">
                <h1>Checkout</h1>
                <form action="checkout.php" method="post">
                <div class="form">
                    <div class="group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" style="color: black;" required>
                    </div>

                    <div class="group">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" id="phone" style="color: black;" required>
                    </div>

                    <div class="group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" style="color: black;" required>
                    </div>

                    <div class="group">
                        <label for="Payment">Payment</label>
                        <select name="Payment" id="Payment" style="color: black;" required>
                            <option value="">Choose..</option>
                            <option value="Cash On Delivery">Cash On delivery</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Jazz Cash">Jazz Cash</option>
                            <option value="Easy Paisa">Easy Paisa</option>

                        </select>
                    </div>

                    <div class="group">
                        <label for="city">City</label>
                        <select name="city" id="city" style="color: black;">
                            <option value="">Choose..</option>
                            <option value="Karachi">Karachi</option>
                        </select>
                    </div>
                </div>
                <div class="return">
                    <div class="row">
                        <div>Total Quantity</div>
                        <div class="totalQuantity" name ="totalQuantity">0</div>
                        <input type="hidden" name="totalQuantity" id="totalQuantityInput" value="totalQuantity">
                    </div>
                    <div class="row">
                        <div>Total Price</div>
                        <div class="totalPrice" name = "totalPrice">RS 00</div>
                        <input type="hidden" name="totalPrice" id="totalPriceInput" value="totalPrice">
                    </div>
                </div>
                <button type="submit">CheckOut</button>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Retrieve selected items from local storage
    const selectedItems = JSON.parse(localStorage.getItem('selectedItems')) || [];

    // Display selected items in the checkout page
    const list = document.querySelector('.list');
    list.innerHTML = '';

    let totalQuantity = 0;
    let totalPrice = 0;

    selectedItems.forEach((item) => {
        totalQuantity += item.quantity;
        totalPrice += item.price * item.quantity;

        const newItem = document.createElement('div');
        newItem.classList.add('item');
        newItem.innerHTML = `
            <img src="image/${item.image}">
            <div class="info">
                <div class="name">${item.name}</div>
                <div class="price">${item.price.toLocaleString()} Rupees</div>
            </div>
            <div class="quantity">${item.quantity}</div>
            <div class="returnPrice">Rs ${item.price * item.quantity}/=</div>
        `;
        list.appendChild(newItem);
    });

    // Display total quantity and total price
    document.querySelector('.totalQuantity').textContent = totalQuantity;
    document.querySelector('.totalPrice').textContent = `RS ${totalPrice.toLocaleString()}`;

    // Set the values in hidden input fields for form submission
    document.getElementById('totalQuantityInput').value = totalQuantity;
    document.getElementById('totalPriceInput').value = totalPrice;
});


    </script>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $totalQuantity = $_POST["totalQuantity"];
    $totalPrice = $_POST["totalPrice"];
    $city = $_POST["city"];
    $Payment = $_POST["Payment"];

    // Insert the user data into the 'checks' table
    $conn = new mysqli("localhost", "root", "", "mern_k");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO checks(name, phone, address, Payment, city, totalQuantity, totalPrice) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $phone, $address, $Payment, $city, $totalQuantity, $totalPrice);

    if ($stmt->execute()) {
        echo "Order placed, wait for our call";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

