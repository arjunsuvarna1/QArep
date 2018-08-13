<?php
$dalTableqarep_audit = array();
$dalTableqarep_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableqarep_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTableqarep_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip");
$dalTableqarep_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user");
$dalTableqarep_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTableqarep_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action");
$dalTableqarep_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
	$dalTableqarep_audit["id"]["key"]=true;

$dal_info["testrep_at_localhost__qarep_audit"] = &$dalTableqarep_audit;
?>