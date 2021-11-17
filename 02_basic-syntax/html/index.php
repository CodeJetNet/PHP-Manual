<html>
<body>
<h1><?php
    $math = 10 * rand(2, 10);

    echo "Hello World " . $math;

    ?></h1>
<h1><?= "Hello World " ?></h1>

<?php
/**
 *  This is a multiline
 * comment.
 */


// This is a single line comment.


# This is a single line comment.
?>

<?php for ($i = 0; $i < 10; $i++) { ?>
    <h2> Hello <?= $i ?></h2>
<?php } ?>

</body>
</html>