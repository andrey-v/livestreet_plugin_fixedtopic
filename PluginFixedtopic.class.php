<?php
/**
 * Основной класс плагина
 *
 * @author  Андрей Г. Воронов <andreyv@gladcode.ru>
 * @copyrights  Copyright &copy; 2012, Андрей Г. Воронов<br>
 *              Является частью плагина FixedTopic<br>
 * @version 1.0 от 05.11.12 10:40    - Создание основного класса плагина.<br>
 *
 * @package plugins/fixedtopic
 */
if (!class_exists('Plugin')) {
    die('You are bad hacker, try again, baby!');
}

/**
 * Сам класс плагина
 *
 */
class PluginFixedtopic extends Plugin {

    /** @var array Делегирование шаблонов */
    protected $aDelegates = array(
        'template' => array(
            'topic_list.tpl',
        )
    );

}