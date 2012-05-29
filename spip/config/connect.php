<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
$GLOBALS['spip_connect_version'] = 0.7;
if($_SERVER["REMOTE_ADDR"] != "127.0.0.1")
{
	spip_connect_db('localhost','','','','prod','sqlite3', 'spip','');
}
else {
	spip_connect_db('localhost','','','','dev','sqlite3', 'spip','');
}

?>