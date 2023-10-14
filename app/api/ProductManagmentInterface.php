<?php

namespace App\api;

use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

 interface ProductManagmentInterface
 {
    public function getXML();

    public function saveXmlData();
 }