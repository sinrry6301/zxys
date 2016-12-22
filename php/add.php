<?PHP

	$a = $_POST["val"];
	
	$arr=array();
	$arr["mainId"]="111111";  
	$arr["text"]="$a";  
	
	echo json_encode($arr); 

?>