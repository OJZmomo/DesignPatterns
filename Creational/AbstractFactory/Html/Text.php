<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 13:54
 */
namespace DesignPatterns\Creational\AbstractFactory\Html;
use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

class Text extends BaseText
{
    public function render()
    {
        // TODO: Implement render() method.
        return '<div>'.htmlspecialchars($this->text).'</div>';
    }
}