<?php

require_once APP_ROOT.'/app/services/StudentService.php';
require_once APP_ROOT.'/app/services/ClsService.php';

class StudentController {
    
    public function index($page){

        $title = 'student';
        
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

    public function student_add($tenSinhVien, $email, $ngaySinh, $idLop, $page){

        $studentService = new StudentService();
        $check = $studentService->addStudent($tenSinhVien, $email, $ngaySinh,$idLop);

        if ($check){
            $this->index($page);
        }else{
            $this->add_student();
        }
    }

    public function edit_student($id){

        $title = 'student';

        $studentService = new StudentService();
        $student = $studentService->getByStudentId($id);

        $clsService = new ClsService();
        $clses = $clsService->getAllClses();

        include APP_ROOT.'/app/views/student/edit_student.php';
    }

    public function student_edit($id,$tenSinhVien, $email, $ngaySinh,$idLop,$page){

        $studentService = new StudentService();
        $check = $studentService->editStudent($id,$tenSinhVien, $email, $ngaySinh,$idLop);

        if ($check){
            $this->index($page);
        }else{
            $this->edit_student($id);
        }
    }

    public function delete_student($id,$page){

        $studentService = new StudentService();
        $check = $studentService->deleteStudent($id);

        if ($check){
            $this->index($page);
        }else{
            $this->index($page);
        }
    }
}

?>