<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Evercam -  Apps for IP Cameras. Get more from your camera.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="cameras, apps, integration, recording, remote storage, sharing, api, developer platform">
    <meta name="description" content="Add remote storage, sharing, time-lapses, notifications, logs, access from any mobile device. ERP Integration - for Construction Site monitoring, Manufacturing, Weighbridge and more.">
    <meta name="author" content="Evercam">
    <title>Evercam.io</title>
    <!-- Bootstrap -->
    <? include '../styles.php'; ?>
  </head>
  <body>
    <? include '../nav.php'; ?>
    <div class="alt-color">
      <header>
        <div class="banner">
          <div class="banner-content">
            <h1>Public Cameras</h1>
            <h2>A list of cameras connected to Evercam and shared publically</h2>
          </div>
        </div>
      </header>
    </div>
    <div id="public-cameras">
      <section>
        <div class="use-cases">        
          <div class="title">       
            <div class="text-content">       
              <?  $url = "https://api.evercam.io/v1/public/cameras?api_id=e30d3982&api_key=b6a5709e5767079204e1d0811abf43fc";
              $data = json_decode(file_get_contents($url));

              echo "<table>
              <th>Camera Name</th>
              <th>ID</th>
              <th>Owner</th>
              <th>JPG URL</th>
              <th>Location</th>
              ";
              foreach ($data->cameras as $title => $cameras) {
              echo "<tr>";

              echo "
              <td>{$cameras->name}</td>
              <td>{$cameras->id}</td>
              <td>{$cameras->owner}</td>
              <td>{$cameras->proxy_url->jpg}</td>
              <td>{$cameras->location->lat},{$cameras->location->lng}</td>
              ";

              echo "</tr>";
              }
              echo "</table>"; ?>
            </div>
          </div>
        </div>
      </section>
    </div>
    <? include '../footer.php'; ?>
  </body>
</html>