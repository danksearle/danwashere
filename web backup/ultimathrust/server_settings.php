<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past

require('../inc/server_settings.php');

define("EZSQL_DB_NAME", "daniel_ultimathrust");
define("EZSQL_DB_USER", "daniel_ultimathr");
define("EZSQL_DB_PASSWORD", "v1ladrau");


require_once "../inc/ez_sql_mysql.php";


?>