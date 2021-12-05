<?php
$tdataponto_de_entrada = array();
$tdataponto_de_entrada[".searchableFields"] = array();
$tdataponto_de_entrada[".ShortName"] = "ponto_de_entrada";
$tdataponto_de_entrada[".OwnerID"] = "";
$tdataponto_de_entrada[".OriginalTable"] = "Ponto de Entrada";


$tdataponto_de_entrada[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataponto_de_entrada[".originalPagesByType"] = $tdataponto_de_entrada[".pagesByType"];
$tdataponto_de_entrada[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataponto_de_entrada[".originalPages"] = $tdataponto_de_entrada[".pages"];
$tdataponto_de_entrada[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataponto_de_entrada[".originalDefaultPages"] = $tdataponto_de_entrada[".defaultPages"];

//	field labels
$fieldLabelsponto_de_entrada = array();
$fieldToolTipsponto_de_entrada = array();
$pageTitlesponto_de_entrada = array();
$placeHoldersponto_de_entrada = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"] = array();
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"] = array();
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"] = array();
	$pageTitlesponto_de_entrada["Portuguese(Brazil)"] = array();
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Codigo"] = "Codigo";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Data_de_Entrada"] = "Data de Entrada";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Data_de_Entrada"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Data_de_Entrada"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Material"] = "Material";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Material"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Material"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Codigo_de_Rastreamento"] = "Codigo de Rastreamento";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Codigo_de_Rastreamento"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Codigo_de_Rastreamento"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Codmaterial"] = "Codigo do material";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Codmaterial"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Codmaterial"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Tempo_de_Armazenagem"] = "Tempo de Armazenagem";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Tempo_de_Armazenagem"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Tempo_de_Armazenagem"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Data_de_Saida"] = "Data de Saida";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Data_de_Saida"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Data_de_Saida"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["CodFornecedor"] = "Fornecedor";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["CodFornecedor"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["CodFornecedor"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["CodCategoria"] = "Categoria";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["CodCategoria"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["CodCategoria"] = "";
	$fieldLabelsponto_de_entrada["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersponto_de_entrada["Portuguese(Brazil)"]["Quantidade"] = "";
	if (count($fieldToolTipsponto_de_entrada["Portuguese(Brazil)"]))
		$tdataponto_de_entrada[".isUseToolTips"] = true;
}


	$tdataponto_de_entrada[".NCSearch"] = true;



$tdataponto_de_entrada[".shortTableName"] = "ponto_de_entrada";
$tdataponto_de_entrada[".nSecOptions"] = 0;

$tdataponto_de_entrada[".mainTableOwnerID"] = "";
$tdataponto_de_entrada[".entityType"] = 0;
$tdataponto_de_entrada[".connId"] = "ProjetodeDesenvolvimentodeSist";


$tdataponto_de_entrada[".strOriginalTableName"] = "Ponto de Entrada";

	



$tdataponto_de_entrada[".showAddInPopup"] = false;

$tdataponto_de_entrada[".showEditInPopup"] = false;

$tdataponto_de_entrada[".showViewInPopup"] = false;

$tdataponto_de_entrada[".listAjax"] = false;
//	temporary
//$tdataponto_de_entrada[".listAjax"] = false;

	$tdataponto_de_entrada[".audit"] = false;

	$tdataponto_de_entrada[".locking"] = false;


$pages = $tdataponto_de_entrada[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataponto_de_entrada[".edit"] = true;
	$tdataponto_de_entrada[".afterEditAction"] = 1;
	$tdataponto_de_entrada[".closePopupAfterEdit"] = 1;
	$tdataponto_de_entrada[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataponto_de_entrada[".add"] = true;
$tdataponto_de_entrada[".afterAddAction"] = 1;
$tdataponto_de_entrada[".closePopupAfterAdd"] = 1;
$tdataponto_de_entrada[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataponto_de_entrada[".list"] = true;
}



$tdataponto_de_entrada[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataponto_de_entrada[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataponto_de_entrada[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataponto_de_entrada[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataponto_de_entrada[".printFriendly"] = true;
}



$tdataponto_de_entrada[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataponto_de_entrada[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataponto_de_entrada[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataponto_de_entrada[".isUseAjaxSuggest"] = true;

$tdataponto_de_entrada[".rowHighlite"] = true;





$tdataponto_de_entrada[".ajaxCodeSnippetAdded"] = false;

$tdataponto_de_entrada[".buttonsAdded"] = false;

$tdataponto_de_entrada[".addPageEvents"] = false;

// use timepicker for search panel
$tdataponto_de_entrada[".isUseTimeForSearch"] = false;


$tdataponto_de_entrada[".badgeColor"] = "db7093";


$tdataponto_de_entrada[".allSearchFields"] = array();
$tdataponto_de_entrada[".filterFields"] = array();
$tdataponto_de_entrada[".requiredSearchFields"] = array();

$tdataponto_de_entrada[".googleLikeFields"] = array();
$tdataponto_de_entrada[".googleLikeFields"][] = "Codigo";
$tdataponto_de_entrada[".googleLikeFields"][] = "Data de Entrada";
$tdataponto_de_entrada[".googleLikeFields"][] = "Material";
$tdataponto_de_entrada[".googleLikeFields"][] = "Codigo de Rastreamento";
$tdataponto_de_entrada[".googleLikeFields"][] = "Codmaterial";
$tdataponto_de_entrada[".googleLikeFields"][] = "Data de Saida";
$tdataponto_de_entrada[".googleLikeFields"][] = "Tempo de Armazenagem";
$tdataponto_de_entrada[".googleLikeFields"][] = "CodFornecedor";
$tdataponto_de_entrada[".googleLikeFields"][] = "CodCategoria";
$tdataponto_de_entrada[".googleLikeFields"][] = "Quantidade";



$tdataponto_de_entrada[".tableType"] = "list";

$tdataponto_de_entrada[".printerPageOrientation"] = 0;
$tdataponto_de_entrada[".nPrinterPageScale"] = 100;

$tdataponto_de_entrada[".nPrinterSplitRecords"] = 40;

$tdataponto_de_entrada[".geocodingEnabled"] = false;










$tdataponto_de_entrada[".pageSize"] = 20;

$tdataponto_de_entrada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataponto_de_entrada[".strOrderBy"] = $tstrOrderBy;

$tdataponto_de_entrada[".orderindexes"] = array();


$tdataponto_de_entrada[".sqlHead"] = "SELECT Codigo,  	\"Data de Entrada\",  	Material,  	\"Codigo de Rastreamento\",  	Codmaterial,  	\"Data de Saida\",  	\"Tempo de Armazenagem\",  	CodFornecedor,  	CodCategoria,  	Quantidade";
$tdataponto_de_entrada[".sqlFrom"] = "FROM \"Ponto de Entrada\"";
$tdataponto_de_entrada[".sqlWhereExpr"] = "";
$tdataponto_de_entrada[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataponto_de_entrada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataponto_de_entrada[".arrGroupsPerPage"] = $arrGPP;

$tdataponto_de_entrada[".highlightSearchResults"] = true;

$tableKeysponto_de_entrada = array();
$tableKeysponto_de_entrada[] = "Codigo";
$tdataponto_de_entrada[".Keys"] = $tableKeysponto_de_entrada;


$tdataponto_de_entrada[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Codigo");
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


	$tdataponto_de_entrada["Codigo"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Codigo";
//	Data de Entrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Data de Entrada";
	$fdata["GoodName"] = "Data_de_Entrada";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Data_de_Entrada");
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


	$tdataponto_de_entrada["Data de Entrada"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Data de Entrada";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Material");
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


	$tdataponto_de_entrada["Material"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Material";
//	Codigo de Rastreamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Codigo de Rastreamento";
	$fdata["GoodName"] = "Codigo_de_Rastreamento";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Codigo_de_Rastreamento");
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


	$tdataponto_de_entrada["Codigo de Rastreamento"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Codigo de Rastreamento";
//	Codmaterial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codmaterial";
	$fdata["GoodName"] = "Codmaterial";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Codmaterial");
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


	$tdataponto_de_entrada["Codmaterial"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Codmaterial";
//	Data de Saida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Data de Saida";
	$fdata["GoodName"] = "Data_de_Saida";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Data_de_Saida");
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


	$tdataponto_de_entrada["Data de Saida"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Data de Saida";
//	Tempo de Armazenagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tempo de Armazenagem";
	$fdata["GoodName"] = "Tempo_de_Armazenagem";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Tempo_de_Armazenagem");
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


	$tdataponto_de_entrada["Tempo de Armazenagem"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Tempo de Armazenagem";
//	CodFornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CodFornecedor";
	$fdata["GoodName"] = "CodFornecedor";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","CodFornecedor");
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


	$tdataponto_de_entrada["CodFornecedor"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "CodFornecedor";
//	CodCategoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CodCategoria";
	$fdata["GoodName"] = "CodCategoria";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","CodCategoria");
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


	$tdataponto_de_entrada["CodCategoria"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "CodCategoria";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "Ponto de Entrada";
	$fdata["Label"] = GetFieldLabel("Ponto_de_Entrada","Quantidade");
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


	$tdataponto_de_entrada["Quantidade"] = $fdata;
		$tdataponto_de_entrada[".searchableFields"][] = "Quantidade";


$tables_data["Ponto de Entrada"]=&$tdataponto_de_entrada;
$field_labels["Ponto_de_Entrada"] = &$fieldLabelsponto_de_entrada;
$fieldToolTips["Ponto_de_Entrada"] = &$fieldToolTipsponto_de_entrada;
$placeHolders["Ponto_de_Entrada"] = &$placeHoldersponto_de_entrada;
$page_titles["Ponto_de_Entrada"] = &$pageTitlesponto_de_entrada;


changeTextControlsToDate( "Ponto de Entrada" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Ponto de Entrada"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Ponto de Entrada"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Ponto de Entrada"][0] = $masterParams;
				$masterTablesData["Ponto de Entrada"][0]["masterKeys"] = array();
	$masterTablesData["Ponto de Entrada"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Ponto de Entrada"][0]["detailKeys"] = array();
	$masterTablesData["Ponto de Entrada"][0]["detailKeys"][]="CodFornecedor";
		
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
					$masterTablesData["Ponto de Entrada"][1] = $masterParams;
				$masterTablesData["Ponto de Entrada"][1]["masterKeys"] = array();
	$masterTablesData["Ponto de Entrada"][1]["masterKeys"][]="Codigo";
				$masterTablesData["Ponto de Entrada"][1]["detailKeys"] = array();
	$masterTablesData["Ponto de Entrada"][1]["detailKeys"][]="CodCategoria";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Armazenagem";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Armazenagem";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "armazenagem";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Ponto de Entrada"][2] = $masterParams;
				$masterTablesData["Ponto de Entrada"][2]["masterKeys"] = array();
	$masterTablesData["Ponto de Entrada"][2]["masterKeys"][]="Codigo";
				$masterTablesData["Ponto de Entrada"][2]["detailKeys"] = array();
	$masterTablesData["Ponto de Entrada"][2]["detailKeys"][]="Codigo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ponto_de_entrada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	\"Data de Entrada\",  	Material,  	\"Codigo de Rastreamento\",  	Codmaterial,  	\"Data de Saida\",  	\"Tempo de Armazenagem\",  	CodFornecedor,  	CodCategoria,  	Quantidade";
$proto0["m_strFrom"] = "FROM \"Ponto de Entrada\"";
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
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Ponto de Entrada";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de Entrada",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto8["m_sql"] = "\"Data de Entrada\"";
$proto8["m_srcTableName"] = "Ponto de Entrada";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "Ponto de Entrada";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo de Rastreamento",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto12["m_sql"] = "\"Codigo de Rastreamento\"";
$proto12["m_srcTableName"] = "Ponto de Entrada";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codmaterial",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto14["m_sql"] = "Codmaterial";
$proto14["m_srcTableName"] = "Ponto de Entrada";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Data de Saida",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto16["m_sql"] = "\"Data de Saida\"";
$proto16["m_srcTableName"] = "Ponto de Entrada";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tempo de Armazenagem",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto18["m_sql"] = "\"Tempo de Armazenagem\"";
$proto18["m_srcTableName"] = "Ponto de Entrada";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CodFornecedor",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto20["m_sql"] = "CodFornecedor";
$proto20["m_srcTableName"] = "Ponto de Entrada";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CodCategoria",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto22["m_sql"] = "CodCategoria";
$proto22["m_srcTableName"] = "Ponto de Entrada";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "Ponto de Entrada",
	"m_srcTableName" => "Ponto de Entrada"
));

$proto24["m_sql"] = "Quantidade";
$proto24["m_srcTableName"] = "Ponto de Entrada";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "Ponto de Entrada";
$proto27["m_srcTableName"] = "Ponto de Entrada";
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
$proto26["m_sql"] = "\"Ponto de Entrada\"";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Ponto de Entrada";
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
$proto0["m_srcTableName"]="Ponto de Entrada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ponto_de_entrada = createSqlQuery_ponto_de_entrada();


	
		;

										

$tdataponto_de_entrada[".sqlquery"] = $queryData_ponto_de_entrada;



$tdataponto_de_entrada[".hasEvents"] = false;

?>