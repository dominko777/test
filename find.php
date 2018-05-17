<?php
$string = "“All systems for doing business allow you to automate processes in the enterprise";
preg_match_all('/\b(?!(?:All|automate)\b)([\w-]+)\b/', $string, $matches);
echo '<pre>';
var_dump($matches[0]);
echo '</pre>';