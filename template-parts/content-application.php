<?php 


/**
 * Template part for displaying applications
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Peoplecount
 */
?>


<?php 
	$form_id = '1';
	$form = GFAPI::get_form( $form_id );
	$fields = $form['fields'];
	$custom_fields = get_post_custom( get_the_ID() ); 
	$applicant_entry_id = $custom_fields['applicant_entry_id'][0];
	$entry = GFAPI::get_entry( $applicant_entry_id );
	$taxonomies = get_the_taxonomies( get_the_ID() );
?>



<style type="text/css">
h5 {
    color: black;
}
</style>

<div style="padding:20px;">
    <pre> <?php var_dump( $entry ); ?></pre>

    <?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	if ( 'post' === get_post_type() ) :
		?>
    <div class="entry-meta">
        <?php
			peoplecount_posted_on();
			peoplecount_posted_by();
			?>
    </div><!-- .entry-meta -->
    <?php endif; ?>


    <div>
        <div>
            Job:
            <?php

			$post_id = $custom_fields['position'][0];
			$job = get_post( $post_id );
			echo $job->post_title;

			?>
        </div>
        <div>
            <!-- will later be a dropdown you can change -->
            Status: Hired
        </div>
    </div>



    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Basic Info</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    <div>
                        Applicant Name : <?php echo the_title();  ?>
                    </div>
                    <div>
                        Email Address : <?php echo $custom_fields['email'][0]; ?>
                    </div>
                    <div>
                        Phone Number : <?php echo $custom_fields['phone_number'][0]; ?>
                    </div>
                    <div>
                        Date of Birth : <?php echo $custom_fields['date_of_birth'][0]; ?>
                    </div>
                    <div>
                        Address : <?php echo $custom_fields['address'][0]; ?>
                    </div>
                </div>
                <div class="col">
                    <div>
                        Date Available to Start Work
                        : <?php echo $custom_fields['available_to_start_on'][0]; ?>
                    </div>
                    <div>
                        Compensation Requirement
                        : <?php echo $custom_fields['compensation_requirement'][0]; ?>
                    </div>


                </div>
            </div>


        </div>

    </div>


    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Address History</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    Address History 1
                    <?php echo $custom_fields['address_history_1'][0]; ?>
                </div>
                <div class="col">
                    Address History 2
                    <?php echo $custom_fields['address_history_2'][0]; ?>
                </div>
                <div class="col">
                    Address History 3
                    <?php echo $custom_fields['address_history_3'][0]; ?>
                </div>

            </div>


        </div>

    </div>






    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Education History</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    <div>
                        High School : <?php echo $custom_fields['high_school_attended'][0]; ?>
                    </div>
                    <div>
                        Years Attended : <?php echo $custom_fields['years_attended'][0]; ?>
                    </div>
                    <div>
                        Did You Graduate? : <?php
						$graduated_from_high =  $custom_fields['graduated'][0];
						if ( $graduated_from_high === '1'){
							echo "Yes";
						}else{
							echo "No";
						}
						?>
                    </div>
                    <div>
                        Address of High School : <?php echo $custom_fields['school_address'][0]; ?>
                    </div>
                    <div>
                        College/ University : <?php echo $custom_fields['college_attended'][0]; ?>
                    </div>
                </div>
                <div class="col">
                    <div>
                        Years Attended College : <?php echo $custom_fields['years_attended_college'][0]; ?>
                    </div>
                    <div>
                        Major of Study : <?php echo $custom_fields['major_of_study'][0]; ?>
                    </div>
                    <div>
                        Did You Graduate From College?: <?php 
						$graduated_from_college =  $custom_fields['graduated_college'][0];
						if ( $graduated_from_college === '1'){
							echo "Yes";
						}else{
							echo "No";
						}
						?>
                    </div>
                    <div>
                        Degree Earned : <?php echo $custom_fields['degree'][0]; ?>
                    </div>
                    <div>
                        Address of College : <?php echo $custom_fields['college_address'][0]; ?>
                    </div>
                </div>

            </div>


        </div>

    </div>




    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Employment History</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    <h5 class="card-title">Company 1</h5>
                </div>
                <div class="col">
                    <h5 class="card-title">Company 2</h5>
                </div>
                <div class="col">
                    <h5 class="card-title">Company 3</h5>
                </div>


            </div>


        </div>
    </div>



    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Skills & Preferences</h5>
            <div class="row" style="padding: 20px;">
                <div class="mb-5">
                    <!-- loop through the skills and print them all here -->
                    <?php echo $taxonomies['skill']; ?>
                </div>
                <div>
                    <?php echo $taxonomies['preference']; ?>
                </div>
            </div>


        </div>
    </div>


    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Background Information</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    <div class="mb-5">
                        Have you ever been convicted of or pleaded guilty or nolo contendre to a crime or other offense?
                        Include any and all court convictions, military service convictions, deferred adjudication or
                        guilty or nolo contendre please.

                        <br>

                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '128'); ?>
                        </span>
                    </div>

                    <div class="mb-5">
                        If yes, please provide the date, place and offense of the charge:

                        <br>

                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '129'); ?>
                        </span>
                    </div>

                    <div class="mb-5">
                        Are you currently on parole, probation, work release program, deferred adjudication, conditional
                        release, or serving a weekend sentence as a result of a conviction or a guilty or nolo contendre
                        plea?

                        <br>

                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '133'); ?>
                        </span>
                    </div>

                    <div class="mb-5">
                        Have you ever been confined (incarcerated) as a result of the sentence of any court? (Include
                        incarcerations resulting from the sentence of a military court or similar proceeding.)

                        <br>

                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '131'); ?>
                        </span>
                    </div>


                    <div class="mb-5">
                        If yes, please state where, when and the nature of the charge:
                        <br>

                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '134'); ?>
                        </span>
                    </div>

                    <div class="mb-5">
                        Are you presently under indictment or are you currently a defendant in any criminal proceeding?
                        <br>

                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '136'); ?>
                        </span>
                    </div>

                    <div class="mb-5">
                        If yes, please provide the date and place of the occurrence to the indictment or pending charge,
                        and the charge:

                        <br>
                        <span style="padding:20px; font-weight: bold;">
                            <?php echo rgar( $entry, '137'); ?>
                        </span>
                    </div>







                </div>
            </div>


        </div>
    </div>


    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Additional Attachments</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    Resume:
                    <a href="<?php echo rgar( $entry, '142'); ?>">Click Here to View</a>
                </div>

            </div>


        </div>
    </div>


    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Notes</h5>
            <div class="row" style="padding: 20px;">
                <div class="col">
                    <textarea style="width: 100%; height: 300px;">
					</textarea>
                </div>

            </div>


        </div>
    </div>






</div>