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

    /*
	var bgpar1=0;
    var bgpar2=0;
    var degree=0;
    jQuery(".field-item >img").each(function(i){
        degree=Math.random()*-20;
        mclass=(i%2==0)?"img_collage_1":"img_collage_2";
        jQuery(this).addClass(mclass);
        var width = getRandomSize(100,  200);
        var height =  getRandomSize(100, 200);
        jQuery(this).css('height',height)
        jQuery(this).css('width',width)


    });


    function getRandomSize(min, max) {
      return Math.round(Math.random() * (max - min) + min);
    }

    var link='/scts_master/?q=notas-prensa';
    var title='Noticias';
	var url='test.igp.gob.pe/scts_master';
    jQuery("ul.contenido-destacado").append('<li class="views-row views-row-4 views-row-even"><div class="views-field views-field-title"><span class="field-content"><a href="'+link+'">'+title+'</a></span>  </div><div class="views-field views-field-field-imagen"><div class="field-content"><a href="/?q='+link+'"><img typeof="foaf:Image" src="http://'+url+'/sites/scts.igp.gob.pe/files/styles/large/public/geodinamica_unnamed1.jpg?itok=Z4FsyggY" alt="" height="360" width="480"></a></div>  </div></li>');*/
});







