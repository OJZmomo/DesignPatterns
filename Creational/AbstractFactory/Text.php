<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 11:57
 */
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text implements MediaInterface
{
    protected  $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}