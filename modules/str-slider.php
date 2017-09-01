<?php
  $project_slides = get_field('project_slides',$str_project->ID);
  $project_text_slides = get_field('project_text_slides',$str_project->ID);

  $slides = array();
  foreach ($project_slides as $i => $slide) {
    $slide['type'] = 'image';
    $slides[($i + 1) * 10] = $slide;
  }
  foreach($project_text_slides as $slide) {
    $slide['type'] = 'text';
    if($slide['slide_position'] != '') {
      $pos = (($slide['slide_position'] - 1) * 10) + 5;
      $slides[$pos] = $slide;
    } else {
      $slides[] = $slide;
    }
  }
  ksort($slides);
?>
  <section class="str_project">
    <div class="str_project_slider_container">
      <div class="str_project_slider">
<?php
  $i = 0;
  foreach($slides as $slide) { ?>
        <div class="str_slide<?php echo !$i ? ' active' : ''; ?>">
          <?php if($slide[type] == 'image') { ?>
            <div class="str_slide_image">
              <img src="<?php echo $slide['sizes']['STR Slider']; ?>">
            </div>
          <?php } else { ?>
            <div class="str_slide_text">
            <?php echo $slide['text']; ?>
            </div>
          <?php } ?>
        </div>
<?php
  $i++;
} ?>
      </div>
    </div>
<pre><?php print_r($slides); ?></pre>
  </section>
