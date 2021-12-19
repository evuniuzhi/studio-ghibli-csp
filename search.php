<?php
  include 'header.php';
?>

    <h1>Search Page</h1>

    <div class="result-container">
    <?php>
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM studioghib WHERE 
                a_movieTitle LIKE '%search%'  OR a_mainchacters LIKE '%search%' OR a_description LIKE '%search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "There are " .$queryResult. "results!";

                if ($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<a href='result.php?'><div class= 'result-box'>
                        <h3>".$row['a_movieTitle']."</h3>
                        <p>".$row['a_maincharacters']."</p>
                        <p>".$row['a_descriptions']."</p>
                </div></a>";
                }
            } else {
                echo "There are no results matching your search!";
            }
        }
        
        
        ?>
    </div>
</body>
</html>