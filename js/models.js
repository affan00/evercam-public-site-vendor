var model_id = getParamByIndex(0);

if (model_id) {
  // show model details
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/models/' + model_id,
    success: function(response) {
      $("#heading").html(response.models[0].name);
      $("#sub-heading").html("Vendor: <a href='/vendors/?" + response.models[0].vendor_id + "'>" + response.models[0].vendor_id + "</a>");
      
      $("#image").attr("src", "http://evercam-public-assets.s3.amazonaws.com/" + response.models[0].vendor_id + "/" + response.models[0].id + "/thumbnail.jpg");
      $("#image").show();

      if (response.models[0].defaults.snapshots)
      {
        $("#jpgUrl").text(response.models[0].defaults.snapshots.jpg);
        $("#mjpgUrl").text(response.models[0].defaults.snapshots.mjpg);
        $("#h264Url").text(response.models[0].defaults.snapshots.h264);
      }
      if (response.models[0].defaults.auth && response.models[0].defaults.auth.basic)
      {
        $("#username").text(response.models[0].defaults.auth.basic.username);
        $("#password").text(response.models[0].defaults.auth.basic.password);
      }

      $("#back").show();
    },
    error: function(response){
      $("#image").hide();
      $("#back").hide();
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
  $("#back").hide();
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/models?limit=5000',
    success: function(response) {
      for (var i = 0; i < response.models.length; i++) {
        tr = $('<tr/>');
        tr.append("<td style='width:100px;'><a href='?" + response.models[i].id + "'><img src='http://evercam-public-assets.s3.amazonaws.com/" + response.models[i].vendor_id + "/" + response.models[i].id + "/icon.jpg' style='height:64px; width:auto;' alt='" + response.models[i].id + "' /></a></td>");
        tr.append("<td style='width:auto;'><a href='?" + response.models[i].id + "'>" + response.models[i].name + "</a></td>");
        tr.append("<td style='width:auto;'><a href='/vendors/?" + response.models[i].vendor_id + "'>" + response.models[i].vendor_id + "</a></td>");
        
        var defaults = "";
        if (response.models[i].defaults.snapshots.jpg)
          tr.append("<td>" + response.models[i].defaults.snapshots.jpg + "</td>");
        else
          tr.append("<td></td>");
        if (response.models[i].defaults.snapshots.mjpg)
          tr.append("<td>" + response.models[i].defaults.snapshots.mjpg + "</td>");
        else
          tr.append("<td></td>");
        if (response.models[i].defaults.snapshots.h264)
          tr.append("<td>" + response.models[i].defaults.snapshots.h264 + "</td>");
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

function getParamByIndex(sParam) {
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  if (sURLVariables)
    return sURLVariables[0];
}

function getParamByName(sParam) {
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++) {
    var sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] == sParam) {
      return sParameterName[1];
    }
  }
}