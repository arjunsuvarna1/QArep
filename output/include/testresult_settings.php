<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatestresult = array();
	$tdatatestresult[".truncateText"] = true;
	$tdatatestresult[".NumberOfChars"] = 80;
	$tdatatestresult[".ShortName"] = "testresult";
	$tdatatestresult[".OwnerID"] = "";
	$tdatatestresult[".OriginalTable"] = "testresult";

//	field labels
$fieldLabelstestresult = array();
$fieldToolTipstestresult = array();
$pageTitlestestresult = array();
$placeHolderstestresult = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstestresult["English"] = array();
	$fieldToolTipstestresult["English"] = array();
	$placeHolderstestresult["English"] = array();
	$pageTitlestestresult["English"] = array();
	$fieldLabelstestresult["English"]["TestResult"] = "Test Result";
	$fieldToolTipstestresult["English"]["TestResult"] = "";
	$placeHolderstestresult["English"]["TestResult"] = "";
	$pageTitlestestresult["English"]["edit"] = "Test Result, Edit ";
	$pageTitlestestresult["English"]["view"] = "Test Result ";
	if (count($fieldToolTipstestresult["English"]))
		$tdatatestresult[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstestresult[""] = array();
	$fieldToolTipstestresult[""] = array();
	$placeHolderstestresult[""] = array();
	$pageTitlestestresult[""] = array();
	if (count($fieldToolTipstestresult[""]))
		$tdatatestresult[".isUseToolTips"] = true;
}


	$tdatatestresult[".NCSearch"] = true;



$tdatatestresult[".shortTableName"] = "testresult";
$tdatatestresult[".nSecOptions"] = 0;
$tdatatestresult[".recsPerRowPrint"] = 1;
$tdatatestresult[".mainTableOwnerID"] = "";
$tdatatestresult[".moveNext"] = 1;
$tdatatestresult[".entityType"] = 0;

$tdatatestresult[".strOriginalTableName"] = "testresult";

	



$tdatatestresult[".showAddInPopup"] = false;

$tdatatestresult[".showEditInPopup"] = false;

$tdatatestresult[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatestresult[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatestresult[".fieldsForRegister"] = array();

$tdatatestresult[".listAjax"] = false;

	$tdatatestresult[".audit"] = true;

	$tdatatestresult[".locking"] = false;

$tdatatestresult[".edit"] = true;
$tdatatestresult[".afterEditAction"] = 1;
$tdatatestresult[".closePopupAfterEdit"] = 1;
$tdatatestresult[".afterEditActionDetTable"] = "";

$tdatatestresult[".add"] = true;
$tdatatestresult[".afterAddAction"] = 1;
$tdatatestresult[".closePopupAfterAdd"] = 1;
$tdatatestresult[".afterAddActionDetTable"] = "";

$tdatatestresult[".list"] = true;

$tdatatestresult[".inlineEdit"] = true;


$tdatatestresult[".reorderRecordsByHeader"] = true;


$tdatatestresult[".exportFormatting"] = 2;
$tdatatestresult[".exportDelimiter"] = ",";
		
$tdatatestresult[".inlineAdd"] = true;
$tdatatestresult[".view"] = true;

$tdatatestresult[".import"] = true;

$tdatatestresult[".exportTo"] = true;

$tdatatestresult[".printFriendly"] = true;

$tdatatestresult[".delete"] = true;

$tdatatestresult[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatestresult[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatatestresult[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatatestresult[".searchSaving"] = false;
//

$tdatatestresult[".showSearchPanel"] = true;
		$tdatatestresult[".flexibleSearch"] = true;

$tdatatestresult[".isUseAjaxSuggest"] = true;

$tdatatestresult[".rowHighlite"] = true;





$tdatatestresult[".ajaxCodeSnippetAdded"] = false;

$tdatatestresult[".buttonsAdded"] = false;

$tdatatestresult[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatestresult[".isUseTimeForSearch"] = false;



$tdatatestresult[".badgeColor"] = "1E90FF";


$tdatatestresult[".allSearchFields"] = array();
$tdatatestresult[".filterFields"] = array();
$tdatatestresult[".requiredSearchFields"] = array();

$tdatatestresult[".allSearchFields"][] = "TestResult";
	

$tdatatestresult[".googleLikeFields"] = array();
$tdatatestresult[".googleLikeFields"][] = "TestResult";


$tdatatestresult[".advSearchFields"] = array();
$tdatatestresult[".advSearchFields"][] = "TestResult";

$tdatatestresult[".tableType"] = "list";

$tdatatestresult[".printerPageOrientation"] = 0;
$tdatatestresult[".nPrinterPageScale"] = 100;

$tdatatestresult[".nPrinterSplitRecords"] = 40;

$tdatatestresult[".nPrinterPDFSplitRecords"] = 40;



$tdatatestresult[".geocodingEnabled"] = false;





$tdatatestresult[".listGridLayout"] = 3;


$tdatatestresult[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatatestresult[".pageSize"] = 20;

$tdatatestresult[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatestresult[".strOrderBy"] = $tstrOrderBy;

$tdatatestresult[".orderindexes"] = array();

$tdatatestresult[".sqlHead"] = "SELECT TestResult";
$tdatatestresult[".sqlFrom"] = "FROM testresult";
$tdatatestresult[".sqlWhereExpr"] = "";
$tdatatestresult[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatestresult[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatestresult[".arrGroupsPerPage"] = $arrGPP;

$tdatatestresult[".highlightSearchResults"] = true;

$tableKeystestresult = array();
$tableKeystestresult[] = "TestResult";
$tdatatestresult[".Keys"] = $tableKeystestresult;

$tdatatestresult[".listFields"] = array();
$tdatatestresult[".listFields"][] = "TestResult";

$tdatatestresult[".hideMobileList"] = array();


$tdatatestresult[".viewFields"] = array();
$tdatatestresult[".viewFields"][] = "TestResult";

$tdatatestresult[".addFields"] = array();
$tdatatestresult[".addFields"][] = "TestResult";

$tdatatestresult[".masterListFields"] = array();
$tdatatestresult[".masterListFields"][] = "TestResult";

$tdatatestresult[".inlineAddFields"] = array();
$tdatatestresult[".inlineAddFields"][] = "TestResult";

$tdatatestresult[".editFields"] = array();
$tdatatestresult[".editFields"][] = "TestResult";

$tdatatestresult[".inlineEditFields"] = array();
$tdatatestresult[".inlineEditFields"][] = "TestResult";

$tdatatestresult[".updateSelectedFields"] = array();
$tdatatestresult[".updateSelectedFields"][] = "TestResult";


$tdatatestresult[".exportFields"] = array();
$tdatatestresult[".exportFields"][] = "TestResult";

$tdatatestresult[".importFields"] = array();
$tdatatestresult[".importFields"][] = "TestResult";

$tdatatestresult[".printFields"] = array();
$tdatatestresult[".printFields"][] = "TestResult";


//	TestResult
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TestResult";
	$fdata["GoodName"] = "TestResult";
	$fdata["ownerTable"] = "testresult";
	$fdata["Label"] = GetFieldLabel("testresult","TestResult");
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

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=12";

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




	$tdatatestresult["TestResult"] = $fdata;


$tables_data["testresult"]=&$tdatatestresult;
$field_labels["testresult"] = &$fieldLabelstestresult;
$fieldToolTips["testresult"] = &$fieldToolTipstestresult;
$placeHolders["testresult"] = &$placeHolderstestresult;
$page_titles["testresult"] = &$pageTitlestestresult;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["testresult"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["testresult"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_testresult()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TestResult";
$proto0["m_strFrom"] = "FROM testresult";
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
	"m_strName" => "TestResult",
	"m_strTable" => "testresult",
	"m_srcTableName" => "testresult"
));

$proto6["m_sql"] = "TestResult";
$proto6["m_srcTableName"] = "testresult";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "testresult";
$proto9["m_srcTableName"] = "testresult";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "TestResult";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "testresult";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "testresult";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="testresult";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_testresult = createSqlQuery_testresult();


	
		;

	

$tdatatestresult[".sqlquery"] = $queryData_testresult;

$tableEvents["testresult"] = new eventsBase;
$tdatatestresult[".hasEvents"] = false;

?>