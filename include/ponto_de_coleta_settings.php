<?php
$tdataponto_de_coleta = array();
$tdataponto_de_coleta[".searchableFields"] = array();
$tdataponto_de_coleta[".ShortName"] = "ponto_de_coleta";
$tdataponto_de_coleta[".OwnerID"] = "";
$tdataponto_de_coleta[".OriginalTable"] = "Ponto de Coleta";


$tdataponto_de_coleta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataponto_de_coleta[".originalPagesByType"] = $tdataponto_de_coleta[".pagesByType"];
$tdataponto_de_coleta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataponto_de_coleta[".originalPages"] = $tdataponto_de_coleta[".pages"];
$tdataponto_de_coleta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataponto_de_coleta[".originalDefaultPages"] = $tdataponto_de_coleta[".defaultPages"];

//	field labels
$fieldLabelsponto_de_coleta = array();
$fieldToolTipsponto_de_coleta = array();
$pageTitlesponto_de_coleta = array();
$placeHoldersponto_de_coleta = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"] = array();
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"] = array();
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"] = array();
	$pageTitlesponto_de_coleta["Portuguese(Brazil)"] = array();
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Codigo"] = "Codigo";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Data_de_Entrada"] = "Data de Entrada";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Data_de_Entrada"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Data_de_Entrada"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Material"] = "Material";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Material"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Material"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Codigo_de_Rastreamento"] = "Codigo de Rastreamento";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Codigo_de_Rastreamento"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Codigo_de_Rastreamento"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Codmaterial"] = "Codigo do material";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Codmaterial"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Codmaterial"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Tempo_de_Armazenagem"] = "Tempo de Armazenagem";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Tempo_de_Armazenagem"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Tempo_de_Armazenagem"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Data_de_Saida"] = "Data de Saida";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Data_de_Saida"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Data_de_Saida"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["CodFornecedor"] = "Fornecedor";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["CodFornecedor"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["CodFornecedor"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["CodCategoria"] = "Categoria";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["CodCategoria"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["CodCategoria"] = "";
	$fieldLabelsponto_de_coleta["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersponto_de_coleta["Portuguese(Brazil)"]["Quantidade"] = "";
	if (count($fieldToolTipsponto_de_coleta["Portuguese(Brazil)"]))
		$tdataponto_de_coleta[".isUseToolTips"] = true;
}


	$tdataponto_de_coleta[".NCSearch"] = true;



$tdataponto_de_coleta[".shortTableName"] = "ponto_de_coleta";
$tdataponto_de_coleta[".nSecOptions"] = 0;

$tdataponto_de_coleta[".mainTableOwnerID"] = "";
$tdataponto_de_coleta[".entityType"] = 0;
$tdataponto_de_coleta[".connId"] = "ProjetodeDesenvolvimentodeSist";


$tdataponto_de_coleta[".strOriginalTableName"] = "Ponto de Coleta";

	



$tdataponto_de_coleta[".showAddInPopup"] = false;

$tdataponto_de_coleta[".showEditInPopup"] = false;

$tdataponto_de_coleta[".showViewInPopup"] = false;

$tdataponto_de_coleta[".listAjax"] = false;
//	temporary
//$tdataponto_de_coleta[".listAjax"] = false;

	$tdataponto_de_coleta[".audit"] = false;

	$tdataponto_de_coleta[".locking"] = false;


$pages = $tdataponto_de_coleta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataponto_de_coleta[".edit"] = true;
	$tdataponto_de_coleta[".afterEditAction"] = 1;
	$tdataponto_de_coleta[".closePopupAfterEdit"] = 1;
	$tdataponto_de_coleta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataponto_de_coleta[".add"] = true;
$tdataponto_de_coleta[".afterAddAction"] = 1;
$tdataponto_de_coleta[".closePopupAfterAdd"] = 1;
$tdataponto_de_coleta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataponto_de_coleta[".list"] = true;
}



$tdataponto_de_coleta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataponto_de_coleta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataponto_de_coleta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataponto_de_coleta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataponto_de_coleta[".printFriendly"] = true;
}



$tdataponto_de_coleta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataponto_de_coleta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataponto_de_coleta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataponto_de_coleta[".isUseAjaxSuggest"] = true;

$tdataponto_de_coleta[".rowHighlite"] = true;





$tdataponto_de_coleta[".ajaxCodeSnippetAdded"] = false;

$tdataponto_de_coleta[".buttonsAdded"] = false;

$tdataponto_de_coleta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataponto_de_coleta[".isUseTimeForSearch"] = false;


$tdataponto_de_coleta[".badgeColor"] = "db7093";


$tdataponto_de_coleta[".allSearchFields"] = array();
$tdataponto_de_coleta[".filterFields"] = array();
$tdataponto_de_coleta[".requiredSearchFields"] = array();

$tdataponto_de_coleta[".googleLikeFields"] = array();
$tdataponto_de_coleta[".googleLikeFields"][] = "Codigo";
$tdataponto_de_coleta[".googleLikeFields"][] = "Data de Entrada";
$tdataponto_de_coleta[".googleLikeFields"][] = "Material";
$tdataponto_de_coleta[".googleLikeFields"][] = "Codigo de Rastreamento";
$tdataponto_de_coleta[".googleLikeFields"][] = "Codmaterial";
$tdataponto_de_coleta[".googleLikeFields"][] = "Data de Saida";
$tdataponto_de_coleta[".googleLikeFields"][] = "Tempo de Armazenagem";
$tdataponto_de_coleta[".googleLikeFields"][] = "CodFornecedor";
$tdataponto_de_coleta[".googleLikeFields"][] = "CodCategoria";
$tdataponto_de_coleta[".googleLikeFields"][] = "Quantidade";



$tdataponto_de_coleta[".tableType"] = "list";

$tdataponto_de_coleta[".printerPageOrientation"] = 0;
$tdataponto_de_coleta[".nPrinterPageScale"] = 100;

$tdataponto_de_coleta[".nPrinterSplitRecords"] = 40;

$tdataponto_de_coleta[".geocodingEnabled"] = false;










$tdataponto_de_coleta[".pageSize"] = 20;

$tdataponto_de_coleta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataponto_de_coleta[".strOrderBy"] = $tstrOrderBy;

$tdataponto_de_coleta[".orderindexes"] = array();


$tdataponto_de_coleta[".sqlHead"] = "SELECT Codigo,  	\"Data de Entrada\",  	Material,  	\"Codigo de Rastreamento\",  	Codmaterial,  	\"Data de Saida\",  	\"Tempo de Armazenagem\",  	CodFornecedor,  	CodCategoria,  	Quantidade";
$tdataponto_de_coleta[".sqlFrom"] = "FROM \"Ponto de Coleta\"";
$tdataponto_de_coleta[".sqlWhereExpr"] = "";
$tdataponto_de_coleta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataponto_de_coleta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataponto_de_coleta[".arrGroupsPerPage"] = $arrGPP;

$tdataponto_de_coleta[".highlightSearchResults"] = true;

$tableKeysponto_de_coleta = array();
$tableKeysponto_de_coleta[] = "Codigo";
$tdataponto_de_coleta[".Keys"] = $tableKeysponto_de_coleta;


$tdataponto_de_coleta[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Codigo");
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


	$tdataponto_de_coleta["Codigo"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Codigo";
//	Data de Entrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Data de Entrada";
	$fdata["GoodName"] = "Data_de_Entrada";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Data_de_Entrada");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Data de Entrada";

		$fdata["sourceSingle"] = "Data de Entrada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data de Entrada\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataponto_de_coleta["Data de Entrada"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Data de Entrada";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Material");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Material";

		$fdata["sourceSingle"] = "Material";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Material";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataponto_de_coleta["Material"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Material";
//	Codigo de Rastreamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Codigo de Rastreamento";
	$fdata["GoodName"] = "Codigo_de_Rastreamento";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Codigo_de_Rastreamento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Codigo de Rastreamento";

		$fdata["sourceSingle"] = "Codigo de Rastreamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Codigo de Rastreamento\"";

	
	
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


	$tdataponto_de_coleta["Codigo de Rastreamento"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Codigo de Rastreamento";
//	Codmaterial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codmaterial";
	$fdata["GoodName"] = "Codmaterial";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Codmaterial");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codmaterial";

		$fdata["sourceSingle"] = "Codmaterial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codmaterial";

	
	
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


	$tdataponto_de_coleta["Codmaterial"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Codmaterial";
//	Data de Saida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Data de Saida";
	$fdata["GoodName"] = "Data_de_Saida";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Data_de_Saida");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Data de Saida";

		$fdata["sourceSingle"] = "Data de Saida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Data de Saida\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataponto_de_coleta["Data de Saida"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Data de Saida";
//	Tempo de Armazenagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tempo de Armazenagem";
	$fdata["GoodName"] = "Tempo_de_Armazenagem";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Tempo_de_Armazenagem");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Tempo de Armazenagem";

		$fdata["sourceSingle"] = "Tempo de Armazenagem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"Tempo de Armazenagem\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataponto_de_coleta["Tempo de Armazenagem"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Tempo de Armazenagem";
//	CodFornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CodFornecedor";
	$fdata["GoodName"] = "CodFornecedor";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","CodFornecedor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CodFornecedor";

		$fdata["sourceSingle"] = "CodFornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodFornecedor";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Fornecedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Codigo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataponto_de_coleta["CodFornecedor"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "CodFornecedor";
//	CodCategoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CodCategoria";
	$fdata["GoodName"] = "CodCategoria";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","CodCategoria");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CodCategoria";

		$fdata["sourceSingle"] = "CodCategoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodCategoria";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Codigo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataponto_de_coleta["CodCategoria"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "CodCategoria";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "Ponto de Coleta";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Coleta","Quantidade");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Quantidade";

		$fdata["sourceSingle"] = "Quantidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantidade";

	
	
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


	$tdataponto_de_coleta["Quantidade"] = $fdata;
		$tdataponto_de_coleta[".searchableFields"][] = "Quantidade";


$tables_data["Ponto de Coleta"]=&$tdataponto_de_coleta;
$field_labels["Ponto_de_Coleta"] = &$fieldLabelsponto_de_coleta;
$fieldToolTips["Ponto_de_Coleta"] = &$fieldToolTipsponto_de_coleta;
$placeHolders["Ponto_de_Coleta"] = &$placeHoldersponto_de_coleta;
$page_titles["Ponto_de_Coleta"] = &$pageTitlesponto_de_coleta;


changeTextControlsToDate( "Ponto de Coleta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Ponto de Coleta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Ponto de Coleta"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Ponto de Coleta"][0] = $masterParams;
				$masterTablesData["Ponto de Coleta"][0]["masterKeys"] = array();
	$masterTablesData["Ponto de Coleta"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Ponto de Coleta"][0]["detailKeys"] = array();
	$masterTablesData["Ponto de Coleta"][0]["detailKeys"][]="CodFornecedor";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Categorias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Categorias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "categorias";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Ponto de Coleta"][1] = $masterParams;
				$masterTablesData["Ponto de Coleta"][1]["masterKeys"] = array();
	$masterTablesData["Ponto de Coleta"][1]["masterKeys"][]="Codigo";
				$masterTablesData["Ponto de Coleta"][1]["detailKeys"] = array();
	$masterTablesData["Ponto de Coleta"][1]["detailKeys"][]="CodCategoria";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ponto_de_coleta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	\"Data de Entrada\",  	Material,  	\"Codigo de Rastreamento\",  	Codmaterial,  	\"Data de Saida\",  	\"Tempo de Armazenagem\",  	CodFornecedor,  	CodCategoria,  	Quantidade";
$proto0["m_strFrom"] = "FROM \"Ponto de Coleta\"";
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
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Ponto de Coleta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de Entrada",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto8["m_sql"] = "\"Data de Entrada\"";
$proto8["m_srcTableName"] = "Ponto de Coleta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "Ponto de Coleta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo de Rastreamento",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto12["m_sql"] = "\"Codigo de Rastreamento\"";
$proto12["m_srcTableName"] = "Ponto de Coleta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codmaterial",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto14["m_sql"] = "Codmaterial";
$proto14["m_srcTableName"] = "Ponto de Coleta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de Saida",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto16["m_sql"] = "\"Data de Saida\"";
$proto16["m_srcTableName"] = "Ponto de Coleta";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tempo de Armazenagem",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto18["m_sql"] = "\"Tempo de Armazenagem\"";
$proto18["m_srcTableName"] = "Ponto de Coleta";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CodFornecedor",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto20["m_sql"] = "CodFornecedor";
$proto20["m_srcTableName"] = "Ponto de Coleta";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CodCategoria",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto22["m_sql"] = "CodCategoria";
$proto22["m_srcTableName"] = "Ponto de Coleta";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "Ponto de Coleta",
	"m_srcTableName" => "Ponto de Coleta"
));

$proto24["m_sql"] = "Quantidade";
$proto24["m_srcTableName"] = "Ponto de Coleta";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "Ponto de Coleta";
$proto27["m_srcTableName"] = "Ponto de Coleta";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "Codigo";
$proto27["m_columns"][] = "Data de Entrada";
$proto27["m_columns"][] = "Material";
$proto27["m_columns"][] = "Codigo de Rastreamento";
$proto27["m_columns"][] = "Codmaterial";
$proto27["m_columns"][] = "Data de Saida";
$proto27["m_columns"][] = "Tempo de Armazenagem";
$proto27["m_columns"][] = "CodFornecedor";
$proto27["m_columns"][] = "CodCategoria";
$proto27["m_columns"][] = "Quantidade";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"Ponto de Coleta\"";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Ponto de Coleta";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Ponto de Coleta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ponto_de_coleta = createSqlQuery_ponto_de_coleta();


	
		;

										

$tdataponto_de_coleta[".sqlquery"] = $queryData_ponto_de_coleta;



$tdataponto_de_coleta[".hasEvents"] = false;

?>