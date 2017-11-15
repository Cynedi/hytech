<?php
// Activer le menu
add_theme_support('nav_menus');
register_nav_menu('primary', 'Menu principal');
// primary: id interne, Menu principal: libellé dans le dashboard



//sidebar defaut
if (function_exists('register_sidebar'))
//si la fonction register_sidebar existe
register_sidebar(array('name'=>'defaut', //nom de la sidebar

'before_widget'=>'<section class="widget">', //Départ de chaques sections de la sidebar //
'after_widget'=>'</section>', // balise de fin d'une de vos sections
'before_title'=>'<h2>',// Départ du titre de la section
'after_title'=>'</h2>',// balise de fin du titre de la section
));

// aciver les images à la une
add_theme_support('post-thumbnails');

if (function_exists('wp_pagenavi')) wp_pagenavi();
?>
