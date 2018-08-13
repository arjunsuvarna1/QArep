<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatestscenarios = array();
	$tdatatestscenarios[".ShortName"] = "testscenarios";
	$tdatatestscenarios[".OwnerID"] = "";
	$tdatatestscenarios[".OriginalTable"] = "testscenarios";

//	field labels
$fieldLabelstestscenarios = array();
$fieldToolTipstestscenarios = array();
$pageTitlestestscenarios = array();
$placeHolderstestscenarios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstestscenarios["English"] = array();
	$fieldToolTipstestscenarios["English"] = array();
	$placeHolderstestscenarios["English"] = array();
	$pageTitlestestscenarios["English"] = array();
	$fieldLabelstestscenarios["English"]["TestScenrio_Id"] = "TestScenrio Id";
	$fieldToolTipstestscenarios["English"]["TestScenrio_Id"] = "";
	$placeHolderstestscenarios["English"]["TestScenrio_Id"] = "";
	$fieldLabelstestscenarios["English"]["TestType"] = "Test Type";
	$fieldToolTipstestscenarios["English"]["TestType"] = "";
	$placeHolderstestscenarios["English"]["TestType"] = "";
	$fieldLabelstestscenarios["English"]["TestScenario"] = "Test Scenario";
	$fieldToolTipstestscenarios["English"]["TestScenario"] = "";
	$placeHolderstestscenarios["English"]["TestScenario"] = "";
	$fieldLabelstestscenarios["English"]["Summary"] = "Summary";
	$fieldToolTipstestscenarios["English"]["Summary"] = "";
	$placeHolderstestscenarios["English"]["Summary"] = "";
	$fieldLabelstestscenarios["English"]["UAT"] = "UAT";
	$fieldToolTipstestscenarios["English"]["UAT"] = "";
	$placeHolderstestscenarios["English"]["UAT"] = "";
	$fieldLabelstestscenarios["English"]["Module"] = "Module";
	$fieldToolTipstestscenarios["English"]["Module"] = "";
	$placeHolderstestscenarios["English"]["Module"] = "";
	$fieldLabelstestscenarios["English"]["QA"] = "QA";
	$fieldToolTipstestscenarios["English"]["QA"] = "";
	$placeHolderstestscenarios["English"]["QA"] = "";
	$pageTitlestestscenarios["English"]["edit"] = "Test Scenarios, Edit ";
	$pageTitlestestscenarios["English"]["view"] = "Test Scenarios ";
	$pageTitlestestscenarios["English"]["masterlist"] = "Test Scenarios ";
	$pageTitlestestscenarios["English"]["masterprint"] = "Test Scenarios ";
	if (count($fieldToolTipstestscenarios["English"]))
		$tdatatestscenarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstestscenarios[""] = array();
	$fieldToolTipstestscenarios[""] = array();
	$placeHolderstestscenarios[""] = array();
	$pageTitlestestscenarios[""] = array();
	if (count($fieldToolTipstestscenarios[""]))
		$tdatatestscenarios[".isUseToolTips"] = true;
}


	$tdatatestscenarios[".NCSearch"] = true;



$tdatatestscenarios[".shortTableName"] = "testscenarios";
$tdatatestscenarios[".nSecOptions"] = 0;
$tdatatestscenarios[".recsPerRowPrint"] = 1;
$tdatatestscenarios[".mainTableOwnerID"] = "";
$tdatatestscenarios[".moveNext"] = 1;
$tdatatestscenarios[".entityType"] = 0;

$tdatatestscenarios[".strOriginalTableName"] = "testscenarios";

	



$tdatatestscenarios[".showAddInPopup"] = false;

$tdatatestscenarios[".showEditInPopup"] = false;

$tdatatestscenarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatestscenarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatestscenarios[".fieldsForRegister"] = array();

$tdatatestscenarios[".listAjax"] = false;

	$tdatatestscenarios[".audit"] = true;

	$tdatatestscenarios[".locking"] = false;

$tdatatestscenarios[".edit"] = true;
$tdatatestscenarios[".afterEditAction"] = 1;
$tdatatestscenarios[".closePopupAfterEdit"] = 1;
$tdatatestscenarios[".afterEditActionDetTable"] = "";

$tdatatestscenarios[".add"] = true;
$tdatatestscenarios[".afterAddAction"] = 1;
$tdatatestscenarios[".closePopupAfterAdd"] = 1;
$tdatatestscenarios[".afterAddActionDetTable"] = "";

$tdatatestscenarios[".list"] = true;

$tdatatestscenarios[".inlineEdit"] = true;

$tdatatestscenarios[".updateSelected"] = true;

$tdatatestscenarios[".reorderRecordsByHeader"] = true;
$tdatatestscenarios[".createSortByDropdown"] = true;
$tdatatestscenarios[".strSortControlSettingsJSON"] = "";


$tdatatestscenarios[".exportFormatting"] = 2;
$tdatatestscenarios[".exportDelimiter"] = ",";
		
$tdatatestscenarios[".inlineAdd"] = true;
$tdatatestscenarios[".view"] = true;

$tdatatestscenarios[".import"] = true;

$tdatatestscenarios[".exportTo"] = true;

$tdatatestscenarios[".printFriendly"] = true;

$tdatatestscenarios[".delete"] = true;

$tdatatestscenarios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatestscenarios[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatatestscenarios[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatatestscenarios[".searchSaving"] = false;
//

$tdatatestscenarios[".showSearchPanel"] = true;
		$tdatatestscenarios[".flexibleSearch"] = true;

$tdatatestscenarios[".isUseAjaxSuggest"] = true;

$tdatatestscenarios[".rowHighlite"] = true;





$tdatatestscenarios[".ajaxCodeSnippetAdded"] = false;

$tdatatestscenarios[".buttonsAdded"] = false;

$tdatatestscenarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatestscenarios[".isUseTimeForSearch"] = false;





$tdatatestscenarios[".allSearchFields"] = array();
$tdatatestscenarios[".filterFields"] = array();
$tdatatestscenarios[".requiredSearchFields"] = array();

$tdatatestscenarios[".allSearchFields"][] = "TestScenrio_Id";
	$tdatatestscenarios[".allSearchFields"][] = "TestType";
	$tdatatestscenarios[".allSearchFields"][] = "Module";
	$tdatatestscenarios[".allSearchFields"][] = "TestScenario";
	$tdatatestscenarios[".allSearchFields"][] = "Summary";
	$tdatatestscenarios[".allSearchFields"][] = "UAT";
	$tdatatestscenarios[".allSearchFields"][] = "QA";
	
$tdatatestscenarios[".filterFields"][] = "Module";

$tdatatestscenarios[".googleLikeFields"] = array();
$tdatatestscenarios[".googleLikeFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".googleLikeFields"][] = "TestType";
$tdatatestscenarios[".googleLikeFields"][] = "TestScenario";
$tdatatestscenarios[".googleLikeFields"][] = "Summary";
$tdatatestscenarios[".googleLikeFields"][] = "UAT";
$tdatatestscenarios[".googleLikeFields"][] = "Module";
$tdatatestscenarios[".googleLikeFields"][] = "QA";

$tdatatestscenarios[".panelSearchFields"] = array();
$tdatatestscenarios[".searchPanelOptions"] = array();
$tdatatestscenarios[".panelSearchFields"][] = "TestType";
	$tdatatestscenarios[".panelSearchFields"][] = "Module";
	$tdatatestscenarios[".panelSearchFields"][] = "TestScenario";
	$tdatatestscenarios[".panelSearchFields"][] = "Summary";
	$tdatatestscenarios[".panelSearchFields"][] = "UAT";
	$tdatatestscenarios[".panelSearchFields"][] = "QA";
	
$tdatatestscenarios[".advSearchFields"] = array();
$tdatatestscenarios[".advSearchFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".advSearchFields"][] = "TestType";
$tdatatestscenarios[".advSearchFields"][] = "Module";
$tdatatestscenarios[".advSearchFields"][] = "TestScenario";
$tdatatestscenarios[".advSearchFields"][] = "Summary";
$tdatatestscenarios[".advSearchFields"][] = "UAT";
$tdatatestscenarios[".advSearchFields"][] = "QA";

$tdatatestscenarios[".tableType"] = "list";

$tdatatestscenarios[".printerPageOrientation"] = 0;
$tdatatestscenarios[".nPrinterPageScale"] = 100;

$tdatatestscenarios[".nPrinterSplitRecords"] = 40;

$tdatatestscenarios[".nPrinterPDFSplitRecords"] = 40;



$tdatatestscenarios[".geocodingEnabled"] = false;





$tdatatestscenarios[".listGridLayout"] = 3;


$tdatatestscenarios[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatatestscenarios[".pageSize"] = 20;

$tdatatestscenarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatestscenarios[".strOrderBy"] = $tstrOrderBy;

$tdatatestscenarios[".orderindexes"] = array();

$tdatatestscenarios[".sqlHead"] = "SELECT TestScenrio_Id,  	TestType,  	TestScenario,  	Summary,  	UAT,  	`Module`,  	QA";
$tdatatestscenarios[".sqlFrom"] = "FROM testscenarios";
$tdatatestscenarios[".sqlWhereExpr"] = "";
$tdatatestscenarios[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatestscenarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatestscenarios[".arrGroupsPerPage"] = $arrGPP;

$tdatatestscenarios[".highlightSearchResults"] = true;

$tableKeystestscenarios = array();
$tableKeystestscenarios[] = "TestScenrio_Id";
$tableKeystestscenarios[] = "TestType";
$tableKeystestscenarios[] = "TestScenario";
$tableKeystestscenarios[] = "Summary";
$tableKeystestscenarios[] = "UAT";
$tableKeystestscenarios[] = "Module";
$tdatatestscenarios[".Keys"] = $tableKeystestscenarios;

$tdatatestscenarios[".listFields"] = array();
$tdatatestscenarios[".listFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".listFields"][] = "TestType";
$tdatatestscenarios[".listFields"][] = "Module";
$tdatatestscenarios[".listFields"][] = "TestScenario";
$tdatatestscenarios[".listFields"][] = "Summary";
$tdatatestscenarios[".listFields"][] = "UAT";
$tdatatestscenarios[".listFields"][] = "QA";

$tdatatestscenarios[".hideMobileList"] = array();


$tdatatestscenarios[".viewFields"] = array();
$tdatatestscenarios[".viewFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".viewFields"][] = "TestType";
$tdatatestscenarios[".viewFields"][] = "Module";
$tdatatestscenarios[".viewFields"][] = "TestScenario";
$tdatatestscenarios[".viewFields"][] = "Summary";
$tdatatestscenarios[".viewFields"][] = "UAT";
$tdatatestscenarios[".viewFields"][] = "QA";

$tdatatestscenarios[".addFields"] = array();
$tdatatestscenarios[".addFields"][] = "TestType";
$tdatatestscenarios[".addFields"][] = "Module";
$tdatatestscenarios[".addFields"][] = "TestScenario";
$tdatatestscenarios[".addFields"][] = "Summary";
$tdatatestscenarios[".addFields"][] = "UAT";
$tdatatestscenarios[".addFields"][] = "QA";

$tdatatestscenarios[".masterListFields"] = array();
$tdatatestscenarios[".masterListFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".masterListFields"][] = "TestType";
$tdatatestscenarios[".masterListFields"][] = "Module";
$tdatatestscenarios[".masterListFields"][] = "TestScenario";
$tdatatestscenarios[".masterListFields"][] = "Summary";
$tdatatestscenarios[".masterListFields"][] = "UAT";
$tdatatestscenarios[".masterListFields"][] = "QA";

$tdatatestscenarios[".inlineAddFields"] = array();
$tdatatestscenarios[".inlineAddFields"][] = "TestType";
$tdatatestscenarios[".inlineAddFields"][] = "Module";
$tdatatestscenarios[".inlineAddFields"][] = "TestScenario";
$tdatatestscenarios[".inlineAddFields"][] = "Summary";
$tdatatestscenarios[".inlineAddFields"][] = "UAT";
$tdatatestscenarios[".inlineAddFields"][] = "QA";

$tdatatestscenarios[".editFields"] = array();
$tdatatestscenarios[".editFields"][] = "TestType";
$tdatatestscenarios[".editFields"][] = "Module";
$tdatatestscenarios[".editFields"][] = "TestScenario";
$tdatatestscenarios[".editFields"][] = "Summary";
$tdatatestscenarios[".editFields"][] = "UAT";
$tdatatestscenarios[".editFields"][] = "QA";

$tdatatestscenarios[".inlineEditFields"] = array();
$tdatatestscenarios[".inlineEditFields"][] = "TestType";
$tdatatestscenarios[".inlineEditFields"][] = "Module";
$tdatatestscenarios[".inlineEditFields"][] = "TestScenario";
$tdatatestscenarios[".inlineEditFields"][] = "Summary";
$tdatatestscenarios[".inlineEditFields"][] = "UAT";
$tdatatestscenarios[".inlineEditFields"][] = "QA";

$tdatatestscenarios[".updateSelectedFields"] = array();
$tdatatestscenarios[".updateSelectedFields"][] = "TestType";
$tdatatestscenarios[".updateSelectedFields"][] = "Module";
$tdatatestscenarios[".updateSelectedFields"][] = "TestScenario";
$tdatatestscenarios[".updateSelectedFields"][] = "Summary";
$tdatatestscenarios[".updateSelectedFields"][] = "UAT";
$tdatatestscenarios[".updateSelectedFields"][] = "QA";


$tdatatestscenarios[".exportFields"] = array();
$tdatatestscenarios[".exportFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".exportFields"][] = "TestType";
$tdatatestscenarios[".exportFields"][] = "Module";
$tdatatestscenarios[".exportFields"][] = "TestScenario";
$tdatatestscenarios[".exportFields"][] = "Summary";
$tdatatestscenarios[".exportFields"][] = "UAT";
$tdatatestscenarios[".exportFields"][] = "QA";

$tdatatestscenarios[".importFields"] = array();
$tdatatestscenarios[".importFields"][] = "TestType";
$tdatatestscenarios[".importFields"][] = "TestScenario";
$tdatatestscenarios[".importFields"][] = "Summary";
$tdatatestscenarios[".importFields"][] = "UAT";
$tdatatestscenarios[".importFields"][] = "Module";
$tdatatestscenarios[".importFields"][] = "QA";

$tdatatestscenarios[".printFields"] = array();
$tdatatestscenarios[".printFields"][] = "TestScenrio_Id";
$tdatatestscenarios[".printFields"][] = "TestType";
$tdatatestscenarios[".printFields"][] = "Module";
$tdatatestscenarios[".printFields"][] = "TestScenario";
$tdatatestscenarios[".printFields"][] = "Summary";
$tdatatestscenarios[".printFields"][] = "UAT";
$tdatatestscenarios[".printFields"][] = "QA";


//	TestScenrio_Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TestScenrio_Id";
	$fdata["GoodName"] = "TestScenrio_Id";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","TestScenrio_Id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatatestscenarios["TestScenrio_Id"] = $fdata;
//	TestType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TestType";
	$fdata["GoodName"] = "TestType";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","TestType");
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

		$fdata["strField"] = "TestType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestType";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Standard";
	$edata["LookupValues"][] = "Functional";
	$edata["LookupValues"][] = "Load";

	
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




	$tdatatestscenarios["TestType"] = $fdata;
//	TestScenario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TestScenario";
	$fdata["GoodName"] = "TestScenario";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","TestScenario");
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

		$fdata["strField"] = "TestScenario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestScenario";

	
	
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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




	$tdatatestscenarios["TestScenario"] = $fdata;
//	Summary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Summary";
	$fdata["GoodName"] = "Summary";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","Summary");
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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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




	$tdatatestscenarios["Summary"] = $fdata;
//	UAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UAT";
	$fdata["GoodName"] = "UAT";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","UAT");
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

		$fdata["strField"] = "UAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UAT";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
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




	$tdatatestscenarios["UAT"] = $fdata;
//	Module
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Module";
	$fdata["GoodName"] = "Module";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","Module");
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

		$fdata["strField"] = "Module";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Module`";

	
	
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
	$edata["LookupTable"] = "testmodule";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Module";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Module";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;

	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "TestScenrio_Id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatestscenarios["Module"] = $fdata;
//	QA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "QA";
	$fdata["GoodName"] = "QA";
	$fdata["ownerTable"] = "testscenarios";
	$fdata["Label"] = GetFieldLabel("testscenarios","QA");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
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




	$tdatatestscenarios["QA"] = $fdata;


$tables_data["testscenarios"]=&$tdatatestscenarios;
$field_labels["testscenarios"] = &$fieldLabelstestscenarios;
$fieldToolTips["testscenarios"] = &$fieldToolTipstestscenarios;
$placeHolders["testscenarios"] = &$placeHolderstestscenarios;
$page_titles["testscenarios"] = &$pageTitlestestscenarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["testscenarios"] = array();
//	testcases
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="testcases";
		$detailsParam["dOriginalTable"] = "testcases";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "testcases";
	$detailsParam["dCaptionTable"] = GetTableCaption("testcases");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 1;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["testscenarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["testscenarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["testscenarios"][$dIndex]["masterKeys"][]="TestScenrio_Id";

				$detailsTablesData["testscenarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["testscenarios"][$dIndex]["detailKeys"][]="TestScenrio_Id";

// tables which are master tables for current table (detail)
$masterTablesData["testscenarios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_testscenarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TestScenrio_Id,  	TestType,  	TestScenario,  	Summary,  	UAT,  	`Module`,  	QA";
$proto0["m_strFrom"] = "FROM testscenarios";
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
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto6["m_sql"] = "TestScenrio_Id";
$proto6["m_srcTableName"] = "testscenarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TestType",
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto8["m_sql"] = "TestType";
$proto8["m_srcTableName"] = "testscenarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TestScenario",
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto10["m_sql"] = "TestScenario";
$proto10["m_srcTableName"] = "testscenarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Summary",
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto12["m_sql"] = "Summary";
$proto12["m_srcTableName"] = "testscenarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UAT",
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto14["m_sql"] = "UAT";
$proto14["m_srcTableName"] = "testscenarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Module",
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto16["m_sql"] = "`Module`";
$proto16["m_srcTableName"] = "testscenarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "QA",
	"m_strTable" => "testscenarios",
	"m_srcTableName" => "testscenarios"
));

$proto18["m_sql"] = "QA";
$proto18["m_srcTableName"] = "testscenarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "testscenarios";
$proto21["m_srcTableName"] = "testscenarios";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "TestScenrio_Id";
$proto21["m_columns"][] = "TestType";
$proto21["m_columns"][] = "TestScenario";
$proto21["m_columns"][] = "Summary";
$proto21["m_columns"][] = "UAT";
$proto21["m_columns"][] = "Module";
$proto21["m_columns"][] = "QA";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "testscenarios";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "testscenarios";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="testscenarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_testscenarios = createSqlQuery_testscenarios();


	
		;

							

$tdatatestscenarios[".sqlquery"] = $queryData_testscenarios;

$tableEvents["testscenarios"] = new eventsBase;
$tdatatestscenarios[".hasEvents"] = false;

?>