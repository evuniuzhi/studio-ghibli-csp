<?php
  include 'dbh.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<h1 onclick="openNav()" 
    style="background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    font-size: 60px;
    border: 10px solid #f1f1f1;
    top: 10%;
    left: 50%;
    transform: translate(65%, -50%);
    width: 600px;
    padding: 20px;
    text-align: center;"> Result</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Neighbor Totoro</title>
    <link rel = "stylesheet" href = gallerystyle.css>
    <link rel="icon" type="image/x-icon" href="totoro_icon-removebg-preview (1).png">
    <script src="script.js"></script>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <a href="index.html">Home</a>
          <a href="movieGallery.html">Movie Gallery</a>
          <a href="index.php">Search</a>
        </div>
    </div> 
      </head>
      <script>
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }
      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }

      class firefly{
  constructor(){
    this.x = Math.random()*w;
    this.y = Math.random()*h;
    this.s = Math.random()*2;
    this.ang = Math.random()*2*Math.PI;
    this.v = this.s*this.s/4;
  }
  move(){
    this.x += this.v*Math.cos(this.ang);
    this.y += this.v*Math.sin(this.ang);
    this.ang += Math.random()*20*Math.PI/180-10*Math.PI/180;
  }
  show(){
    c.beginPath();
    c.arc(this.x,this.y,this.s,0,2*Math.PI);
    c.fillStyle="#fddba3";
    c.fill();
  }
}

let f = [];

function draw() {
  if(f.length < 100){
    for(let j = 0; j < 10; j++){
     f.push(new firefly());
  }
     }
  //animation
  for(let i = 0; i < f.length; i++){
    f[i].move();
    f[i].show();
    if(f[i].x < 0 || f[i].x > w || f[i].y < 0 || f[i].y > h){
       f.splice(i,1);
       }
  }
}

let mouse = {};
let last_mouse = {};

canvas.addEventListener(
  "mousemove",
  function(e) {
    last_mouse.x = mouse.x;
    last_mouse.y = mouse.y;

    mouse.x = e.pageX - this.offsetLeft;
    mouse.y = e.pageY - this.offsetTop;
  },
  false
);
function init(elemid) {
  let canvas = document.getElementById(elemid),
    c = canvas.getContext("2d"),
    w = (canvas.width = window.innerWidth),
    h = (canvas.height = window.innerHeight);
  c.fillStyle = "rgba(30,30,30,1)";
  c.fillRect(0, 0, w, h);
  return c;
}

window.requestAnimFrame = (function() {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback) {
      window.setTimeout(callback);
    }
  );
});

function loop() {
  window.requestAnimFrame(loop);
  c.clearRect(0, 0, w, h);
  draw();
}

window.addEventListener("resize", function() {
  (w = canvas.width = window.innerWidth),
  (h = canvas.height = window.innerHeight);
  loop();
});

loop();
setInterval(loop, 1000 / 60);

      </script>      
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
