<?php
/**
 * Zen Colorbox
 *
 * @author niestudio (daniel [dot] niestudio [at] gmail [dot] com)
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: autoload_default.php 2012-04-30 niestudio $
 */
?>
jQuery(function($) {
  console.log('inside autoload_default.php');
  $('#mainWrapper').addClass('push').css('position', 'relative');
  $('.menu-link').bigSlide({
    'menu': '#bigslide-wrapper'
  });
});
//--></script>