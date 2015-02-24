<?php

require("../inc/server_settings.php");

header("Content-type: text/xml; charset=utf-8;");

echo '<' . '?xml version="1.0" encoding="utf-8"?' . '>';

$strSQL =
	'SELECT * ' .
	'FROM hiscores ' .
	'ORDER BY date DESC ' .
	'LIMIT 0,500';

echo '<hiscores>';

if($db->query($strSQL)){

	$hiscores = $db->get_results();

	for($idx = 0; $idx < count($hiscores); $idx++){
		$hs = $hiscores[$idx];

?>
	<hiscore>
		<name><![CDATA[<?= htmlspecialchars($hs['name']) ?>]]></name>
		<score><?= $hs['score'] ?></score>
		<level><?= $hs['level'] ?></level>
		<datetime><?= $hs['date'] ?></datetime>
		<comments><![CDATA[<?= htmlspecialchars($hs['comments']) ?>]]></comments>
		<url><![CDATA[<?= htmlspecialchars($hs['url']) ?>]]></url>
	</hiscore><%

<?php
	}
}

echo '</hiscores>';

?>