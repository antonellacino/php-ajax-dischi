<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>

</head>

<body>
    <header>
        <img src="logo.png" alt="">
    </header>
    <div class="container">
        <!--creazione template by php-->
<?php
require_once "db.php";
  foreach ($db as $key) {
  // code...
      ?>
            <div class="album">
                <div class="cover">
                    <img src="<?php echo $key['poster']?>" alt="">
                </div>
                <div class="details">
                    <h3><?php echo $key['title']?></h3>
                    <p><?php echo $key['author']?></p>
                    <p><?php echo $key['year']?></p>
                </div>
            </div>
            <?php
            }
?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>
