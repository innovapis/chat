<?php
$host="localhost";
$user="root";
$pass="";
$db_name="chat";
$con = new mysqli($host,$user,$pass,$db_name);
function formatDate($Date){
return Date ('g:i a',strtotime($Date));
}


?>