<?php
$dalTabletestcases = array();
$dalTabletestcases["TestScenrio_Id"] = array("type"=>3,"varname"=>"TestScenrio_Id", "name" => "TestScenrio_Id");
$dalTabletestcases["TestCaseId"] = array("type"=>3,"varname"=>"TestCaseId", "name" => "TestCaseId");
$dalTabletestcases["TestCase"] = array("type"=>201,"varname"=>"TestCase", "name" => "TestCase");
$dalTabletestcases["Summary"] = array("type"=>201,"varname"=>"Summary", "name" => "Summary");
$dalTabletestcases["TestEnvironment"] = array("type"=>200,"varname"=>"TestEnvironment", "name" => "TestEnvironment");
$dalTabletestcases["TestResult"] = array("type"=>200,"varname"=>"TestResult", "name" => "TestResult");
$dalTabletestcases["Comment"] = array("type"=>201,"varname"=>"Comment", "name" => "Comment");
$dalTabletestcases["QA"] = array("type"=>200,"varname"=>"QA", "name" => "QA");
	$dalTabletestcases["TestCaseId"]["key"]=true;

$dal_info["testrep_at_localhost__testcases"] = &$dalTabletestcases;
?>