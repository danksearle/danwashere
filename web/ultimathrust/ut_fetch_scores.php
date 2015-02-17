<?php

require("server_settings.php");

header("Content-type: text/xml; charset=utf-8;");

echo '<' . '?xml version="1.0" encoding="utf-8"?' . '>';

$frmCode = isset($_GET['ut_code']) ? $_GET['ut_code'] : null;

$strSQL = 
	'SELECT name, code, score, level, date, comments, url ' .
	'FROM hiscores ' .
	'ORDER BY score DESC, name ASC ' .
	'LIMIT 0,100';

echo '<hiscores>';

if($db->query($strSQL)){

	$hiscores = $db->get_results();

	for($idx = 0; $idx < count($hiscores); $idx++){
		$hs = $hiscores[$idx];

		$strHighlight = '';
		if($frmCode == $hs->code){
			$strHighlight = ' hl="' . htmlspecialchars($hs->code) . '"';
		}else{
			$strHighlight = '';
		}

?>
	<hiscore<?= $strHighlight ?>>
		<name><![CDATA[<?= ($hs->name) ?>]]></name>
		<score><?= $hs->score ?></score>
		<level><?= $hs->level ?></level>
		<datetime><?= $hs->date ?></datetime>
		<comments><![CDATA[<?= ($hs->comments) ?>]]></comments>
		<url><![CDATA[<?= ($hs->url) ?>]]></url>
	</hiscore><?php

	}
}

echo '</hiscores>';

?>