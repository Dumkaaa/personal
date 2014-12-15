<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/dbconn.php");
mysql_connect($DBHost, $DBLogin, $DBPassword) or die ($error . ' Ошибка подключение к базе данных - '.mysql_error());
mysql_select_db($DBName) or die ($error . 'Ошибка доступа к базе данных - '.mysql_error());
mysql_query('SET NAMES utf8');
global $USER;
if (!is_object($USER)) $USER = new CUser;
if ($USER->IsAdmin()) {
    if ($_POST['update'] == "update") {
        BXClearCache(true, "/".SITE_ID."/bitrix/catalog.section/");
        if(!empty($_POST['ID']))
        {
            for($i = 0; $i < count($_POST['ID']); $i++)
            {
                if($_POST["ID"][$i] != "")
                {
                    $id = $_POST["ID"][$i];
                    $sort = $_POST["SORT"][$i];
                    $query1  = "SELECT IBLOCK_SECTION_ID FROM b_iblock_element WHERE ID = '$id'";
                    $result = mysql_query($query1) or die ($error . 'Ошибка - '.mysql_error());
                    $row = mysql_fetch_array($result);
                    $sect = $row['IBLOCK_SECTION_ID'];
                    $query = "UPDATE b_iblock_element SET SORT = '$i' WHERE ID = '$id' AND IBLOCK_SECTION_ID = '$sect'";
                    mysql_query($query) or die($error . 'Ошибка');

                }
            }
        }
    }
}