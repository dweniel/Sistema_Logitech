<?php
$dalTableMateriais = array();
$dalTableMateriais["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableMateriais["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableMateriais["Valor"] = array("type"=>5,"varname"=>"Valor", "name" => "Valor", "autoInc" => "0");
$dalTableMateriais["Quantidade"] = array("type"=>3,"varname"=>"Quantidade", "name" => "Quantidade", "autoInc" => "0");
$dalTableMateriais["Codfornecedor"] = array("type"=>3,"varname"=>"Codfornecedor", "name" => "Codfornecedor", "autoInc" => "0");
$dalTableMateriais["CodCategoria"] = array("type"=>3,"varname"=>"CodCategoria", "name" => "CodCategoria", "autoInc" => "0");
$dalTableMateriais["Descricao"] = array("type"=>202,"varname"=>"Descricao", "name" => "Descricao", "autoInc" => "0");
$dalTableMateriais["CodPontoColeta"] = array("type"=>135,"varname"=>"CodPontoColeta", "name" => "CodPontoColeta", "autoInc" => "0");
$dalTableMateriais["Codigo"]["key"]=true;

$dal_info["ProjetodeDesenvolvimentodeSist__Materiais"] = &$dalTableMateriais;
?>