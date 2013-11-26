<?php
/*
Template Name: Authenticated Page
*/


get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <?php if (is_user_logged_in()) { ?>
    
      <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            /* Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
          ?>

        <?php endwhile; ?>

        <?php wowyear_content_nav( 'nav-below' ); ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>

    <? } else { /* if user is not logged in */ ?> 

      <h3>You must be logged in to view this page.</h3>
      <article class="post">
      <p>Sorry, but this area is only for registered, logged-in users. If you are a registered user,
      please login to the site.</p>

      <form name='loginform' id='loginform' action='<?php echo get_bloginfo('wpurl');?>/wp-login.php' method='post'>

          <label>Username
          <input type='text' name='log' id='log' value='' size='20' tabindex='1' />
          </label>

          <label>Password
          <input type='password' name='pwd' id='pwd' value='' size='20' tabindex='2' />
          </label>

          <label>
          <input name='rememberme' type='checkbox' id='rememberme' value='forever' tabindex='3' />
          Remember Me</label>

        <p class='submit'>
          <input type='submit' name='submit' id='submit' value='Login &raquo;' tabindex='4' />
          <?php //use a hidden field to return them to the page they came from ?>
          <input type="hidden" name="redirect_to" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />

      </form>
      </article>

    <? } ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>