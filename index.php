<?php
  include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Neighbor Totoro</title>
    <link rel = "stylesheet" href = style.css>
    <link rel="icon" type="image/x-icon" href="file:///C:/Users/aaron/Downloads/totoro_icon-removebg-preview%20(1).png">
    <script src="script.js"></script>
    <div class = "navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class = "active" href="index.php">Search Bar</a></li>
        <li><a href="movieGallery.html">Movie Gallery</a></li>
      </ul>
    </div>
    <style>
      input{
        height:30px;
      }
      button{
        height:30px;
      }
    </style>
</head>

  <body style = "background-image: url(https://i.pinimg.com/originals/b7/37/14/b73714046581ab14cb347a4ba2cff999.jpg); 
background-repeat: no-repeat; background-attachment: fixed;
background-size: cover;">
  <h1 style = "text-align: center; border-radius: 1em;
  padding: 1em;
  position: absolute;
  top: 40%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%)">Which movie would you like to know more about?</h1>

  <form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"></button>
  </form>

  <h1>front page</h1>
  <h2> all results</h2>

  <div class="result-container">
    <?php
      $sql = "SELECT * FROM ghib";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);

      if ($queryResults>0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo "<div>
            <h3>".$row['a_movieTitle']."</h3>
            <p>".$row['a_maincharacters']."</p>
            <p>".$row['a_descriptions']."</p>
          </div>";
        }
      }
    ?>
  </body>
    
 </html>