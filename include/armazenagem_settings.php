<?php
$tdataarmazenagem = array();
$tdataarmazenagem[".searchableFields"] = array();
$tdataarmazenagem[".ShortName"] = "armazenagem";
$tdataarmazenagem[".OwnerID"] = "";
$tdataarmazenagem[".OriginalTable"] = "Armazenagem";


$tdataarmazenagem[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataarmazenagem[".originalPagesByType"] = $tdataarmazenagem[".pagesByType"];
$tdataarmazenagem[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataarmazenagem[".originalPages"] = $tdataarmazenagem[".pages"];
$tdataarmazenagem[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataarmazenagem[".originalDefaultPages"] = $tdataarmazenagem[".defaultPages"];

//	field labels
$fieldLabelsarmazenagem = array();
$fieldToolTipsarmazenagem = array();
$pageTitlesarmazenagem = array();
$placeHoldersarmazenagem = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsarmazenagem["Portuguese(Brazil)"] = array();
	$fieldToolTipsarmazenagem["Portuguese(Brazil)"] = array();
	$placeHoldersarmazenagem["Portuguese(Brazil)"] = array();
	$pageTitlesarmazenagem["Portuguese(Brazil)"] = array();
	$fieldLabelsarmazenagem["Portuguese(Brazil)"]["Codigo"] = "Codigo";
	$fieldToolTipsarmazenagem["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersarmazenagem["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsarmazenagem["Portuguese(Brazil)"]["Quantidade_de_Espaco"] = "Quantidade de Espaco";
	$fieldToolTipsarmazenagem["Portuguese(Brazil)"]["Quantidade_de_Espaco"] = "";
	$placeHoldersarmazenagem["Portuguese(Brazil)"]["Quantidade_de_Espaco"] = "";
	if (count($fieldToolTipsarmazenagem["Portuguese(Brazil)"]))
		$tdataarmazenagem[".isUseToolTips"] = true;
}


	$tdataarmazenagem[".NCSearch"] = true;



$tdataarmazenagem[".shortTableName"] = "armazenagem";
$tdataarmazenagem[".nSecOptions"] = 0;

$tdataarmazenagem[".mainTableOwnerID"] = "";
$tdataarmazenagem[".entityType"] = 0;
$tdataarmazenagem[".connId"] = "ProjetodeDesenvolvimentodeSist";


$tdataarmazenagem[".strOriginalTableName"] = "Armazenagem";

	



$tdataarmazenagem[".showAddInPopup"] = false;

$tdataarmazenagem[".showEditInPopup"] = false;

$tdataarmazenagem[".showViewInPopup"] = false;

$tdataarmazenagem[".listAjax"] = false;
//	temporary
//$tdataarmazenagem[".listAjax"] = false;

	$tdataarmazenagem[".audit"] = false;

	$tdataarmazenagem[".locking"] = false;


$pages = $tdataarmazenagem[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataarmazenagem[".edit"] = true;
	$tdataarmazenagem[".afterEditAction"] = 1;
	$tdataarmazenagem[".closePopupAfterEdit"] = 1;
	$tdataarmazenagem[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataarmazenagem[".add"] = true;
$tdataarmazenagem[".afterAddAction"] = 1;
$tdataarmazenagem[".closePopupAfterAdd"] = 1;
$tdataarmazenagem[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataarmazenagem[".list"] = true;
}



$tdataarmazenagem[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataarmazenagem[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataarmazenagem[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataarmazenagem[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataarmazenagem[".printFriendly"] = true;
}



$tdataarmazenagem[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataarmazenagem[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataarmazenagem[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataarmazenagem[".isUseAjaxSuggest"] = true;

$tdataarmazenagem[".rowHighlite"] = true;





$tdataarmazenagem[".ajaxCodeSnippetAdded"] = false;

$tdataarmazenagem[".buttonsAdded"] = false;

$tdataarmazenagem[".addPageEvents"] = false;

// use timepicker for search panel
$tdataarmazenagem[".isUseTimeForSearch"] = false;


$tdataarmazenagem[".badgeColor"] = "9ACD32";


$tdataarmazenagem[".allSearchFields"] = array();
$tdataarmazenagem[".filterFields"] = array();
$tdataarmazenagem[".requiredSearchFields"] = array();

$tdataarmazenagem[".googleLikeFields"] = array();
$tdataarmazenagem[".googleLikeFields"][] = "Codigo";
$tdataarmazenagem[".googleLikeFields"][] = "Quantidade de Espaco";



$tdataarmazenagem[".tableType"] = "list";

$tdataarmazenagem[".printerPageOrientation"] = 0;
$tdataarmazenagem[".nPrinterPageScale"] = 100;

$tdataarmazenagem[".nPrinterSplitRecords"] = 40;

$tdataarmazenagem[".geocodingEnabled"] = false;










$tdataarmazenagem[".pageSize"] = 20;

$tdataarmazenagem[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataarmazenagem[".strOrderBy"] = $tstrOrderBy;

$tdataarmazenagem[".orderindexes"] = array();


$tdataarmazenagem[".sqlHead"] = "SELECT Codigo,  	\"Quantidade de Espaco\"";
$tdataarmazenagem[".sqlFrom"] = "FROM Armazenagem";
$tdataarmazenagem[".sqlWhereExpr"] = "";
$tdataarmazenagem[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataarmazenagem[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataarmazenagem[".arrGroupsPerPage"] = $arrGPP;

$tdataarmazenagem[".highlightSearchResults"] = true;

$tableKeysarmazenagem = array();
$tableKeysarmazenagem[] = "Codigo";
$tdataarmazenagem[".Keys"] = $tableKeysarmazenagem;


$tdataarmazenagem[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Armazenagem";
	$fdata["Label"] = GetFieldLabel("Armazenagem","Codigo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Codigo";

		$fdata["sourceSingle"] = "Codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataarmazenagem["Codigo"] = $fdata;
		$tdataarmazenagem[".searchableFields"][] = "Codigo";
//	Quantidade de Espaco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Quantidade de Espaco";
	$fdata["GoodName"] = "Quantidade_de_Espaco";
	$fdata["ownerTable"] = "Armazenagem";
	$fdata["Label"] = GetFieldLabel("Armazenagem","Quantidade_de_Espaco");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Quantidade de Espaco";

		$fdata["sourceSingle"] = "Quantidade de Espaco";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Quantidade de Espaco\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataarmazenagem["Quantidade de Espaco"] = $fdata;
		$tdataarmazenagem[".searchableFields"][] = "Quantidade de Espaco";


$tables_data["Armazenagem"]=&$tdataarmazenagem;
$field_labels["Armazenagem"] = &$fieldLabelsarmazenagem;
$fieldToolTips["Armazenagem"] = &$fieldToolTipsarmazenagem;
$placeHolders["Armazenagem"] = &$placeHoldersarmazenagem;
$page_titles["Armazenagem"] = &$pageTitlesarmazenagem;


changeTextControlsToDate( "Armazenagem" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Armazenagem"] = array();
//	Ponto de Entrada
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Ponto de Entrada";
		$detailsParam["dOriginalTable"] = "Ponto de Entrada";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ponto_de_entrada";
	$detailsParam["dCaptionTable"] = GetTableCaption("Ponto_de_Entrada");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Armazenagem"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Armazenagem"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Armazenagem"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Armazenagem"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Armazenagem"][$dIndex]["detailKeys"][]="Codigo";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Armazenagem"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_armazenagem()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	\"Quantidade de Espaco\"";
$proto0["m_strFrom"] = "FROM Armazenagem";
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
	"m_strName" => "Codigo",
	"m_strTable" => "Armazenagem",
	"m_srcTableName" => "Armazenagem"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Armazenagem";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade de Espaco",
	"m_strTable" => "Armazenagem",
	"m_srcTableName" => "Armazenagem"
));

$proto8["m_sql"] = "\"Quantidade de Espaco\"";
$proto8["m_srcTableName"] = "Armazenagem";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Armazenagem";
$proto11["m_srcTableName"] = "Armazenagem";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Quantidade de Espaco";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Armazenagem";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Armazenagem";
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
$proto0["m_srcTableName"]="Armazenagem";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_armazenagem = createSqlQuery_armazenagem();


	
		;

		

$tdataarmazenagem[".sqlquery"] = $queryData_armazenagem;



$tdataarmazenagem[".hasEvents"] = false;

?>