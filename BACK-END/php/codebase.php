<?php
echo clean('gajan-\|gtr');

function clean($string)
{
    //   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9]/', ' ', $string); // Removes special chars.

    return preg_replace('/[^A-Za-z0-9\@-]/', ' ', $string);  // Removes special chars Except @ and - 

}

echo '<pre>',var_export($data);