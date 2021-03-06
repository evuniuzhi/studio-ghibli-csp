<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Neighbor Totoro</title>
    <link rel = "stylesheet" href = searchstyle.css>
    <link rel="icon" type="image/x-icon" href="totoro_icon-removebg-preview (1).png">
    <script src="script.js"></script>
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="index.html">Home</a>
          <a href="movieGallery.html">Movie Gallery</a>
          <a href="index.php">Search</a>
        </div>
      </div>
      <!-- Use any element to open/show the overlay navigation menu -->
      
      </head>
      
      <script>
        /* Open when someone clicks on the span element */
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }
      
      /* Close when someone clicks on the "x" symbol inside the overlay */
      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }
      </script>
      
    <style>
      
      input{
        height:30px;
        width: 600px;
      }
      button{
        height:30px;
      }
      body {
      background-image: url(https://wallpaperaccess.com/full/163541.jpg); 
      background-repeat: no-repeat; background-attachment: fixed;
      background-size: cover;
      }
      p{
        color: white;
        text-align: center;
        padding: 10px;
      }
    </style>
</head>
  <body>
    <h2 onclick="openNav()" style="background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 60px;
  border: 10px solid #f1f1f1;
  position: fixed; /* Stay fixed */
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 1;
  width: 600px;
  padding: 20px;
  text-align: center;"> Movie Search</h2>
  <div class = "center">
    <form action="search.php" method="POST" style = "text-align: center; top: 40%"> 
        <input type="text" name="search" placeholder="Search for movie title or main character">
     <button type="submit" name="submit-search">Search</button>
    </form>
    <p>go to <a href="movieGallery.html" style="color:lightblue">Movie Gallery</a> to find more movies</p>
</div>
  </body>
    
 </html>