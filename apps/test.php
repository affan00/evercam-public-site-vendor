<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STUDIO - WebDesignCrowd</title>

<? include '../styles.php'; ?>

  </head>

  <body class="red-blue">
    <div id="navbar" class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index_wrapbootstrap.html">STUDIO</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES<i class="icon-caret-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="team_wrapbootstrap.html">Team</a></li>
                <li><a href="features_wrapbootstrap.html">Features</a></li>
                <li><a href="blog_wrapbootstrap.html">Blog</a></li>
                <li><a href="http://webdesigncrowd.com">WebDesignCrowd</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">COLORS<i class="icon-caret-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="index_wrapbootstrap.html">Red - Blue</a></li>
                <li><a href="blue-green_wrapbootstrap.html">Blue - Green</a></li>
                <li><a href="green-yellow_wrapbootstrap.html">Green - Yellow</a></li>
              </ul>
            </li>
            <li><a id="contact" href="#" data-toggle="modal">CONTACT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>  
    <!-- All Page Modals -->  
    <div class="modals">
      <div class="modal fade" id="contact-form" tabindex="-1" role="dialog">
        <div class="wrapper">

          <div class="container text-center">
            <a class="close" data-dismiss="modal" href=""><i class="icon-remove"></i></a>            
            <h1 class="text-center">Contact Us</h1>

            <form role="form">
              <div class="form-group">
                <label for="exampleInputName"><i class="icon-tag"></i></label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name" required>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"><i class="icon-inbox"></i></label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                <div class="clearfix"></div>
              </div>
              <div class="form-group textarea">
                <label for="exampleInputMessage"><i class="icon-pencil"></i></label>
                <textarea rows="6" class="form-control" id="exampleInputMessage" placeholder="Write Message" required></textarea>
                <div class="clearfix"></div>
              </div>

              <button type="submit" class="btn">SEND MESSAGE</button>
            </form>
          </div>

        </div><!-- /.content -->      
      </div><!-- /.modal -->    
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog">
        <div class="wrapper">
          <img data-dismiss="modal" class="img-responsive" src="../img/hashcam.png" alt="">
          <h2 class="modal-title"><a href="https://www.iconfinder.com/search/?q=iconset%3Aflat-ui-free">Sintel Bedroom</a></h2>
        </div><!-- /.content -->      
      </div><!-- /.modal -->
      <div class="modal fade" id="modal2" tabindex="-1" role="dialog">
        <div class="wrapper">
          <img data-dismiss="modal" class="img-responsive" src="../img/hashcam.png" alt="">
          <h2 class="modal-title"><a href="https://www.iconfinder.com/search/?q=iconset%3Aflat-ui-free">Snowscape</a></h2>
        </div><!-- /.content -->      
      </div><!-- /.modal -->
      <div class="modal fade" id="modal3" tabindex="-1" role="dialog">
        <div class="wrapper">
          <img data-dismiss="modal" class="img-responsive" src="../img/hashcam.png" alt="">
          <h2 class="modal-title"><a href="https://www.iconfinder.com/search/?q=iconset%3Aflat-ui-free">Ishtar Wallpaper</a></h2>
        </div><!-- /.content -->      
      </div><!-- /.modal -->  
      <div class="modal fade" id="modal4" tabindex="-1" role="dialog">
        <div class="wrapper">
          <img data-dismiss="modal" class="img-responsive" src="../img/hashcam.png" alt="">
          <h2 class="modal-title"><a href="https://www.iconfinder.com/search/?q=iconset%3Aflat-ui-free">Ishtar Alley</a></h2>
        </div><!-- /.content -->      
      </div><!-- /.modal -->
      <div class="modal fade" id="modal5" tabindex="-1" role="dialog">
        <div class="wrapper">
          <img data-dismiss="modal" class="img-responsive" src="../img/hashcam.png" alt="">
          <h2 class="modal-title"><a href="https://www.iconfinder.com/search/?q=iconset%3Aflat-ui-free">Sintel Town Concept</a></h2>
        </div><!-- /.content -->      
      </div><!-- /.modal -->
    </div><!-- /.modals -->    


    <!-- Home Section -->
    <div id="home" class="section half-home">      
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12"></div>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <h1 class="welcome">Blog. Read our important updates and anything else we feel like sharing.</h1>            
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12"></div>
          </div>
        </div>        
      </div>
      <div class="dark-overlay"></div>
    </div><!-- /.container -->
    

    <!-- Home Section -->
    <div id="blog" class="section half-home">
      <div class="container">      
        <div class="row masonry-grid">
          <div class="col-md-4 col-sm-4 col-xs-12 item">
            <a data-toggle="modal" href="#modal1" class="image">
              <img src="img/sintel-bedroom.png" alt="sintel bedroom"> 
              <span class="overlay"><span class="valign"></span><i class="icon-search"></i></span>              
            </a>
            <div class="description">
              <h2>Sintel Bedroom</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              <p class="view">123<i class="icon-eye-open"></i></p><p class="favorite">123<i class="icon-heart"></i></p>
              <div class="clearfix"></div>
            </div> 		      
  		    </div>
  		    <div class="col-md-4 col-sm-4 col-xs-12 item">
            <a data-toggle="modal" href="#modal2" class="image">
              <img src="img/sintel-snowscape.jpg" alt="sintel snowscape"> 
              <span class="overlay"><span class="valign"></span><i class="icon-search"></i></span>              
            </a>
            <div class="description">
              <h2>Snowscape</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="view">123<i class="icon-eye-open"></i></p><p class="favorite">123<i class="icon-heart"></i></p>
              <div class="clearfix"></div>
            </div> 		      
    		  </div>
    		  <div class="col-md-4 col-sm-4 col-xs-12 item">
            <a data-toggle="modal" href="#modal3" class="image">
              <img src="img/sintel-wallpaper-ishtar.jpg" alt="sintel wallpaper ishtar"> 
              <span class="overlay"><span class="valign"></span><i class="icon-search"></i></span>              
            </a>
            <div class="description">
              <h2>Ishtar Wallpaper</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
              <p class="view">123<i class="icon-eye-open"></i></p><p class="favorite">123<i class="icon-heart"></i></p>
              <div class="clearfix"></div>
            </div> 		      
    		  </div>      
    		  <div class="col-md-4 col-sm-4 col-xs-12 item">
            <a href="https://wrapbootstrap.com/theme/streamline-WB058D3H4" class="image">
              <img src="img/streamline.jpg" alt="Streamline responsive one page portfolio"> 
              <span class="overlay"><span class="valign"></span><i class="icon-search"></i></span>              
            </a>
            <div class="description">
              <h2>Streamline</h2>
              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut.</p>
              <p class="view">123<i class="icon-eye-open"></i></p><p class="favorite">123<i class="icon-heart"></i></p>
              <div class="clearfix"></div>
            </div> 		      
    		  </div>  		    		  
  		    <div class="col-md-4 col-sm-4 col-xs-12 item">
            <a data-toggle="modal" href="#modal4" class="image">
              <img src="img/ishtar-alley.png" alt="ishtar alley"> 
              <span class="overlay"><span class="valign"></span><i class="icon-search"></i></span>              
            </a>
            <div class="description">
              <h2>Ishtar Alley</h2>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <p class="view">123<i class="icon-eye-open"></i></p><p class="favorite">123<i class="icon-heart"></i></p>
              <div class="clearfix"></div>
            </div> 		      
  		    </div>
    		  <div class="col-md-4 col-sm-4 col-xs-12 item">
            <a data-toggle="modal" href="#modal5" class="image">
              <img src="img/sintel-town-concept.jpg" alt="sintel town concept"> 
              <span class="overlay"><span class="valign"></span><i class="icon-search"></i></span>              
            </a>
            <div class="description">
              <h2>Sintel Town Concept</h2>
              <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <p class="view">123<i class="icon-eye-open"></i></p><p class="favorite">123<i class="icon-heart"></i></p>
              <div class="clearfix"></div>
            </div> 		      
    		  </div>
        </div>  
      </div>
      
    </div><!-- /.container -->    

    
    <div id="footer" class="section">
      <div class="container">        
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-6">
            <h3>Contact</h3>
            <ul>
              <li><a href="http://twitter.com/webdesigncrowd">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <h3>Themes</h3>
            <ul>
              <li><a href="#">Studio</a></li>
              <li><a href="https://wrapbootstrap.com/theme/origami-responsive-multipurpose-theme-WB0P92B70">Origami</a></li>
              <li><a href="https://wrapbootstrap.com/theme/cascade-responsive-one-page-theme-WB05M9828">Cascade</a></li>
              <li><a href="https://wrapbootstrap.com/theme/streamline-WB058D3H4">Streamline</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
            <h3>Team</h3>
            <ul>
              <li><a href="#">Jane</a></li>
              <li><a href="#">Michael</a></li>
              <li><a href="#">Jessica</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <a class="logo clearfix" href="#">STUDIO</a><br />
            <p class="pull-left clearfix tagline">Tagline.</p>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <hr />
            <p>Made by <a href="http://webdesigncrowd.com">WebDesignCrowd</a></p>   

          </div>
        </div>
      </div>  
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/masonry-init.js"></script>
  </body>
</html>
