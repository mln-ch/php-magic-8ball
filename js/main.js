$(document).ready(function () {
    console.log("collaudo");

    $('.buff').hover(function () {
            $('.eyeball').removeClass('move focus').css({
                'top':'47%',
                'left': '47%'
            }).addClass('buffering');
            
        }, function () {
            $('.eyeball').removeClass('buffering').addClass('move focus');
        }
    );

    //  var ball = $('.move');
    //  $(document).mousemove(function () {
    //      var x = event.clientX * 100 / window.innerWidth + "%";
    //      var y = event.clientY * 100 / window.innerHeight + "%";
    //      //event.clientX => get the horizontal coordinate of the mouse
    //      //event.clientY => get the vertical coordinate of the mouse
    //      //window.innerwidth => get the browser width
    //      //window.innerheight => get the browser height

    //      for (var i=0;i<2;i++) {

    //          ball[i].style.left = x;
    //          ball[i].style.top = y;
    //          ball[i].style.transform = "translate(-"+x+", -"+y+")";
    //      }
    //  });
     
});