{block name="TEMPLATE_CSS"}
{literal}
        <style type="text/css">
.alt {margin-bottom:30px;}
.alt2 {padding:50px 10px; text-align:center; background: linear-gradient(135deg, rgba(30,75,112,1) 0%, rgba(56,106,151,1) 64%, rgba(71,124,173,1) 100%); color: #fff; text-align: center}
.alt2 h5 {    font-size: 22px; text-transform: uppercase; font-weight: 600;}
 </style>
    {/literal}
{/block}

{block name="TEMPLATE_JS"}

{/block}

{block name="CONTAINER"}

    <div class="container">
	
	 <div class="page-header">
	 <h1>Redes y Vidrieras </h1>
	 </div>
	 
	{* {assign var="flyers" value=Web::flyers($LIMIT = 9, $destacados = FALSE, $categoria = FALSE)}*}

	 	{* {assign var="flyers" value=Web::flyers(9, False, False)}*}

	
	    {if is_array($flyers) && count($flyers)}
	<div class="row">
        {foreach from=$flyers item=cat}
		{*<li>{var_dump($cat)} </li>*}
            {if is_array($cat.flyers) && count($cat.flyers)}
							
					<div class="col-xs-12 col-sm-6 col-md-4 alt" >
						 <a href="{$URL}/flyers/{$cat.cat}">
						 <div class="list-group-item alt2">
							<h5 class="list-group-item-heading clearfix">{$cat.nombre}</h5>
						</div>
						</a>
					</div>			
				
            {/if}

        {/foreach}
		</div>
    {/if}
	
	
	</div>

{/block}