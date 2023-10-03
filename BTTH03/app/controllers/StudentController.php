<?php

require_once APP_ROOT.'/app/services/StudentService.php';

class StudentController {
    
    public function index(){

        $title = 'student';
        
        $studentService = new StudentService();
        $students = $studentService->getAllStudents();

        include APP_ROOT.'/app/views/Student/index.php';
    }

    public function add_student(){

        $title = 'student';

        include APP_ROOT.'/app/views/Student/add_student.php';
    }

    public function student_add($tenSinhVien, $email, $ngaySinh,$idLop){

        $studentService = new StudentService();
        $check = $studentService->addStudent($tenSinhVien, $email, $ngaySinh,$idLop);

        if ($check){
            $this->index();
        }else{
            $this->add_student();
        }
    }

    public function edit_student($id){

        $title = 'student';

        $studentService = new StudentService();
        $student = $studentService->getByStudentId($id);

        include APP_ROOT.'/app/views/Student/edit_student.php';
    }

    public function student_edit($id,$tenSinhVien, $email, $ngaySinh,$idLop){

        $studentService = new StudentService();
        $check = $studentService->editStudent($id,$tenSinhVien, $email, $ngaySinh,$idLop);

        if ($check){
            $this->index();
        }else{
            $this->edit_student($id);
        }
    }

    public function delete_student($id){

        $studentService = new StudentService();
        $check = $studentService->deleteStudent($id);

        if ($check){
            $this->index();
        }else{
            $this->index();
        }
    }
}

?>