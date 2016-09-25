<?php $thisPage = basename ($_SERVER['PHP_SELF']);?> <!-- search for the name of the current site. -->


<div id="menu">
<img src="img/header.jpg">
<ul>
<li<?php if ($thisPage=="index.php")   // If the current page is index.php then make the id (for li) "currentpage"
echo " id=\"currentpage\""; ?>>
<a href="index.php">Side 1</a></li>

<li<?php if ($thisPage=="side2.php") 
echo " id=\"currentpage\""; ?>>
<a href="side2.php">Side 2</a></li>

<li<?php if ($thisPage=="side3.php") 
echo " id=\"currentpage\""; ?>>
<a href="side3.php">Side 3</a></li>

<li<?php if ($thisPage=="side4.php")
echo " id=\"currentpage\""; ?>>
<a href="side4.php">Side 4</a></li>

<li<?php if ($thisPage=="side5.php") 
echo " id=\"currentpage\""; ?>>
<a href="side5.php">Side 5</a></li>
</ul>
</div>