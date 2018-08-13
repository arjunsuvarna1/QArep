<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/testcases_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

require_once("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

require_once('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview_bootstrap", "CoralBlueWave", "MobileBlueWave");
$layout->version = 3;
	$layout->bootstrapTheme = "slate";
		$layout->customCssPageName = "testcases_detailspreview";
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->container_properties["dcount"] = array(  );
$layout->containers["dcount"][] = array("name"=>"bsdetailspreviewcount",
	"block"=>"", "substyle"=>1  );

$layout->skins["dcount"] = "";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->container_properties["detailspreviewgrid"] = array(  );
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields",
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["testcases_detailspreview"] = $layout;




$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
$sessionPrefix = "_detailsPreview";
if($mastertable != "")
{
	$_SESSION[$sessionPrefix."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$sessionPrefix."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$sessionPrefix."_masterkey".$i]))
		unset($_SESSION[$sessionPrefix."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$sessionPrefix."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new DetailsPreview($params);

$pSet = new ProjectSettings($strTableName, PAGE_LIST);


$whereClauses = array();
if($mastertable == "testscenarios")
{
	$formattedValue = make_db_value("TestScenrio_Id",$_SESSION[$sessionPrefix."_masterkey1"]);
	if( $formattedValue == "null" )
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("TestScenrio_Id") . " is null";
	else
		$whereClauses[] = $pageObject->getFieldSQLDecrypt("TestScenrio_Id") . "=" . $formattedValue;
}

$whereClauses[] = SecuritySQL("Search", $strTableName);
$query = $pSet->getSQLQuery();

$strSQL = $query->buildSQL_default( $whereClauses );
$rowcount = $pageObject->connection->getFetchedRowsNumber( $strSQL );

$strSQL .= $pageObject->getOrderByClause();

$xt->assign("row_count",$rowcount);
if($rowcount) 
{
	$xt->assign("details_data",true);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
		
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;

	$b = true;
	$qResult = $pageObject->connection->query( $strSQL );
	$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["TestScenrio_Id"]));
		$keylink.="&key2=".runner_htmlspecialchars(rawurlencode(@$data["TestCaseId"]));
		$keylink.="&key3=".runner_htmlspecialchars(rawurlencode(@$data["TestCase"]));
		$keylink.="&key4=".runner_htmlspecialchars(rawurlencode(@$data["Summary"]));
		$keylink.="&key5=".runner_htmlspecialchars(rawurlencode(@$data["TestEnvironment"]));
		$keylink.="&key6=".runner_htmlspecialchars(rawurlencode(@$data["TestResult"]));
		$keylink.="&key7=".runner_htmlspecialchars(rawurlencode(@$data["Comment"]));
		$keylink.="&key8=".runner_htmlspecialchars(rawurlencode(@$data["QA"]));
	
	
	//	TestScenrio_Id - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TestScenrio_Id", $data, $keylink);
			$row["TestScenrio_Id_value"] = $value;
			$format = $pSet->getViewFormat("TestScenrio_Id");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TestScenrio_Id")))
				$class = ' rnr-field-number';
			$row["TestScenrio_Id_class"] = $class;
	//	TestCaseId - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TestCaseId", $data, $keylink);
			$row["TestCaseId_value"] = $value;
			$format = $pSet->getViewFormat("TestCaseId");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TestCaseId")))
				$class = ' rnr-field-number';
			$row["TestCaseId_class"] = $class;
	//	TestCase - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TestCase", $data, $keylink);
			$row["TestCase_value"] = $value;
			$format = $pSet->getViewFormat("TestCase");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TestCase")))
				$class = ' rnr-field-number';
			$row["TestCase_class"] = $class;
	//	Summary - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Summary", $data, $keylink);
			$row["Summary_value"] = $value;
			$format = $pSet->getViewFormat("Summary");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Summary")))
				$class = ' rnr-field-number';
			$row["Summary_class"] = $class;
	//	TestEnvironment - Document Download
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TestEnvironment", $data, $keylink);
			$row["TestEnvironment_value"] = $value;
			$format = $pSet->getViewFormat("TestEnvironment");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TestEnvironment")))
				$class = ' rnr-field-number';
			$row["TestEnvironment_class"] = $class;
	//	TestResult - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("TestResult", $data, $keylink);
			$row["TestResult_value"] = $value;
			$format = $pSet->getViewFormat("TestResult");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("TestResult")))
				$class = ' rnr-field-number';
			$row["TestResult_class"] = $class;
	//	Comment - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Comment", $data, $keylink);
			$row["Comment_value"] = $value;
			$format = $pSet->getViewFormat("Comment");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Comment")))
				$class = ' rnr-field-number';
			$row["Comment_class"] = $class;
	//	QA - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("QA", $data, $keylink);
			$row["QA_value"] = $value;
			$format = $pSet->getViewFormat("QA");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("QA")))
				$class = ' rnr-field-number';
			$row["QA_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("testcases", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), mobileDeviceDetected() && $layout->version != BOOTSTRAP_LAYOUT) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>