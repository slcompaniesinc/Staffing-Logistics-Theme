<?php
/**
 * The template for displaying the profile page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Peoplecount
 */

get_header();
get_sidebar();
?>

<?php 

   if( class_exists('Dynamic_Featured_Image') ) {
       global $dynamic_featured_image;
       $featured_images = $dynamic_featured_image->get_featured_images( );
       
       echo 'yo';
   }
  
?>


<main id="content-wrapper" class="d-flex flex-column">

  <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid"><button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3" type="button"><i class="fas fa-bars"></i></button>
        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group"></div>
        </form>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="me-auto navbar-search w-100">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." />
                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                            </div>
                            <div><span class="small text-gray-500">December 12, 2019</span>
                                <p>A new monthly report is ready to download!</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                            </div>
                            <div><span class="small text-gray-500">December 7, 2019</span>
                                <p>$290.29 has been deposited into your account!</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="me-3">
                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                            </div>
                            <div><span class="small text-gray-500">December 2, 2019</span>
                                <p>Spending Alert: We&#39;ve noticed unusually high spending for your account.</p>
                            </div>
                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo get_template_directory_uri() ?> /img/avatars/dogs/Wright,Nazere_Headshot.png" />
                                <div class="bg-success status-indicator"></div>
                            </div>
                            <div class="fw-bold">
                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I&#39;ve been having.</span></div>
                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar2.jpeg" />
                                <div class="status-indicator"></div>
                            </div>
                            <div class="fw-bold">
                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar3.jpeg" />
                                <div class="bg-warning status-indicator"></div>
                            </div>
                            <div class="fw-bold">
                                <div class="text-truncate"><span>Last month&#39;s report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                            </div>
                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="avatars/avatar5.jpeg" />
                                <div class="bg-success status-indicator"></div>
                            </div>
                            <div class="fw-bold">
                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren&#39;t good...</span></div>
                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                            </div>
                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
            </li>
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Nazere Wright</span><img class="border rounded-circle img-profile" src="avatars/Wright,Nazere_Headshot.png" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity log</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>



<div class="container-fluid">
    <h3 class="text-dark mb-4">Applicants<i class="fa fa-user-plus" style="float: right;/*vertical-align: middle;*/cursor: pointer;"></i></h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Candidate Info</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col sl-ats-job-filters" style="display: flex;justify-content: space-around;padding: 10px;/*box-shadow: 0px 0px 10px;*/">
                    <?php echo do_shortcode( '[custom-layout id="204"] ' ) ?>
                    <div id="response"></div>

                </div>
                <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                    <table id="dataTable" class="table my-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Date of Birth</th>
                                <th>Date Applied</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody id='table-filter-body'>
                            <?php

                            $args = array(
                                'post_type'=>'application',
                                'posts_per_page' => -1,
                                'order_by_date'=> 'date',
                                'order' => 'desc',
                            );

                            $args['search_filter_id'] = 215;
                            $query = new WP_Query($args);

                            if( $query->have_posts() ) :
                                while( $query->have_posts() ): $query->the_post();
                                    $custom_fields = get_post_custom( get_the_ID() );
                                    ?>
                                    <td>
                                        <!-- displays the featured image -->
                                        <span class="rounded-circle me-2"><?php the_post_thumbnail( array( 30, 30 ) ); ?></span>
                                        <!-- displays the name of the applicant -->
                                        <?php the_title(); ?>
                                    </td>
                                    <td>
                                        <!-- the name of the job is retrieved using custom post id -->
                                        <?php 
                                    // post id of the job listing is saved in the position field
                                        $position = $custom_fields['position'][0];
                                        $job_listing_post = get_post( $position );
                                        echo $job_listing_post->post_title;
                                        ?>
                                    </td>
                                    <td>New</td>
                                    <td><?php echo $custom_fields['date_of_birth'][0]; ?></td>
                                    <td>
                                        <?php  
                                // date the job was applied to
                                        the_time('F j, Y'); 
                                        ?>
                                    </td>
                                    <td><?php echo $custom_fields['email'][0]; ?></td>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'No application found';
                            endif;


                            ?>



                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){
         jQuery('.sl-ats-dropdown').click(function() {
            const menu = jQuery(this).children('.dropdown-menu')[0];
            if( menu.className.includes('show') ){
                jQuery(menu).addClass('show');
            }else{
                jQuery(menu).removeClass('show');
            }

        });


         
     });


        jQuery(function($){
            $('#search-filter-form-215').submit(function(e){
                console.log('yo');
                e.preventDefault();
                var filter = $('#search-filter-form-215');
                $.ajax({
                    url:"/wordpress/wp-content/themes/peoplecount/functions.php",
            data:filter.serialize(), // form data
            type:filter.attr('method'), // POST
            beforeSend:function(xhr){
                filter.find('button').text('Processing...'); // changing the button label
            },
            success:function(data){
                filter.find('button').text('Apply filter'); // changing the button label back
                $('#table-filter-body').html(data); // insert data
            }
        });
                return false;
            });
        });

    </script>

    <?php get_footer();?>
</main><!-- #main -->

<?php

