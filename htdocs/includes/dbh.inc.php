<?php

$servername = "REDACTED";
$dBUsername = "REDACTED";
$dBPassword = "REDACTED";
$dBName = "REDACTED";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
