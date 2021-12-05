<?php
$dalTableArmazenagem = array();
$dalTableArmazenagem["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableArmazenagem["Quantidade de Espaco"] = array("type"=>3,"varname"=>"Quantidade_de_Espaco", "name" => "Quantidade de Espaco", "autoInc" => "0");
$dalTableArmazenagem["Codigo"]["key"]=true;

$dal_info["ProjetodeDesenvolvimentodeSist__Armazenagem"] = &$dalTableArmazenagem;
?>