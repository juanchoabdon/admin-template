<?php
/**
 * frontend/config.php
 *
 * Author: pixelcave
 *
 * Codebase - Frontend pages configuration file
 *
 */

// **************************************************************************************************
// FRONTEND INCLUDED VIEWS
// **************************************************************************************************

//                              : Useful for adding different sidebars/headers per page or per section
$cb->inc_side_overlay           = false;
$cb->inc_sidebar                = 'inc/frontend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/frontend/views/inc_header.php';
$cb->inc_footer                 = 'inc/frontend/views/inc_footer.php';


// **************************************************************************************************
// FRONTEND SIDEBAR
// **************************************************************************************************

// true                         : Visible Sidebar (screen width > 991px)
// false                        : Hidden Sidebar (screen width > 991px)
$cb->l_sidebar_visible_desktop  = false;

// true                         : Dark themed Sidebar
// false                        : Light themed Sidebar
$cb->l_sidebar_inverse          = true;


// **************************************************************************************************
// FRONTEND HEADER
// **************************************************************************************************

// true                         : Fixed Header
// false                        : Static Header
$cb->l_header_fixed             = true;

// ''                           : Classic Header style
// 'modern'                     : Modern Header style
// 'inverse'                    : Dark themed Header (works only with classic Header style)
// 'glass'                      : Light themed Header with transparency by default (absolute position,
//                                perfect for light images underneath - solid light background
//                                on scroll if the Header is also set as fixed)
// 'glass-inverse'              : Dark themed Header with transparency by default (absolute position,
//                                perfect for dark images underneath - solid dark background
//                                on scroll if the Header is also set as fixed)
$cb->l_header_style             = 'glass-inverse';


// **************************************************************************************************
// FRONTEND MAIN MENU
// **************************************************************************************************

// You can use the following array to create your main menu
$cb->main_nav                   = array(
    array(
        'name'  => 'Home',
        'icon'  => 'si si-home',
        'url'   => 'fe_home.php'
    ),
    array(
        'name'  => 'Various',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Pages',
        'icon'  => 'si si-puzzle',
        'sub'   => array(
            array(
                'name'  => 'Blog',
                'url'   => 'fe_blog.php'
            ),
            array(
                'name'  => 'Story',
                'url'   => 'fe_story.php'
            ),
            array(
                'name'  => 'Team',
                'url'   => 'fe_team.php'
            ),
            array(
                'name'  => 'Search',
                'url'   => 'fe_search.php'
            ),
            array(
                'name'  => 'Helpdesk',
                'url'   => 'fe_helpdesk.php'
            ),
            array(
                'name'  => 'Portfolio',
                'sub'   => array(
                    array(
                        'name'  => 'Single',
                        'url'   => 'fe_portfolio_single.php'
                    ),
                    array(
                        'name'  => '2 Columns',
                        'url'   => 'fe_portfolio_2cols.php'
                    ),
                    array(
                        'name'  => '3 Columns',
                        'url'   => 'fe_portfolio_3cols.php'
                    ),
                    array(
                        'name'  => '4 Columns',
                        'url'   => 'fe_portfolio_4cols.php'
                    ),
                )
            )
        )
    ),
    array(
        'name'  => 'Vital',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Features',
        'icon'  => 'si si-wrench',
        'url'   => 'fe_features.php'
    ),
    array(
        'name'  => 'Pricing',
        'icon'  => 'si si-wallet',
        'url'   => 'fe_pricing.php'
    ),
    array(
        'name'  => 'Contact',
        'icon'  => 'si si-envelope-open',
        'url'   => 'fe_contact.php'
    ),
    array(
        'name'  => 'About',
        'icon'  => 'si si-eye',
        'url'   => 'fe_about.php'
    )
);
