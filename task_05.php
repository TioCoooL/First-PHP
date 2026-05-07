<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-margin-top" style="max-width: 600px;">
    <form action="task_05Action.php" method="post" class="w3-container w3-card-4 w3-padding-16">
        <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="name" required>
        </div>
        <div class="w3-section">
            <label>Study Program</label>
            <input class="w3-input w3-border" type="text" name="stud" required>
        </div>
        <button type="submit" name="submit" class="w3-button w3-green">Submit</button>
    </form>
</div>

</body>
</html>