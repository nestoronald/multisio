(function ($){
    document.oncontextmenu = function(e){
        if (!e) var e = window.event;
        var tg = (window.event) ? e.srcElement : e.target;

        if(tg.nodeName == 'IMG'){
            e.preventDefault();
        }
    }

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

//v2
// $('img').bind("contextmenu", function () {
//                 alert("Right click not allowed");
//                 return false;
// });