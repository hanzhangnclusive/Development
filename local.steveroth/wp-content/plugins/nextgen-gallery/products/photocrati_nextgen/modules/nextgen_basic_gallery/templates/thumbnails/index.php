<?php

$this->start_element('nextgen_gallery.gallery_container', 'container', $displayed_gallery);

?>
<link rel="stylesheet" href="/wp-content/themes/twentytwelve/styles/css/main/design.css" type="text/css" />

<div
	class="ngg-galleryoverview"
	id="ngg-gallery-<?php echo_h($displayed_gallery_id)?>-<?php echo_h($current_page)?>">

   

	<?php

	$this->start_element('nextgen_gallery.image_list_container', 'container', $images);

	?>
	<!-- Thumbnails -->
	<?php for ($i=0; $i<count($images); $i++):
       $image = $images[$i];
       $thumb_size = $storage->get_image_dimensions($image, $thumbnail_size_name);
       $style = isset($image->style) ? $image->style : null;

       if (isset($image->hidden) && $image->hidden) {
          $style = 'style="display: none;"';
       }
       else {
       		$style = null;
       }

			 $this->start_element('nextgen_gallery.image_panel', 'item', $image);

			?>
			<div id="<?php echo_h('ngg-image-' . $i) ?>" class="ngg-gallery-thumbnail-box" <?php if ($style) echo $style; ?>>
				<?php

				$this->start_element('nextgen_gallery.image', 'item', $image);

				?>
       
            <a  href="<?php echo esc_attr($storage->get_image_url($image))?>"
               title="<?php echo esc_attr($image->description)?>"
               data-image-id='<?php echo esc_attr($image->pid); ?>'
               <?php echo $effect_code ?>><div id="sub_photos_section_image" style="margin-right:0px;width:230px;">
                <img
                    title="<?php echo esc_attr($image->alttext)?>"
                    alt="<?php echo esc_attr($image->alttext)?>"
                    src="<?php echo esc_attr($storage->get_image_url($image, $thumbnail_size_name))?>"
                    width="<?php echo esc_attr($thumb_size['width'])?>"
                    height="<?php echo esc_attr($thumb_size['height'])?>"
                    style="max-width:none;"
                />
            </div>
         </a>
       
				<?php

				$this->end_element();

				?>
			</div> 
			<?php

			$this->end_element();

			?>

        <?php if ($number_of_columns > 0): ?>
            <?php if ((($i + 1) % $number_of_columns) == 0 ): ?>
                <br style="clear: both" />
            <?php endif; ?>
        <?php endif; ?>

	<?php endfor ?>
	<?php

	$this->end_element();

	?>

	<?php if ($pagination): ?>
	<!-- Pagination -->
	<?php echo $pagination ?>
	<?php else: ?>
	<div class="ngg-clear"></div>
	<?php endif ?>
</div>
<?php $this->end_element(); ?>
