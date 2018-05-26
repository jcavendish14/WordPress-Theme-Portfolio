<?php get_header(); ?>
<div class='container'>
  <div class="cover rounded mt-5">
    <div class='row align-items-center'>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class='col-lg-4 text-center'>
          <?php the_post_thumbnail('medium', array('class' => 'border border-dark rounded-circle middle-align img-fluid')); ?>
        </div>
        <div class='col-lg-8'>
          <h1 class='display-1'><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      <?php endwhile;  endif;?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
