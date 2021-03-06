<?php
	require_once(SANDBOX_LIB_DIR . '/Snoopy.class.php');
	$action = isset($_GET['action']) ? $_GET['action'] : 'nb';
	$feedBurnerID = isset($_GET['feedburnerid']) ? stripslashes($_GET['feedburnerid']) : 'LeBlogDeThi3rry';

	function get_feedburner_url($id) { 
          return 'http://feeds.feedburner.com/'.$id;
        }
	//function get_api_url($id) { return 'http://api.feedburner.com/awareness/1.0/GetFeedData?uri='.get_feedburner_url($id); }
	function get_api_url($id) { 
          return 'http://feedburner.google.com/api/awareness/1.0/GetFeedData?uri='.$id;
        }


	function get_file($id) {
		$snoop = new Snoopy;
		$snoop->agent = 'Snoopy webBrowser';
		$snoop->fetch(get_api_url($id));

		if (!strpos($snoop->response_code, '200')) {
			return "<err><msg>Error : ".$snoop->response_code. "</msg></err>";
		}
		return $snoop->results;
	}
	$xml = get_file($feedBurnerID);		// Récupération des infos via l'API de feedburner
	header("Content-type: text/xml");
	print $xml;