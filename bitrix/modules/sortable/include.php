<?php
CModule::IncludeModule("sortable");
global $DBType;

$arClasses=array(
    'cMainsortable'=>'classes/general/cMainSortable.php'
);

CModule::AddAutoloadClasses("Sortable1",$arClasses);
