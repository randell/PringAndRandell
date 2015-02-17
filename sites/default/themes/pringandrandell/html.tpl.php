<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php // print $head; ?>
    <title><?php print $head_title; ?></title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php print base_path() . path_to_theme(); ?>/assets/images/other_images/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
	<?php print $styles; ?>
	<?php print $scripts; ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="background-image-overlay"></div>

    <div id="outer-background-container" data-default-background-img="<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Hand.jpg" style="background-image:url(<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Hand.jpg);"></div>
    <!-- end: #outer-background-container -->    

    <!-- Outer Container -->
    <div id="outer-container">
       <?php print $page_top; ?>
	   <?php print $page; ?>
	   <?php print $page_bottom; ?>
    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body clearfix">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php print base_path() . path_to_theme(); ?>/assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/jquery.backstretch.min.js"></script>
    <!-- background image fix for IE 9 or less
       - use same background as set above to <body> -->
    <!--[if lt IE 9]>
    <script type="text/javascript">
    $(document).ready(function(){
      jQuery("#outer-background-container").backstretch("<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Hand.jpg");
    });
    </script> 
    <![endif]-->  

    <!-- detect mobile browsers -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/detectmobilebrowser.js"></script>

    <!-- owl carousel js -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- lightbox js -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/lightbox/js/lightbox.min.js"></script>

    <!-- intro animations -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/wow/wow.min.js"></script>

    <!-- responsive videos -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/jquery.fitvids.js"></script>

    <!-- Custom functions for this theme -->
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/functions.js"></script>
    <script src="<?php print base_path() . path_to_theme(); ?>/assets/js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]-->  

  </body>
</html>