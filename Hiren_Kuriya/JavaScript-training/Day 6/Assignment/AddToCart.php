<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="row">
                    <h2 class="display-6">Assignment 01 : Display Product information in Grid format with AddToCart
                        option. once
                        a user click on AddtoCart button should be stored in local storage. Click on cart summary
                        will display
                        that data into console.</h2>
                    <div class="col-md-7">
                        <h2 class="text-center">All Items</h2>
                        <table class="table table-hover table-warning table-hover">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th>ProductID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="result">

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">
                            <p>Cart Items</p>
                            <button class="btn btn-outline-success" id="summery">Cart Summery</button>
                            <button class="btn btn-outline-danger" id="checkout">Check out</button>
                        </h2>
                        <table style="display: none;" id="data_table" class="table table-hover table-info table-hover">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th>ProductID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody id="carts">

                            </tbody>
                        </table>
                        <h1 id="checked-out" class="text-center"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    function display_cart() {
        cart_items = {
            "cart": [{
                    "Id": 1,
                    "ProductName": "Cheese",
                    "Price": 100,
                    "Quantity": 1,
                },
                {
                    "Id": 2,
                    "ProductName": "Pen",
                    "Price": 150,
                    "Quantity": 2,
                },
                {
                    "Id": 3,
                    "ProductName": "Butter",
                    "Price": 100,
                    "Quantity": 1,
                },
                {
                    "Id": 4,
                    "ProductName": "Pencil",
                    "Price": 10,
                    "Quantity": 1,
                },
            ]
        }

        var i;
        for (i in cart_items.cart) {
            document.getElementById("result").innerHTML += "<tr> <td>" + cart_items.cart[i].Id + "</td> <td>" + cart_items.cart[i].ProductName + "</td> <td>" + cart_items.cart[i].Price + "</td> <td>" + cart_items.cart[i].Quantity + "</td> <td><button onclick='add_to_cart(this);' class='btn btn-warning'>Add To Cart</button> </td> </tr>";
        }
    }
    display_cart();

    var item_array = [];
    var cart;

    function add_to_cart(item) {
        var cart_id = item.parentNode.parentNode.rowIndex;
        var cart_p_name = cart_items.cart[cart_id - 1].ProductName;
        var cart_price = cart_items.cart[cart_id - 1].Price;
        var cart_quantity = cart_items.cart[cart_id - 1].Quantity;

        var items = {
            "id": cart_id,
            "productName": cart_p_name,
            "Price": cart_price,
            "Quantity": cart_quantity
        };

        item_array.push(items);

        localStorage.setItem("added_items", JSON.stringify(item_array));

        alert("Item Added...");
    }
    var total = 0;
    document.getElementById('summery').onclick = function() {
        document.getElementById('')
        var obj = localStorage.getItem("added_items");
        cart = JSON.parse(obj);
        document.getElementById('data_table').style.display = "block";
        document.getElementById("carts").innerHTML = "";
        for (i in cart) {
            document.getElementById("carts").innerHTML += "<tr> <td>" + cart[i].id + "</td> <td>" + cart[i].productName + "</td> <td>" + cart[i].Price + "</td> <td>" + cart[i].Quantity + "</td></tr>";
            total += cart[i].Price;
        }
    }

    document.getElementById('checkout').onclick = function() {
        document.getElementById('checked-out').innerHTML = "&#8377; " + total;
        total = 0;
        localStorage.clear();
    }
</script>