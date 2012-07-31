<?php
/**
 *  Medialist Sorter
 *
 * @version 1.0.0
 * @author Redaxo be_style plugin: Hirbod
 * @package redaxo 4.2.x and greater
 */

$error = '';

if ($error != '') {
  $REX['ADDON']['installmsg']['medialist_sorter'] = $error;
} else {
  $REX['ADDON']['install']['medialist_sorter'] = true;
}
