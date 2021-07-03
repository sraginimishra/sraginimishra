<?php 
//For coonection
$connect = mysqli_connect("localhost", "root", "" ,"countrylist"); //countryName=testing
if(isset($_POST["sqlquery"]))
 // { if ($connect== true) {
 // 	echo "connected";
 // }

 	$output='';
 $sqlquery ="SELECT * FROM tbl_country WHERE  country_name LIKE '%" .$_POST["sqlquery"]."%' ";
 	
 	$result = mysqli_query($connect, $sqlquery);
 	$output = '<ul class = "list-unstyled">';
 	if(mysqli_num_rows($result) > 0)
 	{
 		while ($row = mysqli_fetch_array($result)) {
 			$output .='<li>' .$row["country_name"]. '</li>';
 		}  
 	}
 	else
 	{
		$output  .= '<li>Country Not Found</li>';
 	}
 	$output .= '<ul>';
 	echo "$output";
 //}
 ?>