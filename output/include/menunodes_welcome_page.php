<?php

function getMenuNodes_welcome_page($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["welcome_page"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "table1";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "#"."4682b4";
	
	$menuNode["title"] = "Table1";

	$menuNode["comments"] = "Change this text on the Welcome page in the Visual Editor.";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
}
?>
