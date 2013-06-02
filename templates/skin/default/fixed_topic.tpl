{assign var="bTopicList" value="true"}
{include file='topic_part_header.tpl'}

<div class="topic-content text">

    {$oTopic->getTextShort()}

    {if $oTopic->getTextShort()!=$oTopic->getText()}
        <br/>
        <a href="{$oTopic->getUrl()}#cut" title="{$aLang.topic_read_more}">
            {if $oTopic->getCutText()}
					{$oTopic->getCutText()}
				{else}
					{$aLang.topic_read_more}
				{/if}
        </a>
    {/if}

</div>

{include file='topic_part_footer.tpl'}
