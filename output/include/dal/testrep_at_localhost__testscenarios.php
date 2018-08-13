<?php
$dalTabletestscenarios = array();
$dalTabletestscenarios["TestScenrio_Id"] = array("type"=>3,"varname"=>"TestScenrio_Id", "name" => "TestScenrio_Id");
$dalTabletestscenarios["TestType"] = array("type"=>200,"varname"=>"TestType", "name" => "TestType");
$dalTabletestscenarios["TestScenario"] = array("type"=>201,"varname"=>"TestScenario", "name" => "TestScenario");
$dalTabletestscenarios["Summary"] = array("type"=>201,"varname"=>"Summary", "name" => "Summary");
$dalTabletestscenarios["UAT"] = array("type"=>200,"varname"=>"UAT", "name" => "UAT");
$dalTabletestscenarios["Module"] = array("type"=>200,"varname"=>"Module", "name" => "Module");
$dalTabletestscenarios["QA"] = array("type"=>200,"varname"=>"QA", "name" => "QA");
	$dalTabletestscenarios["TestScenrio_Id"]["key"]=true;

$dal_info["testrep_at_localhost__testscenarios"] = &$dalTabletestscenarios;
?>