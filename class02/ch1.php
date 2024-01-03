<h1>In php, variables work inside double quotes. Inside single quotes variable will not work.</h1>
<?php
echo date("d-m-Y h:i:s");
echo " <br>";
echo date("d-m-Y h:i:s")."<br>";
echo date("j F Y");
echo "<hr>";
$x=5;
$y="5";
var_dump($x);
echo "<br>";
$z=$x==$y;
echo $z;
echo "<br>";
$p="I am trying to understand what are 'ucfirst & ucword' doing.";
// ucfirst & ucwords connot be in a variable.
// $h ucfirst("new york city");
echo $p;
echo "<br>";
echo ucfirst("new york city");
echo "<br>";
echo ucwords("new york city");
echo "<br>";
echo ucwords("new york city");
echo "<br>";
$t= '<marquee behavior="" direction="">' . $p.'</marquee>';
echo $t;
echo "<br>";
$q= "<marquee behavior='' direction=''>" . $p."</marquee>";
echo $q;
echo "<br>";
// $w= "<marquee behavior="" direction="">" . $p."</marquee>"; server getting confused between double and single qoute.
echo $w;

?>
<marquee behavior="" direction=""></marquee>