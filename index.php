<?php

namespace CRUDPrj;

include_once './src/StudentController.php';
use CRUDPrj\StudentController as StudentController;

include_once './includes/head.php';
include_once './includes/navbar.php';

$sdb = new StudentController();
$result = $sdb->getAllStudent();

?>

<main class="container">
    <h1 class="text-center">Student Management System</h1>

    <a class="btn btn-success text-white text-center mb-2" href="student-create.php"><i class="fas fa-plus-circle"></i> Create Student</a>
    <table class="table table-bordered table-responsive-lg text-center" id="mytable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">DOB</th>
            <th scope="col">Regno</th>
            <th scope="col">Course</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $value) : ?>
        <tr>
            <th scope="row"><?=$value['id']?></th>
            <td><?=$value['name']?></td>
            <td><?=$value['dob']?></td>
            <td><?=$value['regno']?></td>
            <td><?=$value['course']?></td>
            <td><a href="./student-edit.php?id=<?=$value['id']?>" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a></td>
            <td><a href="./student-delete.php?id=<?=$value['id']?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>



<?php
include_once './includes/footer.php';
?>
