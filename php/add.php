<?PHP
	$a=$_GET["val"];
	$arr=array();
	$arr["mainId"]="44444";  
	$arr["text"]=0;  
	
	echo $_REQUEST['callback'].'(' . json_encode($arr) .')'; 
?>