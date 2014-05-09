<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

<title>Evercam.io/docs</title>

<!-- Bootstrap core CSS -->
<link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Proxima Nova -->
<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.css">   
<link rel="stylesheet" href="/fonts/proxima-nova/promina-nova.css">
<!-- Stylesheet -->
<link  rel="stylesheet" href="/css/style.css">
<link href="../css/prettify.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
 
<? include '../header.php'; ?>  

<div class="container" id="blog-home">

<!-- SIDEBAR
  ================================================== -->
<? include 'sidebar.php'; ?> 
<!-- DOCS
  ================================================== -->
<div class='col-md-10 developer'>

  <div class="row header">
    <h3>Live View Widget</h3>
    <p>Our Live View Widget will allow you to easily embed a Live View (refreshing JPEGs) from any connected camera, straight onto your site or in your app.</p>
    <div><p><span class="bold">Please Note:</span> We're currently doing some work to fix it up we should have it fixed very soon.</p></div>
  </div>

  <div class="row article">
  <p>The first step to getting the live view on your website is to put the following 2 lines of code inside the the &lt;head&gt; tag on your site:</p>
<pre><code>&lt;script src="<a href="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" target="_blank">http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js</a>"&gt;&lt;/script&gt;
&lt;script src="<a href="http://cdn.evercam.io/js/v1/evercam.js'" target="_blank">http://cdn.evercam.io/js/v1/evercam.js</a>"&gt;&lt;/script&gt;
</code></pre>

<p>Then all you need to do is output the following code between the &lt;body&gt; tags on your site and you have your live view widget:</p>
<pre><code>&lt;img evercam="{your camera id here}" width="640" height="100%" refresh="2000"&gt;</code></pre>






  </div>


<div class="row footer">
    <div class='col-sm-12'>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'evercamio'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments.</a></noscript>
        <!--<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>-->
  </div>  
</div>



</div><!-- developer -->
</div><!-- container -->
<!--
<div class="trigger">
<a href="mailto:ciaran@evercam.io" data-uv-trigger class="btn">Have a Suggestion?</a>
</div>
-->
  <? include '../footer.php'; ?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../js/jquery-1.9.1.min.js"></script>
  <script src="../js/jquery.mixitup.min.js"></script>
  <script src="../js/masonry.pkgd.min.js"></script>
  <script src="../js/imagesloaded.pkgd.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  <script src="../js/init.js"></script>
  <script src="../js/uservoice.js"></script>
  <script src="../js/prettify.js"></script>
<!--    <script src="../assests/feedback_me-master/feedback_me.jquery.json" type="application/json"></script>-->

<!-- UserVoice JavaScript SDK (only needed once on a page) -->


<!-- A tab to launch the Classic Widget -->
<script>






</script>
</body>
</html>
