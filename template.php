<?php

/**
 * Implements template_preprocess_html().
 */
function melica_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function melica_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function melica_preprocess_node(&$variables) {
}


/**
 * Implements theme_menu_link().
 */

 
 function melica_menu_tree__menu_block__1($variables){
 	return '<ul class="menu side-nav">' . $variables['tree'] . '</ul>';
 }
 function melica_menu_tree__menu_block__2($variables){
 	return '<ul class="menu content-nav">' . $variables['tree'] . '</ul>';
 }
  function melica_menu_tree__menu_block__3($variables){
 	 return '<ul class="menu off-canvas-nav">' . $variables['tree'] . '</ul>';
  }

function melica_menu_link__menu_block__3(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    
    // Wrap in dropdown-menu.
    unset($element['#below']['#theme_wrappers']);
    $sub_menu = '<span class="open-sub">+</span><ul class="off-canvas-submenu">' . drupal_render($element['#below']) . '</ul>';

  }else{
  // här funkar custom a class
    $variables['element']['#localized_options']['attributes']['class'][] = 'level2-link';
    return theme_menu_link($variables);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}




/**
 * Implements theme_menu_link().
 */
function melica_menu_link__menu_block__1(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    // Wrap in dropdown-menu.
    unset($element['#below']['#theme_wrappers']);
    $sub_menu = '<ul class="main-submenu">' . drupal_render($element['#below']) . '</ul>';
  }//else{
  // här funkar custom a class
  	//$variables['element']['#localized_options']['attributes']['class'][] = 'level2-link';
  	//return theme_menu_link($variables);
  //}
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}




