<?php
$dalTablePonto_de_Entrada = array();
$dalTablePonto_de_Entrada["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTablePonto_de_Entrada["Data de Entrada"] = array("type"=>135,"varname"=>"Data_de_Entrada", "name" => "Data de Entrada", "autoInc" => "0");
$dalTablePonto_de_Entrada["Material"] = array("type"=>202,"varname"=>"Material", "name" => "Material", "autoInc" => "0");
$dalTablePonto_de_Entrada["Codigo de Rastreamento"] = array("type"=>202,"varname"=>"Codigo_de_Rastreamento", "name" => "Codigo de Rastreamento", "autoInc" => "0");
$dalTablePonto_de_Entrada["Codmaterial"] = array("type"=>3,"varname"=>"Codmaterial", "name" => "Codmaterial", "autoInc" => "0");
$dalTablePonto_de_Entrada["Data de Saida"] = array("type"=>135,"varname"=>"Data_de_Saida", "name" => "Data de Saida", "autoInc" => "0");
$dalTablePonto_de_Entrada["Tempo de Armazenagem"] = array("type"=>135,"varname"=>"Tempo_de_Armazenagem", "name" => "Tempo de Armazenagem", "autoInc" => "0");
$dalTablePonto_de_Entrada["CodFornecedor"] = array("type"=>3,"varname"=>"CodFornecedor", "name" => "CodFornecedor", "autoInc" => "0");
$dalTablePonto_de_Entrada["CodCategoria"] = array("type"=>3,"varname"=>"CodCategoria", "name" => "CodCategoria", "autoInc" => "0");
$dalTablePonto_de_Entrada["Quantidade"] = array("type"=>3,"varname"=>"Quantidade", "name" => "Quantidade", "autoInc" => "0");
$dalTablePonto_de_Entrada["Codigo"]["key"]=true;

$dal_info["ProjetodeDesenvolvimentodeSist__Ponto_de_Entrada"] = &$dalTablePonto_de_Entrada;
?>