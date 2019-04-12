<?php
	header("Content-type: text/json");
?>
{
	"replies": [
		{
			"type": "text",
			"content": "The current projection for <?php echo  $_GET['c']; ?> is for revenue to <?php echo  $_GET['d']; ?> in the next quarter:"
		},
		{
			"type": "card",			
			"content": {
				"title": "Revenue Analytics (€M)",
				"subtitle": "<?php echo $_GET['c']; ?>",
				"imageUrl": "https://<?php echo $_SERVER['SERVER_NAME']; ?>/graph.php?<?php echo http_build_query($_GET); ?>",
				"buttons": []
			}
		}
	]
}