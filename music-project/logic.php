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


const allNotes = [
    {
      unique:'c2',
      note:'c'
    },
    {
      unique:'csharp2',
      note:['csharp','db']

    },
    {
      unique:'d2',
      note:'d'
    },
    {
      unique:'dsharp2',
      note:['dsharp','eb']

    },
    {
      unique: 'e2',
      note:'e'
    },
    {
      unique: 'esharp2',
      note:['esharp','fb']

    },
    {
      unique: 'f2',
      note:'f'
    },
    {
      unique: 'fsharp2',
      note:['fsharp','gb']

    },
    {
      unique: 'g2',
      note:'g'
    },
    {
      unique: 'gsharp2',
      note:['gsharp','ab']

    },
    {
      unique: 'a2',
      note:'a'
    },
    {
      unique: 'asharp2',
      note:['asharp','bb']

    },
    {
      unique: 'b2',
      note:'b'
    },
    {
      unique: 'bsharp2',
      note:['bsharp','cb']

    },
    {
      unique:'c3',
      note:'c'
    },
    {
      unique:'csharp3',
      note:['csharp','db']

    },
    {
      unique:'d3',
      note:'d'
    },
    {
      unique:'dsharp3',
      note:['dsharp','eb']

    },
    {
      unique: 'e3',
      note:'e'
    },
    {
      unique: 'esharp3',
      note:['esharp','fb']

    },
    {
      unique: 'f3',
      note:'f'
    },
    {
      unique: 'fsharp3',
      note:['fsharp','gb']

    },
    {
      unique: 'g3',
      note:'g'
    },
    {
      unique: 'gsharp3',
      note:['gsharp','ab']

    },
    {
      unique: 'a3',
      note:'a'
    },
    {
      unique: 'asharp3',
      note:['asharp','bb']

    },
    {
      unique: 'b3',
      note:'b'
    },
    {
      unique: 'bsharp3',
      note:['bsharp','cb']
    },
    {
      unique:'c4',
      note:'c'
    },
    {
      unique:'csharp4',
      note:['csharp','db']

    },
    {
      unique:'d4',
      note:'d'
    },
    {
      unique:'dsharp4',
      note:['dsharp','eb']

    },
    {
      unique: 'e4',
      note:'e'
    },
    {
      unique: 'esharp4',
      note:['esharp','fb']

    },
    {
      unique: 'f4',
      note:'f'
    },
    {
      unique: 'fsharp4',
      note:['fsharp','gb']

    },
    {
      unique: 'g4',
      note:'g'
    },
    {
      unique: 'gsharp4',
      note:['gsharp','ab']

    },
    {
      unique: 'a4',
      note:'a'
    },
    {
      unique: 'asharp4',
      note:['asharp','bb']

    },
    {
      unique: 'b4',
      note:'b'
    },
    {
      unique: 'bsharp4',
      note:['bsharp','cb']
    },
    {
      unique:'c5',
      note:'c'
    },
    {
      unique:'csharp5',
      note:['csharp','db']

    },
    {
      unique:'d5',
      note:'d'
    },
    {
      unique:'dsharp5',
      note:['dsharp','eb']

    },
    {
      unique: 'e5',
      note:'e'
    },
    {
      unique: 'esharp5',
      note:['esharp','fb']

    },
    {
      unique: 'f5',
      note:'f'
    },
    {
      unique: 'fsharp5',
      note:['fsharp','gb']

    },
    {
      unique: 'g5',
      note:'g'
    },
    {
      unique: 'gsharp5',
      note:['gsharp','ab']

    },
    {
      unique: 'a5',
      note:'a'
    },
    {
      unique: 'asharp5',
      note:['asharp','bb']

    },
    {
      unique: 'b5',
      note:'b'
    },
    {
      unique: 'bsharp5',
      note:['bsharp','cb']
    },
    {
      unique:'c6',
      note:'c'
    },
    {
      unique:'csharp6',
      note:['csharp','db']
    }
]

const bassClef = allNotes.slice(0,32);
const trebleClef = allNotes.slice(24,70);
const masterClef = allNotes.slice(0,70);

// Gets Maj Scale objects from allNotes
const getCMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "c" ||
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"] == "f" ||
    noteInfo["note"] == "g" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b"
  ))
});

const getGMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "g" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"] == "c" ||
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "fsharp"
  ))
});


const getDMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "fsharp" ||
    noteInfo["note"] == "g" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "csharp"
  ))
});

const getAMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "csharp" ||
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "fsharp" ||
    noteInfo["note"][0] == "gsharp"
  ))
});

const getEMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "fsharp" ||
    noteInfo["note"][0] == "gsharp" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "csharp" ||
    noteInfo["note"][0] == "dsharp"
  ))
});

const getBMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "csharp" ||
    noteInfo["note"][0] == "dsharp" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "fsharp" ||
    noteInfo["note"][0] == "gsharp" ||
    noteInfo["note"][0] == "asharp"
  ))
});

const getFMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "f" ||
    noteInfo["note"] == "g" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"][1] == "bb" ||
    noteInfo["note"] == "c" ||
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e"
  ))
});


// Gets Unique Note values from corresponding scales
const cMajUnique = getCMajScale.map(a => a.unique);
const dMajUnique = getDMajScale.map(a => a.unique);
const eMajUnique = getEMajScale.map(a => a.unique);
const gMajUnique = getGMajScale.map(a => a.unique);
const aMajUnique = getAMajScale.map(a => a.unique);
const bMajUnique = getBMajScale.map(a => a.unique);


// All Chord Data with Indexes based off corresponding Unique Scales
  const cMajorChords = [
    {
      "position": "root",
      "chords": [
        {
          "scale degree": "I",
          "notes": [
                    [0,2,4],
                    [7,9,11],
                    [14,16,18],
                    [21,23,25]
                  ],
          "chord-name": "notes[0][0]"
        },
        {
          "scale degree": "IV",
          "notes": [
                    [3,5,7],
                    [10,12,14],
                    [17,19,21],
                    [24,26,28]
                  ],
          "chord-name": "notes[0][0]"
        },
        {
          "scale degree": "V",
          "notes": [
                    [4,6,8],
                    [11,13,15],
                    [18,20,22]
                  ],
          "chord-name": "notes[0][0]"
        },
      ]
    },
    {
      "position": "first-inversion",
      "chords": [
        {
          "scale degree": "I",
          "notes": [
                    [2,4,7],
                    [9,11,14],
                    [16,18,21],
                    [23,25,28]
                  ],
          "chord-name": "notes[0][0]"
        },
        {
          "scale degree": "IV",
          "notes": [
                    [5,7,10],
                    [12,14,17],
                    [19,21,24]
                  ],
          "chord-name": "notes[0][0]"
        },
        {
          "scale degree": "V",
          "notes": [
                    [6,8,11],
                    [13,15,18],
                    [20,22,25]
                  ],
          "chord-name": "notes[0][0]"
        },
      ]
    },
    {
      "position": "second-inversion",
      "chords": [
        {
          "scale degree": "I",
          "notes": [
                    [4,7,9],
                    [11,14,16],
                    [18,21,23]
                  ],
          "chord-name": "notes[0][0]"
        },
        {
          "scale degree": "IV",
          "notes": [
                    [0,3,5],
                    [7,10,12],
                    [14,17,19],
                    [21,24,26]
                  ],
          "chord-name": "notes[0][0]"
        },
        {
          "scale degree": "V",
          "notes": [
                    [1,4,6],
                    [8,11,13],
                    [15,18,20],
                    [22,25,27]
                  ],
          "chord-name": "notes[0][0]"
        },
      ]
    },
  ];

  const cMinorChords = [
    {
      "position": "root",
      "chords": [
        {
          "scale degree": "ii",
          "notes": [
                    [1,3,5],
                    [8,10,12],
                    [15,17,19],
                    [22,24,26]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
        {
          "scale degree": "iii",
          "notes": [
                    [2,4,6],
                    [9,11,13],
                    [16,18,20],
                    [23,25,27]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
        {
          "scale degree": "vi",
          "notes": [
                    [5,7,9],
                    [12,14,16],
                    [19,21,23]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
      ]
    },
    {
      "position": "first-inversion",
      "chords": [
        {
          "scale degree": "ii",
          "notes": [
                    [3,5,8],
                    [10,12,15],
                    [17,19,22]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
        {
          "scale degree": "iii",
          "notes": [
                    [4,6,9],
                    [11,13,16],
                    [18,20,23]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
        {
          "scale degree": "vi",
          "notes": [
                    [0,2,5],
                    [7,9,12],
                    [14,16,19],
                    [21,23,26]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
      ]
    },
    {
      "position": "second-inversion",
      "chords": [
        {
          "scale degree": "ii",
          "notes": [
                    [5,8,10],
                    [12,15,17],
                    [19,22,24]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
        {
          "scale degree": "iii",
          "notes": [
                    [6,9,11],
                    [13,16,18],
                    [20,23,25]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
        {
          "scale degree": "vi",
          "notes": [
                    [2,5,7],
                    [9,12,14],
                    [16,19,21],
                    [23,26,28]
                  ],
          "chord-name": "notes[0][0]" + "m"
        },
      ]
    }
  ]


  // Pulls just the first object in cMajorChords
  const getMajRootChordObjects = cMajorChords.filter(function(chord) {
    return chord.position == "root"
  });

// Pulls just the "chords" Array within the first object
  const getMajRootChords = getMajRootChordObjects[0].chords


// This combines all the keys from the different objects within "chords" and makes new arrays with them
  function combineRootChords(getMajRootChords) {
    var output = {}, item;
    // iterate the outer array to look at each item in that array
    for (var i = 0; i < getMajRootChords.length; i++) {
        item = getMajRootChords[i];
        // iterate each key on the object
        for (var prop in item) {
            if (item.hasOwnProperty(prop)) {
                // if this keys doesn't exist in the output object, add it
                if (!(prop in output)) {
                    output[prop] = [];
                }
                // add data onto the end of the key's array
                output[prop].push(item[prop]);
            }
        }
    }
    return output;
}

var combineRootChordArrays = combineRootChords(getMajRootChords);

// This pulls only the "notes" array from new arrays just made
const selectOnlyRootChords = combineRootChordArrays.notes;


const fuck = Object.values(selectOnlyRootChords);
// colors will be equal to ["brown", "white", "red"]




//Once I can figure out how to randomly select one of the values from above, I can then put that in the
// function below which will compare the [3,4,5] index against the note value and give me a chord



Finds chord Elements from Unique Scale Variables
  const majorRoot = cMajorChords[0].chords[0].notes;

  const testChordNotes = function(arrOfNotes,arrOfIndexes) {
    var chordNotes = [];
    for (var i = 0; i < arrOfNotes.length; i++) {
      console.log(i)
      for (var j = 0; j < arrOfIndexes.length; j++) {
        if (arrOfIndexes[j] === i) {
          chordNotes.push(arrOfNotes[i])
        }
        console.log(arrOfIndexes[j])
      }
    }
    return chordNotes
  };

  const cTestChord = testChordNotes(cMajUnique,majorRoot);



// ffdsfdsf
// fdsfdsfsdfsdf
// sdfsdfsdffds
// dfsfdsfdsfds
// dsfdsfsd
// dfsfdsfdsfds












// ffdsfdsf
// fdsfdsfsdfsdf
// sdfsdfsdffds
// dfsfdsfdsfds
// dsfdsfsd
// dfsfdsfdsfds



  $('button').on('click', function() {
    // const testChordIds = '#'+cTestChord.toString().replace(/,/g,',#')
    // $(testChordIds).addClass('visible');
    // console.log(testChordIds);
    // console.log(majorRoot);
    // console.log(cMajUnique);
    const blah = []
    for (var i = 0; i < cMajorChords.length; i++) {
    	for (var j = 0; j < cMajorChords[i].chords.length; j++) {
        for (var k = 0; k < cMajorChords[i].chords[j].notes.length; k++) {
          blah.push(cMajorChords[i].chords[j].notes[k]);
        }
      }
    }

    console.log(blah)

    });


</script>


</body>
</html>
