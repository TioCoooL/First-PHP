<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-margin w3-border" style="max-width: 600px">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name"><br>
        Study Program: <input type="text" name="stud"><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $stud = $_POST['stud'];

            if (empty($name) || empty($stud)) {
                echo '<div class="w3-panel w3-red w3-leftbar w3-border-red w3-pale-red">';
                echo 'You need to complete all the input before submit !';
                echo '</div>';
            } else {
                echo '<div class="w3-panel w3-green w3-leftbar w3-border-green w3-pale-green">';
                echo "Hello, " . htmlspecialchars($name) . ", your Study Program is: " . htmlspecialchars($stud);
                echo '</div>';
            }
        }
    ?>

</div>
</body>
</html>