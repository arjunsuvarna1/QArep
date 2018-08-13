<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatestcases = array();
	$tdatatestcases[".ShortName"] = "testcases";
	$tdatatestcases[".OwnerID"] = "";
	$tdatatestcases[".OriginalTable"] = "testcases";

//	field labels
$fieldLabelstestcases = array();
$fieldToolTipstestcases = array();
$pageTitlestestcases = array();
$placeHolderstestcases = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstestcases["English"] = array();
	$fieldToolTipstestcases["English"] = array();
	$placeHolderstestcases["English"] = array();
	$pageTitlestestcases["English"] = array();
	$fieldLabelstestcases["English"]["TestScenrio_Id"] = "TestScenrio Id";
	$fieldToolTipstestcases["English"]["TestScenrio_Id"] = "";
	$placeHolderstestcases["English"]["TestScenrio_Id"] = "";
	$fieldLabelstestcases["English"]["TestCaseId"] = "Test Case Id";
	$fieldToolTipstestcases["English"]["TestCaseId"] = "";
	$placeHolderstestcases["English"]["TestCaseId"] = "";
	$fieldLabelstestcases["English"]["TestCase"] = "Test Case";
	$fieldToolTipstestcases["English"]["TestCase"] = "";
	$placeHolderstestcases["English"]["TestCase"] = "";
	$fieldLabelstestcases["English"]["Summary"] = "Summary";
	$fieldToolTipstestcases["English"]["Summary"] = "";
	$placeHolderstestcases["English"]["Summary"] = "";
	$fieldLabelstestcases["English"]["TestEnvironment"] = "Test Environment";
	$fieldToolTipstestcases["English"]["TestEnvironment"] = "";
	$placeHolderstestcases["English"]["TestEnvironment"] = "";
	$fieldLabelstestcases["English"]["TestResult"] = "Test Result";
	$fieldToolTipstestcases["English"]["TestResult"] = "";
	$placeHolderstestcases["English"]["TestResult"] = "";
	$fieldLabelstestcases["English"]["Comment"] = "Comment";
	$fieldToolTipstestcases["English"]["Comment"] = "";
	$placeHolderstestcases["English"]["Comment"] = "";
	$fieldLabelstestcases["English"]["QA"] = "QA";
	$fieldToolTipstestcases["English"]["QA"] = "";
	$placeHolderstestcases["English"]["QA"] = "";
	$pageTitlestestcases["English"]["add"] = "Test Cases";
	$pageTitlestestcases["English"]["edit"] = "Test Cases, Edit";
	$pageTitlestestcases["English"]["view"] = "Test Cases";
	if (count($fieldToolTipstestcases["English"]))
		$tdatatestcases[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstestcases[""] = array();
	$fieldToolTipstestcases[""] = array();
	$placeHolderstestcases[""] = array();
	$pageTitlestestcases[""] = array();
	$fieldLabelstestcases[""]["QA"] = "QA";
	$fieldToolTipstestcases[""]["QA"] = "";
	$placeHolderstestcases[""]["QA"] = "";
	if (count($fieldToolTipstestcases[""]))
		$tdatatestcases[".isUseToolTips"] = true;
}


	$tdatatestcases[".NCSearch"] = true;



$tdatatestcases[".shortTableName"] = "testcases";
$tdatatestcases[".nSecOptions"] = 0;
$tdatatestcases[".recsPerRowPrint"] = 1;
$tdatatestcases[".mainTableOwnerID"] = "";
$tdatatestcases[".moveNext"] = 1;
$tdatatestcases[".entityType"] = 0;

$tdatatestcases[".strOriginalTableName"] = "testcases";

	



$tdatatestcases[".showAddInPopup"] = false;

$tdatatestcases[".showEditInPopup"] = false;

$tdatatestcases[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatestcases[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatestcases[".fieldsForRegister"] = array();

$tdatatestcases[".listAjax"] = false;

	$tdatatestcases[".audit"] = true;

	$tdatatestcases[".locking"] = false;

$tdatatestcases[".edit"] = true;
$tdatatestcases[".afterEditAction"] = 1;
$tdatatestcases[".closePopupAfterEdit"] = 1;
$tdatatestcases[".afterEditActionDetTable"] = "";

$tdatatestcases[".add"] = true;
$tdatatestcases[".afterAddAction"] = 1;
$tdatatestcases[".closePopupAfterAdd"] = 1;
$tdatatestcases[".afterAddActionDetTable"] = "";

$tdatatestcases[".list"] = true;

$tdatatestcases[".inlineEdit"] = true;

$tdatatestcases[".updateSelected"] = true;

$tdatatestcases[".reorderRecordsByHeader"] = true;


$tdatatestcases[".exportFormatting"] = 2;
$tdatatestcases[".exportDelimiter"] = ",";
		
$tdatatestcases[".inlineAdd"] = true;
$tdatatestcases[".view"] = true;

$tdatatestcases[".import"] = true;

$tdatatestcases[".exportTo"] = true;

$tdatatestcases[".printFriendly"] = true;

$tdatatestcases[".delete"] = true;

$tdatatestcases[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatestcases[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatestcases[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatestcases[".searchSaving"] = false;
//

$tdatatestcases[".showSearchPanel"] = true;
		$tdatatestcases[".flexibleSearch"] = true;

$tdatatestcases[".isUseAjaxSuggest"] = true;

$tdatatestcases[".rowHighlite"] = true;





$tdatatestcases[".ajaxCodeSnippetAdded"] = false;

$tdatatestcases[".buttonsAdded"] = false;

$tdatatestcases[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatestcases[".isUseTimeForSearch"] = false;



$tdatatestcases[".badgeColor"] = "e07878";


$tdatatestcases[".allSearchFields"] = array();
$tdatatestcases[".filterFields"] = array();
$tdatatestcases[".requiredSearchFields"] = array();

$tdatatestcases[".allSearchFields"][] = "TestScenrio_Id";
	$tdatatestcases[".allSearchFields"][] = "TestCaseId";
	$tdatatestcases[".allSearchFields"][] = "TestCase";
	$tdatatestcases[".allSearchFields"][] = "Summary";
	$tdatatestcases[".allSearchFields"][] = "TestEnvironment";
	$tdatatestcases[".allSearchFields"][] = "TestResult";
	$tdatatestcases[".allSearchFields"][] = "Comment";
	$tdatatestcases[".allSearchFields"][] = "QA";
	

$tdatatestcases[".googleLikeFields"] = array();
$tdatatestcases[".googleLikeFields"][] = "TestScenrio_Id";
$tdatatestcases[".googleLikeFields"][] = "TestCaseId";
$tdatatestcases[".googleLikeFields"][] = "TestCase";
$tdatatestcases[".googleLikeFields"][] = "Summary";
$tdatatestcases[".googleLikeFields"][] = "TestEnvironment";
$tdatatestcases[".googleLikeFields"][] = "TestResult";
$tdatatestcases[".googleLikeFields"][] = "Comment";
$tdatatestcases[".googleLikeFields"][] = "QA";


$tdatatestcases[".advSearchFields"] = array();
$tdatatestcases[".advSearchFields"][] = "TestScenrio_Id";
$tdatatestcases[".advSearchFields"][] = "TestCaseId";
$tdatatestcases[".advSearchFields"][] = "TestCase";
$tdatatestcases[".advSearchFields"][] = "Summary";
$tdatatestcases[".advSearchFields"][] = "TestEnvironment";
$tdatatestcases[".advSearchFields"][] = "TestResult";
$tdatatestcases[".advSearchFields"][] = "Comment";
$tdatatestcases[".advSearchFields"][] = "QA";

$tdatatestcases[".tableType"] = "list";

$tdatatestcases[".printerPageOrientation"] = 0;
$tdatatestcases[".nPrinterPageScale"] = 100;

$tdatatestcases[".nPrinterSplitRecords"] = 40;

$tdatatestcases[".nPrinterPDFSplitRecords"] = 40;



$tdatatestcases[".geocodingEnabled"] = false;





$tdatatestcases[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatestcases[".pageSize"] = 20;

$tdatatestcases[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatestcases[".strOrderBy"] = $tstrOrderBy;

$tdatatestcases[".orderindexes"] = array();

$tdatatestcases[".sqlHead"] = "SELECT TestScenrio_Id,  	TestCaseId,  	TestCase,  	Summary,  	TestEnvironment,  	TestResult,  	`Comment`,  	QA";
$tdatatestcases[".sqlFrom"] = "FROM testcases";
$tdatatestcases[".sqlWhereExpr"] = "";
$tdatatestcases[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatestcases[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatestcases[".arrGroupsPerPage"] = $arrGPP;

$tdatatestcases[".highlightSearchResults"] = true;

$tableKeystestcases = array();
$tableKeystestcases[] = "TestScenrio_Id";
$tableKeystestcases[] = "TestCaseId";
$tableKeystestcases[] = "TestCase";
$tableKeystestcases[] = "Summary";
$tableKeystestcases[] = "TestEnvironment";
$tableKeystestcases[] = "TestResult";
$tableKeystestcases[] = "Comment";
$tableKeystestcases[] = "QA";
$tdatatestcases[".Keys"] = $tableKeystestcases;

$tdatatestcases[".listFields"] = array();
$tdatatestcases[".listFields"][] = "TestScenrio_Id";
$tdatatestcases[".listFields"][] = "TestCaseId";
$tdatatestcases[".listFields"][] = "TestCase";
$tdatatestcases[".listFields"][] = "Summary";
$tdatatestcases[".listFields"][] = "TestEnvironment";
$tdatatestcases[".listFields"][] = "TestResult";
$tdatatestcases[".listFields"][] = "Comment";
$tdatatestcases[".listFields"][] = "QA";

$tdatatestcases[".hideMobileList"] = array();


$tdatatestcases[".viewFields"] = array();
$tdatatestcases[".viewFields"][] = "TestScenrio_Id";
$tdatatestcases[".viewFields"][] = "TestCaseId";
$tdatatestcases[".viewFields"][] = "TestCase";
$tdatatestcases[".viewFields"][] = "Summary";
$tdatatestcases[".viewFields"][] = "TestEnvironment";
$tdatatestcases[".viewFields"][] = "TestResult";
$tdatatestcases[".viewFields"][] = "Comment";
$tdatatestcases[".viewFields"][] = "QA";

$tdatatestcases[".addFields"] = array();
$tdatatestcases[".addFields"][] = "TestScenrio_Id";
$tdatatestcases[".addFields"][] = "TestCaseId";
$tdatatestcases[".addFields"][] = "TestCase";
$tdatatestcases[".addFields"][] = "Summary";
$tdatatestcases[".addFields"][] = "TestEnvironment";
$tdatatestcases[".addFields"][] = "TestResult";
$tdatatestcases[".addFields"][] = "Comment";
$tdatatestcases[".addFields"][] = "QA";

$tdatatestcases[".masterListFields"] = array();
$tdatatestcases[".masterListFields"][] = "TestScenrio_Id";
$tdatatestcases[".masterListFields"][] = "TestCaseId";
$tdatatestcases[".masterListFields"][] = "TestCase";
$tdatatestcases[".masterListFields"][] = "Summary";
$tdatatestcases[".masterListFields"][] = "TestEnvironment";
$tdatatestcases[".masterListFields"][] = "TestResult";
$tdatatestcases[".masterListFields"][] = "Comment";
$tdatatestcases[".masterListFields"][] = "QA";

$tdatatestcases[".inlineAddFields"] = array();
$tdatatestcases[".inlineAddFields"][] = "TestScenrio_Id";
$tdatatestcases[".inlineAddFields"][] = "TestCaseId";
$tdatatestcases[".inlineAddFields"][] = "TestCase";
$tdatatestcases[".inlineAddFields"][] = "Summary";
$tdatatestcases[".inlineAddFields"][] = "TestEnvironment";
$tdatatestcases[".inlineAddFields"][] = "TestResult";
$tdatatestcases[".inlineAddFields"][] = "Comment";
$tdatatestcases[".inlineAddFields"][] = "QA";

$tdatatestcases[".editFields"] = array();
$tdatatestcases[".editFields"][] = "TestScenrio_Id";
$tdatatestcases[".editFields"][] = "TestCaseId";
$tdatatestcases[".editFields"][] = "TestCase";
$tdatatestcases[".editFields"][] = "Summary";
$tdatatestcases[".editFields"][] = "TestEnvironment";
$tdatatestcases[".editFields"][] = "TestResult";
$tdatatestcases[".editFields"][] = "Comment";
$tdatatestcases[".editFields"][] = "QA";

$tdatatestcases[".inlineEditFields"] = array();
$tdatatestcases[".inlineEditFields"][] = "TestScenrio_Id";
$tdatatestcases[".inlineEditFields"][] = "TestCaseId";
$tdatatestcases[".inlineEditFields"][] = "TestCase";
$tdatatestcases[".inlineEditFields"][] = "Summary";
$tdatatestcases[".inlineEditFields"][] = "TestEnvironment";
$tdatatestcases[".inlineEditFields"][] = "TestResult";
$tdatatestcases[".inlineEditFields"][] = "Comment";
$tdatatestcases[".inlineEditFields"][] = "QA";

$tdatatestcases[".updateSelectedFields"] = array();
$tdatatestcases[".updateSelectedFields"][] = "TestScenrio_Id";
$tdatatestcases[".updateSelectedFields"][] = "TestCaseId";
$tdatatestcases[".updateSelectedFields"][] = "TestCase";
$tdatatestcases[".updateSelectedFields"][] = "Summary";
$tdatatestcases[".updateSelectedFields"][] = "TestEnvironment";
$tdatatestcases[".updateSelectedFields"][] = "TestResult";
$tdatatestcases[".updateSelectedFields"][] = "Comment";
$tdatatestcases[".updateSelectedFields"][] = "QA";


$tdatatestcases[".exportFields"] = array();
$tdatatestcases[".exportFields"][] = "TestScenrio_Id";
$tdatatestcases[".exportFields"][] = "TestCaseId";
$tdatatestcases[".exportFields"][] = "TestCase";
$tdatatestcases[".exportFields"][] = "Summary";
$tdatatestcases[".exportFields"][] = "TestEnvironment";
$tdatatestcases[".exportFields"][] = "TestResult";
$tdatatestcases[".exportFields"][] = "Comment";
$tdatatestcases[".exportFields"][] = "QA";

$tdatatestcases[".importFields"] = array();
$tdatatestcases[".importFields"][] = "TestScenrio_Id";
$tdatatestcases[".importFields"][] = "TestCaseId";
$tdatatestcases[".importFields"][] = "TestCase";
$tdatatestcases[".importFields"][] = "Summary";
$tdatatestcases[".importFields"][] = "TestEnvironment";
$tdatatestcases[".importFields"][] = "TestResult";
$tdatatestcases[".importFields"][] = "Comment";
$tdatatestcases[".importFields"][] = "QA";

$tdatatestcases[".printFields"] = array();
$tdatatestcases[".printFields"][] = "TestScenrio_Id";
$tdatatestcases[".printFields"][] = "TestCaseId";
$tdatatestcases[".printFields"][] = "TestCase";
$tdatatestcases[".printFields"][] = "Summary";
$tdatatestcases[".printFields"][] = "TestEnvironment";
$tdatatestcases[".printFields"][] = "TestResult";
$tdatatestcases[".printFields"][] = "Comment";
$tdatatestcases[".printFields"][] = "QA";


//	TestScenrio_Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TestScenrio_Id";
	$fdata["GoodName"] = "TestScenrio_Id";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","TestScenrio_Id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TestScenrio_Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestScenrio_Id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["TestScenrio_Id"] = $fdata;
//	TestCaseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TestCaseId";
	$fdata["GoodName"] = "TestCaseId";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","TestCaseId");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TestCaseId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestCaseId";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["TestCaseId"] = $fdata;
//	TestCase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TestCase";
	$fdata["GoodName"] = "TestCase";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","TestCase");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TestCase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestCase";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["TestCase"] = $fdata;
//	Summary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Summary";
	$fdata["GoodName"] = "Summary";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","Summary");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Summary";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Summary";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["Summary"] = $fdata;
//	TestEnvironment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TestEnvironment";
	$fdata["GoodName"] = "TestEnvironment";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","TestEnvironment");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TestEnvironment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestEnvironment";

	
	
				$fdata["FieldPermissions"] = true;

			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["TestEnvironment"] = $fdata;
//	TestResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TestResult";
	$fdata["GoodName"] = "TestResult";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","TestResult");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TestResult";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestResult";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "testresult";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "TestResult";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TestResult";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["TestResult"] = $fdata;
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","Comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Comment`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["Comment"] = $fdata;
//	QA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "QA";
	$fdata["GoodName"] = "QA";
	$fdata["ownerTable"] = "testcases";
	$fdata["Label"] = GetFieldLabel("testcases","QA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "QA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatestcases["QA"] = $fdata;


$tables_data["testcases"]=&$tdatatestcases;
$field_labels["testcases"] = &$fieldLabelstestcases;
$fieldToolTips["testcases"] = &$fieldToolTipstestcases;
$placeHolders["testcases"] = &$placeHolderstestcases;
$page_titles["testcases"] = &$pageTitlestestcases;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["testcases"] = array();
//	table1
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="table1";
		$detailsParam["dOriginalTable"] = "table1";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "table1";
	$detailsParam["dCaptionTable"] = GetTableCaption("table1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["testcases"][$dIndex] = $detailsParam;

	
		$detailsTablesData["testcases"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["testcases"][$dIndex]["masterKeys"][]="TestCaseId";

				$detailsTablesData["testcases"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["testcases"][$dIndex]["detailKeys"][]="TestCaseId";

// tables which are master tables for current table (detail)
$masterTablesData["testcases"] = array();


	
				$strOriginalDetailsTable="testscenarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="testscenarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "testscenarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
			$masterParams["dispMasterInfo"][PAGE_ADD] = true;
			$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			$masterParams["dispMasterInfo"][PAGE_EDIT] = true;
			$masterParams["dispMasterInfo"][PAGE_VIEW] = true;

	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["testcases"][0] = $masterParams;
				$masterTablesData["testcases"][0]["masterKeys"] = array();
	$masterTablesData["testcases"][0]["masterKeys"][]="TestScenrio_Id";
				$masterTablesData["testcases"][0]["detailKeys"] = array();
	$masterTablesData["testcases"][0]["detailKeys"][]="TestScenrio_Id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_testcases()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TestScenrio_Id,  	TestCaseId,  	TestCase,  	Summary,  	TestEnvironment,  	TestResult,  	`Comment`,  	QA";
$proto0["m_strFrom"] = "FROM testcases";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "TestScenrio_Id",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto6["m_sql"] = "TestScenrio_Id";
$proto6["m_srcTableName"] = "testcases";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TestCaseId",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto8["m_sql"] = "TestCaseId";
$proto8["m_srcTableName"] = "testcases";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TestCase",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto10["m_sql"] = "TestCase";
$proto10["m_srcTableName"] = "testcases";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Summary",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto12["m_sql"] = "Summary";
$proto12["m_srcTableName"] = "testcases";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TestEnvironment",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto14["m_sql"] = "TestEnvironment";
$proto14["m_srcTableName"] = "testcases";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TestResult",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto16["m_sql"] = "TestResult";
$proto16["m_srcTableName"] = "testcases";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto18["m_sql"] = "`Comment`";
$proto18["m_srcTableName"] = "testcases";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "QA",
	"m_strTable" => "testcases",
	"m_srcTableName" => "testcases"
));

$proto20["m_sql"] = "QA";
$proto20["m_srcTableName"] = "testcases";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "testcases";
$proto23["m_srcTableName"] = "testcases";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "TestScenrio_Id";
$proto23["m_columns"][] = "TestCaseId";
$proto23["m_columns"][] = "TestCase";
$proto23["m_columns"][] = "Summary";
$proto23["m_columns"][] = "TestEnvironment";
$proto23["m_columns"][] = "TestResult";
$proto23["m_columns"][] = "Comment";
$proto23["m_columns"][] = "QA";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "testcases";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "testcases";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="testcases";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_testcases = createSqlQuery_testcases();


	
		;

								

$tdatatestcases[".sqlquery"] = $queryData_testcases;

$tableEvents["testcases"] = new eventsBase;
$tdatatestcases[".hasEvents"] = false;

?>