<?php
/**
 * Created by PhpStorm.
 * User: jianzhang.ou
 * Date: 2020/9/28
 * Time: 11:41
 */
namespace DesignPatterns\Creational\AbstractFactory;

/**
 *JsonFactory类
 *
 * JsonFactory 是用于创建 JSON 组件的工厂
 */
class JsonFactory extends AbstractFactory{
    public function createPicture($path, $name = '')
    {
        // TODO: Implement createPicture() method.
        return new Json\Picture($path, $name);
    }

    public function createText($content)
    {
        // TODO: Implement createText() method.
        return new Json\Text($content);
    }
}