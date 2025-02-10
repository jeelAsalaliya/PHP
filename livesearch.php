<?php
include "testconn1.php";
if(isset($_REQUEST['q']))
{
	$val=$_REQUEST['q'];
	$qry="select * from city where cityname 
	like '%$val%'";
	//echo $qry;
	//return;
	$recordset=mysqli_query($conn,$qry);
$data='';
$data="<table border='1'>";
$data .="<th> cityid </th>";
$data .="<th> city name </th>";
	while($record=mysqli_fetch_row($recordset))
	{
	$data .="<tr>";
	$data .="<td> $record[0] </td>";
	$data .="<td> $record[1] </td>";
	$data .="</tr>";
	}
}
	$data .="</table>";
	//$data="hello";
	echo $data;
?>