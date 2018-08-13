<?php
$dalTabletest_users = array();
$dalTabletest_users["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletest_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTabletest_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTabletest_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTabletest_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTabletest_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid");
$dalTabletest_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
	$dalTabletest_users["ID"]["key"]=true;

$dal_info["testrep_at_localhost__test_users"] = &$dalTabletest_users;
?>