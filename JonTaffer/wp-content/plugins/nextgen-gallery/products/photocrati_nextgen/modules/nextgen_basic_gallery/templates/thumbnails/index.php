<?php

$this->start_element('nextgen_gallery.gallery_container', 'container', $displayed_gallery);

?>


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
			
            <a class="fancybox ngg-gallery-thumbnail-box" href="<?php echo esc_attr($storage->get_image_url($image))?>"
               title="<?php echo esc_attr($image->description)?>"
               data-image-id='<?php echo esc_attr($image->pid); ?>'
               <?php echo $effect_code ?>>
               <div class="media_gallery">
                <img 
                    title="<?php echo esc_attr($image->alttext)?>"
                    alt="<?php echo esc_attr($image->alttext)?>"
                    src="<?php echo esc_attr($storage->get_image_url($image, $thumbnail_size_name))?>"
                    width="<?php echo esc_attr($thumb_size['width'])?>"
                    height="<?php echo esc_attr($thumb_size['height'])?>"
                    style="max-width:none;"
                />
                <div class="media_gallery_photos_hover"></div>
            </div>
            </a>
    
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
<?php $this->end_element(); ?>


<style>
.container .content .media{width:955px;height:400px;padding:15px 0px 0 15px;position:relative;}
.container .content .media .media_top{width:955px;height:40;margin-bottom:20px;}
.container .content .media .media_top .media_button{width:460px;height:40px;float:left;background:url('/wp-content/themes/twentytwelve/images/textures/dark.png') repeat;font-family: 'bebasregular';font-size:16px;color:#fff;text-align:center;line-height:40px;}
.container .content .media .media_top .media_button:hover{border-bottom: 3px #c84b27 solid;cursor:pointer;}
.container .content .media .media_top .media_button_active{width:460px;height:40px;float:left;background:#000;font-family: 'bebasregular';font-size:16px;color:#fff;text-align:center;line-height:40px;border-bottom: 3px #c84b27 solid;}
.container .content .media .media_top .media_button_active:hover{cursor:pointer;}
.container .content .media .clear{width:100%;height:1px;clear:both;}
.media_gallery{width:145px;height:130px;background:#000;float:left;margin:0 0px 10px 10px;position:relative;}
.page-template-page-templatesmedia-php .media_gallery{margin:0 13px 13px 0px;position:relative;}

.media_gallery_photos_hover{height: 130px;opacity: 0;position: relative;top: -132px;width: 145px;cursor: pointer;background:rgba(200,75,39,0.8) url('/wp-content/themes/twentytwelve/images/photos/magnify.png') no-repeat center;opacity:0;-webkit-transition-property:background;-webkit-transition-duration:.2s, .2s;-webkit-transition-timing-function:linear, ease-in;-moz-transition-property:background;-moz-transition-duration:.2s;-moz-transition-timing-function:linear, ease-in;-o-transition-property:background;-o-transition-duration:.2s;-o-transition-timing-function:linear, ease-in}
.media_gallery_photos_hover:hover{height: 130px;opacity: 1;position: relative;top: -132px;width: 145px;-webkit-transition-property:background;-webkit-transition-duration:.2s, .2s;-webkit-transition-timing-function:linear, ease-in;-moz-transition-property:background;-moz-transition-duration:.2s;-moz-transition-timing-function:linear, ease-in;-o-transition-property:background;-o-transition-duration:.2s;-o-transition-timing-function:linear, ease-in}
.media_gallery_container{width:100%;position:relative;}
.media_content{width:auto;height:auto;margin:0;padding:0;overflow:hidden;position:absolute;top:75px;}


.media_gallery_video{width:300px;height:162px;float:left;margin:0 18px 18px 0;position:relative;z-index:100;}
.media_gallery_video_title{color: #fff;font-size: 24px;font-family:'bebasregular';height: 142px;opacity: 0;position: relative;top: -163px;padding: 10px;width: 280px;line-height:28px;z-index: 9999;background: rgba(200,75,39,0.8);cursor: pointer;-webkit-transition-property:background;-webkit-transition-duration:.2s, .2s;-webkit-transition-timing-function:linear, ease-in;-moz-transition-property:background;-moz-transition-duration:.2s;-moz-transition-timing-function:linear, ease-in;-o-transition-property:background;-o-transition-duration:.2s;-o-transition-timing-function:linear, ease-in}
.media_gallery_video_title:hover{color: #fff;font-size: 24px;height: 142px;opacity: 1;position: relative;top: -163px;padding: 10px;text-transform: uppercase;line-height:28px;width: 280px;z-index: 10;overflow: hidden;cursor: pointer;-webkit-transition-property:background;-webkit-transition-duration:.2s, .2s;-webkit-transition-timing-function:linear, ease-in;-moz-transition-property:background;-moz-transition-duration:.2s;-moz-transition-timing-function:linear, ease-in;-o-transition-property:background;-o-transition-duration:.2s;-o-transition-timing-function:linear, ease-in}

.subscribe_text{padding:0px;margin:0px;height:30px;line-height:14px;font-size:14px;border:none;float:left;padding:0 0 0 8px;outline:none;font-family:Verdana, Geneva, sans-serif;box-shadow:inset 0 0 7px #444;}
.subscribe_btn{font-family:'proximanovabold'; text-transform:uppercase;background:#000;color:#662714;border:0;font-size:16px;height:30px;line-height:16px;float:left;margin:0;padding:0 22px;box-shadow:inset 0 1px 0 rgba(255,255,255,0.3);text-shadow:0 1px 0 rgba(255,255,255,0.1);background: #c64a27;background: -moz-linear-gradient(top,  #c64a27 0%, #682714 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#c64a27), color-stop(100%,#682714));background: -webkit-linear-gradient(top,  #c64a27 0%,#682714 100%);background: -o-linear-gradient(top,  #c64a27 0%,#682714 100%);background: -ms-linear-gradient(top,  #c64a27 0%,#682714 100%);background: linear-gradient(to bottom,  #c64a27 0%,#682714 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c64a27', endColorstr='#682714',GradientType=0 );}
.subscribe_btn:hover{cursor:pointer;background: #ad4123;background: -moz-linear-gradient(top,  #ad4123 0%, #682714 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ad4123), color-stop(100%,#682714));background: -webkit-linear-gradient(top,  #ad4123 0%,#682714 100%);background: -o-linear-gradient(top,  #ad4123 0%,#682714 100%);background: -ms-linear-gradient(top,  #ad4123 0%,#682714 100%);background: linear-gradient(to bottom,  #ad4123 0%,#682714 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ad4123', endColorstr='#682714',GradientType=0 );}
.popup_subscribe_close{height:36px;width:36px;position:absolute;top:0;right:0;float:right;background:url('/wp-content/themes/twentytwelve/images/other/fb_close.jpg')}
#interVeil{ /*CSS for background veil that covers entire page while interstitial box is visible*/position: absolute;background: black url(blackdot.gif);right: 0;width: 10px;top: 0;z-index: 101;visibility: hidden;filter:progid:DXImageTransform.Microsoft.alpha(opacity=80);opacity: 0.8;}


.fancybox-close{top:0 !important;right:0 !important;}
</style>
