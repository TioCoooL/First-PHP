<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-margin-top" style="max-width: 500px;">
    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $stud = htmlspecialchars($_POST['stud']);
        ?>

        <div class="w3-card-4">
            <header class="w3-container w3-light-grey">
                <h3>User Information</h3>
            </header>

            <div class="w3-container w3-padding-16">
                <div class="w3-row">
                    <div class="w3-col s4">
                        <img src="avatar3.png" alt="Avatar" style="width:100%" class="w3-circle">
                    </div>
                    <div class="w3-col s8 w3-padding-small">
                        <p><strong>Name :</strong> <?php echo $name; ?></p>
                        <p><strong>Major :</strong> <?php echo $stud; ?></p>
                    </div>
                </div>
            </div>

            <footer class="w3-container w3-grey w3-center">
                <p class="w3-text-white">verify</p>
            </footer>
        </div>

        <?php
    }
    ?>
</div>

</body>
</html>