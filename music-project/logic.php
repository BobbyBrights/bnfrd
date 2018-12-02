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
});

$(".mask").on('click', function() {
  $(".settings-module").removeClass('show-settings');
  $(".mask").removeClass('on');
});




const allNotes = [
    {
      actual:'c2',
      note:'c'
    },
    {
      actual:'csharp2',
      note:['csharp','db']

    },
    {
      actual:'d2',
      note:'d'
    },
    {
      actual:'dsharp2',
      note:['dsharp','eb']

    },
    {
      actual: 'e2',
      note:'e'
    },
    {
      actual: 'esharp2',
      note:['esharp','fb']

    },
    {
      actual: 'f2',
      note:'f'
    },
    {
      actual: 'fsharp2',
      note:['fsharp','gb']

    },
    {
      actual: 'g2',
      note:'g'
    },
    {
      actual: 'gsharp2',
      note:['gsharp','ab']

    },
    {
      actual: 'a2',
      note:'a'
    },
    {
      actual: 'asharp2',
      note:['asharp','bb']

    },
    {
      actual: 'b2',
      note:'b'
    },
    {
      actual: 'bsharp2',
      note:['bsharp','cb']

    },
    {
      actual:'c3',
      note:'c'
    },
    {
      actual:'csharp3',
      note:['csharp','db']

    },
    {
      actual:'d3',
      note:'d'
    },
    {
      actual:'dsharp3',
      note:['dsharp','eb']

    },
    {
      actual: 'e3',
      note:'e'
    },
    {
      actual: 'esharp3',
      note:['esharp','fb']

    },
    {
      actual: 'f3',
      note:'f'
    },
    {
      actual: 'fsharp3',
      note:['fsharp','gb']

    },
    {
      actual: 'g3',
      note:'g'
    },
    {
      actual: 'gsharp3',
      note:['gsharp','ab']

    },
    {
      actual: 'a3',
      note:'a'
    },
    {
      actual: 'asharp3',
      note:['asharp','bb']

    },
    {
      actual: 'b3',
      note:'b'
    },
    {
      actual: 'bsharp3',
      note:['bsharp','cb']
    },
    {
      actual:'c4',
      note:'c'
    },
    {
      actual:'csharp4',
      note:['csharp','db']

    },
    {
      actual:'d4',
      note:'d'
    },
    {
      actual:'dsharp4',
      note:['dsharp','eb']

    },
    {
      actual: 'e4',
      note:'e'
    },
    {
      actual: 'esharp4',
      note:['esharp','fb']

    },
    {
      actual: 'f4',
      note:'f'
    },
    {
      actual: 'fsharp4',
      note:['fsharp','gb']

    },
    {
      actual: 'g4',
      note:'g'
    },
    {
      actual: 'gsharp4',
      note:['gsharp','ab']

    },
    {
      actual: 'a4',
      note:'a'
    },
    {
      actual: 'asharp4',
      note:['asharp','bb']

    },
    {
      actual: 'b4',
      note:'b'
    },
    {
      actual: 'bsharp4',
      note:['bsharp','cb']
    },
    {
      actual:'c5',
      note:'c'
    },
    {
      actual:'csharp5',
      note:['csharp','db']

    },
    {
      actual:'d5',
      note:'d'
    },
    {
      actual:'dsharp5',
      note:['dsharp','eb']

    },
    {
      actual: 'e5',
      note:'e'
    },
    {
      actual: 'esharp5',
      note:['esharp','fb']

    },
    {
      actual: 'f5',
      note:'f'
    },
    {
      actual: 'fsharp5',
      note:['fsharp','gb']

    },
    {
      actual: 'g5',
      note:'g'
    },
    {
      actual: 'gsharp5',
      note:['gsharp','ab']

    },
    {
      actual: 'a5',
      note:'a'
    },
    {
      actual: 'asharp5',
      note:['asharp','bb']

    },
    {
      actual: 'b5',
      note:'b'
    },
    {
      actual: 'bsharp5',
      note:['bsharp','cb']
    },
    {
      actual:'c6',
      note:'c'
    },
    {
      actual:'csharp6',
      note:['csharp','db']
    }
]

const bassClef = allNotes.slice(0,32);
const trebleClef = allNotes.slice(24,70);
const masterClef = allNotes.slice(0,70);

// Major Scales
const cMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const gMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const dMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const aMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const eMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const bMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const fMajScale = allNotes.filter(function(noteInfo, index, array) {
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

const cMajUnique = cMajScale.map(a => a.actual);
const dMajUnique = dMajScale.map(a => a.actual);
const eMajUnique = eMajScale.map(a => a.actual);
const gMajUnique = gMajScale.map(a => a.actual);
const aMajUnique = aMajScale.map(a => a.actual);
const bMajUnique = bMajScale.map(a => a.actual);

$('button').on('click', function() {
  // var x ='#'+bMajUnique.toString().replace(/,/g,',#')
  // console.log(x);
  // $(x).addClass('visible');
  console.log(cMajUnique);
  // console.log(dMajUnique);
  // console.log(eMajUnique);
  // console.log(gMajUnique);
  // console.log(aMajUnique);
  // console.log(bMajUnique);



  // const cMajorChords = [
  //   {
  //     "position": "root",
  //     "chords": [
  //       {
  //         "scale degree": "I",
  //         "notes": [0,2,4],[7,9,11],[14,16,18],[21,23,25],
  //         "chord-name": notes[0][0]
  //       },
  //       {
  //         "scale degree": "IV",
  //         "notes": [3,5,7],[10,12,14],[17,19,21],[24,26,28],
  //         "chord-name": notes[0][0]
  //       },
  //       {
  //         "scale degree": "V",
  //         "notes": [4,6,8],[11,13,15],[18,20,22],
  //         "chord-name": notes[0][0]
  //       },
  //     ]
  //   }
  // ]
  //
  // const cMinorChords = [
  //   {
  //     "position": "root",
  //     "chords": [
  //       {
  //         "scale degree": "ii",
  //         "notes": [1,3,5],[8,10,12],[15,17,19],[22,24,26],
  //         "chord-name": notes[0][0] + "m"
  //       },
  //       {
  //         "scale degree": "iii",
  //         "notes": [2,4,6],[9,11,13],[16,18,20],[23,25,27],
  //         "chord-name": notes[0][0] + "m"
  //       },
  //       {
  //         "scale degree": "vi",
  //         "notes": [5,7,2],[12,14,16],[19,21,23],
  //         "chord-name": notes[0][0] + "m"
  //       },
  //     ]
  //   }
  // ]
  //   {
  //     "name": "first-inversion",
  //     "chords": [
  //       {
  //         "scale degree": "I",
  //         "notes": [0,2,4]
  //       },
  //       {
  //         "scale degree": "IV",
  //         "notes": [3,5,7]
  //       },
  //       {
  //         "scale degree": "V",
  //         "notes": [4,6,8]
  //       },
  //     ]
  //   },
  //   {
  //     "name": "second-inversion",
  //     "chords": [
  //       {
  //         "scale degree": "I",
  //         "notes": [0,2,4]
  //       },
  //       {
  //         "scale degree": "IV",
  //         "notes": [3,5,7]
  //       },
  //       {
  //         "scale degree": "V",
  //         "notes": [4,6,1]
  //       },
  //     ]
  //   },
  // ];
  //
  // var minorChords = [
  //   {
  //     "position": "root",
  //     "chords": [
  //       {
  //         "scale degree": "ii",
  //         "notes": [1,3,5]
  //       },
  //       {
  //         "scale degree": "iii",
  //         "notes": [2,4,6]
  //       },
  //       {
  //         "scale degree": "vi",
  //         "notes": [5,7,2]
  //       },
  //     ]
  //   },
  //   {
  //     "position": "first-inversion",
  //     "chords": [
  //       {
  //         "scale degree": "ii",
  //         "notes": [1,3,5]
  //       },
  //       {
  //         "scale degree": "iii",
  //         "notes": [2,4,6]
  //       },
  //       {
  //         "scale degree": "vi",
  //         "notes": [5,7,2]
  //       },
  //     ]
  //   },
  //   {
  //     "position": "second-inversion",
  //     "chords": [
  //       {
  //         "scale degree": "ii",
  //         "notes": [1,3,5]
  //       },
  //       {
  //         "scale degree": "iii",
  //         "notes": [2,4,6]
  //       },
  //       {
  //         "scale degree": "vi",
  //         "notes": [5,7,2]
  //       },
  //     ]
  //   },
  // ]

  // cMajUnique.map(x2 => {
  //   console.log(x2);
  //   $(x2).addClass('show')
  //
  // })

  // console.log(cMajUnique);
  // console.log(dMajUnique);
  // console.log(eMajUnique);
  // console.log(gMajUnique);
  // console.log(aMajUnique);
  // console.log(bMajUnique);

  // for (i = 0; i < cMajScale.length; i++) {console.log(cMajScale[i].actual);}
  // for (i = 0; i < dMajScale.length; i++) {console.log(dMajScale[i].actual);}
  // for (i = 0; i < eMajScale.length; i++) {console.log(eMajScale[i].actual);}
  // for (i = 0; i < gMajScale.length; i++) {console.log(gMajScale[i].actual);}
  // for (i = 0; i < aMajScale.length; i++) {console.log(aMajScale[i].actual);}
  // for (i = 0; i < bMajScale.length; i++) {console.log(bMajScale[i].actual);}

});



</script>


</body>
</html>
