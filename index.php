<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pring &amp; Randell - April 2015">
    <meta name="author" content="Pring Octaviano and Randell Benavidez">
    
    <title>Pring &amp; Randell - April 2015</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    
    <!-- Custom fonts for this template -->
    <link href='http://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href="assets/css/jquery.fullPage.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="overlay"></div>
  
    <div id="fullpage" class="pull-right">
    
        <div class="section">
            <div class="section-wrapper">
                <div class="section-content">
                    <h2><abbr title="April 11, 2015">0 4 . 1 1 . 1 5</abbr></h2>
                    <br />
                    <div class="names">Pring&nbsp;&amp;&nbsp;Randell</div>
                    <div class="location">Two Gardens, Tagaytay</div>
                </div>
            </div>
        </div>
        
        
    </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
    <script>
        $(document).ready(function() {
        	$.backstretch("assets/images/Chromatic10Hand.jpg");
            $('#fullpage').fullpage({
                anchors: ['SaveTheDate', 'OurStory', 'Entourage', 'RSVP', 'Map'],
                scrollOverflow: true,
                afterLoad: function(anchorLink, index){
                    //using anchorLink
                    if (anchorLink == 'SaveTheDate') {
                    	$.backstretch("assets/images/Chromatic10Hand.jpg", { speed: 1000 });
                    } else if (anchorLink == 'OurStory') {
                    	$.backstretch("assets/images/Chromatic10Kiss.jpg", { speed: 1000 });
                    } else if (anchorLink == 'Pre-nup') {
                    	$.backstretch("assets/images/Chromatic10Randell.jpg", { speed: 1000 });
                    } else if (anchorLink == 'Entourage') {
                    	$.backstretch("assets/images/Chromatic10Pring.jpg", { speed: 1000 });
                    } else if (anchorLink == 'RSVP') {
                    	$.backstretch("assets/images/Chromatic10GettingMarried.jpg", { speed: 1000 });
                    } else if (anchorLink == 'Map') {
                    	$.backstretch("assets/images/Chromatic10Feet.jpg", { speed: 1000 });
                    }
                },
                resize: false,
            });
        });
    </script>
    
    <!-- GA -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-2540703-8', 'auto');
      ga('send', 'pageview');
    
    </script>
  </body>
</html>