
<?php get_header(); ?>

  
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <p> 
                        <?php $post = get_post(120) ?>
                        <?php echo $post->post_content ?>                 
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>