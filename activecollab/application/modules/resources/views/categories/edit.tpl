{title}Edit category{/title}

{form action=$active_category->getEditUrl() method=post}
{include_template module=resources controller=categories name=_category_form}

{wrap_buttons}
  {submit}Submit{/submit}
{/wrap_buttons}
{/form}