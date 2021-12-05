<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["Fornecedores"] ) ) {
			$lookupTableLinks["Fornecedores"] = array();
		}
		if( !isset( $lookupTableLinks["Fornecedores"]["materiais.Codfornecedor"] )) {
			$lookupTableLinks["Fornecedores"]["materiais.Codfornecedor"] = array();
		}
		$lookupTableLinks["Fornecedores"]["materiais.Codfornecedor"]["edit"] = array("table" => "Materiais", "field" => "Codfornecedor", "page" => "edit");
		if( !isset( $lookupTableLinks["Categorias"] ) ) {
			$lookupTableLinks["Categorias"] = array();
		}
		if( !isset( $lookupTableLinks["Categorias"]["materiais.CodCategoria"] )) {
			$lookupTableLinks["Categorias"]["materiais.CodCategoria"] = array();
		}
		$lookupTableLinks["Categorias"]["materiais.CodCategoria"]["edit"] = array("table" => "Materiais", "field" => "CodCategoria", "page" => "edit");
		if( !isset( $lookupTableLinks["Fornecedores"] ) ) {
			$lookupTableLinks["Fornecedores"] = array();
		}
		if( !isset( $lookupTableLinks["Fornecedores"]["materiais.CodPontoColeta"] )) {
			$lookupTableLinks["Fornecedores"]["materiais.CodPontoColeta"] = array();
		}
		$lookupTableLinks["Fornecedores"]["materiais.CodPontoColeta"]["edit"] = array("table" => "Materiais", "field" => "CodPontoColeta", "page" => "edit");
		if( !isset( $lookupTableLinks["Fornecedores"] ) ) {
			$lookupTableLinks["Fornecedores"] = array();
		}
		if( !isset( $lookupTableLinks["Fornecedores"]["ponto_de_entrada.CodFornecedor"] )) {
			$lookupTableLinks["Fornecedores"]["ponto_de_entrada.CodFornecedor"] = array();
		}
		$lookupTableLinks["Fornecedores"]["ponto_de_entrada.CodFornecedor"]["edit"] = array("table" => "Ponto de Entrada", "field" => "CodFornecedor", "page" => "edit");
		if( !isset( $lookupTableLinks["Categorias"] ) ) {
			$lookupTableLinks["Categorias"] = array();
		}
		if( !isset( $lookupTableLinks["Categorias"]["ponto_de_entrada.CodCategoria"] )) {
			$lookupTableLinks["Categorias"]["ponto_de_entrada.CodCategoria"] = array();
		}
		$lookupTableLinks["Categorias"]["ponto_de_entrada.CodCategoria"]["edit"] = array("table" => "Ponto de Entrada", "field" => "CodCategoria", "page" => "edit");
}

?>