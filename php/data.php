<?php

if($_GET['num']==0){
	echo $_REQUEST['callback'].'第一项的内容';
}
else if($_GET['num']==1){
	echo $_REQUEST['callback'].'第二项的内容';
}
else if($_GET['num']==2){
	echo $_REQUEST['callback'].'第三项的内容';
}

?> 