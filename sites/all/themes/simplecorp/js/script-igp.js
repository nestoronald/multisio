(function ($){
    //Desabilitar el click derecho de las imagenes.
	document.oncontextmenu = function(e){
        if (!e) var e = window.event;
        var tg = (window.event) ? e.srcElement : e.target;

        if(tg.nodeName == 'IMG'){
            e.preventDefault();
        }
    }
	// preformatear date


})(jQuery);
// format date for create notice, not created notice.
jQuery(document).ready(function(){
	licont=1;
 	jQuery('.list-notice-format > .row-notice-format').each(function(){
		  var txtFormat=jQuery(".views-row-"+licont+" span").html();

          var objarray=txtFormat.split(" ");
        /*month-day-year*/
          day=objarray[1];
		  month=objarray[0];
		  year=objarray[2];
		  jQuery(".views-row-"+licont+" > .views-field-created > .field-content ").html('<div class="submitted"><time class="date"><span class="month">'+month+' </span><strong class="dayigp">'+day+'</strong> <span class="year">'+ year+' </span></time></div>');
		  licont++;
    });


    /*Google maps*/
    function initialize() {
                    var latlng = new google.maps.LatLng(-12.0550685,-76.9445515);
                    var settings = {
                        zoom: 14,
                        center: latlng,
                        mapTypeControl: true,
                        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                        navigationControl: true,
                        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                        mapTypeId: google.maps.MapTypeId.ROADMAP};
                    var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
                    var contentString = '<div id="content">'+
                        '<div id="siteNotice">'+
                        '</div>'+
                        '<h3 id="firstHeading" class="firstHeading">Instituto Geofísico del Perú </h3>'+
                        '<div id="bodyContent">'+
                        '<p>- Sede Mayorazgo</p>'+
                        '</div>'+
                        '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    var companyImage = new google.maps.MarkerImage('images/visit_logo.png',
                        new google.maps.Size(71,92),
                        new google.maps.Point(0,0),
                        new google.maps.Point(36,80)
                    );

                    var companyShadow = new google.maps.MarkerImage('images/visit_logo_shadow.png',
                        new google.maps.Size(76,53),
                        new google.maps.Point(0,0),
                        new google.maps.Point(17,38));

                    var companyPos = new google.maps.LatLng(-12.0550685,-76.9445515);

                    var companyMarker = new google.maps.Marker({
                        position: companyPos,
                        map: map,
                        icon: companyImage,
                        shadow: companyShadow,
                        title: "Juega con el ZOOM",
                        zIndex: 3});


                    google.maps.event.addListener(companyMarker, 'click', function() {
                        infowindow.open(map,companyMarker);
                    });
                }
                window.onload=initialize

});







