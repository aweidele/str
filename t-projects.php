<?php
/* Template Name: Projects */
get_header('projects');
?>
<main>
<?php if(have_posts()) { while(have_posts()){ the_post();
  $projects = get_field('projects');
?>
<?php foreach($projects as $str_project) {
  include('modules/str-slider.php');
} ?>
<?php //the_content(); ?>
<?php
}}
?>
</main>
<?php
get_footer();
