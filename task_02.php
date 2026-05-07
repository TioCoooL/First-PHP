<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>

<div class="w3-border w3-margin w3-container">
    <form action="" method="get">
    Name: <input type="text" name="name"><br>
    Study Program: <input type="text" name="stud"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_GET['name']) && isset($_GET['stud'])) {
        $name = $_GET['name'];
        $stud = $_GET['stud'];

        echo "Hello, " . $name . ", You are from Study Program is: " . $stud;
    }
    ?>
</div>

</body>
</html>