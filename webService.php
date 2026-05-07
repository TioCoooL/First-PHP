<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
   <div class="w3-container">
      <form action="" method="get">
         <div style="margin-bottom: 16px">
            <label for="name">Name</label><br>
            <input type="text" name="name">
         </div>

         <div style="margin-bottom: 16px">
            <label for="prog">Study Program</label><br>
            <input type="text" name="prog">
         </div>

         <button type="submit" name="submit" style="background-color: #5cb85c">Submit</button>
      </form>
      <br>
   </div>

   <?php
   if (isset($_GET['name']) && isset($_GET['prog'])) {
      $name = $_GET['name'];
      $prog = $_GET['prog'];

      // echo "Hello, " . $name . ", You are from " . $prog;
      <p>Hello, <?php echo $_POST('name'); ?>, you are from . <?php echo $_POST('prog'); ?></p>
   } 
   ?>

</body>
</html>