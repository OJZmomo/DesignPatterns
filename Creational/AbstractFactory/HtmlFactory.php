<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 11:45
 */
namespace DesignPatterns\Creational\AbstractFactory;

/**
 *HtmlFactory类
 *
 * HtmlFactory 是用于创建 JSON 组件的工厂
 */
class HtmlFactory extends AbstractFactory
{
    public function createPicture($path, $name = '')
    {
        // TODO: Implement createPicture() method.
        return new Html\Picture($path,$name);
    }

    public function createText($content)
    {
        // TODO: Implement createText() method.
        return new Html\Text($content);
    }
}