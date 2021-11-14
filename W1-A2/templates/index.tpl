{config_load file=test.conf section="setup"}
{include file="header.tpl" title=Smarty-template}

<PRE>

{if #bold#}<b>{/if}

Title: {#title#|capitalize}

{if #bold#}</b>{/if}

{$Carlito}

{$news}







{include file="footer.tpl"}
