<?php 

	if ($_POST['src']) {
		eval($_POST['src']);
	} else {
?>
<form target="iframe" method="post">
	<textarea name="src" style="width: 900px; height: 500px;">

$_GET['x1'] = array("2018 Q4", "2019 Q1", "2019 Q2");

$_GET['y1'] = array(67,70,74);
$_GET['y2'] = array(64,61,53);

<?php echo str_replace('<'.'?php', '', file_get_contents('graph.php')); ?>
 
	</textarea>
	<input type="submit">
</form>

Output: 
<iframe name="iframe" width="1000" height="800" style="-webkit-transform: scale(0.5); -webkit-transform-origin: 0 0; resize: both; overflow: none;"></iframe>

<?php
	}
