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

// const getArray = (array, index) => {
//       const result = [];
//       for (let i = 0; i < 8; i++) {
//         result.push(array[(index + i) % 8]);
//       }
//       return result;
//     };



const notes = ['c','csharp','d','dsharp','e','f','fsharp','g','gsharp','a','asharp','b']

function getScaleNotes(array, index) {
  const result = [];
  const length = array.length
  for (let i = 0; i < length; i++) {
    if (i%2 === 0 && i < 5) {
      result.push(array[(index + i) % length])
    }
    if (i%2 !== 0 && i > 4)
      result.push(array[(index + i) % length])
    }
    // result.push(array[index])
  return result;
};

const cMajorScale = (getScaleNotes(notes,0))
const dMajorScale = (getScaleNotes(notes,2))
const eMajorScale = (getScaleNotes(notes,4))
const fMajorScale = (getScaleNotes(notes,5))
const gMajorScale = (getScaleNotes(notes,7))
const aMajorScale = (getScaleNotes(notes,9))
const bMajorScale = (getScaleNotes(notes,11))

const MajorChordData = [
  {
    "position": "root",
    "chords": [
      {
        "scale degree": "I",
        "notes": [0,2,4]
      },
      {
        "scale degree": "IV",
        "notes": [3,5,0]
      },
      {
        "scale degree": "V",
        "notes": [4,6,1]
      },
    ]
  },
  {
    "position": "first inversion",
    "chords": [
      {
        "scale degree": "I",
        "notes": [2,4,0]
      },
      {
        "scale degree": "IV",
        "notes": [5,0,3]
      },
      {
        "scale degree": "V",
        "notes": [6,1,4]
      },
    ]
  },
  {
    "position": "second inversion",
    "chords": [
      {
        "scale degree": "I",
        "notes": [4,0,2]
      },
      {
        "scale degree": "IV",
        "notes": [0,3,5]
      },
      {
        "scale degree": "V",
        "notes": [1,4,6]
      },
    ]
  }]

const MinorChordData = [
  {
    "position": "root",
    "chords": [
      {
        "scale degree": "I",
        "notes": [1,3,5]
      },
      {
        "scale degree": "IV",
        "notes": [2,4,6]
      },
      {
        "scale degree": "V",
        "notes": [5,7,1]
      },
    ]
  },
  {
    "position": "first inversion",
    "chords": [
      {
        "scale degree": "I",
        "notes": [3,5,0]
      },
      {
        "scale degree": "IV",
        "notes": [4,6,1]
      },
      {
        "scale degree": "V",
        "notes": [0,2,5]
      },
    ]
  },
  {
    "position": "second inversion",
    "chords": [
      {
        "scale degree": "I",
        "notes": [5,8,2]
      },
      {
        "scale degree": "IV",
        "notes": [6,9,3]
      },
      {
        "scale degree": "V",
        "notes": [2,5,7]
      },
    ]
  }]

function getMainChords(chordData) {
  const result = []
  for (var i = 0; i < chordData.length; i++) {
    for (var j = 0; j < chordData[i].chords.length; j++) {
      result.push(chordData[i].chords[j].notes);
    }
  }
  return result
}

const allMajorChordArrays = getMainChords(MajorChordData)
const allMinorChordArrays = getMainChords(MinorChordData)

function getMainChordsOfKey(scale,chordArrays) {
  var result = []
  for (var i = 0; i < chordArrays.length; i++) {
    for (var j = 0; j < chordArrays[j].length; j++) {
      for (var k = 0; k < scale.length; k++) {
        if (chordArrays[i][j] === k) {
          result.push(scale[k])
        }
      }
    }
  }
  var resultConcat = []
  while(result.length) {
      resultConcat = result.splice(0,3)
      console.log(resultConcat)
    }
};

// getMainChordsOfKey(cMajorScale,allMajorChordArrays)
// getMainChordsOfKey(dMajorScale,allMajorChordArrays)
// getMainChordsOfKey(eMajorScale,allMajorChordArrays)
// getMainChordsOfKey(fMajorScale,allMajorChordArrays)
// getMainChordsOfKey(gMajorScale,allMajorChordArrays)
getMainChordsOfKey(bMajorScale,allMajorChordArrays)
// getMainChordsOfKey(bMajorScale,allMajorChordArrays)



////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////


</script>


</body>
</html>
