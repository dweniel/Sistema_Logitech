<?php
$dalTableCategorias = array();
$dalTableCategorias["Codigo"] = array("type"=>3,"varname"=>"Codigo", "name" => "Codigo", "autoInc" => "1");
$dalTableCategorias["Nome"] = array("type"=>202,"varname"=>"Nome", "name" => "Nome", "autoInc" => "0");
$dalTableCategorias["Codigo"]["key"]=true;

$dal_info["ProjetodeDesenvolvimentodeSist__Categorias"] = &$dalTableCategorias;
?>