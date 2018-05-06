<?php
//connexion to base de données//
$link= mysql_connect('localhost','root','');
if(!$link) {
	die('could not connect: '.mysql_error());
}
mysql_select_db('bankash');
?>