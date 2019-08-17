<?php

namespace CRUDPrj;

include_once './src/StudentController.php';
include_once './src/model/student.php';
include_once './src/Redirect.php';

use CRUDPrj\StudentController as StudentDB;
use CRUDRrj\model\student as Student;
use CRUDPrj\Redirect as Redirect;

if (isset($_GET['id'])) {
    extract($_GET);
    $sdb = new StudentDB();
    $result = $sdb->deleteStudent($id);
    if ($result){
        Redirect::RedirectTo('index.php');
    }else{
        Redirect::RedirectTo('error404.php');
    }
} else{
    Redirect::RedirectTo('error404.php');
}