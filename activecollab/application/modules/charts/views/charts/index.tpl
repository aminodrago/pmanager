{title}Charts{/title}

<h2 class="section_name"><span class="section_name_span">{lang}Chart settings{/lang}</span></h2>
<div class="section_container">

  {form action="" method=post class=focusFirstField}

  <div class="col_wide">

  <p>Chart detail level</p>

  {label for=chartsShowTickets}{checkbox_field name=charts[showtickets] checked=$charts_data.showtickets id=chartsShowTickets} {lang}Show tickets on chart{/lang}{/label}

  {label for=chartsShowChecklists}{checkbox_field name=charts[showchecklists] checked=$charts_data.showchecklists id=chartsShowChecklists} {lang}Show checklists on chart{/lang}{/label}

  {label for=chartsShowTasks}{checkbox_field name=charts[showtasks] checked=$charts_data.showtasks id=chartsShowTasks} {lang}Show tasks for tickets &amp; checklists{/lang}{/label}

  {label for=chartsShowToday}{checkbox_field name=charts[showtoday] checked=$charts_data.showtoday id=chartsShowToday} {lang}Mark today on chart{/lang}{/label}

  {label for=chartsShowHGrid}{checkbox_field name=charts[showhgrid] checked=$charts_data.showhgrid id=chartsShowHGrid} {lang}Display horizontal grid{/lang}{/label}

  </div>

  <div class="col_wide2">

  {wrap field=start_on}
    {label for=chartsStartOn}Start on{/label}
    {select_date name='charts[start_on]' value=$charts_data.start_on id=chartsStartOn}
  {/wrap}

  {wrap field=end_on}
    {label for=chartsEndOn}End on{/label}
    {select_date name='charts[end_on]' value=$charts_data.end_on id=chartsEndOn}
  {/wrap}

  </div>

    {wrap_buttons}
      {submit}Chart it!{/submit}
    {/wrap_buttons}
  {/form}

<div class="clear"></div>
</div>

<br />
{if isset($filename)} 
  {$maphtml}
  <h2 class="section_name"><span class="section_name_span">{lang}Generated chart{/lang}</span></h2>
  <div id="section_container">
  <img src="{$filename}" ismap="ismap" usemap="#{$mapname}" alt="Gannt Chart" />
  </div>
{/if}
