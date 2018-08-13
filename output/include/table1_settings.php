<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatable1 = array();
	$tdatatable1[".ShortName"] = "table1";
	$tdatatable1[".OwnerID"] = "";
	$tdatatable1[".OriginalTable"] = "table1";

//	field labels
$fieldLabelstable1 = array();
$fieldToolTipstable1 = array();
$pageTitlestable1 = array();
$placeHolderstable1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstable1["English"] = array();
	$fieldToolTipstable1["English"] = array();
	$placeHolderstable1["English"] = array();
	$pageTitlestable1["English"] = array();
	$fieldLabelstable1["English"]["TestDataID"] = "Test Data ID";
	$fieldToolTipstable1["English"]["TestDataID"] = "";
	$placeHolderstable1["English"]["TestDataID"] = "";
	$fieldLabelstable1["English"]["TestCaseId"] = "Test Case Id";
	$fieldToolTipstable1["English"]["TestCaseId"] = "";
	$placeHolderstable1["English"]["TestCaseId"] = "";
	$fieldLabelstable1["English"]["TestFile"] = "Test File";
	$fieldToolTipstable1["English"]["TestFile"] = "";
	$placeHolderstable1["English"]["TestFile"] = "";
	if (count($fieldToolTipstable1["English"]))
		$tdatatable1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstable1[""] = array();
	$fieldToolTipstable1[""] = array();
	$placeHolderstable1[""] = array();
	$pageTitlestable1[""] = array();
	$fieldLabelstable1[""]["TestDataID"] = "Test Data ID";
	$fieldToolTipstable1[""]["TestDataID"] = "";
	$placeHolderstable1[""]["TestDataID"] = "";
	$fieldLabelstable1[""]["TestCaseId"] = "Test Case Id";
	$fieldToolTipstable1[""]["TestCaseId"] = "";
	$placeHolderstable1[""]["TestCaseId"] = "";
	$fieldLabelstable1[""]["TestFile"] = "Test File";
	$fieldToolTipstable1[""]["TestFile"] = "";
	$placeHolderstable1[""]["TestFile"] = "";
	if (count($fieldToolTipstable1[""]))
		$tdatatable1[".isUseToolTips"] = true;
}


	$tdatatable1[".NCSearch"] = true;



$tdatatable1[".shortTableName"] = "table1";
$tdatatable1[".nSecOptions"] = 0;
$tdatatable1[".recsPerRowPrint"] = 1;
$tdatatable1[".mainTableOwnerID"] = "";
$tdatatable1[".moveNext"] = 1;
$tdatatable1[".entityType"] = 0;

$tdatatable1[".strOriginalTableName"] = "table1";

	



$tdatatable1[".showAddInPopup"] = false;

$tdatatable1[".showEditInPopup"] = false;

$tdatatable1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatable1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatable1[".fieldsForRegister"] = array();

$tdatatable1[".listAjax"] = false;

	$tdatatable1[".audit"] = false;

	$tdatatable1[".locking"] = false;

$tdatatable1[".edit"] = true;
$tdatatable1[".afterEditAction"] = 1;
$tdatatable1[".closePopupAfterEdit"] = 1;
$tdatatable1[".afterEditActionDetTable"] = "";

$tdatatable1[".add"] = true;
$tdatatable1[".afterAddAction"] = 1;
$tdatatable1[".closePopupAfterAdd"] = 1;
$tdatatable1[".afterAddActionDetTable"] = "";

$tdatatable1[".list"] = true;

$tdatatable1[".inlineEdit"] = true;


$tdatatable1[".reorderRecordsByHeader"] = true;


$tdatatable1[".exportFormatting"] = 2;
$tdatatable1[".exportDelimiter"] = ",";
		
$tdatatable1[".inlineAdd"] = true;
$tdatatable1[".view"] = true;

$tdatatable1[".import"] = true;

$tdatatable1[".exportTo"] = true;

$tdatatable1[".printFriendly"] = true;

$tdatatable1[".delete"] = true;

$tdatatable1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatable1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatable1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatable1[".searchSaving"] = false;
//

$tdatatable1[".showSearchPanel"] = true;
		$tdatatable1[".flexibleSearch"] = true;

$tdatatable1[".isUseAjaxSuggest"] = true;

$tdatatable1[".rowHighlite"] = true;





$tdatatable1[".ajaxCodeSnippetAdded"] = false;

$tdatatable1[".buttonsAdded"] = false;

$tdatatable1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatable1[".isUseTimeForSearch"] = false;



$tdatatable1[".badgeColor"] = "4682b4";


$tdatatable1[".allSearchFields"] = array();
$tdatatable1[".filterFields"] = array();
$tdatatable1[".requiredSearchFields"] = array();

$tdatatable1[".allSearchFields"][] = "TestDataID";
	$tdatatable1[".allSearchFields"][] = "TestCaseId";
	$tdatatable1[".allSearchFields"][] = "TestFile";
	

$tdatatable1[".googleLikeFields"] = array();
$tdatatable1[".googleLikeFields"][] = "TestDataID";
$tdatatable1[".googleLikeFields"][] = "TestCaseId";
$tdatatable1[".googleLikeFields"][] = "TestFile";


$tdatatable1[".advSearchFields"] = array();
$tdatatable1[".advSearchFields"][] = "TestDataID";
$tdatatable1[".advSearchFields"][] = "TestCaseId";
$tdatatable1[".advSearchFields"][] = "TestFile";

$tdatatable1[".tableType"] = "list";

$tdatatable1[".printerPageOrientation"] = 0;
$tdatatable1[".nPrinterPageScale"] = 100;

$tdatatable1[".nPrinterSplitRecords"] = 40;

$tdatatable1[".nPrinterPDFSplitRecords"] = 40;



$tdatatable1[".geocodingEnabled"] = false;





$tdatatable1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatable1[".pageSize"] = 20;

$tdatatable1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatable1[".strOrderBy"] = $tstrOrderBy;

$tdatatable1[".orderindexes"] = array();

$tdatatable1[".sqlHead"] = "SELECT TestDataID,  	TestCaseId,  	TestFile";
$tdatatable1[".sqlFrom"] = "FROM Table1";
$tdatatable1[".sqlWhereExpr"] = "";
$tdatatable1[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatable1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatable1[".arrGroupsPerPage"] = $arrGPP;

$tdatatable1[".highlightSearchResults"] = true;

$tableKeystable1 = array();
$tableKeystable1[] = "TestDataID";
$tdatatable1[".Keys"] = $tableKeystable1;

$tdatatable1[".listFields"] = array();
$tdatatable1[".listFields"][] = "TestDataID";
$tdatatable1[".listFields"][] = "TestCaseId";
$tdatatable1[".listFields"][] = "TestFile";

$tdatatable1[".hideMobileList"] = array();


$tdatatable1[".viewFields"] = array();
$tdatatable1[".viewFields"][] = "TestDataID";
$tdatatable1[".viewFields"][] = "TestCaseId";
$tdatatable1[".viewFields"][] = "TestFile";

$tdatatable1[".addFields"] = array();
$tdatatable1[".addFields"][] = "TestDataID";
$tdatatable1[".addFields"][] = "TestCaseId";
$tdatatable1[".addFields"][] = "TestFile";

$tdatatable1[".masterListFields"] = array();
$tdatatable1[".masterListFields"][] = "TestDataID";
$tdatatable1[".masterListFields"][] = "TestCaseId";
$tdatatable1[".masterListFields"][] = "TestFile";

$tdatatable1[".inlineAddFields"] = array();
$tdatatable1[".inlineAddFields"][] = "TestDataID";
$tdatatable1[".inlineAddFields"][] = "TestCaseId";
$tdatatable1[".inlineAddFields"][] = "TestFile";

$tdatatable1[".editFields"] = array();
$tdatatable1[".editFields"][] = "TestDataID";
$tdatatable1[".editFields"][] = "TestCaseId";
$tdatatable1[".editFields"][] = "TestFile";

$tdatatable1[".inlineEditFields"] = array();
$tdatatable1[".inlineEditFields"][] = "TestDataID";
$tdatatable1[".inlineEditFields"][] = "TestCaseId";
$tdatatable1[".inlineEditFields"][] = "TestFile";

$tdatatable1[".updateSelectedFields"] = array();
$tdatatable1[".updateSelectedFields"][] = "TestDataID";
$tdatatable1[".updateSelectedFields"][] = "TestCaseId";
$tdatatable1[".updateSelectedFields"][] = "TestFile";


$tdatatable1[".exportFields"] = array();
$tdatatable1[".exportFields"][] = "TestDataID";
$tdatatable1[".exportFields"][] = "TestCaseId";
$tdatatable1[".exportFields"][] = "TestFile";

$tdatatable1[".importFields"] = array();
$tdatatable1[".importFields"][] = "TestDataID";
$tdatatable1[".importFields"][] = "TestCaseId";
$tdatatable1[".importFields"][] = "TestFile";

$tdatatable1[".printFields"] = array();
$tdatatable1[".printFields"][] = "TestDataID";
$tdatatable1[".printFields"][] = "TestCaseId";
$tdatatable1[".printFields"][] = "TestFile";


//	TestDataID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TestDataID";
	$fdata["GoodName"] = "TestDataID";
	$fdata["ownerTable"] = "table1";
	$fdata["Label"] = GetFieldLabel("table1","TestDataID");
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

		$fdata["strField"] = "TestDataID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestDataID";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatatable1["TestDataID"] = $fdata;
//	TestCaseId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TestCaseId";
	$fdata["GoodName"] = "TestCaseId";
	$fdata["ownerTable"] = "table1";
	$fdata["Label"] = GetFieldLabel("table1","TestCaseId");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatable1["TestCaseId"] = $fdata;
//	TestFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TestFile";
	$fdata["GoodName"] = "TestFile";
	$fdata["ownerTable"] = "table1";
	$fdata["Label"] = GetFieldLabel("table1","TestFile");
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

		$fdata["strField"] = "TestFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TestFile";

	
	
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




	$tdatatable1["TestFile"] = $fdata;


$tables_data["table1"]=&$tdatatable1;
$field_labels["table1"] = &$fieldLabelstable1;
$fieldToolTips["table1"] = &$fieldToolTipstable1;
$placeHolders["table1"] = &$placeHolderstable1;
$page_titles["table1"] = &$pageTitlestable1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["table1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["table1"] = array();


	
				$strOriginalDetailsTable="testcases";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="testcases";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "testcases";
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
					$masterTablesData["table1"][0] = $masterParams;
				$masterTablesData["table1"][0]["masterKeys"] = array();
	$masterTablesData["table1"][0]["masterKeys"][]="TestCaseId";
				$masterTablesData["table1"][0]["detailKeys"] = array();
	$masterTablesData["table1"][0]["detailKeys"][]="TestCaseId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_table1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TestDataID,  	TestCaseId,  	TestFile";
$proto0["m_strFrom"] = "FROM Table1";
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
	"m_strName" => "TestDataID",
	"m_strTable" => "table1",
	"m_srcTableName" => "table1"
));

$proto6["m_sql"] = "TestDataID";
$proto6["m_srcTableName"] = "table1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TestCaseId",
	"m_strTable" => "table1",
	"m_srcTableName" => "table1"
));

$proto8["m_sql"] = "TestCaseId";
$proto8["m_srcTableName"] = "table1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TestFile",
	"m_strTable" => "table1",
	"m_srcTableName" => "table1"
));

$proto10["m_sql"] = "TestFile";
$proto10["m_srcTableName"] = "table1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "table1";
$proto13["m_srcTableName"] = "table1";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TestDataID";
$proto13["m_columns"][] = "TestCaseId";
$proto13["m_columns"][] = "TestFile";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "Table1";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "table1";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="table1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_table1 = createSqlQuery_table1();


	
		;

			

$tdatatable1[".sqlquery"] = $queryData_table1;

$tableEvents["table1"] = new eventsBase;
$tdatatable1[".hasEvents"] = false;

?>