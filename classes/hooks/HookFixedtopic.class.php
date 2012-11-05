<?php
/**
 * Класс хука для модуля вывода областей знаний.
 *
 * @author  Андрей Воронов <andreyv@gladcode.ru>
 * @copyrights  Copyright &copy; 2012, Андрей Воронов<br>
 *              Является частью плагина FixedTopic<br>
 * @version 1.0 от 05.11.12 11:12    - Создание файла.<br>
 *
 * @method bool Viewer_Fetch Получение шаблона
 * @method bool Viewer_Assign Добавление переменной в шаблон
 * @method ModuleTopic_EntityTopic Topic_GetTopicById Получение сущности топика
 *
 * @package plugins/gladcode
 */
class PluginFixedtopic_HookFixedtopic extends Hook {

    /**
     * Регистрация хуков плагина.
     */
    public function RegisterHook() {
        if (Router::GetAction() == "index") {
            $this->AddHook('template_fixed_topic', 'ShowFixedTopic');
        }
    }

    public function ShowFixedTopic() {
        $oTopic = $this->Topic_GetTopicById(Config::Get('plugin.fixedtopic.fixed_topic_id'));
        $this->Viewer_Assign('oTopic', $oTopic);
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'fixed_topic.tpl');
    }
}