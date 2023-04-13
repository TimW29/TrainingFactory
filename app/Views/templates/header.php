<!doctype html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #80dfff;
}

li {
  float: left;
}
img{
  width: 50px !important;
  height: 50px !important;
  border-radius: 50%;
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  padding-left: 10%;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #6600ff;
}
</style>
</head>
<body>
    <ul>
      <img width="50px" height="50px" !important src='<?php "http://".$_SERVER['HTTP_HOST']?>/images/trainingfactorylogo.png'?>
        <li><a href="http://localhost:8080/index.php">Lessen</a></li>
        <li><a href="http://localhost:8080/TrainingFactory/shop">Shop</a></li>
        <li><a href="http://localhost:8080/TrainingFactory/profiel">Profiel</a></li>
        <li><a href="http://localhost:8080/TrainingFactory/admin">Admin</a></li>
        
    </ul>
</body>