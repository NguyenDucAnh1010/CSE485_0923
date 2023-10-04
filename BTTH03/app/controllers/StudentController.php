<?php

require_once APP_ROOT.'/app/services/StudentService.php';
require_once APP_ROOT.'/app/services/ClsService.php';

class StudentController {
    
    public function index(){

        $title = 'student';

        $page = isset($_GET['page'])?$_GET['page']:1;
        
        $studentService = new StudentService();
        $students = $studentService->getByStudentCount($page);
        $total = count($studentService->getAllStudents());

        include APP_ROOT.'/app/views/student/index.php';
    }

    public function add_student(){

        $title = 'student';

        $clsService = new ClsService();
        $clses = $clsService->getAllClses();

        include APP_ROOT.'/app/views/student/add_student.php';
    }

    public function student_add(){

        if(isset($_POST['tenSinhVien'])
        && isset($_POST['email'])
        && isset($_POST['ngaySinh'])
        && isset($_POST['idLop'])){

            $tenSinhVien = $_POST['tenSinhVien'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idLop'];

            $studentService = new StudentService();
            $check = $studentService->addStudent($tenSinhVien, $email, $ngaySinh,$idLop);

            if ($check){
                $this->index();
            }else{
                $this->add_student();
            }
        }
    }

    public function edit_student(){

        $title = 'student';

        $id = isset($_GET['idSelect'])?$_GET['idSelect']:null;

        $studentService = new StudentService();
        $student = $studentService->getByStudentId($id);

        $clsService = new ClsService();
        $clses = $clsService->getAllClses();

        include APP_ROOT.'/app/views/student/edit_student.php';
    }

    public function student_edit(){

        if(isset($_POST['id'])
        && isset($_POST['tenSinhVien'])
        && isset($_POST['email'])
        && isset($_POST['ngaySinh'])
        && isset($_POST['idLop'])){

            $id = $_POST['id'];
            $tenSinhVien = $_POST['tenSinhVien'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idLop'];

            $studentService = new StudentService();
            $check = $studentService->editStudent($id,$tenSinhVien, $email, $ngaySinh,$idLop);

            if ($check){
                $this->index();
            }else{
                $this->edit_student();
            }
        }
    }

    public function delete_student(){

        $id = isset($_GET['idSelect'])?$_GET['idSelect']:null;

        $studentService = new StudentService();
        $check = $studentService->deleteStudent($id);

        $this->index();
    }
}

?>