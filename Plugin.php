<?php

/**
 * Bmob后端云 - 数据库插件
 * @package Bmob
 * @author 权那他
 * @version 1.0
 */
class Bmob_Plugin implements Typecho_Plugin_Interface
{
    // 激活插件
    public static function activate()
    {
        return _t('插件已经激活，需先配置插件信息！');
    }

    // 禁用插件
    public static function deactivate()
    {
        return _t('插件已被禁用');
    }


    // 插件配置面板
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        $APPID = new Typecho_Widget_Helper_Form_Element_Textarea('APPID', array('value'), null, _t('Application ID'), _t('SDK初始化必须用到此密钥。'));
        $form->addInput($APPID);

        $RESTKEY = new Typecho_Widget_Helper_Form_Element_Text('RESTKEY', array('value'), null, _t('REST API Ke'), _t('REST API请求中HTTP头部信息必须附带密钥之一。'));
        $form->addInput($RESTKEY);
    }

    public static function findDir($name)
    {
        return __DIR__ . "/lib/" . $name;
    }

    public static function getAppId()
    {
        return Typecho_Widget::widget('Widget_Options')->plugin('Bmob')->APPID;
    }

    public static function getRestKey()
    {
        return Typecho_Widget::widget('Widget_Options')->plugin('Bmob')->RESTKEY;
    }

    // 个人用户配置面板
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
    }

    public static function form($action = NULL)
    {
    }
}
