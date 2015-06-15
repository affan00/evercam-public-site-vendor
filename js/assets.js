function initAssets() {
  $("#loading").show();

  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/vendors',
    success: function(response) {
      $("#totalVendors").text(response.vendors.length);
    },
    error: function(response){
      $("#loading").hide();
      console.log("LoadVendors Err: " + response.message);
    },
  });
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/public/cameras?limit=1000',
    success: function(response) {
      $("#totalCameras").text(response.cameras.length);
    },
    error: function(response){
      console.log("LoadCameras Err: " + response.message);
    },
  });
  $.ajax({
    type: 'GET',
    url: 'https://api.evercam.io/v1/models?limit=5000',
    success: function(response) {
      $("#totalModels").text(response.models.length);
    },
    error: function(response){
      console.log("LoadModels Err: " + response.message);
    },
  });
}