{title}New Filter{/title}
{add_bread_crumb}New Filter{/add_bread_crumb}

<div id="add_assignment_filter">
  {form action='?route=assignments_filter_add' method=post id=assignmenst_filter_form}
    {include_template name=_filter_form module=resources controller=assignment_filters}
  
    {wrap_buttons}
      {submit}Submit{/submit}
    {/wrap_buttons}
  {/form}
</div>
<script type="text/javascript">
  App.resources.AssignmentFilterForm.init('assignmenst_filter_form', '{assemble route=assignments_filter_partial_generator}');
</script>