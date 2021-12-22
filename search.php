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
    <link rel = "stylesheet" href = gallerystyle.css>
    <link rel="icon" type="image/x-icon" href="totoro_icon-removebg-preview (1).png">
    <script src="script.js"></script>
    <div class = "navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="movieGallery.html">Movie Gallery</a></li>
        <li><a class = "active" href="index.php">Search Bar</a></li>
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

<body>
<?php
  include 'dbh.php';
    if (isset($_POST['submit-search'])){
        $search = $_POST['search'];
        // echo "Search " .$search. "!";
        $sql = "SELECT * FROM studioghib";
        // echo "SQL " .$sql. "!";
        if ($search != "") {
          $sql = $sql." WHERE movieTitle LIKE '%$search%' OR maincharacters LIKE '%$search%' OR descriptions LIKE '%$search%' ";
        }
        $result = @mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if(isset($_SERVER['HTTP_REFERER'])) {
          echo "<a style ='padding-left:30px;'href=".$_SERVER['HTTP_REFERER'].">Back to Search</a>";
          echo "<br>";
          echo "<br>";
      }
        echo "<p style ='padding-left:30px;'>". "There are " .$queryResult. " results!"."</p>";
        echo "<br>";
            if ($result){
            while($row = mysqli_fetch_assoc($result)){
              echo "<div class= 'result-box'>
              <h2 style ='padding-left:30px;padding-bottom:10px;'>".$row['movieTitle']."</h3>
              <p style ='padding-left:30px;'>"."Main Characters: ".$row['maincharacters']."</p>
              <p style ='padding-left:30px;'>"."Short Summary: ".$row['descriptions']."</p>
              <a href='{$row['wikiLink']};' style ='padding-left:30px;padding-bottom:10px;'>Check details</a>
            </div>";
            ?>
            <img src="<?php echo $row['imgLink']; ?>" style ='padding-left:30px;'/>
            <?php
            echo "<br>";
            }
        } else {
            echo "<p style ='padding-left:30px;'>"."There are no results matching your search!"."</p>";
        }
        if(isset($_SERVER['HTTP_REFERER'])) {
          echo "<a style ='padding-left:30px;'href=".$_SERVER['HTTP_REFERER'].">Back to Search</a>";
          echo "<br>";
          echo "<br>";
      }
    }
        
?>
</body>
</html>
