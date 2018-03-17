<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/21
 * Time: 17:04
 */
class adminMain{
    function __construct(){
        $smarty=new Smarty();
        $smarty->setTemplateDir("template/admin");
        $smarty->setCompileDir("compile/admin");
        $this->smarty=$smarty;
    }
}