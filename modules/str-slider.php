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
<?php foreach($slides as $slide) { ?>
        <div class="slide">
          <?php echo $slide['type']; ?>
        </div>
<?php } ?>
      </div>
    </div>
<pre><?php print_r($slides); ?></pre>
  </section>
