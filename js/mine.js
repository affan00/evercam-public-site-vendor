///////////////////////////////////////
//HOME PAGE Code Box
///////////////////////////////////////
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48470473-1', 'auto', {'allowLinker': true});
  ga('require', 'linker');
  ga('linker:autoLink', ['dashboard.evercam.io', 'api.evercam.io'] );
  ga('send', 'pageview');

// Using jQuery Event API v1.3
$('#create-account').on('click', function() {
  ga('send', 'event', 'create-accont-button', 'click', 'nav-buttons');
});
$('#sign-in').on('click', function() {
  ga('send', 'event', 'sign-in-menu', 'click', 'nav-buttons');
});

 
function admSelectCheck(nameSelect){
    if(nameSelect.value){
        var preElements = document.getElementsByClassName('prettyprint');
        for(var i=0; i < preElements.length; i++){
            //if the class contains the selected value, then show it, else hide it
            preElements[i].style.display = preElements[i].classList.contains(nameSelect.value)?'block':'none';
        }
    }
}
window.onload = function (){
    document.getElementById('getFname').onchange();
}

///////////////////////////////////////
// 
///////////////////////////////////////


///////////////////////////////////////
// Google Analytics
///////////////////////////////////////


