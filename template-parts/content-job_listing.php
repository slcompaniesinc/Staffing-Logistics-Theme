<?php

$job_listing_post_id = get_the_ID();
// get the applications from this position.
$args = array(
    'post_type'=> 'application',
    'meta_key' => 'position',
    'meta_value' => $job_listing_post_id
);
$job_listing_query = new WP_Query( $args );

?>

<?php echo do_shortcode('[wbcr_php_snippet id="458"]'); ?>



<div class="container" style="height:100%">
    <h1>
        <?php the_title(); ?>
    </h1>
    <h4>
        Candidates
    </h4>
    <?php if( $job_listing_query->have_posts() ): ?>
    <table class='table'>
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Status
                </th>
                <th>
                    Date Applied
                </th>
                <th>
                    Email
                </th>
                <th>
                    Phone Number
                </th>
            </tr>
        </thead>

        <tbody>
            <?php while ( $job_listing_query->have_posts() ): ?>
            <?php $job_listing_query->the_post();  ?>
            <?php $custom_fields = get_post_custom( get_the_ID() ); ?>
            <tr>
                <td>
                    <a href="<?php echo esc_attr( get_permalink() );?>"> <?php echo the_title(); ?> </a>
                </td>
                <td>
                    Hired
                </td>
                <td>
                    <?php echo the_date(); ?>
                </td>
                <td>
                    <?php echo $custom_fields['email'][0]; ?>
                </td>
                <td>
                    <?php echo $custom_fields['phone_number'][0]; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php else: ?>
    <?php echo "No Candidates found for this job listing."; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

</div>