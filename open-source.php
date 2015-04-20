<!DOCTYPE html>
<html lang="en">
<head>
<title>Evercam - Licences </title>
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content=
"Evercam Licence Information"
name="description">
<meta content="evercam.io" name="author">
<meta name="keywords" content="evercam, licence, apache 2.0, AGPL, commerical">
<meta name="description" content="Evercam Licences">
<meta name="author" content="Evercam">
<link href="css/main.css" rel="stylesheet">
</head>
<body id="open-source">
<? include 'nav.php'; ?>
<header>
  <div class="banner">
    <div class="banner-content">
      <h1>Open Source</h1>
      <h2>The entire Evercam codebase is open source under either Apache 2.0 or AGPL license (see below for details). </h2>
      <h2>We made the decision to do this in April 2015 as we believe it is the best way to achieve our goal to write the best <a href="http://www.evercam.io/blog/what-is-camera-management-software/">camera management software</a> in the world. You can <a href="/blog/evercam-goes-open-source/">read about our decision here.</a></h2>
    </div>
  </div>
</header>
<div class="alt-color">
  <section> 
    <h3>Warning For Developers: </h3>
    <p>
      We wanted to go ahead and open up the codebase as soon as we possibly could. This means that it is currently far from what we would consider well prepared for external consumption. In theory it is possible to fork our server and get it up and running, in practice we’d ask you to hold off for a little longer while we get it nicely containerised and documented. The clients ( dashboard, iOS and Android ) are an easier starting point or you may be able to make pull requests directly to the server repos (evercam-media , evercam-api) with functional requests. In general though, you’re probably best sending us an email (marco@evercam.io) with some info about what you’d like to achieve.
    </p>

    <p>
    Things we need to work on a bit more before we’d be recommending anyone to dive in:
    </p>
    <ul>
    <li>Further separation of the admin and OAuth areas.</li>
    <li>Containerisation for easier deployment</li>
    <li>Better documentation, probably some Ansible playbooks.</li>
    <li>Transition of our roadmap from internal trello boards to Github milestones & issues.</li>
    </ul>

  </section>
  </div>
  <section> 
        <p>
    So, warning over and done with, if you still feel brave, here’s the starting point: 
    <br><a href="https://github.com/evercam/evercam-devops" target="_blank">https://github.com/evercam/evercam-devops</a> <small><i class="fa fa-external-link"></i></small>
    </p>

    <p>
    Meanwhile, here are some other details:
    </p>

    <h3>What's What</h3>
<img src="img/whats-what.png">
  </section>
  <section> 
    <h3>Commercial</h3>
    <p>
      If the above isn’t enough to satisfy your organization’s legal department, please contact Evercam – commercial licenses are available including free evaluation licenses. We will try hard to make the situation work for everyone.
    </p>
  </section>
  <section> 
    <h3>Evercam Trademark Guidelines</h3>
    <p>
     Evercam and the Evercam logo are registered trademarks of Camba.tv Ltd. Your use of these trademarks is subject to the Evercam Trademark Standards for Use. For trademark use approval, or any questions you have about using these trademarks, please email marco@evercam.io.
    </p>
  </section>


<? include 'footer.php'; ?>
</body>
</html>
