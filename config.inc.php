<?php
/**
 *  Medialist Sorter
 *
 * @version 1.0.1
 * @author Redaxo be_style plugin: Hirbod
 * @package redaxo 4.2.x and greater
 */

$mypage = 'medialist_sorter';

$REX['ADDON']['version'][$mypage]     = '1.0.1';
$REX['ADDON']['author'][$mypage]      = 'Hirbod Mirjavadi';
$REX['ADDON']['supportpage'][$mypage] = 'nightstomp.com';

// INCLUDE MEDIALIST_SORTER JS/CSS
$header = '

  <!-- medialist_sorter -->
    <script src="../files/addons/be_style/plugins/medialist_sorter/script.js" type="text/javascript"></script>
  <!-- medialist_sorter -->
';
$header_include = 'return $params["subject"].\''.$header.'\';';
rex_register_extension('PAGE_HEADER', create_function('$params',$header_include));
