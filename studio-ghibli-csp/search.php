
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Neighbor Totoro</title>
    <link rel = "stylesheet" href = style.css>
    <link rel="icon" type="image/x-icon" href="totoro_icon-removebg-preview (1).png">
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

    <h1>Search Page</h1>

    <div class="result-container">
<?php
  include 'dbh.php';
    if (isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM studioghib WHERE 
            a_movieTitle LIKE '%search%'  OR a_mainchacters LIKE '%search%' OR a_description LIKE '%search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are " .$queryResult. "results!";

            if ($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href='result.php?title=".$row['a_movieTitle']."'><div class= 'result-box'>
                    <h3>".$row['a_movieTitle']."</h3>
                    <p>".$row['a_maincharacters']."</p>
                    <p>".$row['a_descriptions']."</p>
            </div></a>";
            }
        } else {
            echo "There are no results matching your search!";
        }
    }
        
?><?php
  include 'dbh.php';
?>
    </div>
</body>
</html>
