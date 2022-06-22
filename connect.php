<?php

// mysqli_connect('localhost','root','') or die('Cannot connect to server');
// mysqli_select_db('attsystem') or die ('Cannot found database');

$con = mysqli_connect('localhost','root','') or die('Cannot connect to server');
mysqli_select_db($con ,'attsystem1') or die ('Cannot found database');

?>