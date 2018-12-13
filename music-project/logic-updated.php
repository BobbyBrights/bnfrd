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



const sharpNotes = ['c','c-sharp','d','d-sharp','e','f','f-sharp','g','g-sharp','a','a-sharp','b']
const flatNotes = ['c','d-flat','d','e-flat','e','f','g-flat','g','a-flat','a','b-flat','b']


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
const cMajorScale = (getScaleNotes(sharpNotes,0))
const dMajorScale = (getScaleNotes(sharpNotes,2))
const eMajorScale = (getScaleNotes(sharpNotes,4))
const fMajorScale = (getScaleNotes(flatNotes,5))
const gMajorScale = (getScaleNotes(sharpNotes,7))
const aMajorScale = (getScaleNotes(sharpNotes,9))
const bMajorScale = (getScaleNotes(sharpNotes,11))


// Scales organized
const scales = {
	"cMajorScale": cMajorScale,
  "dMajorScale": dMajorScale,
  "eMajorScale": eMajorScale,
  "fMajorScale": fMajorScale,
  "gMajorScale": gMajorScale,
  "aMajorScale": aMajorScale,
  "bMajorScale": bMajorScale
}

const allChords = [

  // Major Chords
  {
    "chord_type": "major",
    "inversion": "root",
    "scale_degree": "I",
    "notes": [0,2,4]
  },
  {
    "chord_type": "major",
    "inversion": "root",
    "scale_degree": "IV",
    "notes": [3,5,0]
  },
  {
    "chord_type": "major",
    "inversion": "root",
    "scale_degree": "V",
    "notes": [4,6,1]
  },
  {
    "chord_type": "major",
    "inversion": "first",
    "scale_degree": "I",
    "notes": [2,4,0]
  },
  {
    "chord_type": "major",
    "inversion": "first",
    "scale_degree": "IV",
    "notes": [5,0,3]
  },
  {
    "chord_type": "major",
    "inversion": "first",
    "scale_degree": "V",
    "notes": [6,1,4]
  },
  {
    "chord_type": "major",
    "inversion": "second",
    "scale_degree": "I",
    "notes": [4,0,2]
  },
  {
    "chord_type": "major",
    "inversion": "second",
    "scale_degree": "IV",
    "notes": [0,3,5]
  },
  {
    "chord_type": "major",
    "inversion": "second",
    "scale_degree": "V",
    "notes": [1,4,6]
  },

// Minor Chords

  {
    "chord_type": "minor",
    "inversion": "root",
    "scale_degree": "II",
    "notes": [1,3,5]
  },

  {
    "chord_type": "minor",
    "inversion": "root",
    "scale_degree": "III",
    "notes": [2,4,6]
  },
  {
    "chord_type": "minor",
    "inversion": "root",
    "scale_degree": "VI",
    "notes": [5,0,2]
  },
  {
    "chord_type": "minor",
    "inversion": "first",
    "scale_degree": "II",
    "notes": [3,5,1]
  },
  {
    "chord_type": "minor",
    "inversion": "first",
    "scale_degree": "III",
    "notes": [4,6,2]
  },
  {
    "chord_type": "minor",
    "inversion": "first",
    "scale_degree": "VI",
    "notes": [0,2,5]
  },
  {
    "chord_type": "minor",
    "inversion": "second",
    "scale_degree": "II",
    "notes": [5,1,3]
  },
  {
    "chord_type": "minor",
    "inversion": "second",
    "scale_degree": "III",
    "notes": [6,2,4]
  },
  {
    "chord_type": "minor",
    "inversion": "second",
    "scale_degree": "VI",
    "notes": [2,5,0]
  },

// Diminished Chords

  {
    "chord_type": "diminished",
    "inversion": "root",
    "scale_degree": "VII",
    "notes": [6,1,3]
  },
  {
    "chord_type": "diminished",
    "inversion": "first",
    "scale_degree": "VII",
    "notes": [1,3,6]
  },
  {
    "chord_type": "diminished",
    "inversion": "second",
    "scale_degree": "VII",
    "notes": [3,6,1]
  }
]


///////////////////////////////////////////////////////////////////
// Replaces all numbers in "notes" above to their correct notes //
/////////////////////////////////////////////////////////////////

function getMainChordsOfKey(scale) {
  var newChordArray = JSON.parse(JSON.stringify(allChords));
  newChordArray.forEach(array => array.notes = array.notes.map(i => scale[i]));
  for (var i = 0; i < newChordArray.length; i++) {
    newChordArray[i].key_signature = scale[0] + "_major";
  }
  return newChordArray

};



// Chords and data for each specific key

let cChords = getMainChordsOfKey(cMajorScale)
let dChords = getMainChordsOfKey(dMajorScale)
let eChords = getMainChordsOfKey(eMajorScale)
let fChords = getMainChordsOfKey(fMajorScale)
let gChords = getMainChordsOfKey(gMajorScale)
let aChords = getMainChordsOfKey(aMajorScale)
let bChords = getMainChordsOfKey(bMajorScale)


// Combines all specific key data into one array

function getAllPossibleChords() {
  var result = []
  for (var i = 0; i < cChords.length; i++) {
    result.push(cChords[i])
    result.push(dChords[i])
    result.push(eChords[i])
    result.push(fChords[i])
    result.push(gChords[i])
    result.push(aChords[i])
    result.push(bChords[i])
  }
  return result
};

// All chords for all keys!! 😎
var allPossibleChords = getAllPossibleChords()


// User applying filters

var keys = []
var values = []
$('button').on('click', function() {
      var theId = this.id
    if ($(this).hasClass("chord_type") && ($(this).hasClass("toggle"))) {
      keys.push("chord_type");
      values.push(theId)
    }

    if ($(this).hasClass("inversion") && ($(this).hasClass("toggle"))) {
      keys.push("inversion");
      values.push(theId)
    }

    if ($(this).hasClass("key_signature") && ($(this).hasClass("toggle"))) {
      keys.push("key_signature");
      values.push(theId)
    }

});

$('#apply').on('click', function() {
  // console.log(keys,values)
  const whatToFilter = allPossibleChords.filter(function(e) {
    return keys.every(function(a) {
      return values.includes(e[a])
    })
  })
  console.log(whatToFilter)
});







// console.log(rootChords)
//
// var keys = ['chord_type','inversion', 'key_signature', 'chord_type', 'key_signature'];
// var values = ['major', 'minor', 'first', 'second', 'd_major', 'e_major'];
//
// const whatToFilter = allPossibleChords.filter(function(e) {
//   return keys.every(function(a) {
//     return values.includes(e[a])
//   })
// })
//
// console.log(whatToFilter)

// var data = [{"id":"123","color":"Red","model":"Tesla"},{"id":"124","color":"Black","model":"Honda"},{"id":"125","color":"Red","model":"Audi"},{"id":"126","color":"Blue","model":"Tesla"}]
//
// var keys = ["color", 'model'];
// var values = ["Tesla", "Audi", "Red"];
//
// var result = data.filter(function(e) {
//   return keys.every(function(a) {
//     return values.includes(e[a])
//   })
// })
//
// console.log(result);





// $('button').on('click', function() {
//   const testChordIds = '#'+cTestChord.toString().replace(/,/g,',#')
//   $(testChordIds).addClass('visible');
//   const blah = []
//   for (var i = 0; i < cMajorChords.length; i++) {
//     for (var j = 0; j < cMajorChords[i].chords.length; j++) {
//       for (var k = 0; k < cMajorChords[i].chords[j].notes.length; k++) {
//         blah.push(cMajorChords[i].chords[j].notes[k]);
//       }
//     }
//   }
//
//   console.log(blah)
//
//   });

//
// var chordOptions = []
// $('button').on('click', function() {
//
//   if (this has class keysignature) {
//     if (button has class active) {
//
//     }
//     if (button has class active) {
//
//     }
//   }
//
//   if (button has class chordtype) {
//     if (button has class active) {
//
//     }
//     if (button has class active) {
//
//     }
//   }
//
//   if (button has class chordpositions) {
//     if (button has class active) {
//
//     }
//     if (button has class active) {
//
//     }
//   }
//
// });

// $('.submit').on('click', function() {
//
// });






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
