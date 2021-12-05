<?php

function getMenuNodes_adminarea($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["adminarea"] = array();
		//Admin Area menu items
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permissões";
		$menuNode["href"] = GetTableLink("admin_rights", "list");
		$menuNodesObject->menuNodes["adminarea"][] = $menuNode;
}
	
?>
