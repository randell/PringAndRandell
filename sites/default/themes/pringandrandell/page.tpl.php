<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<?php global $base_url; ?>

<!-- Left Sidebar -->
<section id="left-sidebar">

<div class="logo">
  <a href="#intro" class="link-scroll">Pring &amp; Randell</a>
</div><!-- .logo -->

<!-- Menu Icon for smaller viewports -->
<div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

<ul id="main-menu">
  <li id="menu-item-save-the-date" class="menu-item scroll"><a href="#save-the-date">save the date</a></li>
  <li id="menu-item-story" class="menu-item scroll"><a href="#story">our story</a></li>
  <li id="menu-item-details" class="menu-item scroll"><a href="#details">little details</a></li>
  <li id="menu-item-entourage" class="menu-item scroll"><a href="#entourage">entourage</a></li>
  <li id="menu-item-map" class="menu-item scroll"><a href="#map">getting there</a></li>
</ul><!-- #main-menu -->

</section><!-- #left-sidebar -->
<!-- end: Left Sidebar -->

<section id="main-content" class="clearfix">

<article id="save-the-date" class="section-wrapper clearfix" data-custom-background-img="<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Hand.jpg">
  <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
    <div class="col-sm-10 col-md-9 pull-right">

        <section class="feature-text">
          <h1><abbr title="April 11, 2015">04.11.15</abbr></h1>
          <p>Pring &amp; Randell</p>
          <p>Two Gardens, Tagaytay</p>
          <p><a href="#details" class="link-scroll btn btn-outline-inverse btn-lg">find out more</a></p>
        </section>

    </div><!-- .col-sm-10 -->
  </div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->

<article id="story" class="section-wrapper clearfix" data-custom-background-img="<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Pring.jpg">
  <div class="content-wrapper clearfix">
    <div class="col-sm-10 col-md-9 pull-right">

        <h4>Our Story</h4>
        <p>He said to her, "You have the most beautiful eyes".<br/>
She rolled her eyes.<br/>
They went on a date.<br/>
They fell in love.</p>

    </div><!-- .col-sm-10 -->
  </div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->

<article id="details" class="section-wrapper clearfix" data-custom-background-img="<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Kiss.jpg">
  <div class="content-wrapper clearfix">
    <div class="col-sm-10 col-md-9 pull-right">

        <h4>little details</h4>
        <p>We are sending out this invitation and hope you will join our celebration.<br/>
If to send a gift is your intention, in modesty we would like to mention,<br/>
we got 23 kilos to bring on as we fly back to Kensington.<br/>
Rather than giving anything else, your presence, hugs,<br/>
kisses, and prayers are all that we request.<br/>
Nothing more, nothing less.</p>

        <h4>attire</h4>
        <p>Fun + chic relaxed formal.<br/>
P.S: It will be grassy and could be breezy.</p>

    </div><!-- .col-sm-10 -->
  </div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->

<article id="entourage" class="section-wrapper clearfix" data-custom-background-img="<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Randell.jpg">
  <div class="content-wrapper clearfix">

      <div id="features-carousel" class="carousel slide with-title-indicators max-height" data-height-percent="70" data-ride="carousel">
        
        <!-- Indicators - slide navigation -->
        <ol class="carousel-indicators title-indicators">
          <li data-target="#features-carousel" data-slide-to="0" class="active">Primary Sponsors</li>
          <li data-target="#features-carousel" data-slide-to="1">Maids of Honor &amp; Bridesmaids</li>
          <li data-target="#features-carousel" data-slide-to="2">Best Persons and Groomsmen</li>
          <li data-target="#features-carousel" data-slide-to="3">Little Bloomies</li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <div class="carousel-text-content">
              <h2 class="title">Primary Sponsors</h2>
              <p>To shine us light when it is the darkest.</p>
              <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-2');" class="btn btn-outline-inverse btn-sm">read more</a></p>

              <div class="content-to-populate-in-modal" id="modal-content-2">
                <p>Kuya Christian &amp; Ate Melty Kagayutan<br />
                Kuya Wewey &amp; Ate Pam Delos Santos<br />
                Ninong Raffy &amp; Ninang Aunor Baldueza<br />
                Ninong Em Dapat<br />
                Sir Jun Santera<br />
                Tito Jon Naguit<br />
                Tito Arnel Naguit<br />
                Tito Carlos Wycoco<br />
                Uncle Lando Palgan<br />
                Doc Saras Polce<br />
                Mommy Grace Robles<br />
                Tita Che Euste<br />
                Mommy Tek Sicat<br />
                Ate Leizl Serquina<br />
                Tita Tessie Borcena</p>
              </div><!-- #modal-content-2 -->
            </div>
          </div><!-- .item -->

          <div class="item">
            <div class="carousel-text-content">
              <h2 class="title">Maids of Honor &amp; Bridesmaids</h2>
              <p>To keep our souls warm with laughter and encouragement.</p>
              <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-4');" class="btn btn-outline-inverse btn-sm">read more</a></p>

              <div class="content-to-populate-in-modal" id="modal-content-4">
                <h4>Maids of Honor</h4>
                <p>Ikay &amp; Zarah</p>
                <h4>Bridesmaids</h4>
                <p>DetDet<br/>
                Jaja R.<br />
                Shy-Shy<br />
                Mara<br />
                Jaja W.</p>
              </div><!-- #modal-content-4 -->
            </div>
          </div><!-- .item -->

          <div class="item">
            <div class="carousel-text-content">
              <h2 class="title">Best Persons and Groomsmen</h2>
              <p>To stand behind us and never leave our side.</p>
              <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-5');" class="btn btn-outline-inverse btn-sm">read more</a></p>

              <div class="content-to-populate-in-modal" id="modal-content-5">
                <h4>Best Woman</h4>
                <p>Phoebe</p>
                <h4>Best Man</h4>
                <p>Steep</p>
                <h4>Groomsmen</h4>
                <p>Bok<br />
                Renz<br />
                Patrick<br />
                Miko<br />
                Rico</p>
              </div><!-- #modal-content-5 -->
            </div>
          </div><!-- .item -->
          
          <div class="item">
            <div class="carousel-text-content">
              <h2 class="title">Little Bloomies</h2>
              <p>To prepare us from having mini-P and mini-R.</p>
              <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-6');" class="btn btn-outline-inverse btn-sm">read more</a></p>

              <div class="content-to-populate-in-modal" id="modal-content-6">
                <h4>Flower Girls</h4>
                <p>Kate<br />
                Apple<br />
                Minzy<br />
                Bluebell</p>
                <h4>Bearers</h4>
                <p>Yance<br />
                R.A.<br />
                Kyre</p>
              </div><!-- #modal-content-5 -->
            </div>
          </div><!-- .item -->

        </div><!-- .carousel-inner -->

        <!-- Controls -->
        <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
        <a class="right carousel-control" href="#features-carousel" data-slide="next"></a>

      </div><!-- #about-carousel -->

  </div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->

<article id="map" class="section-wrapper clearfix" data-custom-background-img="<?php print base_path() . path_to_theme(); ?>/assets/images/Chromatic10Feet.jpg">
  <div class="content-wrapper clearfix">

      <div id="features-carousel" class="carousel slide with-title-indicators max-height" data-height-percent="70" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <div class="carousel-text-content">
              <img src="<?php print base_path() . path_to_theme(); ?>/assets/images/other_images/transp-image1.png" class="icon" alt="Getting there">
              <h2 class="title">Getting there</h2>
              <p>Where our new beginning starts.</p>
              <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-3');" class="btn btn-outline-inverse btn-sm">view map</a></p>

              <div class="content-to-populate-in-modal" id="modal-content-3">
                <p><img data-img-src="<?php print base_path() . path_to_theme(); ?>/assets/images/map.png" class="lazy full-width" alt="Lorem Ipsum"></p>
              </div><!-- #modal-content-2 -->
            </div>
          </div><!-- .item -->

        </div><!-- .carousel-inner -->

      </div><!-- #about-carousel -->

  </div><!-- .content-wrapper -->
</article><!-- .section-wrapper -->

</section><!-- #main-content -->

<!-- Footer -->
<section id="footer">

<!-- Go to Top -->
<div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

<!-- copyright text -->
<div class="footer-text-line">&copy; 2015 Pring &amp; Randell</div>
</section>
<!-- end: Footer -->