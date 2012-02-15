{title}Edit Habilities{/title}
{add_bread_crumb}Edit Habilities{/add_bread_crumb}

<div id="edit_user_habilities">
  {form action=$active_user->getEditHabilitiesUrl() method=post autofocus=no}
    <fieldset>
      <h2 class="section_name"><span class="section_name_span">{lang}Crear Habilidad{/lang}</span></h2>
      <div class="section_container">
        <div class="col">
        {wrap field=hability}
          {label for=userLanguage}Habilidad{/label}
          <input type="text" id="hability" name="hability" />
        {/wrap}
        {wrap field=percent}
          {label for=userLanguage}Porcentaje{/label}
          <input type="text" id="percent" name="percent" />
        {/wrap}
        </div>
        
      </div>
    </fieldset>

		{wrap_buttons}
    	{submit}Submit{/submit}
    {/wrap_buttons}
    
    <fieldset>
      <h2 class="section_name"><span class="section_name_span">{lang}Lista de habilidades{/lang}</span></h2>
      <div class="section_container" id="auto_assign_user">
      	
      	{$a_list}
      	
      </div>
    </fieldset>
  {/form}
</div>