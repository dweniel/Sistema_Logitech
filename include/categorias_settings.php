<?php
$tdatacategorias = array();
$tdatacategorias[".searchableFields"] = array();
$tdatacategorias[".ShortName"] = "categorias";
$tdatacategorias[".OwnerID"] = "";
$tdatacategorias[".OriginalTable"] = "Categorias";


$tdatacategorias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacategorias[".originalPagesByType"] = $tdatacategorias[".pagesByType"];
$tdatacategorias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacategorias[".originalPages"] = $tdatacategorias[".pages"];
$tdatacategorias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacategorias[".originalDefaultPages"] = $tdatacategorias[".defaultPages"];

//	field labels
$fieldLabelscategorias = array();
$fieldToolTipscategorias = array();
$pageTitlescategorias = array();
$placeHolderscategorias = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscategorias["Portuguese(Brazil)"] = array();
	$fieldToolTipscategorias["Portuguese(Brazil)"] = array();
	$placeHolderscategorias["Portuguese(Brazil)"] = array();
	$pageTitlescategorias["Portuguese(Brazil)"] = array();
	$fieldLabelscategorias["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHolderscategorias["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelscategorias["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipscategorias["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderscategorias["Portuguese(Brazil)"]["Nome"] = "";
	if (count($fieldToolTipscategorias["Portuguese(Brazil)"]))
		$tdatacategorias[".isUseToolTips"] = true;
}


	$tdatacategorias[".NCSearch"] = true;



$tdatacategorias[".shortTableName"] = "categorias";
$tdatacategorias[".nSecOptions"] = 0;

$tdatacategorias[".mainTableOwnerID"] = "";
$tdatacategorias[".entityType"] = 0;
$tdatacategorias[".connId"] = "ProjetodeDesenvolvimentodeSist";


$tdatacategorias[".strOriginalTableName"] = "Categorias";

	



$tdatacategorias[".showAddInPopup"] = false;

$tdatacategorias[".showEditInPopup"] = false;

$tdatacategorias[".showViewInPopup"] = false;

$tdatacategorias[".listAjax"] = false;
//	temporary
//$tdatacategorias[".listAjax"] = false;

	$tdatacategorias[".audit"] = false;

	$tdatacategorias[".locking"] = false;


$pages = $tdatacategorias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacategorias[".edit"] = true;
	$tdatacategorias[".afterEditAction"] = 0;
	$tdatacategorias[".closePopupAfterEdit"] = 1;
	$tdatacategorias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacategorias[".add"] = true;
$tdatacategorias[".afterAddAction"] = 0;
$tdatacategorias[".closePopupAfterAdd"] = 1;
$tdatacategorias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacategorias[".list"] = true;
}



$tdatacategorias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacategorias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacategorias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacategorias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacategorias[".printFriendly"] = true;
}



$tdatacategorias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacategorias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacategorias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacategorias[".isUseAjaxSuggest"] = true;

$tdatacategorias[".rowHighlite"] = true;





$tdatacategorias[".ajaxCodeSnippetAdded"] = false;

$tdatacategorias[".buttonsAdded"] = false;

$tdatacategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias[".isUseTimeForSearch"] = false;


$tdatacategorias[".badgeColor"] = "6DA5C8";


$tdatacategorias[".allSearchFields"] = array();
$tdatacategorias[".filterFields"] = array();
$tdatacategorias[".requiredSearchFields"] = array();

$tdatacategorias[".googleLikeFields"] = array();
$tdatacategorias[".googleLikeFields"][] = "Codigo";
$tdatacategorias[".googleLikeFields"][] = "Nome";



$tdatacategorias[".tableType"] = "list";

$tdatacategorias[".printerPageOrientation"] = 0;
$tdatacategorias[".nPrinterPageScale"] = 100;

$tdatacategorias[".nPrinterSplitRecords"] = 40;

$tdatacategorias[".geocodingEnabled"] = false;




$tdatacategorias[".isDisplayLoading"] = true;






$tdatacategorias[".pageSize"] = 20;

$tdatacategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacategorias[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias[".orderindexes"] = array();


$tdatacategorias[".sqlHead"] = "SELECT Codigo,  	Nome";
$tdatacategorias[".sqlFrom"] = "FROM Categorias";
$tdatacategorias[".sqlWhereExpr"] = "";
$tdatacategorias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias[".highlightSearchResults"] = true;

$tableKeyscategorias = array();
$tableKeyscategorias[] = "Codigo";
$tdatacategorias[".Keys"] = $tableKeyscategorias;


$tdatacategorias[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Categorias";
	$fdata["Label"] = GetFieldLabel("Categorias","Codigo");
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


	$tdatacategorias["Codigo"] = $fdata;
		$tdatacategorias[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Categorias";
	$fdata["Label"] = GetFieldLabel("Categorias","Nome");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Nome";

		$fdata["sourceSingle"] = "Nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nome";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacategorias["Nome"] = $fdata;
		$tdatacategorias[".searchableFields"][] = "Nome";


$tables_data["Categorias"]=&$tdatacategorias;
$field_labels["Categorias"] = &$fieldLabelscategorias;
$fieldToolTips["Categorias"] = &$fieldToolTipscategorias;
$placeHolders["Categorias"] = &$placeHolderscategorias;
$page_titles["Categorias"] = &$pageTitlescategorias;


changeTextControlsToDate( "Categorias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Categorias"] = array();
//	Materiais
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Materiais";
		$detailsParam["dOriginalTable"] = "Materiais";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "materiais";
	$detailsParam["dCaptionTable"] = GetTableCaption("Materiais");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Categorias"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Categorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Categorias"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Categorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Categorias"][$dIndex]["detailKeys"][]="CodCategoria";
//	Ponto de Entrada
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Ponto de Entrada";
		$detailsParam["dOriginalTable"] = "Ponto de Entrada";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ponto_de_entrada";
	$detailsParam["dCaptionTable"] = GetTableCaption("Ponto_de_Entrada");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Categorias"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Categorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Categorias"][$dIndex]["masterKeys"][]="Codigo";

				$detailsTablesData["Categorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Categorias"][$dIndex]["detailKeys"][]="CodCategoria";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Categorias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome";
$proto0["m_strFrom"] = "FROM Categorias";
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
	"m_strTable" => "Categorias",
	"m_srcTableName" => "Categorias"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Categorias",
	"m_srcTableName" => "Categorias"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Categorias";
$proto11["m_srcTableName"] = "Categorias";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Codigo";
$proto11["m_columns"][] = "Nome";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Categorias";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Categorias";
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
$proto0["m_srcTableName"]="Categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias = createSqlQuery_categorias();


	
		;

		

$tdatacategorias[".sqlquery"] = $queryData_categorias;



$tdatacategorias[".hasEvents"] = false;

?>