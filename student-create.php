<?php
namespace CRUDPrj;

include_once './src/StudentController.php';
include_once './src/model/student.php';
include_once './src/Redirect.php';

use CRUDPrj\StudentController as StudentController;
use CRUDRrj\model\student as Student;
use CRUDPrj\Redirect as Redirect;

include_once './includes/head.php';
include_once './includes/navbar.php';

$student = new Student();
$studentdb = new StudentController();
$id = 0;

if (isset($_POST['submit'])){
    extract($_POST);
    $student->setName($name);
    $student->setCourse($course);
    $student->setDob($dob);
    $student->setRegno($regno);

    $id = $studentdb->insertStudent($student);

    if ($id > 0){
        Redirect::RedirectTo('index.php');
    }else{
        echo '<div class="alert alert-danger" role="alert">
            Unable to add. Something went wrong !
        </div>';
    }

}

?>

<main class="container">
    <h1 class="text-center">
        Student Create
    </h1>

    <form class="my-2" method="post">
        <div class="form-group">
            <label for="name">Enter Student Name : </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="enter your name" required>
        </div>
        <div class="form-group">
            <label for="course">select Course : </label>
            <select class="form-control" id="course" name="course" required>
                <option value="0" selected>Select a course</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="BCA">BCA</option>
                <option value="B.Com">B.Com</option>
                <option value="BBA">BBA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dob">Enter Date of Birth :</label>
            <input type="date" class="form-control" id="dob" name="dob" placeholder="select date of birth" required>
        </div>
        <div class="form-group">
            <label for="regno">Enter Student Register no : </label>
            <input type="text" class="form-control" id="regno" name="regno" placeholder="enter register no" required>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-success mx-3" name="submit"><i class="fas fa-check"></i> Submit</button>
            <button type="reset" class="btn btn-outline-warning mx-3"><i class="fas fa-times"></i> Clear</button>
            <a href="index.php" class="btn btn-outline-danger mx-3"><i class="fas fa-reply"></i> Back</a>
        </div>


    </form>


<?php
include_once './includes/footer.php';
?>