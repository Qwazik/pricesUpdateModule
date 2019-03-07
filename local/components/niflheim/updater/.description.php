<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arComponentDescription = array(
    "NAME" => GetMessage("COMP_NAME"),
    "DESCRIPTION" => GetMessage("COMP_DESCR"),
    "ICON" => "/images/icon.gif",
    "PATH" => array(
        "ID" => "content",
        "CHILD" => array(
            "ID" => "niflheim",
            "NAME" => "Niflheim"
        )
    ),
    "CACHE_PATH" => "Y",
);
?>