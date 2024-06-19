<?php
  $connect = mysqli_connect('localhost', 'root', 'root', 'http5225week7');
  
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }