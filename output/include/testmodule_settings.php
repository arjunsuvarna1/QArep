<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatestmodule = array();
	$tdatatestmodule[".truncateText"] = true;
	$tdatatestmodule[".NumberOfChars"] = 80;
	$tdatatestmodule[".ShortName"] = "testmodule";
	$tdatatestmodule[".OwnerID"] = "";
	$tdatatestmodule[".OriginalTable"] = "testmodule";

//	field labels
$fieldLabelstestmodule = array();
$fieldToolTipstestmodule = array();
$pageTitlestestmodule = array();
$placeHolderstestmodule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstestmodule["English"] = array();
	$fieldToolTipstestmodule["English"] = array();
	$placeHolderstestmodule["English"] = array();
	$pageTitlestestmodule["English"] = array();
	$fieldLabelstestmodule["English"]["TestModuleId"] = "Test Module Id";
	$fieldToolTipstestmodule["English"]["TestModuleId"] = "";
	$placeHolderstestmodule["English"]["TestModuleId"] = "";
	$fieldLabelstestmodule["English"]["Module"] = "Module";
	$fieldToolTipstestmodule["English"]["Module"] = "";
	$placeHolderstestmodule["English"]["Module"] = "";
	$pageTitlestestmodule["English"]["edit"] = "Test Module, Edit ";
	$pageTitlestestmodule["English"]["view"] = "Test Module";
	if (count($fieldToolTipstestmodule["English"]))
		$tdatatestmodule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstestmodule[""] = array();
	$fieldToolTipstestmodule[""] = array();
	$placeHolderstestmodule[""] = array();
	$pageTitlestestmodule[""] = array();
	if (count($fieldToolTipstestmodule[""]))
		$tdatatestmodule[".isUseToolTips"] = true;
}


	$tdatatestmodule[".NCSearch"] = true;



$tdatatestmodule[".shortTableName"] = "testmodule";
$tdatatestmodule[".nSecOptions"] = 0;
$tdatatestmodule[".recsPerRowPrint"] = 1;
$tdatatestmodule[".mainTableOwnerID"] = "";
$tdatatestmodule[".moveNext"] = 1;
$tdatatestmodule[".entityType"] = 0;

$tdatatestmodule[".strOriginalTableName"] = "testmodule";

	



$tdatatestmodule[".showAddInPopup"] = false;

$tdatatestmodule[".showEditInPopup"] = false;

$tdatatestmodule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatestmodule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatestmodule[".fieldsForRegister"] = array();

$tdatatestmodule[".listAjax"] = false;

	$tdatatestmodule[".audit"] = true;

	$tdatatestmodule[".locking"] = false;

$tdatatestmodule[".edit"] = true;
$tdatatestmodule[".afterEditAction"] = 1;
$tdatatestmodule[".closePopupAfterEdit"] = 1;
$tdatatestmodule[".afterEditActionDetTable"] = "";

$tdatatestmodule[".add"] = true;
$tdatatestmodule[".afterAddAction"] = 1;
$tdatatestmodule[".closePopupAfterAdd"] = 1;
$tdatatestmodule[".afterAddActionDetTable"] = "";

$tdatatestmodule[".list"] = true;

$tdatatestmodule[".inlineEdit"] = true;

$tdatatestmodule[".updateSelected"] = true;

$tdatatestmodule[".reorderRecordsByHeader"] = true;


$tdatatestmodule[".exportFormatting"] = 2;
$tdatatestmodule[".exportDelimiter"] = ",";
		
$tdatatestmodule[".inlineAdd"] = true;
$tdatatestmodule[".view"] = true;

$tdatatestmodule[".import"] = true;

$tdatatestmodule[".exportTo"] = true;

$tdatatestmodule[".printFriendly"] = true;

$tdatatestmodule[".delete"] = true;

$tdatatestmodule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatestmodule[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatatestmodule[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatatestmodule[".searchSaving"] = false;
//

$tdatatestmodule[".showSearchPanel"] = true;
		$tdatatestmodule[".flexibleSearch"] = true;

$tdatatestmodule[".isUseAjaxSuggest"] = true;

$tdatatestmodule[".rowHighlite"] = true;





$tdatatestmodule[".ajaxCodeSnippetAdded"] = false;

$tdatatestmodule[".buttonsAdded"] = false;

$tdatatestmodule[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatestmodule[".isUseTimeForSearch"] = false;



$tdatatestmodule[".badgeColor"] = "6493EA";


$tdatatestmodule[".allSearchFields"] = array();
$tdatatestmodule[".filterFields"] = array();
$tdatatestmodule[".requiredSearchFields"] = array();

$tdatatestmodule[".allSearchFields"][] = "TestModuleId";
	$tdatatestmodule[".allSearchFields"][] = "Module";
	

$tdatatestmodule[".googleLikeFields"] = array();
$tdatatestmodule[".googleLikeFields"][] = "TestModuleId";
$tdatatestmodule[".googleLikeFields"][] = "Module";


$tdatatestmodule[".advSearchFields"] = array();
$tdatatestmodule[".advSearchFields"][] = "TestModuleId";
$tdatatestmodule[".advSearchFields"][] = "Module";

$tdatatestmodule[".tableType"] = "list";

$tdatatestmodule[".printerPageOrientation"] = 0;
$tdatatestmodule[".nPrinterPageScale"] = 100;

$tdatatestmodule[".nPrinterSplitRecords"] = 40;

$tdatatestmodule[".nPrinterPDFSplitRecords"] = 40;



$tdatatestmodule[".geocodingEnabled"] = false;





$tdatatestmodule[".listGridLayout"] = 3;


$tdatatestmodule[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatatestmodule[".pageSize"] = 20;

$tdatatestmodule[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatestmodule[".strOrderBy"] = $tstrOrderBy;

$tdatatestmodule[".orderindexes"] = array();

$tdatatestmodule[".sqlHead"] = "SELECT TestModuleId,  	`Module`";
$tdatatestmodule[".sqlFrom"] = "FROM testmodule";
$tdatatestmodule[".sqlWhereExpr"] = "";
$tdatatestmodule[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatestmodule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatestmodule[".arrGroupsPerPage"] = $arrGPP;

$tdatatestmodule[".highlightSearchResults"] = true;

$tableKeystestmodule = array();
$tableKeystestmodule[] = "TestModuleId";
$tableKeystestmodule[] = "Module";
$tdatatestmodule[".Keys"] = $tableKeystestmodule;

$tdatatestmodule[".listFields"] = array();
$tdatatestmodule[".listFields"][] = "TestModuleId";
$tdatatestmodule[".listFields"][] = "Module";

$tdatatestmodule[".hideMobileList"] = array();


$tdatatestmodule[".viewFields"] = array();
$tdatatestmodule[".viewFields"][] = "TestModuleId";
$tdatatestmodule[".viewFields"][] = "Module";

$tdatatestmodule[".addFields"] = array();
$tdatatestmodule[".addFields"][] = "Module";

$tdatatestmodule[".masterListFields"] = array();
$tdatatestmodule[".masterListFields"][] = "TestModuleId";
$tdatatestmodule[".masterListFields"][] = "Module";

$tdatatestmodule[".inlineAddFields"] = array();
$tdatatestmodule[".inlineAddFields"][] = "Module";

$tdatatestmodule[".editFields"] = array();
$tdatatestmodule[".editFields"][] = "Module";

$tdatatestmodule[".inlineEditFields"] = array();
$tdatatestmodule[".inlineEditFields"][] = "Module";

$tdatatestmodule[".updateSelectedFields"] = array();
$tdatatestmodule[".updateSelectedFields"][] = "Module";


$tdatatestmodule[".exportFields"] = array();
$tdatatestmodule[".exportFields"][] = "TestModuleId";
$tdatatestmodule[".exportFields"][] = "Module";

$tdatatestmodule[".importFields"] = array();
$tdatatestmodule[".importFields"][] = "TestModuleId";
$tdatatestmodule[".importFields"][] = "Module";

$tdatatestmodule[".printFields"] = array();
$tdatatestmodule[".printFields"][] = "TestModuleId";
$tdatatestmodule[".printFields"][] = "Module";


//	TestModuleId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TestModuleId";
	$fdata["GoodName"] = "TestModuleId";
	$fdata["ownerTable"] = "testmodule";
	$fdata["Label"] = GetFieldLabel("testmodule","TestModuleId");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TestModuleId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestModuleId";

	
	
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




	$tdatatestmodule["TestModuleId"] = $fdata;
//	Module
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Module";
	$fdata["GoodName"] = "Module";
	$fdata["ownerTable"] = "testmodule";
	$fdata["Label"] = GetFieldLabel("testmodule","Module");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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




	$tdatatestmodule["Module"] = $fdata;


$tables_data["testmodule"]=&$tdatatestmodule;
$field_labels["testmodule"] = &$fieldLabelstestmodule;
$fieldToolTips["testmodule"] = &$fieldToolTipstestmodule;
$placeHolders["testmodule"] = &$placeHolderstestmodule;
$page_titles["testmodule"] = &$pageTitlestestmodule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["testmodule"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["testmodule"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_testmodule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TestModuleId,  	`Module`";
$proto0["m_strFrom"] = "FROM testmodule";
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
	"m_strName" => "TestModuleId",
	"m_strTable" => "testmodule",
	"m_srcTableName" => "testmodule"
));

$proto6["m_sql"] = "TestModuleId";
$proto6["m_srcTableName"] = "testmodule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Module",
	"m_strTable" => "testmodule",
	"m_srcTableName" => "testmodule"
));

$proto8["m_sql"] = "`Module`";
$proto8["m_srcTableName"] = "testmodule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "testmodule";
$proto11["m_srcTableName"] = "testmodule";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "TestModuleId";
$proto11["m_columns"][] = "Module";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "testmodule";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "testmodule";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="testmodule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_testmodule = createSqlQuery_testmodule();


	
		;

		

$tdatatestmodule[".sqlquery"] = $queryData_testmodule;

$tableEvents["testmodule"] = new eventsBase;
$tdatatestmodule[".hasEvents"] = false;

?>