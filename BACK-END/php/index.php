<?php
// date_default_timezone_set("");
// echo date("Y-m-d H:i:s");

require './OOP/first.php';
require './OOP/second.php';
// echo "OOP Concept";

// $t = new first();
// $t->name('GAJAN');

// $f = new first('GAJAN');
// $f->setName();

$second = new second('GAJAN');
// $second->setMsg('Gajan');
// $second->setMsg('poda');
// $second->intro();

echo first::bye;
