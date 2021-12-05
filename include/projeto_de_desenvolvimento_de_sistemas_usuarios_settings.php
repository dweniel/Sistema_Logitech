<?php
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios = array();
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"] = array();
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".ShortName"] = "projeto_de_desenvolvimento_de_sistemas_usuarios";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".OwnerID"] = "";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".OriginalTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";


$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".originalPagesByType"] = $tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".pagesByType"];
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".originalPages"] = $tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".pages"];
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".originalDefaultPages"] = $tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".defaultPages"];

//	field labels
$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios = array();
$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios = array();
$pageTitlesprojeto_de_desenvolvimento_de_sistemas_usuarios = array();
$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"] = array();
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"] = array();
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"] = array();
	$pageTitlesprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"] = array();
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["username"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["username"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["password"] = "Password";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["password"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["fullname"] = "Fullname";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["groupid"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["active"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "";
	$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]["ext_security_id"] = "";
	if (count($fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios["Portuguese(Brazil)"]))
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".isUseToolTips"] = true;
}


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".NCSearch"] = true;



$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".shortTableName"] = "projeto_de_desenvolvimento_de_sistemas_usuarios";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".nSecOptions"] = 0;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".mainTableOwnerID"] = "";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".entityType"] = 0;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".connId"] = "ProjetodeDesenvolvimentodeSist";


$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".strOriginalTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";

	



$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".showAddInPopup"] = false;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".showEditInPopup"] = false;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".showViewInPopup"] = false;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".listAjax"] = false;
//	temporary
//$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".listAjax"] = false;

	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".audit"] = false;

	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".locking"] = false;


$pages = $tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".edit"] = true;
	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".afterEditAction"] = 1;
	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".closePopupAfterEdit"] = 1;
	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".add"] = true;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".afterAddAction"] = 1;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".closePopupAfterAdd"] = 1;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".list"] = true;
}



$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".printFriendly"] = true;
}



$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".isUseAjaxSuggest"] = true;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".rowHighlite"] = true;





$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".buttonsAdded"] = false;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".isUseTimeForSearch"] = false;


$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".badgeColor"] = "E8926F";


$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".allSearchFields"] = array();
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".filterFields"] = array();
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".requiredSearchFields"] = array();

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"] = array();
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "ID";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "username";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "password";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "email";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "fullname";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "groupid";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "active";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".googleLikeFields"][] = "ext_security_id";



$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".tableType"] = "list";

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".printerPageOrientation"] = 0;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".nPrinterPageScale"] = 100;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".nPrinterSplitRecords"] = 40;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".geocodingEnabled"] = false;










$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".pageSize"] = 20;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".orderindexes"] = array();


$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".sqlFrom"] = "FROM \"Projeto de Desenvolvimento de Sistemas_Usuarios\"";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".sqlWhereExpr"] = "";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".highlightSearchResults"] = true;

$tableKeysprojeto_de_desenvolvimento_de_sistemas_usuarios = array();
$tableKeysprojeto_de_desenvolvimento_de_sistemas_usuarios[] = "ID";
$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".Keys"] = $tableKeysprojeto_de_desenvolvimento_de_sistemas_usuarios;


$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["ID"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","username");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["username"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","password");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["password"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","email");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["email"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","fullname");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["fullname"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","groupid");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["groupid"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["active"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
	$fdata["Label"] = GetFieldLabel("Projeto_de_Desenvolvimento_de_Sistemas_Usuarios","ext_security_id");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios["ext_security_id"] = $fdata;
		$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".searchableFields"][] = "ext_security_id";


$tables_data["Projeto de Desenvolvimento de Sistemas_Usuarios"]=&$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios;
$field_labels["Projeto_de_Desenvolvimento_de_Sistemas_Usuarios"] = &$fieldLabelsprojeto_de_desenvolvimento_de_sistemas_usuarios;
$fieldToolTips["Projeto_de_Desenvolvimento_de_Sistemas_Usuarios"] = &$fieldToolTipsprojeto_de_desenvolvimento_de_sistemas_usuarios;
$placeHolders["Projeto_de_Desenvolvimento_de_Sistemas_Usuarios"] = &$placeHoldersprojeto_de_desenvolvimento_de_sistemas_usuarios;
$page_titles["Projeto_de_Desenvolvimento_de_Sistemas_Usuarios"] = &$pageTitlesprojeto_de_desenvolvimento_de_sistemas_usuarios;


changeTextControlsToDate( "Projeto de Desenvolvimento de Sistemas_Usuarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Projeto de Desenvolvimento de Sistemas_Usuarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Projeto de Desenvolvimento de Sistemas_Usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_projeto_de_desenvolvimento_de_sistemas_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM \"Projeto de Desenvolvimento de Sistemas_Usuarios\"";
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
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "Projeto de Desenvolvimento de Sistemas_Usuarios",
	"m_srcTableName" => "Projeto de Desenvolvimento de Sistemas_Usuarios"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto23["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"Projeto de Desenvolvimento de Sistemas_Usuarios\"";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Projeto de Desenvolvimento de Sistemas_Usuarios";
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
$proto0["m_srcTableName"]="Projeto de Desenvolvimento de Sistemas_Usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_projeto_de_desenvolvimento_de_sistemas_usuarios = createSqlQuery_projeto_de_desenvolvimento_de_sistemas_usuarios();


	
		;

								

$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".sqlquery"] = $queryData_projeto_de_desenvolvimento_de_sistemas_usuarios;



$tdataprojeto_de_desenvolvimento_de_sistemas_usuarios[".hasEvents"] = false;

?>