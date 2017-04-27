

<?php

// access information in directory with no web access
//require_once('/home/czechm0/source_html/web/WPProject/Connect.php');
  require_once('../Connect.php');
  
// other functions are right here
require_once('DBfuncs.php');

$dbh = ConnectDB();



// was there a name entered for the search?
if (isset($_POST['name']) && !empty($_POST['name']) ) {

    echo '<p>Searching for ' . $_POST['name'] . "...</p>\n";

    $gamelist = ListMatchingGames($dbh, $_POST['name']);

} else {

    echo "<p>You didn't enter anything! Here's every game.</p>\n";

    $gamelist = ListAllGames($dbh);
}

$counter = 0;
echo "<ul>\n";
foreach ( $gamelist as $number ) {
    $counter++;
    echo "    <li> $number->name </li>\n";
    // modification: add delete link
}
echo "</ul>\n";

echo "<p> $counter record(s) returned.<p>\n";

// uncomment next line for debugging
# echo '<pre>'; print_r($gamelist); echo '</pre>';

?>

