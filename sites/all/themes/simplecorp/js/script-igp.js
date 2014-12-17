(function ($){
	 //<![CDATA[
    <!-- Begin

    document.oncontextmenu = function(){
        if (!e) var e = window.event;
        var tg = (window.event) ? e.srcElement : e.target;

        if(tg.nodeName == 'IMG'){
            e.preventDefault();
        }
    }
    // End -->
    //]]>
})(jQuery);



// $(document).ready(function(){
//     $(this).bind("contextmenu", function(e) {
//         if (!e) var e = window.event;
//         var tg = (window.event) ? e.srcElement : e.target;

//         if(tg.nodeName == 'IMG'){
//             e.preventDefault();
//         }
//     });
// });