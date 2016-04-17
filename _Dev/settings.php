//<?php

$form->addHeader('ipsthemesHeaderImage_settings');

/* Color */
$form->add( new \IPS\Helpers\Form\Color( 'ipsthemesHeaderImage_color', \IPS\Settings::i()->ipsthemesHeaderImage_color ) );

/* Image */
$form->add( new \IPS\Helpers\Form\Upload( 'ipsthemesHeaderImage_image', \IPS\File::get( 'core_Theme', \IPS\Settings::i()->ipsthemesHeaderImage_image ), FALSE, array( 'storageExtension' => 'core_Theme', 'multiple' => false, 'image' => TRUE ), NULL, NULL, NULL, 'ipsthemesHeaderImage_image' ) );

/* Repeat */
$form->add( new \IPS\Helpers\Form\Select( 'ipsthemesHeaderImage_repeat', \IPS\Settings::i()->ipsthemesHeaderImage_repeat, FALSE, array(
	'options' => array(
		'no-repeat'   	=> 'ipsthemesHeaderImage_repeat1',
		'repeat'   		=> 'ipsthemesHeaderImage_repeat2',
		'repeat-x'   	=> 'ipsthemesHeaderImage_repeat3',
		'repeat-y'   	=> 'ipsthemesHeaderImage_repeat4'
	)
) ), NULL, NULL, NULL, 'ipsthemesHeaderImage_repeat' );

/* Position */
$form->add( new \IPS\Helpers\Form\Select( 'ipsthemesHeaderImage_position', \IPS\Settings::i()->ipsthemesHeaderImage_position, FALSE, array(
	'options' => array(
		'initial'   	=> 'ipsthemesHeaderImage_position1',
		'center'   		=> 'ipsthemesHeaderImage_position2',
		'top'   		=> 'ipsthemesHeaderImage_position3',
		'bottom'   		=> 'ipsthemesHeaderImage_position4'
	)
) ), NULL, NULL, NULL, 'ipsthemesHeaderImage_position' );

/* Size */
$form->add( new \IPS\Helpers\Form\Select( 'ipsthemesHeaderImage_size', \IPS\Settings::i()->ipsthemesHeaderImage_size, FALSE, array(
	'options' => array(
		'initial'   	=> 'ipsthemesHeaderImage_size1',
		'cover'   		=> 'ipsthemesHeaderImage_size2',
		'contain'   	=> 'ipsthemesHeaderImage_size3'
	)
) ), NULL, NULL, NULL, 'ipsthemesHeaderImage_size' );

/* Fixed */
$form->add( new \IPS\Helpers\Form\YesNo( 'ipsthemesHeaderImage_fixed', \IPS\Settings::i()->ipsthemesHeaderImage_fixed ) );

if ( $values = $form->values() )
{
	$form->saveAsSettings();
	return TRUE;
}

return $form;