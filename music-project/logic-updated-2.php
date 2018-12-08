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

const notes = {'1':'c'},
              {'1.5':'csharp'},
              {'2':'d'},
              {'2.5':'dsharp'},
              {'3':'e'},
              {'3.5':'f'},
              {'4':'fsharp'},
              {'4.5':'g'},
              {'5':'gsharp'},
              {'5.5':'a'},
              {'6':'asharp'},p
              {'6.5':'b'}

const basicMajorPattern = {'interval': 0},
                          {'interval': 1},
                          {'interval': 2},
                          {'interval': 2.5},
                          {'interval': 3.5},
                          {'interval': 4.5},
                          {'interval': 5.5},
                          {'interval': 0},




////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////


</script>


</body>
</html>
