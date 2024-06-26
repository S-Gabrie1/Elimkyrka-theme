<!DOCTYPE html>

<?php if (is_user_logged_in()) { ?>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="wpadmin-logged-in">
<?php } else { ?>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php } ?>

<?php include('header.php'); ?>

<body>

  <main>

    <?php if (have_posts()) : while (have_posts()) : the_post();
        the_content();
      endwhile;
    else : ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

  </main>

  <?php include('footer.php'); ?>

</body>

  </html>