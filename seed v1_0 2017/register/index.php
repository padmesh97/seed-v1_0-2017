<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="loader()">
<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<script>
function loader()
{
	if(screen.height>screen.width)
	window.location.href = '../m/reg_close.html';
	else
	window.location.href = '../w/reg_close.html';
}
</script>
</body>
</html>