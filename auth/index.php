<?php
// first thing is to start session 
session_start();
// now to check if variable is true

if(!$_SESSION['anything'])
{
    header('location:login.php');
 }  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background-image: url("aa.jpg");
}
.btn {
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}

.btn:hover {opacity: 0.6}
p.a {
    font-family: "Comic Sans MS", cursive, sans-serif;
    font-size: 500%
}

p.b {
    font-family: Courier New, Monospace;
    font-size: 300%
}
</style>
</head>
<body>

<p class="a"><font color="aliceblue">WELCOME</font></p>

<center>
      <p class="b"><font color="black">To upload the product information</font></p>
<p>CLICK<img src="sk.gif" style="float:center;width:30px;height:30px;"></p>
<a href="add.html" class="btn">ADD</button>

</center>
</body>
</html>
