{hook run='fixed_topic'}
{if count($aTopics)>0}
    {add_block group='toolbar' name='toolbar_topic.tpl' iCountTopic=count($aTopics)}

    {$cut = false}
    {foreach from=$aTopics item=oTopic}
        {if !$cut && ((($smarty.now|date_format:"%Y%m%d"-0)-($oTopic->getDateAdd()|replace:"-":""-0))>7)}
        ------------------Недельной давности----------------------
            {$cut = true}
        {/if}
        {if $LS->Topic_IsAllowTopicType($oTopic->getType())}
            {assign var="sTopicTemplateName" value="topic_`$oTopic->getType()`.tpl"}
        {include file=$sTopicTemplateName bTopicList=true}
        {/if}
    {/foreach}

{include file='paging.tpl' aPaging=$aPaging}
    {else}
    {$aLang.blog_no_topic}
{/if}