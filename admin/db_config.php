<?php
$con=mysqli_connect("localhost","root","","kms");
if(!$con)
{
    echo "db connection error";
}