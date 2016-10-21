<?php
/**
 * @file
 * Template for Zurb Foundation Two column bricks Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-2col-bricks <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
	
	<div class="large-12">
	  <?php if (!empty($topimage)): ?>
	    <?php print $topimage; ?>     
	  <?php endif; ?>
	  
	<!--</div>-->
  <div class="row">
    <?php if (!empty($top)): ?>
      <div class="medium-12 columns omossspace">	
      <?php print $top; ?>     
  	  </div>
    <?php endif; ?>
  </div>
</div>

  
  <?php if (!empty($middle)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>">
      <<?php print $middle_wrapper ?> class="group-middle<?php print $middle_classes; ?>">
      <?php print $middle; ?>
      </<?php print $middle_wrapper ?>>
    </div>
  <?php endif; ?>

  <?php if (!empty($below_left) || !empty($below_right)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>">
      <<?php print $below_left_wrapper ?> class="group-below-left<?php print $below_left_classes; ?>">
      <?php print $below_left; ?>
      </<?php print $below_left_wrapper ?>>

      <<?php print $below_right_wrapper ?> class="group-below-right<?php print $below_right_classes; ?>">
      <?php print $below_right; ?>
      </<?php print $below_right_wrapper ?>>
    </div>
  <?php endif; ?>

  <?php if (!empty($bottom)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>">
      <<?php print $bottom_wrapper ?> class="group-bottom<?php print $bottom_classes; ?>">
      <?php print $bottom; ?>
      </<?php print $bottom_wrapper ?>>
    </div>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
