<?php
  include 'dbh.php';
?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"></button>
</form>

<h1>front page</h1>
<h2>all results</h2>

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