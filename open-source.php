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
      <li>Transition of our roadmap from internal trello boards to Github milestones &amp; issues.</li>
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
  </section> 
  <section> 
    <h3>What's What</h3>
    <img src="img/whats-what.png" class="image">
    <table class="table table-responsive">
    <tr>
    <th class="col-md-3">
      The Main Event
    </th>
    </tr>
    <tr>
      <td>
      <a href="https://github.com/evercam/evercam-devops" target="_blank"><i class="fa fa-github"></i> evercam-devops</a>
      </td>
      <td class="col-md-4">
      Developer Environment / Setup Script
      </td>
      <td>
      </td>
    </tr>
    <tr>
      <td>
      <a href="https://github.com/evercam/evercam-proxy" target="_blank"><i class="fa fa-github"></i> evercam-proxy</a>
      </td>
      <td>
    The Proxy (talks to the camera)
      </td>
      <td>
    Elixir
      </td>
    </tr>
    <tr>
      <td>
      <a href="https://github.com/evercam/evercam-api" target="_blank"><i class="fa fa-github"></i> evercam-api</a>
      </td>
      <td>
    The API (between clients & proxy)
      </td>
      <td>
    Ruby (Sinatra)
      </td>
    </tr>
    </table>
    <table class="table table-responsive">
      <th class="col-md-3">
      The Clients
      </th>
      <tr>
        <td>
        <a href="https://github.com/evercam/evercam-dashboard" target="_blank"><i class="fa fa-github"></i> evercam-dash</a>
        </td>
        <td class="col-md-4">
          HTML5 Dashboard
        </td>
        <td>
        Ruby on Rails
        </td>
      </tr>
      <tr>
        <td>
        <a href="https://github.com/evercam/evercam-play-android" target="_blank"><i class="fa fa-github"></i> evercam-play-android</a>
        </td>
        <td>
      Android App
        </td>
        <td>
      Java
        </td>
      </tr>
      <tr>
        <td>
          <a href="https://github.com/evercam/evercam-play-ios" target="_blank"><i class="fa fa-github"></i> evercam-play-iOS</a>
        </td>
        <td>
      iOS App
        </td>
        <td>
      Objective C
        </td>
      </tr>
    </table>
    <table class="table table-responsive">
      <th>
      Wrappers
      </th>
        
      <tr>
        <td class="col-md-1 wrappers">
          <a href="https://github.com/evercam/evercam-ruby" target="_blank"><i class="fa fa-github"></i> Ruby   </a>
        
          <a href="https://github.com/evercam/evercam.js" target="_blank"><i class="fa fa-github"></i> Javascript</a>
            
          <a href="https://github.com/evercam/evercam.py" target="_blank"><i class="fa fa-github"></i> Python    </a>
        
          <a href="https://github.com/evercam/evercam.java" target="_blank"><i class="fa fa-github"></i> Java</a>   
        
          <a href="https://github.com/evercam/evercam.net" target="_blank"><i class="fa fa-github"></i> .NET</a>
        </td>
      </tr>
    </table>
  </section>
  
  <section> 
    <h3>Licences</h3>
 
    <h2>Evercam Server &amp; Clients</h2>
    <ul>
    <li>Free Software Foundation’s <a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank">GNU AGPL v3.0.</a> Or read a nice <a href="https://tldrlegal.com/license/gnu-affero-general-public-license-v3-(agpl-3.0)" target="_blank">Quick Summary</a> </li>
    <li>Commercial licenses are also available from Evercam, including free evaluation licenses.</li>
    </ul> 
    <h2>Wrappers &amp; Other Applications</h2>
    <ul>
      <li>
        Licenced Under <a href="https://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache 2.0</a>. Or read a nice <a href="https://tldrlegal.com/license/apache-license-2.0-(apache-2.0)" target="_blank">Quick Summary</a>
      </li>
      <li>
        Third parties have created wrappers too; licenses will vary there.
      </li>
    </ul> 
    <h2>Documentation</h2>
    <ul>
      <li>
        Documentation: <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">Creative Commons</a>.
      </li>
    </ul> 
    <h2>Commercial</h2>
    <p>
      If the above isn’t enough to satisfy your organization’s legal department, please contact Evercam – commercial licenses are available including free evaluation licenses. We will try hard to make the situation work for everyone.
    </p> 
    <h2>Evercam Trademark Guidelines</h2>
    <p>
     Evercam and the Evercam logo are registered trademarks of Camba.tv Ltd. Your use of these trademarks is subject to the Evercam Trademark Standards for Use. For trademark use approval, or any questions you have about using these trademarks, please email marco@evercam.io.
    </p>
  </section>

  <section> 
    <h3>Contributions</h3>
    <p>
     We would love to hear your ideas and/or pull requests. We’re putting in place a CLA, most likely based on the Harmony Docs.
    </p>
  </section>

  <section> 
    <h3>Security Issues</h3>
    <p>
     If you spot a security related issue, please contact us directly on marco@evercam.io 
    </p>
  </section>


<? include 'footer.php'; ?>
</body>
</html>
