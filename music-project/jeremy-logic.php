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

var allChords = [
  {
    "name": "Major root",
    "quality": "",
    "chords": [
      {
        "scale degree": "I",
        "notes": [0,2,4]
      },
      {
        "scale degree": "IV",
        "notes": [3,5,7]
      },
      {
        "scale degree": "V",
        "notes": [4,6,1]
      },
    ]
  },
  {
    "name": "Minor root",
    "quality": "m",
    "chords": [
      {
        "scale degree": "ii",
        "notes": [1,3,5]
      },
      {
        "scale degree": "iii",
        "notes": [2,4,6]
      },
      {
        "scale degree": "vi",
        "notes": [5,7,2]
      },
    ]
  },
  {
    "name": "Major Seven",
    "quality": "maj7",
    "chords": [
      {
        "scale degree": "IM7",
        "notes": [0,2,4,6]
      },
      {
        "scale degree": "IVM7",
        "notes": [3,5,7,2]
      },
    ]
  },
  {
    "name": "Dominant Seven",
    "quality": "7",
    "chords": [
      {
        "scale degree": "V7",
        "notes": [4,6,1,3]
      }
    ]
  },
  {
    "name": "Minor Seven",
    "quality": "m7",
    "chords": [
      {
        "scale degree": "ii7",
        "notes": [1,3,5,7]
      },
      {
        "scale degree": "iii7",
        "notes": [2,4,6,1]
      },
      {
        "scale degree": "vi7",
        "notes": [5,7,2,4]
      },
    ]
  },
  {
    "name": "Minor Seven Flat Five",
    "quality": "m7b5",
    "chords": [
      {
        "scale degree": "viiº7",
        "notes": [6,1,3,5],
      },
    ]
  },
  {
    "name": "Diminished",
    "quality": "º",
    "chords": [
      {
        "scale degree": "viiº",
        "notes": [6,1,3],
      },
    ]
  },
  {
    "name": "Dominant",
    "quality": "7",
    "chords": [
      {
        "scale degree": "V",
        "notes": [4,6,1,3],
      },
    ]
  },
];

function getNotes(scaleNotes, chordNotes) {
  var chordName = scaleNotes[chordNotes[0]];
  console.log("Chord: " + chordName.substring(0, chordName.length - 1));
  for (let i=0; i < chordNotes.length; i++) {
    let chordNote = (scaleNotes[chordNotes[i]]);
    console.log(chordNote.substring(0, chordNote.length - 1));
  }
};

function getChord(chords, scaleNotes) {
  for (let i=0; i < chords.length; i++) {
    console.log("------ \n");
    getNotes(scaleNotes, chords[i].notes);
  }
};

function getChordTypes(scaleNotes) {
  console.log(scaleNotes);
  // loop through all possible chord types
  for (let i=0; i < allChords.length; i++) {
    // pass through chords in chord type
    console.log("\n" + allChords[i].name);
    getChord(allChords[i].chords, scaleNotes, allChords[i].quality);
  }
};

getChordTypes(cMajorScale)

// function getScaleNotes(notes) {
//   var scaleNotes = [];
//   for (i=0; i < notes.length; i++) {
//     scaleNotes.push(allNotes[notes[i]].name);
//   }
//   console.log("Notes in this scale: \n")
//   getChordTypes(scaleNotes);
//   console.log(scaleNotes)
// };
//
// function getScale(scale) {
//   for (i=0; i < allScales.length; i++) {
//     if (!scale) {
//       console.log("No scale provided.");
//     } else {
//       if (allScales[i].name == scale) {
//         console.log("Scale: \n");
//         console.log(allScales[i].name + "\n");
//         getScaleNotes(allScales[i].notes);
//       }
//     }
//   }
// };

// getScale("F Major")






</script>


</body>
</html>
