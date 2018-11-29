<!-- JS -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type='text/javascript' src='/js/main.js'></script>

<script>

const allNotes = [
    {
      actual:'c2',
      note:'c'
    },
    {
      actual:['c#2','db2'],
      note:['c#','db']

    },
    {
      actual:'d2',
      note:'d'
    },
    {
      actual:['d#2','eb2'],
      note:['d#','eb']

    },
    {
      actual: 'e2',
      note:'e'
    },
    {
      actual: ['e#2','fb2'],
      note:['e#','fb']

    },
    {
      actual: 'f2',
      note:'f'
    },
    {
      actual: ['f#2','gb2'],
      note:['f#','gb']

    },
    {
      actual: 'g2',
      note:'g'
    },
    {
      actual: ['g#2','ab2'],
      note:['g#','ab']

    },
    {
      actual: 'a2',
      note:'a'
    },
    {
      actual: ['a#2','bb2'],
      note:['a#','bb']

    },
    {
      actual: 'b2',
      note:'b'
    },
    {
      actual: ['b#2','cb2'],
      note:['b#','cb']

    },
    {
      actual:'c3',
      note:'c'
    },
    {
      actual:['c#3','db3'],
      note:['c#','db']

    },
    {
      actual:'d3',
      note:'d'
    },
    {
      actual:['d#3','eb3'],
      note:['d#','eb']

    },
    {
      actual: 'e3',
      note:'e'
    },
    {
      actual: ['e#3','fb3'],
      note:['e#','fb']

    },
    {
      actual: 'f3',
      note:'f'
    },
    {
      actual: ['f#3','gb3'],
      note:['f#','gb']

    },
    {
      actual: 'g3',
      note:'g'
    },
    {
      actual: ['g#3','ab3'],
      note:['g#','ab']

    },
    {
      actual: 'a3',
      note:'a'
    },
    {
      actual: ['a#3','bb3'],
      note:['a#','bb']

    },
    {
      actual: 'b3',
      note:'b'
    },
    {
      actual: ['b#3','cb3'],
      note:['b#','cb']
    },
    {
      actual:'c4',
      note:'c'
    },
    {
      actual:['c#4','db4'],
      note:['c#','db']

    },
    {
      actual:'d4',
      note:'d'
    },
    {
      actual:['d#4','eb4'],
      note:['d#','eb']

    },
    {
      actual: 'e4',
      note:'e'
    },
    {
      actual: ['e#4','fb4'],
      note:['e#','fb']

    },
    {
      actual: 'f4',
      note:'f'
    },
    {
      actual: ['f#4','gb4'],
      note:['f#','gb']

    },
    {
      actual: 'g4',
      note:'g'
    },
    {
      actual: ['g#4','ab4'],
      note:['g#','ab']

    },
    {
      actual: 'a4',
      note:'a'
    },
    {
      actual: ['a#4','bb4'],
      note:['a#','bb']

    },
    {
      actual: 'b4',
      note:'b'
    },
    {
      actual: ['b#4','cb4'],
      note:['b#','cb']
    },
    {
      actual:'c5',
      note:'c'
    },
    {
      actual:['c#5','db5'],
      note:['c#','db']

    },
    {
      actual:'d5',
      note:'d'
    },
    {
      actual:['d#5','eb5'],
      note:['d#','eb']

    },
    {
      actual: 'e5',
      note:'e'
    },
    {
      actual: ['e#5','fb5'],
      note:['e#','fb']

    },
    {
      actual: 'f5',
      note:'f'
    },
    {
      actual: ['f#5','gb5'],
      note:['f#','gb']

    },
    {
      actual: 'g5',
      note:'g'
    },
    {
      actual: ['g#5','ab5'],
      note:['g#','ab']

    },
    {
      actual: 'a5',
      note:'a'
    },
    {
      actual: ['a#5','bb5'],
      note:['a#','bb']

    },
    {
      actual: 'b5',
      note:'b'
    },
    {
      actual: ['b#5','cb5'],
      note:['b#','cb']
    },
    {
      actual:'c2',
      note:'c'
    },
    {
      actual:['c#2','db2'],
      note:['c#','db']

    },
    {
      actual:'d2',
      note:'d'
    },
    {
      actual:['d#2','eb2'],
      note:['d#','eb']

    },
    {
      actual: 'e2',
      note:'e'
    },
    {
      actual: ['e#2','fb2'],
      note:['e#','fb']

    },
    {
      actual: 'f2',
      note:'f'
    },
    {
      actual: ['f#2','gb2'],
      note:['f#','gb']

    },
    {
      actual: 'g2',
      note:'g'
    },
    {
      actual: ['g#2','ab2'],
      note:['g#','ab']

    },
    {
      actual: 'a2',
      note:'a'
    },
    {
      actual: ['a#2','bb2'],
      note:['a#','bb']

    },
    {
      actual: 'b2',
      note:'b'
    },
    {
      actual: ['b#2','cb2'],
      note:['b#','cb']
    },
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
    noteInfo["note"][0] == "f#"
  ))
});

const dMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "f#" ||
    noteInfo["note"] == "g" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "c#"
  ))
});

const aMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "c#" ||
    noteInfo["note"] == "d" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "f#" ||
    noteInfo["note"][0] == "g#"
  ))
});

const eMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "f#" ||
    noteInfo["note"][0] == "g#" ||
    noteInfo["note"] == "a" ||
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "c#" ||
    noteInfo["note"][0] == "d#"
  ))
});

const bMajScale = allNotes.filter(function(noteInfo, index, array) {
  return ((
    noteInfo["note"] == "b" ||
    noteInfo["note"][0] == "c#" ||
    noteInfo["note"][0] == "d#" ||
    noteInfo["note"] == "e" ||
    noteInfo["note"][0] == "f#" ||
    noteInfo["note"][0] == "g#" ||
    noteInfo["note"][0] == "a#"
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


$('.button').on('click', function() {
  $('.note').each(function() {
    console.log( this.id );
});
  // console.log(cMajScale);
  // console.log(gMajScale);
  // console.log(dMajScale);
  // console.log(aMajScale);
  // console.log(eMajScale);
  // console.log(bMajScale);
  // console.log(fMajScale);
});

</script>


</body>
</html>
