<li class="project clearfix">
	
	<?php global $post; ?>

	<div class="thumb">
		<?php if ( ! empty( $thumb ) ) {

			$image = aq_resize( $thumb, 148, 100, true, false );
			echo '<img src="' . $image[0] . '" width="' . $image[1] . '" height="' . $image[2] . '" alt="" />';

		} ?>
	</div>

	<div class="content">

		<div class="title">
			<h4><?php echo get_the_title( $post_id ); ?></h4>
			<h6><?php echo ( strtoupper( $status ) == 'PUBLISH' ? __( 'Published on: ', 'krown' ) . get_the_time( __( 'F j, Y', 'krown' ) ) : ucfirst( $status ) ); ?></h6>
		</div>

		<div class="buttons">
			<a href="<?php echo md_get_durl().$prefix; ?>edit_project=<?php echo $post_id; ?>"><i class="krown-icon-pencil-2"></i></a>
			<a href="<?php echo md_get_durl().$prefix; ?>project_files=<?php echo $post_id; ?>"><i class="krown-icon-upload-cloud"></i></a>
			<a href="<?php echo $permalink; ?>"><i class="krown-icon-eye"></i></a>
			<a href="<?php echo md_get_durl().$prefix; ?>export_project=<?php echo $post_id; ?>"><i class="krown-icon-download"></i></a>
		</div>

	</div>

</li>