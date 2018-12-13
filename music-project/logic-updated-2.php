<!-- JS -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type='text/javascript' src='/js/main.js'></script>

<script>

$(document).ready(function() {
  document.getElementsByTagName("html")[0].style.visibility = "visible";
  // $(".settings-module").css("right","-" + settingsWidth + "px");
});


// Global Variables
var settingsWidth = $(".settings-module").width();

$(".settings").on('click', function() {
  $(".settings-module").toggleClass('show-settings');
  $(".mask").toggleClass('on');
  $(".navigation,.button-section,.grand-staff").toggleClass('slide');
});

$(".mask,.settings-close").on('click', function() {
  $(".settings-module").removeClass('show-settings');
  $(".mask").removeClass('on');
  $(".navigation,.button-section,.grand-staff").removeClass('slide');
});

$("button.options").on("click", function(){
  $(this).toggleClass("toggle");
});

$("button.correct, button.incorrect").on("click", function(){
  $(this).addClass("toggle");
});

$(".clefs button.text").on("click", function(){
  $(".clefs button.options").toggleClass("toggle");
});


////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

const notes = {
                '1':'c',
                '1.5':'c-sharp',
                '2':'d',
                '2.5':'d-sharp',
                '3':'e',
                '3.5':'f',
                '4':'f-sharp',
                '4.5':'g',
                '5':'g-sharp',
                '5.5':'a',
                '6':'a-sharp',
                '6.5':'b'
              };


const basicMajorPattern = [
                            {'start':           0.0},
                            {'whole-interval':  1.0},
                            {'whole-interval':  1.0},
                            {'half-interval':   0.5},
                            {'whole-interval':  1.0},
                            {'whole-interval':  1.0},
                            {'whole-interval':  1.0},
                            {'half-interval':   0.5}
                          ];


const fetchScale = (startNote, scalePattern) => {

}


const fetchMajorForC = {
  fetchScale('c', basicMajorPattern);
}

// for (var i = 0; i < array.length; i++) {
//   if (i%12)
// }


////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////


</script>


</body>
</html>
