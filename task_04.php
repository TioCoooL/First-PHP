<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-margin-top" style="max-width: 600px;">
    <div class="w3-card w3-padding">
        <form action="" method="post">
            <label class="w3-text-black"><b>Name</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="name" placeholder="put your name here ..">

            <label class="w3-text-black"><b>Food & Beverages</b></label>
            <div class="w3-margin-bottom">
                <input class="w3-check" type="checkbox" name="food[]" value="50000"> Pizza @50K <br>
                <input class="w3-check" type="checkbox" name="food[]" value="40000"> Burger @40K <br>
                <input class="w3-check" type="checkbox" name="food[]" value="20000"> Potato Chips @20K
            </div>

            <label class="w3-text-black"><b>Payment Type</b></label>
            <div class="w3-margin-bottom">
                <input class="w3-radio" type="radio" name="payment" value="cash" checked> Cash <br>
                <input class="w3-radio" type="radio" name="payment" value="debit card"> Debit Card
            </div>

            <button type="submit" name="submit" class="w3-button w3-green w3-margin-bottom">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $payment = $_POST['payment'];
            $total = 0;

            if (!empty($_POST['food'])) {
                foreach ($_POST['food'] as $price) {
                    $total += $price;
                }
            }

            if (!empty($name)) {
                echo "<p class='w3-margin-top'>hello, $name, Your Total Order Rp. $total,- ($payment)</p>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>