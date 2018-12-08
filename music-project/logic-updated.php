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


/////////////////////////////////
// Gets notes for each scale👆🏼 //
////////////////////////////////

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


// All Scales
const cMajorScale = (getScaleNotes(notes,0))
const dMajorScale = (getScaleNotes(notes,2))
const eMajorScale = (getScaleNotes(notes,4))
const fMajorScale = (getScaleNotes(notes,5))
const gMajorScale = (getScaleNotes(notes,7))
const aMajorScale = (getScaleNotes(notes,9))
const bMajorScale = (getScaleNotes(notes,11))


const allChords = [
  {
    "chord type": "major",
    "inversion": "root",
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
    "chord type": "major",
    "inversion": "first",
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
    "chord type": "major",
    "inversion": "second",
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
  },
  {
    "chord type": "minor",
    "inversion": "root",
    "chords": [
      {
        "scale degree": "II",
        "notes": [1,3,5]
      },
      {
        "scale degree": "III",
        "notes": [2,4,6]
      },
      {
        "scale degree": "VI",
        "notes": [5,0,2]
      },
    ]
  },
  {
    "chord type": "minor",
    "inversion": "first",
    "chords": [
      {
        "scale degree": "II",
        "notes": [3,5,1]
      },
      {
        "scale degree": "III",
        "notes": [4,6,2]
      },
      {
        "scale degree": "VI",
        "notes": [0,2,5]
      },
    ]
  },
  {
    "chord type": "minor",
    "inversion": "second",
    "chords": [
      {
        "scale degree": "I",
        "notes": [5,1,3]
      },
      {
        "scale degree": "IV",
        "notes": [6,2,4]
      },
      {
        "scale degree": "V",
        "notes": [2,5,0]
      },
    ]
  },
  {
    "chord type": "diminished",
    "inversion": "root",
    "chords": [
      {
        "scale degree": "VII",
        "notes": [6,1,3]
      }
    ]
  },
  {
    "chord type": "diminished",
    "inversion": "first",
    "chords": [
      {
        "scale degree": "VII",
        "notes": [1,3,6]
      }
    ]
  },
  {
    "chord type": "diminished",
    "inversion": "second",
    "chords": [
      {
        "scale degree": "VII",
        "notes": [3,6,1]
      }
    ]
  }]



///////////////////////////////////////////////////////////////////
// Replaces all numbers in "notes" above to their correct notes //
/////////////////////////////////////////////////////////////////

function getMainChordsOfKey(scale,chordArrays) {
  chordArrays.forEach(array => array.chords.forEach(chord => chord.notes = chord.notes.map(i => scale[i])));
  console.log(chordArrays);
};


// getMainChordsOfKey(aMajorScale,allChords)




// function getId(clicked_id) {
//     let param = clicked_id
//     getMainChordsOfKey(param,allChords)
// }

  $("button").on('click', function() {
    var functionName = this.id
    console.log(functionName) //returns "cMajorScale"

    getMainChordsOfKey(cMajorScale,allChords) //correctly runs the function
    getMainChordsOfKey(functionName,allChords) // does not run function (want this to do the same as 257)

  });


// console.log(cMajorScale)
// console.log(dMajorScale)
// console.log(eMajorScale)
// console.log(fMajorScale)


// function getId(clicked_id) {
//   var elem = document.getElementById('para');
//   elem.style.color = newColor;
// }




////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////

///////////////////////////////////////////
// Gets Arrays From Chord Data Arrays 👆🏼 //
//////////////////////////////////////////

// function getMainChords(chordData) {
//   const result = []
//   for (var i = 0; i < chordData.length; i++) {
//     for (var j = 0; j < chordData[i].chords.length; j++) {
//       result.push(chordData[i].chords[j].notes);
//     }
//   }
//   return result
// }

// function getMainChordsOfKey(scale,chordArrays) {
//   var result = []
//   for (var i = 0; i < chordArrays.length; i++) {
//     for (var j = 0; j < chordArrays[i].length; j++) {
//       for (var k = 0; k < scale.length; k++) {
//         if (chordArrays[i][j] === k) {
//           result.push(scale[k])
//         }
//       }
//     }
//   }
//   var resultConcat = []
//   while(result.length) {
//       resultConcat = result.splice(0,3)
//       console.log(resultConcat)
//     }
// };


</script>


</body>
</html>
