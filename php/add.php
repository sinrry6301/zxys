<?PHP
	$a=$_GET["val"];
	$arr=array();
//	$arr["mainId"]="22222222222";  
	$arr["text"]="$a";  
	
	echo json_encode($arr); 
?>