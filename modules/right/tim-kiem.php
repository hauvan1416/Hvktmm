<?php
$currentURL1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$currentURL = "Index.php?xem=loaitin";
?>
<Script>
	function addurl(Str){
		cururl = (document.getElementById('tim').href).split('&id=')
		document.getElementById('tim').href = cururl[0]+'&id=src'+Str;
	}
	
	
</Script>
<input onkeyup = "addurl(this.value)" style="height:26px; width:196px" onload="addurl('1')">
<a href = "<?php echo $currentURL?>" id = "tim" style="text-decoration: none; padding-left: 17px; padding-right:17px; padding-top: 4px; border: 1px solid #A9A9A9; float: right; height: 20px">Tìm Kiếm</a>
