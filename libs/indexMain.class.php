<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/23
 * Time: 1:34
 */
class indexMain{
    function __construct(){
        $smarty=new Smarty();
        $smarty->setTemplateDir("template/index");
        $smarty->setCompileDir("compile/index");
        $this->smarty=$smarty;
    }
}