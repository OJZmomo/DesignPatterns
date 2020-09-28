<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 12:11
 */
namespace DesignPatterns\Creational\AbstractFactory\Html;
use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        // TODO: Implement render() method.
        return sprintf('<img src="%s" title="%s"/>',$this->path,$this->name);
    }
}