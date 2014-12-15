<?
Class Sortable extends CModule
{
    var $MODULE_ID = "sortable";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;

    function Sortable()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/sortable/install/version.php");
        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }
        $this->MODULE_NAME = "Каталог с сортировкой";
        $this->MODULE_DESCRIPTION = "Стандартный Битрикс.Каталог с функцией сортировки элементов простым перетаскиванием мыши.";
    }

    function DoInstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        // Install events
        RegisterModuleDependences("iblock","OnAfterIBlockElementUpdate","dull","cMainDull","onBeforeElementUpdateHandler");
        RegisterModule($this->MODULE_ID);
        $this->InstallFiles();
        $APPLICATION->IncludeAdminFile("Установка модуля Каталог с сортировкой", $DOCUMENT_ROOT."/bitrix/modules/sortable/install/step.php");
        return true;
    }

    function DoUninstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        UnRegisterModuleDependences("iblock","OnAfterIBlockElementUpdate","dull","cMainDull","onBeforeElementUpdateHandler");
        UnRegisterModule($this->MODULE_ID);
        $this->UnInstallFiles();
        $APPLICATION->IncludeAdminFile("Деинсталляция модуля Каталог с сортировкой", $DOCUMENT_ROOT."/bitrix/modules/sortable/install/unstep.php");
        return true;
    }

    function InstallFiles($arParams = array())
    {
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/sortable/install/components", $_SERVER["DOCUMENT_ROOT"]."/bitrix/components/ampersand/", true, true);
        return true;
    }
    function UnInstallFiles()
    {
        DeleteDirFilesEx("/bitrix/components/ampersand/catalog_sortable/");
        return true;
    }

}