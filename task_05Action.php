<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-margin-top">
    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $stud = htmlspecialchars($_POST['stud']);

        echo "hello, " . $name . ", You are from " . $stud;
    } else {
        echo "You need to complete all the input before submit !";
    }
    ?>
</div>

</body>
</html>