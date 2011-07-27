<?php

  /**
   * hability_changes helper
   *
   * @package activeCollab.modules.habilities
   * @subpackage helpers
   */
  
  /**
   * Render hability changes block
   *
   * @param array $params
   * @param Smarty $smarty
   * @return string
   */
  function smarty_function_hability_changes($params, &$smarty) {
    $hability = array_var($params, 'hability');
    if(!instance_of($hability, 'Hability')) {
      return new InvalidParamError('hability', $hability, '$hability is expected to be an instance of Hability class', true);
    } // if
    
    $total_changes = $hability->countChanges();
    if($total_changes == 0) {
      return '';
    } // if
    
    $changes = $hability->getChanges(3);
    $smarty->assign(array(
      '_changes' => $changes,
      '_total_changes' => $total_changes,
    ));
    return $smarty->fetch(get_template_path('_hability_changes', 'habilities', HABILITIES_MODULE));
  } // smarty_function_hability_changes

?>