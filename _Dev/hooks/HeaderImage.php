//<?php

class hook102 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'globalTemplate' => 
  array (
    0 => 
    array (
      'selector' => 'html > head',
      'type' => 'add_inside_end',
      'content' => '<style>
#ipsLayout_header header {
  background-color: {setting="ipsthemesHeaderImage_color"};
  background-image: url({file="\IPS\Settings::i()->ipsthemesHeaderImage_image" extension="core_Theme"});
  background-repeat: no-repeat;
  background-position: {setting="ipsthemesHeaderImage_position"};
  background-size: cover;
  {{if \IPS\Settings::i()->ipsthemesHeaderImage_fixed}}
  	background-attachment: fixed;
  {{endif}}
}
</style>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */




}