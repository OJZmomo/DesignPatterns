<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 11:54
 */
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Picture implements MediaInterface
{
    protected $path;
    protected $name;

    public function __construct($path,$name='')
    {
        $this->name = $name;
        $this->path = $path;
    }
}