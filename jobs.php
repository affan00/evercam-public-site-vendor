<?php require('wordpress/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABPVJREFUeNrsW01IFFEcf5tiaV8rUkpEaEinwo0gOgRtdCkIM/BQXVSqQxDhXiIqOlV006RbReulOnSo8NAlUujQzZUiKKSvQ6QRbh+imVTvN7yN3XXe/83778zu2O4fhlndnXnz+73/93sjREUqUtYSCXqA8f27ovIUl0dMHm3yiKrP0byfpuWRUucx9Xm4dWgkvegIkKCb5alDHl0KbCECIgblcV+S8S7UBEjg3Qp0PKAJGwYZkohkqAiQwDHbffJoLpLpQhMSkoj7JSVAqfqtAGfci0b0FGIaSwpU99ESghdq7FH1LMXTADkgZp09aM3GVlG1fIWoXtskqhubcr6bfZ5yzjPqbCFJqQk9gRKgQtoTW88OwMt37BS1m2Ni2Rbvl869GRczL1Li++NHzmePEWO3TeiMBAV+iZzh1Qc6xco9e52ZLlSgGVN3kl40w4oEGwJGvYAH8Poj3WJ1e2cgRg8iJvuviPnJTyQJkoCtvhHg1eYBGuBBQpDye/qH+HL9mmMahfqEiAfw3SrUkbO+pveMY+fFlM9SEwwk9JiSpoiHOD/qkrfngF93ud9xdKUQAwnwA1upPMGUB9wKM3gINK9WH1miRu01pLfxMIPPSOO5i5TfiSss1hrQRw3acPxkKMBnJgPPw8ES4Tg+ODuwzpXpZ0/F3Nvxf1kfBAmSbaKULx+OHqLCo6tDrNb8uMvk8bnAEb7cHhIJzpQ8w54bjvG0CyEYTpHAlDRqgPL8b6lB6g/blwEeQpYv/sWgBS35EcHNB3SQ6S0jw7MBn0l0Pp7tNWV7WvMkpMOLE9SqP/J62ywPwG3AZ5NAqLOgnpGQLpIAVfDEmDd3lanb/O4V/IKtFsBsiEmKKYxaDdDGfVR0tjY5ywDg5jhtpZaOJHGKgBjzpu4z+CIlChWYAqfhQkiMCoNtzJu6R4zDvIhRqNS0kM/aRmmANu9f2hKOrM+LVNGOOsoygcUkhkgVY2lAISlq0U2ANteoTTn830uFgAoBC1tI2qTmP5E0RUCqDCY9RSVCaSqrs40ESGO/PbwXag3IJ2BMVw7PT9jn9EtlOJoJn+mMsUyAAwQFVG348ocURcCw7ipUdR4XKBfUA35kdugQccpxF8nBWJX9x8Dr97OnNjXDBFxXMyM1NaJu23Y7LWhsciq6n69esp947ekLzrjo9uB+iEh/fs2xZr91aOSqKQ8Y1F2Nzg6nPEXLmjN7mHl0n7PbXLjP+oEb3Jb8AmxV+f+QGgBv1+t2NViHFnDs2gER8Z5PAGCTBO82FohZta+do1knpJbnRAHdusAToekOYfANN++yV4DhS74+uOeESLduEYiqk4dXjcF90Dv0oJnYc7h7gVlrCIDnCmxhJLvbk3GsIJS70oT7TFw6b4pUB912lWlXhyUJWBto1n2PxRGfvLJvgh0kmibsOwm+xbYYSlCDYYWHExZL1AjRYjHtD9D6guz4HIZFUkQozTqCq+17LYd7qPogs4JTak0gwKcVBl4/QK2jJUwOCCRw+vd+2T2xgpQw7SL1dZMUnCKSnqA3SWXCKYATnt+fTVJZJIRimxw07qsssZFLELHf321yioCSbpTEjMPWDcAz1Z7/GyU5JGSntYt+qyzHJ1CELMrN0i7pMjYfRUPQ4kpw3yIp+xcmKq/M+PlUZfvSlMY0yu+1OSJ0xkVIX5ysSEXKXP4KMAA0TEMOSBp2iAAAAABJRU5ErkJggg==">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Evercam.io | Jobs</title>

    <? include 'styles.php'; ?>
</head>
  <body>
   
   <? include 'header.php'; ?>  
      
  <div class="container">     
    <div class="col-md-10 col-md-offset-1" id="jobs-home">
      
    <div class="row header">
      <h3><a href="/jobs">evercam.io<span class="bold">/jobs</span></a></h3>
    </div>
      
      <?php
      $args = array( 'numberposts' => 10, 'post_status'=>"publish",'post_type'=>"jobs",'orderby'=>"post_date");
      $postslist = get_posts( $args );
      foreach ($postslist as $post) : setup_postdata($post); ?>
         <div class="row article">
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_date(); ?></p>
                     <p><?php the_excerpt(); ?></p>
        </div>
      <?php endforeach; ?> 
    </div>


    <div class="col-md-3 col-sm-3 col-xs-12 empty"></div>
  </div>


    <? include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
