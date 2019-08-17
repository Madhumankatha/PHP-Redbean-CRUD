<?php

include_once 'rb.php';

// dbname = YOUR DATABASE
// root => username of DATABASE
// '' => blank Password of DATABASE
R::setup( 'mysql:host=localhost;dbname=phpdemo', 'root', '');
R::useFeatureSet('novice/latest');
//R::freeze(true);