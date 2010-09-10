<?php
	echo htmlentities(htmlentities(stripslashes(utf8_decode($_POST['text']))));