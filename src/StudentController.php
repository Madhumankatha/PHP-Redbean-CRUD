<?php
namespace CRUDPrj;

use CRUDRrj\model\student as Student;
use R as R;

include_once 'model\student.php';
include_once 'config.php';
/**
 * Class StudentController
 * @package CRUDPrj
 */
class StudentController
{
    /**
     * @var Student
     */
    private $student;

    /**
     * StudentController constructor.
     */
    public function __construct()
    {
        $this->student = new Student();
    }

    /**
     * @param Student $student
     * @return int|string
     */
    public function insertStudent(Student $student)
    {
        $studentData = R::dispense('student');
        $studentData->name = $student->getName();
        $studentData->dob = $student->getDob();
        $studentData->regno = $student->getRegno();
        $studentData->course = $student->getCourse();
        return R::store($studentData);
    }


    /**
     * @param Student $student
     * @param $id
     * @return int|string
     */
    public function updateStudent(Student $student, $id)
    {
        $studentData = R::load('student',$id);
        if ($studentData['id']>0){
            $studentData->name = $student->getName();
            $studentData->dob = $student->getDob();
            $studentData->regno = $student->getRegno();
            $studentData->course = $student->getCourse();
            return R::store($studentData);
        }else{
            return 0;
        }
    }


    /**
     * @param $id
     */
    public function deleteStudent($id)
    {
        $studentData = R::load('student',$id);
        if ($studentData['id']>0){
            R::trash($studentData);
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $id
     * @return \RedBeanPHP\OODBBean
     */
    public function getStudentById($id)
    {
        return R::load('student',$id);
    }

    /**
     * @return array
     */
    public function getAllStudent()
    {
        return R::findAll('student');
    }
}

//$s = new Student();
//$sdb = new StudentController();
//
//$s->setName('Bala');
//$s->setDob('09/10/1996');
//$s->setRegno('1BI18MBA18');
//$s->setCourse('MBA');
//$sdb->updateStudent($s,2);
//
//$sdb->deleteStudent(3);
//
//print_r($sdb->getAllStudent());
//
//print_r($sdb->getStudentById(1));
//
//$result = $sdb->getStudentById(3);
//if ($result['id']==2){
//    echo 'no result found';
//}else{
//    print_r($result);
//}

