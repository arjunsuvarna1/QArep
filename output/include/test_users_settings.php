<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatest_users = array();
	$tdatatest_users[".truncateText"] = true;
	$tdatatest_users[".NumberOfChars"] = 80;
	$tdatatest_users[".ShortName"] = "test_users";
	$tdatatest_users[".OwnerID"] = "";
	$tdatatest_users[".OriginalTable"] = "test_users";

//	field labels
$fieldLabelstest_users = array();
$fieldToolTipstest_users = array();
$pageTitlestest_users = array();
$placeHolderstest_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstest_users["English"] = array();
	$fieldToolTipstest_users["English"] = array();
	$placeHolderstest_users["English"] = array();
	$pageTitlestest_users["English"] = array();
	$fieldLabelstest_users["English"]["ID"] = "ID";
	$fieldToolTipstest_users["English"]["ID"] = "";
	$placeHolderstest_users["English"]["ID"] = "";
	$fieldLabelstest_users["English"]["username"] = "Username";
	$fieldToolTipstest_users["English"]["username"] = "";
	$placeHolderstest_users["English"]["username"] = "";
	$fieldLabelstest_users["English"]["password"] = "Password";
	$fieldToolTipstest_users["English"]["password"] = "";
	$placeHolderstest_users["English"]["password"] = "";
	$fieldLabelstest_users["English"]["email"] = "Email";
	$fieldToolTipstest_users["English"]["email"] = "";
	$placeHolderstest_users["English"]["email"] = "";
	$fieldLabelstest_users["English"]["fullname"] = "Fullname";
	$fieldToolTipstest_users["English"]["fullname"] = "";
	$placeHolderstest_users["English"]["fullname"] = "";
	$fieldLabelstest_users["English"]["groupid"] = "Groupid";
	$fieldToolTipstest_users["English"]["groupid"] = "";
	$placeHolderstest_users["English"]["groupid"] = "";
	$fieldLabelstest_users["English"]["active"] = "Active";
	$fieldToolTipstest_users["English"]["active"] = "";
	$placeHolderstest_users["English"]["active"] = "";
	if (count($fieldToolTipstest_users["English"]))
		$tdatatest_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstest_users[""] = array();
	$fieldToolTipstest_users[""] = array();
	$placeHolderstest_users[""] = array();
	$pageTitlestest_users[""] = array();
	if (count($fieldToolTipstest_users[""]))
		$tdatatest_users[".isUseToolTips"] = true;
}


	$tdatatest_users[".NCSearch"] = true;



$tdatatest_users[".shortTableName"] = "test_users";
$tdatatest_users[".nSecOptions"] = 0;
$tdatatest_users[".recsPerRowPrint"] = 1;
$tdatatest_users[".mainTableOwnerID"] = "";
$tdatatest_users[".moveNext"] = 1;
$tdatatest_users[".entityType"] = 0;

$tdatatest_users[".strOriginalTableName"] = "test_users";

	



$tdatatest_users[".showAddInPopup"] = false;

$tdatatest_users[".showEditInPopup"] = false;

$tdatatest_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatest_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatest_users[".fieldsForRegister"] = array();

$tdatatest_users[".listAjax"] = false;

	$tdatatest_users[".audit"] = false;

	$tdatatest_users[".locking"] = false;






$tdatatest_users[".reorderRecordsByHeader"] = true;








$tdatatest_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatest_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatest_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatest_users[".searchSaving"] = false;
//

$tdatatest_users[".showSearchPanel"] = true;
		$tdatatest_users[".flexibleSearch"] = true;

$tdatatest_users[".isUseAjaxSuggest"] = true;

$tdatatest_users[".rowHighlite"] = true;





$tdatatest_users[".ajaxCodeSnippetAdded"] = false;

$tdatatest_users[".buttonsAdded"] = false;

$tdatatest_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatest_users[".isUseTimeForSearch"] = false;





$tdatatest_users[".allSearchFields"] = array();
$tdatatest_users[".filterFields"] = array();
$tdatatest_users[".requiredSearchFields"] = array();

$tdatatest_users[".allSearchFields"][] = "ID";
	$tdatatest_users[".allSearchFields"][] = "username";
	$tdatatest_users[".allSearchFields"][] = "password";
	$tdatatest_users[".allSearchFields"][] = "email";
	$tdatatest_users[".allSearchFields"][] = "fullname";
	$tdatatest_users[".allSearchFields"][] = "groupid";
	$tdatatest_users[".allSearchFields"][] = "active";
	

$tdatatest_users[".googleLikeFields"] = array();
$tdatatest_users[".googleLikeFields"][] = "ID";
$tdatatest_users[".googleLikeFields"][] = "username";
$tdatatest_users[".googleLikeFields"][] = "password";
$tdatatest_users[".googleLikeFields"][] = "email";
$tdatatest_users[".googleLikeFields"][] = "fullname";
$tdatatest_users[".googleLikeFields"][] = "groupid";
$tdatatest_users[".googleLikeFields"][] = "active";


$tdatatest_users[".advSearchFields"] = array();
$tdatatest_users[".advSearchFields"][] = "ID";
$tdatatest_users[".advSearchFields"][] = "username";
$tdatatest_users[".advSearchFields"][] = "password";
$tdatatest_users[".advSearchFields"][] = "email";
$tdatatest_users[".advSearchFields"][] = "fullname";
$tdatatest_users[".advSearchFields"][] = "groupid";
$tdatatest_users[".advSearchFields"][] = "active";

$tdatatest_users[".tableType"] = "list";

$tdatatest_users[".printerPageOrientation"] = 0;
$tdatatest_users[".nPrinterPageScale"] = 100;

$tdatatest_users[".nPrinterSplitRecords"] = 40;

$tdatatest_users[".nPrinterPDFSplitRecords"] = 40;



$tdatatest_users[".geocodingEnabled"] = false;





$tdatatest_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatest_users[".pageSize"] = 20;

$tdatatest_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatest_users[".strOrderBy"] = $tstrOrderBy;

$tdatatest_users[".orderindexes"] = array();

$tdatatest_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdatatest_users[".sqlFrom"] = "FROM test_users";
$tdatatest_users[".sqlWhereExpr"] = "";
$tdatatest_users[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatest_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatest_users[".arrGroupsPerPage"] = $arrGPP;

$tdatatest_users[".highlightSearchResults"] = true;

$tableKeystest_users = array();
$tableKeystest_users[] = "ID";
$tdatatest_users[".Keys"] = $tableKeystest_users;

$tdatatest_users[".listFields"] = array();
$tdatatest_users[".listFields"][] = "ID";
$tdatatest_users[".listFields"][] = "username";
$tdatatest_users[".listFields"][] = "password";
$tdatatest_users[".listFields"][] = "email";
$tdatatest_users[".listFields"][] = "fullname";
$tdatatest_users[".listFields"][] = "groupid";
$tdatatest_users[".listFields"][] = "active";

$tdatatest_users[".hideMobileList"] = array();


$tdatatest_users[".viewFields"] = array();
$tdatatest_users[".viewFields"][] = "ID";
$tdatatest_users[".viewFields"][] = "username";
$tdatatest_users[".viewFields"][] = "password";
$tdatatest_users[".viewFields"][] = "email";
$tdatatest_users[".viewFields"][] = "fullname";
$tdatatest_users[".viewFields"][] = "groupid";
$tdatatest_users[".viewFields"][] = "active";

$tdatatest_users[".addFields"] = array();
$tdatatest_users[".addFields"][] = "username";
$tdatatest_users[".addFields"][] = "password";
$tdatatest_users[".addFields"][] = "email";
$tdatatest_users[".addFields"][] = "fullname";
$tdatatest_users[".addFields"][] = "groupid";
$tdatatest_users[".addFields"][] = "active";

$tdatatest_users[".masterListFields"] = array();
$tdatatest_users[".masterListFields"][] = "ID";
$tdatatest_users[".masterListFields"][] = "username";
$tdatatest_users[".masterListFields"][] = "password";
$tdatatest_users[".masterListFields"][] = "email";
$tdatatest_users[".masterListFields"][] = "fullname";
$tdatatest_users[".masterListFields"][] = "groupid";
$tdatatest_users[".masterListFields"][] = "active";

$tdatatest_users[".inlineAddFields"] = array();
$tdatatest_users[".inlineAddFields"][] = "username";
$tdatatest_users[".inlineAddFields"][] = "password";
$tdatatest_users[".inlineAddFields"][] = "email";
$tdatatest_users[".inlineAddFields"][] = "fullname";
$tdatatest_users[".inlineAddFields"][] = "groupid";
$tdatatest_users[".inlineAddFields"][] = "active";

$tdatatest_users[".editFields"] = array();
$tdatatest_users[".editFields"][] = "username";
$tdatatest_users[".editFields"][] = "password";
$tdatatest_users[".editFields"][] = "email";
$tdatatest_users[".editFields"][] = "fullname";
$tdatatest_users[".editFields"][] = "groupid";
$tdatatest_users[".editFields"][] = "active";

$tdatatest_users[".inlineEditFields"] = array();
$tdatatest_users[".inlineEditFields"][] = "username";
$tdatatest_users[".inlineEditFields"][] = "password";
$tdatatest_users[".inlineEditFields"][] = "email";
$tdatatest_users[".inlineEditFields"][] = "fullname";
$tdatatest_users[".inlineEditFields"][] = "groupid";
$tdatatest_users[".inlineEditFields"][] = "active";

$tdatatest_users[".updateSelectedFields"] = array();
$tdatatest_users[".updateSelectedFields"][] = "username";
$tdatatest_users[".updateSelectedFields"][] = "password";
$tdatatest_users[".updateSelectedFields"][] = "email";
$tdatatest_users[".updateSelectedFields"][] = "fullname";
$tdatatest_users[".updateSelectedFields"][] = "groupid";
$tdatatest_users[".updateSelectedFields"][] = "active";


$tdatatest_users[".exportFields"] = array();
$tdatatest_users[".exportFields"][] = "ID";
$tdatatest_users[".exportFields"][] = "username";
$tdatatest_users[".exportFields"][] = "password";
$tdatatest_users[".exportFields"][] = "email";
$tdatatest_users[".exportFields"][] = "fullname";
$tdatatest_users[".exportFields"][] = "groupid";
$tdatatest_users[".exportFields"][] = "active";

$tdatatest_users[".importFields"] = array();
$tdatatest_users[".importFields"][] = "ID";
$tdatatest_users[".importFields"][] = "username";
$tdatatest_users[".importFields"][] = "password";
$tdatatest_users[".importFields"][] = "email";
$tdatatest_users[".importFields"][] = "fullname";
$tdatatest_users[".importFields"][] = "groupid";
$tdatatest_users[".importFields"][] = "active";

$tdatatest_users[".printFields"] = array();
$tdatatest_users[".printFields"][] = "ID";
$tdatatest_users[".printFields"][] = "username";
$tdatatest_users[".printFields"][] = "password";
$tdatatest_users[".printFields"][] = "email";
$tdatatest_users[".printFields"][] = "fullname";
$tdatatest_users[".printFields"][] = "groupid";
$tdatatest_users[".printFields"][] = "active";


//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatatest_users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","username");
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

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatest_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","password");
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

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatest_users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","email");
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

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatest_users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","fullname");
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

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatest_users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","groupid");
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

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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




	$tdatatest_users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "test_users";
	$fdata["Label"] = GetFieldLabel("test_users","active");
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

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatest_users["active"] = $fdata;


$tables_data["test_users"]=&$tdatatest_users;
$field_labels["test_users"] = &$fieldLabelstest_users;
$fieldToolTips["test_users"] = &$fieldToolTipstest_users;
$placeHolders["test_users"] = &$placeHolderstest_users;
$page_titles["test_users"] = &$pageTitlestest_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["test_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["test_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_test_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM test_users";
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
	"m_strName" => "ID",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "test_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "test_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "test_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "test_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "test_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "test_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "test_users",
	"m_srcTableName" => "test_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "test_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "test_users";
$proto21["m_srcTableName"] = "test_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "groupid";
$proto21["m_columns"][] = "active";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "test_users";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "test_users";
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
$proto0["m_srcTableName"]="test_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_test_users = createSqlQuery_test_users();


	
		;

							

$tdatatest_users[".sqlquery"] = $queryData_test_users;

$tableEvents["test_users"] = new eventsBase;
$tdatatest_users[".hasEvents"] = false;

?>