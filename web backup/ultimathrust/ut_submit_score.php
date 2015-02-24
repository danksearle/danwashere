<?php

require("server_settings.php");

$frmName = isset($_POST['ut_name']) ? $_POST['ut_name'] : null;
$frmComments = isset($_POST['ut_comments']) ? $_POST['ut_comments'] : null;
$frmScore = isset($_POST['ut_score']) ? $_POST['ut_score'] : null;
$frmLevel = isset($_POST['ut_level']) ? $_POST['ut_level'] : null;
$frmURL = isset($_POST['ut_url']) ? $_POST['ut_url'] : null;
$frmCode = isset($_POST['ut_code']) ? $_POST['ut_code'] : null;

if($frmName && $frmScore > 0){
// Process the new hiscore if one has been passed
	$strSQL = 
		'INSERT INTO hiscores ' .
		'(name, comments, url, score, level, code, date) VALUES ' .
		'("' . mysql_real_escape_string($frmName) . '", "' . mysql_real_escape_string($frmComments) . '", ' . 
		'"' . mysql_real_escape_string($frmURL) . '", ' . $frmScore . ', ' . $frmLevel . ', "' . mysql_real_escape_string($frmCode) . '", NOW())';

	$db->query($strSQL);

	echo "done=1";
}else{
	echo "error=1";
}

?>