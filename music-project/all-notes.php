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


<div class="line ledger">
  <div class="note sharp" id="csharp6"></div>
  <div class="note" id="c6"></div>
  <div class="note flat" id="cb6"></div>
</div>
<div class="space">
  <div class="note sharp" id="bsharp5"></div>
  <div class="note" id="b5"></div>
  <div class="note flat" id="bb5"></div>
</div>
<div class="line ledger">
  <div class="note sharp" id="asharp5"></div>
  <div class="note" id="a5"></div>
  <div class="note flat" id="ab5"></div>
</div>
<div class="space">
  <div class="note sharp" id="gsharp5"></div>
  <div class="note" id="g5"></div>
  <div class="note flat" id="gb5"></div>
</div>
<div class="line">
  <div class="note sharp" id="fsharp5"></div>
  <div class="note" id="f5"></div>
  <div class="note flat" id="fb5"></div>
</div>
<div class="space">
  <div class="note sharp" id="esharp5"></div>
  <div class="note" id="e5"></div>
  <div class="note flat" id="eb5"></div>
</div>
<div class="line">
  <div class="note sharp" id="dsharp5"></div>
  <div class="note" id="d5"></div>
  <div class="note flat" id="db5"></div>
</div>
<div class="space">
  <div class="note sharp" id="csharp5"></div>
  <div class="note" id="c5"></div>
  <div class="note flat" id="cb5"></div>
</div>
<div class="line">
  <div class="note sharp" id="bsharp4"></div>
  <div class="note" id="b4"></div>
  <div class="note flat" id="bb4"></div>
</div>
<div class="space">
  <div class="note sharp" id="asharp4"></div>
  <div class="note" id="a4"></div>
  <div class="note flat" id="ab4"></div>
</div>
<div class="line">
  <div class="key g"></div>
  <div class="note sharp" id="gsharp4"></div>
  <div class="note" id="g4"></div>
  <div class="note flat" id="gb4"></div>
</div>
<div class="space">
  <div class="note sharp" id="fsharp4"></div>
  <div class="note" id="f4"></div>
  <div class="note flat" id="fb4"></div>
</div>
<div class="line">
  <div class="note sharp" id="esharp4"></div>
  <div class="note" id="e4"></div>
  <div class="note flat" id="eb4"></div>
</div>
<div class="space">
  <div class="note sharp" id="dsharp4"></div>
  <div class="note" id="d4"></div>
  <div class="note flat" id="db4"></div>
</div>
<div class="line ledger">
  <div class="note sharp" id="csharp4"></div>
  <div class="note" id="c4"></div>
  <div class="note flat" id="cb4"></div>
</div>
<div class="space">
  <div class="note sharp" id="bsharp3"></div>
  <div class="note" id="b3"></div>
  <div class="note flat" id="bb3"></div>
</div>
<div class="line">
  <div class="note sharp" id="asharp3"></div>
  <div class="note" id="a3"></div>
  <div class="note flat" id="ab3"></div>
</div>
<div class="space">
  <div class="note sharp" id="gsharp3"></div>
  <div class="note" id="g3"></div>
  <div class="note flat" id="gb3"></div>
</div>
<div class="line">
  <div class="note sharp" id="fsharp3"></div>
  <div class="note" id="f3"></div>
  <div class="note flat" id="fb3"></div>
</div>
<div class="space">
  <div class="key b"></div>
  <div class="note sharp" id="esharp3"></div>
  <div class="note" id="e3"></div>
  <div class="note flat" id="eb3"></div>
</div>
<div class="line">
  <div class="note sharp" id="dsharp3"></div>
  <div class="note" id="d3"></div>
  <div class="note flat" id="db3"></div>
</div>
<div class="space">
  <div class="key d"></div>
  <div class="note sharp" id="csharp3"></div>
  <div class="note" id="c3"></div>
  <div class="note flat" id="cb3"></div>
</div>
<div class="line">
  <div class="key e"
  <div class="note sharp" id="bsharp2"></div>
  <div class="note" id="b2"></div>
  <div class="note flat" id="bb2"></div>
</div>
<div class="space">
  <div class="note sharp" id="asharp2"></div>
  <div class="note" id="a2"></div>
  <div class="note flat" id="ab2"></div>
</div>
<div class="line">
  <div class="key g"></div>
  <div class="note sharp" id="gsharp2"></div>
  <div class="note" id="g2"></div>
  <div class="note flat" id="gb2"></div>
</div>
<div class="space">
  <div class="key a"></div>
  <div class="note sharp" id="fsharp2"></div>
  <div class="note" id="f2"></div>
  <div class="note flat" id="fb2"></div>
</div>
<div class="line ledger">
  <div class="note sharp" id="esharp2"></div>
  <div class="note" id="e2"></div>
  <div class="note flat" id="eb2"></div>
</div>
<div class="space">
  <div class="note sharp" id="dsharp2"></div>
  <div class="note" id="d2"></div>
  <div class="note flat" id="db2"></div>
</div>
<div class="line ledger">
  <div class="note sharp" id="csharp2"></div>
  <div class="note" id="c2"></div>
  <div class="note flat" id="cb2"></div>
</div>
















a,b,c#,d,e,f#,g#,a








a | a# | b | c | c# | d | d# | e | f | f# | g | g# | a
