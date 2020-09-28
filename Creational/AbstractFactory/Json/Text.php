<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 12:03
 */
namespace DesignPatterns\Creational\AbstractFactory\Json;
use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        // TODO: Implement render() method.
        return json_encode(array('content'=>$this->text));
    }
}