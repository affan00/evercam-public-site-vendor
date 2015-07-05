function getLastParam()
{
  var href = window.location.pathname.split('/');
  var param = href[href.length - 1];
  if (param.toLowerCase() === "models")
    return "";
  return param;
}

function initModels() {
  var model_id = getLastParam();

  if (model_id) {
    // show model details
    $.ajax({
      type: 'GET',
      url: 'https://api.evercam.io/v1/models/' + model_id,
      success: function(response) {
        $("#heading").html(response.models[0].name);
        $("#sub-heading").html("Vendor: <a href='/vendors/" + response.models[0].vendor_id + "'>" + response.models[0].vendor_id + "</a>");
        
        $("#image").attr("src", "http://evercam-public-assets.s3.amazonaws.com/" + response.models[0].vendor_id + "/" + response.models[0].id + "/thumbnail.jpg");
        $("#image").show();

        if (response.models[0].jpg_url) {
          $("#h2_jpgUrl").show();
          $("#jpgUrl").text(response.models[0].jpg_url);
        }
        if (response.models[0].mjpg_url) {
          $("#h2_mjpgUrl").show();
          $("#mjpgUrl").text(response.models[0].mjpg_url);
        }
        if (response.models[0].h264_url) {
          $("#h2_h264Url").show();
          $("#h264Url").text(response.models[0].h264_url);
        }
        if (response.models[0].shape) {
          $("#h2_shape").show();
          $("#shape").text(response.models[0].shape);
        }
        if (response.models[0].resolution) {
          $("#h2_resolution").show();
          $("#resolution").text(response.models[0].resolution);
        }
        if (response.models[0].official_url) {
          $("#h2_official_url").show();
          $("#official_url").text(response.models[0].official_url);
        }
        if (response.models[0].audio_url) {
          $("#h2_audio_url").show();
          $("#audio_url").text(response.models[0].audio_url);
        }
        if (response.models[0].more_info) {
          $("#h2_more_info").show();
          $("#more_info").text(response.models[0].more_info);
        }
        if (response.models[0].poe) {
          $("#h2_poe").show();
          $("#poe").text(response.models[0].poe);
        }
        if (response.models[0].wifi) {
          $("#h2_wifi").show();
          $("#wifi").text(response.models[0].wifi);
        }
        if (response.models[0].upnp) {
          $("#h2_upnp").show();
          $("#upnp").text(response.models[0].upnp);
        }
        if (response.models[0].ptz) {
          $("#h2_ptz").show();
          $("#ptz").text(response.models[0].ptz);
        }
        if (response.models[0].infrared) {
          $("#h2_infrared").show();
          $("#infrared").text(response.models[0].infrared);
        }
        if (response.models[0].varifocal) {
          $("#h2_varifocal").show();
          $("#varifocal").text(response.models[0].varifocal);
        }
        if (response.models[0].sd_card) {
          $("#h2_sd_card").show();
          $("#sd_card").text(response.models[0].sd_card);
        }
        if (response.models[0].audio_io) {
          $("#h2_audio_io").show();
          $("#audio_io").text(response.models[0].audio_io);
        }
        if (response.models[0].onvif) {
          $("#h2_onvif").show();
          $("#onvif").text(response.models[0].onvif);
        }
        if (response.models[0].psia) {
          $("#h2_psia").show();
          $("#psia").text(response.models[0].psia);
        }
        if (response.models[0].discontinued) {
          $("#h2_discontinued").show();
          $("#discontinued").text(response.models[0].discontinued);
        }
        if (response.models[0].default_username) {
          $("#h2_username").show();
          $("#username").text(response.models[0].default_username);
        }
        if (response.models[0].default_password) {
          $("#h2_password").show();
          $("#password").text(response.models[0].default_password);
        }
      },
      error: function(response){
        $("#image").hide();
        console.log("LoadModel Err: " + response.message);
      },
    });

    $("#modelDetails").show();
  }
  else    // show all models' list
  {
    $("#heading").html("Models List");
    $("#sub-heading").html("List of camera models supported by Evercam");
    // show all model list
    $("#loading").show();
    $.ajax({
      type: 'GET',
      url: 'https://api.evercam.io/v1/models?limit=5000',
      success: function(response) {
        for (var i = 0; i < response.models.length; i++) {
          tr = $('<tr/>');
          tr.append("<td style='width:100px; text-align:center;'><a href='/models/" + response.models[i].id + "'><img src='http://evercam-public-assets.s3.amazonaws.com/" + response.models[i].vendor_id + "/" + response.models[i].id + "/icon.jpg' style='width:auto; max-height:64px; max-width:150px;' alt='" + response.models[i].id + "' /></a></td>");
          tr.append("<td style='width:auto;'><a href='/models/" + response.models[i].id + "'>" + response.models[i].name + "</a></td>");
          tr.append("<td style='width:auto;'><a href='/vendors/" + response.models[i].vendor_id + "'>" + response.models[i].vendor_id + "</a></td>");
          
          var defaults = "";
          if (response.models[i].jpg_url)
            tr.append("<td>" + response.models[i].jpg_url + "</td>");
          else
            tr.append("<td></td>");
          if (response.models[i].mjpg_url)
            tr.append("<td>" + response.models[i].mjpg_url + "</td>");
          else
            tr.append("<td></td>");
          if (response.models[i].h264_rul)
            tr.append("<td>" + response.models[i].h264_rul + "</td>");
          else
            tr.append("<td></td>");

          $('#modelsTable').append(tr);
        }
        $('#modelsTable').show();

        $('#modelsTable').DataTable({
          "iDisplayLength": 50,
          "aaSorting": [1, "asc"]
        });

        $("#loading").hide();
        $("#modelList").show();
      },
      error: function(response){
        $("#loading").hide();
        console.log("LoadVendorModels Err: " + response.message);
      },
    });
  }
}