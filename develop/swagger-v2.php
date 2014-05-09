<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Evercam.io/swagger</title>
 <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.css">    
    <!-- Proxima Nova Sans -->
   <link rel="stylesheet" href="/fonts/proxima-nova/promina-nova.css">
    <!-- 
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'>        
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300, 600' rel='stylesheet' type='text/css'>-->
    
    <!-- Stylesheet -->
    <link  rel="stylesheet" href="/css/style.css">
    <link href="/css/prettify.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<link href='/docs/swagger/css/highlight.default.css' media='screen' rel='stylesheet' type='text/css'/>
<link href='/docs/swagger/css/screen.css' media='screen' rel='stylesheet' type='text/css'/>
 <script type="text/javascript" src="/docs/swagger/lib/shred.bundle.js" /></script>
 <script src='/docs/swagger/lib/jquery-1.8.0.min.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/jquery.slideto.min.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/jquery.wiggle.min.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/handlebars-1.0.0.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/underscore-min.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/backbone-min.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/swagger.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/swagger-ui.js' type='text/javascript'></script>
    <script src='/docs/swagger/lib/highlight.7.3.pack.js' type='text/javascript'></script>

    <script type="text/javascript">
      $(function () {

      window.swaggerUi = new SwaggerUi({
        url: "http://www.evercam.io/docs/swagger/swagger.json",
        dom_id: "swagger-ui-container",
        supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
        onComplete: function(swaggerApi, swaggerUi){
          $('pre code').each(function(i, e) {hljs.highlightBlock(e)});
          $('#resources h2').each( function() { $(this).next('ul').find('li:last').remove(); } );
          $("a:contains('/cameras/{id}/snapshot.jpg.json')").text('/cameras/{id}/snapshot.jpg');
        },
        onFailure: function(data) {
        },
        docExpansion: "none"
      });

      window.swaggerUi.load();

    });

    </script> 
</head>
  <body id="docs-body">
   
  <? include '../header.php'; ?>  

  <div class="container" id="docs">
  
  <!-- SIDEBAR
    ================================================== -->
  <? include 'sidebar.php'; ?> 
  

  <!-- DOCS
    ================================================== -->
  <div class='col-sm-10 developer'>
    <div class="doc">

      <div class="row header">
          <h3>API Endpoints</h3>
          <p>Welcome to the developer area. Here you'll find all the API references and links to client libraries that you'll need to get started with Evercam today.</p>
      </div>
    
 



<div id="swagger">
  <div id="swagger-ui-container" class="swagger-ui-wrap">
    &nbsp;
  </div>
</div>






   
      <div class="row footer">
          <div class='col-sm-8'>
             <h5>Get my Camera Connected!</h5>
              <p>Sometimes its difficult to get your camera connected. We know that better than anyone. We&apos;ve done our best to try make getting you set up as easy as possible but if your still having trouble getting your camera connected - we can do it for you. For €20 we will get you connected. If we can&apos;t, we&apos;ll give you your money back. Simple</p>
              <br />

              <h5>Trouble getting started?</h5>
              <p>We&apos;re always happy to help out with any technical questions or concerns you have. You can either contact us using the <a href="/contact">online</a> form or you'll usually find one of us in <a href="http://webchat.freenode.net/?randomnick=1&channels=%23evercam">#evercam</a> on IRC freenode.</p>
          
        </div>
    
      
            <div class='col-sm-4'>
              <h5>Purchase Support Ticket</h5>
           <p><i class="fa fa-ticket fa-5x"></i></p>
            </div>
     </div>


    </div><!-- doc -->
  </div><!-- developer -->
</div><!-- container -->

    <? include '../footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
    <script src="/js/init.js"></script>

   
   
  </body>
</html>
