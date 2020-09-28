<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 12:00
 */
namespace DesignPatterns\Creational\AbstractFactory\Json;
use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

class Picture extends BasePicture
{
    public function render()
    {
        // TODO: Implement render() method.
        return json_encode(array('title'=>$this->name,'path'=>$this->path));
    }
}
