<?php
echo "<pre>";
echo '<h1>Boolean</h1>';

$foo = true;

if ($foo === true) {
    echo 'Foo is true.';
}

echo 'cast to false <br>';

var_dump((bool)false);
var_dump((bool)0);
var_dump((bool)0.0);
var_dump((bool)"");
var_dump((bool)"0");
var_dump((bool)array());
var_dump((bool)null);

echo 'cast to true. <br/>';
var_dump((bool)1);
var_dump((bool)1.1);
var_dump((bool)"1");
var_dump((bool)"foo");
var_dump((bool)"false");
var_dump((bool)[1]);
var_dump((bool)new stdClass());


echo '<h1>Integer</h1>';
var_dump(1234);
var_dump(0123);
var_dump(9223372036854775807);

echo '<h1>Float</h1>';
var_dump(12.34);
var_dump(9223372036854775808);

echo '<h1>String</h1>';
echo '<h2>Single Quote</h2>';
echo 'this is string <br>';
echo 'This is a \' single quote<br/>';
echo 'This is a \\ backslash<br />';
echo 'This will not produce a line feed \n <br />';

$a_variable = "THIS IS A VARIABLE.";
echo 'This will not expand: $a_variable <br />';

echo "<h2>Double Quote</h2>";
echo "This will show: $a_variable \n";
echo "This is a \" double quote. <br>";
echo "This is a \\ backslash. \n";


echo <<<HEREDOC
<h1>HereDoc</h1>
HEREDOC;

echo <<<ID
    Four spaces
   Three
  Two
 One
None \n\n
ID;

echo <<<SOMEID
Works like double quotes: $a_variable \n
SOMEID;

echo <<<'NOWDOC'
<h1>NowDoc</h1>
NOWDOC;


echo <<<'SOMENOWDOCID'
Works like single quotes: $a_variable \n \\ \'
SOMENOWDOCID;


echo "<h2>Numeric Strings</h2>";

var_dump(1+"10.5");
var_dump(1+"100");