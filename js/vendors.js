<<<<<<< HEAD
var vendor_id = getParamByIndex(0);

if (vendor_id) {
  $("#loading").show();
  // show vendor details
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/vendors/' + vendor_id,
    success: function(response) {
      $("#heading").html(response.vendors[0].name);
      if (response.vendors[0].known_macs.length > 0 && response.vendors[0].known_macs[0] != "") {
        $("#sub-heading").html("MAC: " + response.vendors[0].known_macs[0]);
      }
    },
    error: function(response){
      console.log("LoadVendor Err: " + response);
    },
  });

  // show vendor's model list
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/models?limit=500&vendor_id=' + vendor_id,
    success: function(response) {
      for (var i = 0; i < response.models.length; i++) {
        tr = $('<tr/>');
        tr.append("<td style='width:100px;'><a href='/models/?" + response.models[i].id + "'><img src='http://evercam-public-assets.s3.amazonaws.com/" + response.models[i].vendor_id + "/" + response.models[i].id + "/icon.jpg' style='height:64px; width:auto;' alt='" + response.models[i].id + "' /></a></td>");
        tr.append("<td style='width:auto;'><a href='/models/?" + response.models[i].id + "'>" + response.models[i].name + "</a></td>");
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
      $("#logo").attr("src", "http://evercam-public-assets.s3.amazonaws.com/" + vendor_id + "/logo.jpg");
      $("#logo").show();
      $("#vendorDetails").show();

      $("#back").show();
    },
    error: function(response){
      $("#logo").hide();
      $("#back").hide();
      $("#loading").hide();
      console.log("LoadVendorModels Err: " + response.message);
    },
  });
}
else    // show all vendors' list
{
  $("#heading").html("Vendors List");
  $("#sub-heading").html("List of camera vendors supported by Evercam");
  $("#loading").show();
  $("#back").hide();
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/vendors',
    success: function(response) {
      for (var i = 0; i < response.vendors.length; i++) {
        tr = $('<tr/>');
        tr.append("<td style='width:100px;'><img src='http://evercam-public-assets.s3.amazonaws.com/" + response.vendors[i].id + "/logo.jpg' style='height:auto; max-width:100px;' alt='" + response.vendors[i].id + "' /></td>");
        tr.append("<td style='width:250px;'><a href='?" + response.vendors[i].id + "'>" + response.vendors[i].name + "</a></td>");
        tr.append("<td style='width:auto; text-wrap:normal;'>" + response.vendors[i].known_macs + "</td>");
        
        $('#vendorsTable').append(tr);
      }
      $('#vendorsTable').show();

      $('#vendorsTable').DataTable({
        "iDisplayLength": 50,
        "aaSorting": [1, "asc"],
        "columnDefs": [
          {
            "render": function ( data, type, row ) 
            {
              return "<span style='word-wrap: break-word;'>" + data.replace(RegExp(",", "g"), ", ") + "</span>";
            },
            "targets": 2
          }
        ]
      });

      $("#loading").hide();
      $('#vendorList').show();
    },
    error: function(response){
      $("#loading").hide();
      console.log("LoadVendors Err: " + response.message);
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
=======
$(document).ready(function(){
  var vendor_id = getParamByIndex(0);

  if (vendor_id) {
    $("#loading").show();
    // show vendor details
    $.ajax({
      type: 'GET',
      url: 'https://api.evercam.io/v1/vendors/' + vendor_id,
      success: function(response) {
        $("#heading").html(response.vendors[0].name);
        if (response.vendors[0].known_macs.length > 0 && response.vendors[0].known_macs[0] != "") {
          $("#sub-heading").html("MAC: " + response.vendors[0].known_macs[0]);
        }
      },
      error: function(response){
        console.log("LoadVendor Err: " + response);
      },
    });

    // show vendor's model list
    $.ajax({
      type: 'GET',
      url: 'https://api.evercam.io/v1/models?limit=500&vendor_id=' + vendor_id,
      success: function(response) {
        for (var i = 0; i < response.models.length; i++) {
          tr = $('<tr/>');
          tr.append("<td style='width:100px;'><a href='/models/?" + response.models[i].id + "'><img src='http://evercam-public-assets.s3.amazonaws.com/" + response.models[i].vendor_id + "/" + response.models[i].id + "/icon.jpg' style='height:64px; width:auto;' alt='" + response.models[i].id + "' /></a></td>");
          tr.append("<td style='width:auto;'><a href='/models/?" + response.models[i].id + "'>" + response.models[i].name + "</a></td>");
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
        $("#logo").attr("src", "http://evercam-public-assets.s3.amazonaws.com/" + vendor_id + "/logo.jpg");
        $("#logo").show();
        $("#vendorDetails").show();

        $("#back").show();
      },
      error: function(response){
        $("#logo").hide();
        $("#back").hide();
        $("#loading").hide();
        console.log("LoadVendorModels Err: " + response.message);
      },
    });
  }
  else    // show all vendors' list
  {
    $("#heading").html("Vendors List");
    $("#sub-heading").html("List of camera vendors supported by Evercam");
    $("#loading").show();
    $("#back").hide();
    $.ajax({
      type: 'GET',
      url: 'https://api.evercam.io/v1/vendors',
      success: function(response) {
        for (var i = 0; i < response.vendors.length; i++) {
          tr = $('<tr/>');
          tr.append("<td style='width:100px;'><img src='http://evercam-public-assets.s3.amazonaws.com/" + response.vendors[i].id + "/logo.jpg' style='height:auto; max-width:100px;' alt='" + response.vendors[i].id + "' /></td>");
          tr.append("<td style='width:250px;'><a href='?" + response.vendors[i].id + "'>" + response.vendors[i].name + "</a></td>");
          tr.append("<td style='width:auto; text-wrap:normal;'>" + response.vendors[i].known_macs + "</td>");
          
          $('#vendorsTable').append(tr);
        }
        $('#vendorsTable').show();

        $('#vendorsTable').DataTable({
          "iDisplayLength": 50,
          "aaSorting": [1, "asc"],
          "columnDefs": [
            {
              "render": function ( data, type, row ) 
              {
                return "<span style='word-wrap: break-word;'>" + data.replace(RegExp(",", "g"), ", ") + "</span>";
              },
              "targets": 2
            }
          ]
        });

        $("#loading").hide();
        $('#vendorList').show();
      },
      error: function(response){
        $("#loading").hide();
        console.log("LoadVendors Err: " + response.message);
      },
    });
  }
});
>>>>>>> master