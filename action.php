<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<form action= "action.php" form method="studioghib">
    search: <input type="varchar" name="age"><input type = "submit">


<label>Search</label>
<input type="text" name="search">

</form>

</body>

</html>
<?php
    require_once "action2.php"

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE myDBPDO";
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$query = "select distinct movieTitle from studioghib where maincharacters like '" . $_POST['cName] ."';";

$conn = null;
?>