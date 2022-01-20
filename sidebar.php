<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peoplecount
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

   <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background-color: #b598cc;background-image: unset;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon"><img class="sl-ats-logo" src="<?php echo get_template_directory_uri()?>/assets/img/staffing-logistics.png" style="width: 120px;"></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <?php 

                 wp_nav_menu(array('menu'=>'Dashboard Menu','menu_id' => 'accordionSidebar', 'container' => false, 'menu_class' => 'navbar-nav text-light', 'before'=> ''));



                 ?>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
