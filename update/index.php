<?php

$conn = new mysqli("localhost","root","","aaa");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect: " . $conn -> connect_error;
  exit();
}
  $url = explode("/",$_SERVER['REQUEST_URI']);
    $r=($url[2]);
    $w=($url[3]);
    
    $que = "UPDATE farm SET firstname='$r',lastname='$w' WHERE id=31";

    if ($conn->query($que) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
           

?>