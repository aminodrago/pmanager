{title}Charts{/title}

<h2 class="section_name"><span class="section_name_span">{lang}Opciones de grafica{/lang}</span></h2>
<div class="section_container">

  {form action="" method=post class=focusFirstField}

  <div class="col_wide">

  <p>Nivel de detalle grafica</p>

  {label for=chartsShowTickets}{checkbox_field name=charts[showtickets] checked=$charts_data.showtickets id=chartsShowTickets} {lang}Mostrar tickets en grafica{/lang}{/label}

  {label for=chartsShowChecklists}{checkbox_field name=charts[showchecklists] checked=$charts_data.showchecklists id=chartsShowChecklists} {lang}Mostrar listas para hacer en grafica{/lang}{/label}

  {label for=chartsShowTasks}{checkbox_field name=charts[showtasks] checked=$charts_data.showtasks id=chartsShowTasks} {lang}Mostrar tareas para tickets &amp; listas para hacer{/lang}{/label}

  {label for=chartsShowToday}{checkbox_field name=charts[showtoday] checked=$charts_data.showtoday id=chartsShowToday} {lang}Marcar "Hoy" en grafica{/lang}{/label}

  {label for=chartsShowHGrid}{checkbox_field name=charts[showhgrid] checked=$charts_data.showhgrid id=chartsShowHGrid} {lang}Mostrar lineas horizontales{/lang}{/label}

  </div>

  <div class="col_wide2">

  {wrap field=start_on}
    {label for=chartsStartOn}Start on{/label}
    {select_date name='charts[start_on]' value=$charts_data.start_on id=chartsStartOn}
  {/wrap}

  {wrap field=end_on}
    {label for=chartsEndOn}Finaliza el{/label}
    {select_date name='charts[end_on]' value=$charts_data.end_on id=chartsEndOn}
  {/wrap}

  </div>

    {wrap_buttons}
      {submit}Graficar{/submit}
    {/wrap_buttons}
  {/form}

<div class="clear"></div>
</div>

<br />
{if isset($filename)} 
  {$maphtml}
  <h2 class="section_name"><span class="section_name_span">{lang}Grafica generada{/lang}</span></h2>
  <div id="section_container">
  <img src="{$filename}" ismap="ismap" usemap="#{$mapname}" alt="Gannt Chart" />
  </div>
{/if}
