<?php
include_once("Connection.php");
$query="select distinct city from sellers";
$table=mysqli_query($dbCon,$query);
$ary=array();
while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}
echo json_encode($ary);
?>