<h2 class="header">
    KenSquared - KenKen for Android
</h2>
<div class="contents float-right">
    <div class="contents-header">Contents</div>
    <ul class="contents-list">
        <li><a href="#whatis">What is KenKen?</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#changelog">Change Log</a></li>
        <li><a href="#menu">Menu Options</a></li>
        <li><a href="#controls">Game Controls</a></li>
        <li><a href="#development">About the Development</a></li>
    </ul>
</div>
<p>
    <a href="http://play.google.com/store/apps/details?id=com.anthonysottile.kenken" target="_blank">
        <img alt="Get it on Google Play" src="http://www.android.com/images/brand/get_it_on_play_logo_large.png" />
    </a>
</p>
<h3 class="sub-header clear">
    <a name="whatis"></a>What is KenKen?
</h3>
<img class="right-image float-right" src="/images/kenken-whatis.png" alt="" />
<p>
    Similar in gameplay to the popular game Sudoku, KenKen is a puzzle game that involves strategic placing
     of numbers in a square.  The unique aspect of KenKen is the constraints on placing numbers.  The game
     board is divided into regions of squares called cages.  For each cage, a number and a mathematical
     operator are shown and the numbers that you place in that square must, with the given operator, yield
     the number in the cage.  Like Sudoku, the board must be a
     <a href="http://en.wikipedia.org/wiki/Latin_square" target="_blank">Latin Square <img src="/images/external-link.png" alt="" /></a>, meaning a number must appear only once in a given row or column.  However a number may be
     present more than once inside a given cage.
</p>
<p>
    The mathematical cage operators include multiplication, division, addidion, and subtraction.  Note that
     in the cages, the numbers may be in any order for the operator.  For example (given a 4 x 4 board),
     the <span class="pre">7+</span> cage can be either <span class="pre">[3][4]</span>, or
     <span class="pre">[4][3]</span>.  The same goes for division and subtraction.  A two square cage on a
     4 x 4 board with <span class="pre">2/</span> could be either <span class="pre">[1][2]</span>,
     <span class="pre">[2][1]</span>, <span class="pre">[4][2]</span>, or <span class="pre">[2][4]</span>.
</p>
<p>
    For more information about KenKen, visit
     <a href="http://en.wikipedia.org/wiki/KenKen" target="_blank">Wikipedia <img src="/images/external-link.png" alt="" /></a>
     or
     <a href="http://www.kenken.com/howto/online" target="_blank">KenKen.com <img src="/images/external-link.png" alt="" /></a>.
</p>
<h3 class="sub-header clear">
    <a name="features"></a>Features
</h3>
<p>
    <ul class="list">
        <li>4 x 4 to 9 x 9 boards</li>
        <li>Randomly generated and unique boards</li>
        <li>Statistics</li>
        <li>Timed games</li>
        <li>Pause and Resume game</li>
        <li>Auto pause</li>
        <li>Allows multiple solutions to ambiguous boards</li>
        <li>Check current board</li>
        <li>Auto eliminate candidates on value choice</li>
    </ul>
</p>
<h3 class="sub-header clear">
    <a name="changelog"></a>Change Log
</h3>
<p>
    <ul class="list">
        <li><b>1.0.0</b> - Initial Release.</li>
    </ul>
</p>
<h3 class="sub-header clear">
    <a name="menu"></a>Menu Options
</h3>
<img class="right-image float-right" src="/images/kenken-menu.png" alt="" />
<p>
    Upon pressing the menu button on your device the menu is presented.  Use the menu to begin a new
     game. The menu also allows you to access several other options.
</p>
<div class="clear"></div>
<img class="right-image float-right" src="/images/kenken-preferences.png" alt="" />
<h4 class="sub-sub-header">Preferences</h4>
<p>
    In the preferences menu, one can change the size of the game that they are playing.  Games
     can be played anywhere from the easiest size (4 x 4) to the most difficult size (9 x 9).
    Note that if you are in-game and change the game size, the current game will end.
</p>
<div class="clear"></div>
<img class="right-image float-right" src="/images/kenken-statistics.png" alt="" />
<h4 class="sub-sub-header">Statistics</h4>
<p>
    The statistics menu allows you to see your high scores.  The game records the number
     of games you have started, the number of games you have won, your best time, and the
     average win time for each game size.
</p>
<div class="clear"></div>
<img class="right-image float-right" src="/images/kenken-check.png" alt="" />
<h4 class="sub-sub-header">Check</h4>
<p>
    In game, the check button allows you to check the progress on the numbers you have selected.
    Checking though comes with a penalty (15s) and only checks against a single solution board
     though there may be other possible solutions.  Though the check button only checks against
     a single solution, the game will allow any and all solutions that fit the given cages.
</p>
<h4 class="sub-sub-header clear">Pause</h4>
<p>
    The pause menu button allows you to pause and resume a game.  This will cause the timer to stop ticking.
    The game will also automatically pause whenever you open any of the other menus and when you navigate
     away from the game.
</p>
<h3 class="sub-header clear">
    <a name="controls"></a>Game Controls
</h3>
<img class="right-image float-right" src="/images/kenken-candidates.png" alt="" />
<p>
    The game is controlled by touching a square.  When a square is selected.  One can set both the
     potential candidates for the square, as well as setting the value for the square.  The candidates
     can be selected by selecting or unselecting from the top of the screen.  Pressing + will apply
     all of the possible candidates and pressing - will clear all of the candidates selected.
</p>
<div class="clear"></div>
<img class="right-image float-right" src="/images/kenken-values.png" alt="" />
<p>
    Square value can be set by touching the buttons at the bottom of the screen.  Touching a selected
     value will unset the square.  Note that setting a value on a square will automatically unset the
     candidates of the same value in that square's row and column.  Candidates and values that cannot
     be set because there is already a square with that value in the row or column are shown as disabled.
</p>
<h3 class="sub-header clear">
    <a name="development"></a>About the Development
</h3>
<p>
    I was initially introduced to KenKen by a friend at school and it instantly became a favorite.
     The only problem was, at the time KenKen.com had only a very limited set of puzzles that
     updated very infrequently -- I didn't have a way to have fresh new puzzles all the time.  So
     I decided to write my own version of the game so I could play as many puzzles as I wanted.
</p>
<p>
    I first started writing the application as a desktop application in C#.  I spent quite some time
     developing a methodology for generating puzzles -- I even came up with my own algorithm for
     generating
     <a href="http://en.wikipedia.org/wiki/Latin_square" target="_blank">Latin Squares <img src="/images/external-link.png" alt="" /></a>.
     After I had a solid playable prototype (I may publish a finished desktop version eventually) I
     started looking into mobile development.
</p>
<p>
    Having recently acquired an Android phone and noting C#'s similarity to Java, I decided
     to take a crack at developing an Android application.  Within a week I had ported all of
     the application logic to Java and within two weeks I had a playable mobile application.
     After some polishing and feature addition (the desktop application lacked pausing, multiple
     solution detection, more intelligent puzzle generation, and a finished UI among other things),
     I have this!
</p>
<div class="clear"></div>
