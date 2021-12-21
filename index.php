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
      body {
      background-image: url(https://pbs.twimg.com/media/EONJLMdXkAUOAP4?format=jpg&name=large); 
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
    <h1 style = "text-align: center; padding-top:200px; padding-bottom: 10px;color:white">What movie would you like to know more about?</h1>
    <form action="search.php" method="POST" style = "text-align: center">
      <input type="text" name="search" placeholder="Search for movie title or main character" style = "width:50%;">
     <button type="submit" name="submit-search">Search</button>
    </form>
    <p>go to <a href="movieGallery.html" style="color:lightblue">Movie Gallery</a> to find more movies</p>
  </body>
    
 </html>