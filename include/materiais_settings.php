<?php
$tdatamateriais = array();
$tdatamateriais[".searchableFields"] = array();
$tdatamateriais[".ShortName"] = "materiais";
$tdatamateriais[".OwnerID"] = "";
$tdatamateriais[".OriginalTable"] = "Materiais";


$tdatamateriais[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamateriais[".originalPagesByType"] = $tdatamateriais[".pagesByType"];
$tdatamateriais[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamateriais[".originalPages"] = $tdatamateriais[".pages"];
$tdatamateriais[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamateriais[".originalDefaultPages"] = $tdatamateriais[".defaultPages"];

//	field labels
$fieldLabelsmateriais = array();
$fieldToolTipsmateriais = array();
$pageTitlesmateriais = array();
$placeHoldersmateriais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsmateriais["Portuguese(Brazil)"] = array();
	$fieldToolTipsmateriais["Portuguese(Brazil)"] = array();
	$placeHoldersmateriais["Portuguese(Brazil)"] = array();
	$pageTitlesmateriais["Portuguese(Brazil)"] = array();
	$fieldLabelsmateriais["Portuguese(Brazil)"]["Codigo"] = "Código";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["Codigo"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["Codigo"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["Quantidade"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["Codfornecedor"] = "Fornecedor";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["Codfornecedor"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["CodCategoria"] = "Categoria";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["CodCategoria"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["CodCategoria"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["Descricao"] = "Descricao";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["Descricao"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["Descricao"] = "";
	$fieldLabelsmateriais["Portuguese(Brazil)"]["CodPontoColeta"] = "Ponto de Coleta";
	$fieldToolTipsmateriais["Portuguese(Brazil)"]["CodPontoColeta"] = "";
	$placeHoldersmateriais["Portuguese(Brazil)"]["CodPontoColeta"] = "";
	if (count($fieldToolTipsmateriais["Portuguese(Brazil)"]))
		$tdatamateriais[".isUseToolTips"] = true;
}


	$tdatamateriais[".NCSearch"] = true;



$tdatamateriais[".shortTableName"] = "materiais";
$tdatamateriais[".nSecOptions"] = 0;

$tdatamateriais[".mainTableOwnerID"] = "";
$tdatamateriais[".entityType"] = 0;
$tdatamateriais[".connId"] = "ProjetodeDesenvolvimentodeSist";


$tdatamateriais[".strOriginalTableName"] = "Materiais";

	



$tdatamateriais[".showAddInPopup"] = false;

$tdatamateriais[".showEditInPopup"] = false;

$tdatamateriais[".showViewInPopup"] = false;

$tdatamateriais[".listAjax"] = false;
//	temporary
//$tdatamateriais[".listAjax"] = false;

	$tdatamateriais[".audit"] = false;

	$tdatamateriais[".locking"] = false;


$pages = $tdatamateriais[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamateriais[".edit"] = true;
	$tdatamateriais[".afterEditAction"] = 0;
	$tdatamateriais[".closePopupAfterEdit"] = 1;
	$tdatamateriais[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatamateriais[".add"] = true;
$tdatamateriais[".afterAddAction"] = 0;
$tdatamateriais[".closePopupAfterAdd"] = 1;
$tdatamateriais[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamateriais[".list"] = true;
}



$tdatamateriais[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamateriais[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamateriais[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamateriais[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamateriais[".printFriendly"] = true;
}



$tdatamateriais[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamateriais[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamateriais[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamateriais[".isUseAjaxSuggest"] = true;

$tdatamateriais[".rowHighlite"] = true;





$tdatamateriais[".ajaxCodeSnippetAdded"] = false;

$tdatamateriais[".buttonsAdded"] = false;

$tdatamateriais[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamateriais[".isUseTimeForSearch"] = false;


$tdatamateriais[".badgeColor"] = "cfae83";


$tdatamateriais[".allSearchFields"] = array();
$tdatamateriais[".filterFields"] = array();
$tdatamateriais[".requiredSearchFields"] = array();

$tdatamateriais[".googleLikeFields"] = array();
$tdatamateriais[".googleLikeFields"][] = "Codigo";
$tdatamateriais[".googleLikeFields"][] = "Nome";
$tdatamateriais[".googleLikeFields"][] = "Valor";
$tdatamateriais[".googleLikeFields"][] = "Quantidade";
$tdatamateriais[".googleLikeFields"][] = "Codfornecedor";
$tdatamateriais[".googleLikeFields"][] = "CodCategoria";
$tdatamateriais[".googleLikeFields"][] = "Descricao";
$tdatamateriais[".googleLikeFields"][] = "CodPontoColeta";



$tdatamateriais[".tableType"] = "list";

$tdatamateriais[".printerPageOrientation"] = 0;
$tdatamateriais[".nPrinterPageScale"] = 100;

$tdatamateriais[".nPrinterSplitRecords"] = 40;

$tdatamateriais[".geocodingEnabled"] = false;




$tdatamateriais[".isDisplayLoading"] = true;






$tdatamateriais[".pageSize"] = 20;

$tdatamateriais[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamateriais[".strOrderBy"] = $tstrOrderBy;

$tdatamateriais[".orderindexes"] = array();


$tdatamateriais[".sqlHead"] = "SELECT Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor,  	CodCategoria,  	Descricao,  	CodPontoColeta";
$tdatamateriais[".sqlFrom"] = "FROM Materiais";
$tdatamateriais[".sqlWhereExpr"] = "";
$tdatamateriais[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamateriais[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamateriais[".arrGroupsPerPage"] = $arrGPP;

$tdatamateriais[".highlightSearchResults"] = true;

$tableKeysmateriais = array();
$tableKeysmateriais[] = "Codigo";
$tdatamateriais[".Keys"] = $tableKeysmateriais;


$tdatamateriais[".hideMobileList"] = array();




//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Codigo");
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


	$tdatamateriais["Codigo"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Codigo";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Nome");
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatamateriais["Nome"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Nome";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatamateriais["Valor"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Valor";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Quantidade");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=12";

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


	$tdatamateriais["Quantidade"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Quantidade";
//	Codfornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Codfornecedor";
	$fdata["GoodName"] = "Codfornecedor";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Codfornecedor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Codfornecedor";

		$fdata["sourceSingle"] = "Codfornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codfornecedor";

	
	
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


	$tdatamateriais["Codfornecedor"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Codfornecedor";
//	CodCategoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CodCategoria";
	$fdata["GoodName"] = "CodCategoria";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","CodCategoria");
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


	$tdatamateriais["CodCategoria"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "CodCategoria";
//	Descricao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Descricao";
	$fdata["GoodName"] = "Descricao";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","Descricao");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "Descricao";

		$fdata["sourceSingle"] = "Descricao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descricao";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamateriais["Descricao"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "Descricao";
//	CodPontoColeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CodPontoColeta";
	$fdata["GoodName"] = "CodPontoColeta";
	$fdata["ownerTable"] = "Materiais";
	$fdata["Label"] = GetFieldLabel("Materiais","CodPontoColeta");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CodPontoColeta";

		$fdata["sourceSingle"] = "CodPontoColeta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodPontoColeta";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatamateriais["CodPontoColeta"] = $fdata;
		$tdatamateriais[".searchableFields"][] = "CodPontoColeta";


$tables_data["Materiais"]=&$tdatamateriais;
$field_labels["Materiais"] = &$fieldLabelsmateriais;
$fieldToolTips["Materiais"] = &$fieldToolTipsmateriais;
$placeHolders["Materiais"] = &$placeHoldersmateriais;
$page_titles["Materiais"] = &$pageTitlesmateriais;


changeTextControlsToDate( "Materiais" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Materiais"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Materiais"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Fornecedores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Fornecedores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "fornecedores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Materiais"][0] = $masterParams;
				$masterTablesData["Materiais"][0]["masterKeys"] = array();
	$masterTablesData["Materiais"][0]["masterKeys"][]="Codigo";
				$masterTablesData["Materiais"][0]["detailKeys"] = array();
	$masterTablesData["Materiais"][0]["detailKeys"][]="Codfornecedor";
		
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
					$masterTablesData["Materiais"][1] = $masterParams;
				$masterTablesData["Materiais"][1]["masterKeys"] = array();
	$masterTablesData["Materiais"][1]["masterKeys"][]="Codigo";
				$masterTablesData["Materiais"][1]["detailKeys"] = array();
	$masterTablesData["Materiais"][1]["detailKeys"][]="CodCategoria";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_materiais()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo,  	Nome,  	Valor,  	Quantidade,  	Codfornecedor,  	CodCategoria,  	Descricao,  	CodPontoColeta";
$proto0["m_strFrom"] = "FROM Materiais";
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
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto6["m_sql"] = "Codigo";
$proto6["m_srcTableName"] = "Materiais";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "Materiais";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "Materiais";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto12["m_sql"] = "Quantidade";
$proto12["m_srcTableName"] = "Materiais";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Codfornecedor",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto14["m_sql"] = "Codfornecedor";
$proto14["m_srcTableName"] = "Materiais";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CodCategoria",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto16["m_sql"] = "CodCategoria";
$proto16["m_srcTableName"] = "Materiais";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Descricao",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto18["m_sql"] = "Descricao";
$proto18["m_srcTableName"] = "Materiais";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CodPontoColeta",
	"m_strTable" => "Materiais",
	"m_srcTableName" => "Materiais"
));

$proto20["m_sql"] = "CodPontoColeta";
$proto20["m_srcTableName"] = "Materiais";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Materiais";
$proto23["m_srcTableName"] = "Materiais";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Codigo";
$proto23["m_columns"][] = "Nome";
$proto23["m_columns"][] = "Valor";
$proto23["m_columns"][] = "Quantidade";
$proto23["m_columns"][] = "Codfornecedor";
$proto23["m_columns"][] = "CodCategoria";
$proto23["m_columns"][] = "Descricao";
$proto23["m_columns"][] = "CodPontoColeta";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "Materiais";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Materiais";
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
$proto0["m_srcTableName"]="Materiais";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_materiais = createSqlQuery_materiais();


	
		;

								

$tdatamateriais[".sqlquery"] = $queryData_materiais;



$tdatamateriais[".hasEvents"] = false;

?>