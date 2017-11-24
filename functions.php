<?php
// Activer le menu
add_theme_support('nav_menus');
register_nav_menu('primary', 'Menu principal');
// primary: id interne, Menu principal: libellé dans le dashboard

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


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
