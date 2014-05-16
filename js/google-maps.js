///////////////////////////////////////
// Contact Page Map
///////////////////////////////////////
 function initialize()
{
    var latlng = new google.maps.LatLng(53.354393, -6.263232);
    var latlng2 = new google.maps.LatLng(37.3864953,-122.0841289);
    var myOptions =
    {
        zoom: 14,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,

    };
    
    var image = '/img/evercam-location.png';

    var myOptions2 =
    {
        zoom: 10,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    
    var map2 = new google.maps.Map(document.getElementById("map2"), myOptions2);

    var myMarker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        icon: image,
        title:"Dublin"
   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        icon: image,   
        title:"California"
    });
}
