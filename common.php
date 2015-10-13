<?php
function head($title) {
?>
<!--
this website intended to be viewed like this:
http://5tephen.com/img/intent_to_view.png

sort of. there's funny code!
-->
  <html>
  <head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="http://5tephen.com/style.css" />
    <link rel="icon" href="http://5tephen.com/img/cheeseplane.gif" type="image/gif"/>
    <link rel="me" href="https://twitter.com/geluso" />
    <link rel="me" href="https://github.com/geluso" />
    <link rel="me" href="https://facebook.com/5TEPHENoCOM" />

    <script type="text/javascript" src="analytics.js"></script>
  </head>
  <body>
<h3><pre><a href="http://5tephen.com" class="none">
        #########   ##                  ##                    
        #########   ##                  ##                    
        ###       ######                ##                    
        ###       ###### ######  #####  #####   ######  ## ## 
        ########    ##  ##    ## ###### ###### ##    ## ######
        #########   ##  ######## ##  ## ##  ## ######## ##  ##
               ##   ##  ##       ##  ## ##  ## ##       ##  ##
        #########   ##  ######## ###### ##  ## ######## ##  ##
         #######    ##   ######  #####  ##  ##  ######  ##  ##</a>
        =========================##===========================
        |<a href="http://5tephen.com/projects">projects</a>|<a href="http://mooncolony.org">moon</a>|<a href="http://5tephen.com/heaven_and_hell">hv&amp;hl</a>|<a href="http://5tephen.com/wiki/feral_cats.php">cat</a>|##|<a href="http://cowb0y.com">cowboy</a>|<a href="https://github.com/geluso">githb</a>|<a href="http://5tephen.com/minesweeper">QRs</a>|<a href="http://5tephen.com/steve-geluso-resume.pdf">resume</a>|<a href="http://twitter.com/geluso">@</a>|
        =========================##===========================
                                 </a>##                           
</pre></h3>
<div id="content">
<?php
}

function simple() {
?>
<!--
this website intended to be viewed like this:
http://5tephen.com/img/intent_to_view.png
-->
  <html>
  <head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="http://5tephen.com/style.css" />
    <link rel="icon" href="http://5tephen.com/img/cheeseplane.gif" type="image/gif"/>
    <script type="text/javascript" src="analytics.js"></script>
  </head>
  <body>
<?php
}

function foot() {
?>
</div>
</body>
</html>
<?php
}
?>
