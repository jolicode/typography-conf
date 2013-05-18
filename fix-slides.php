<?php
/**
 * Quick and dirty...
 */
include "../../JoliTypo/vendor/autoload.php";

$fixer   = new JoliTypo\Fixer(array('Ellipsis', 'Dimension', 'Dash', 'FrenchQuotes', 'FrenchNoBreakSpace', 'SingleQuote'));
$content = file_get_contents("index-raw.html");
$fixed   = $fixer->fix($content);
file_put_contents('index.html', $fixed);
