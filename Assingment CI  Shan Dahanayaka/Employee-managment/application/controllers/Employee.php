<?
class Employee{
    private $emp_name;
    private $emp_address;
    private $emp_contact;
    private $emp_basic_sal;
    private $emp_allowns;
    private $emp_current_salary;

    public function __constructor($emp_name,$emp_address,$emp_contact,$emp_basic_sal,$emp_allowns){
        $this->emp_name=$emp_name;
        $this->emp_address=$emp_address;
        $this->emp_contact=$emp_contact;
        $this->emp_basic_sal=$emp_basic_sal;
        $this->emp_allowns=$emp_allowns;
    }

    public function emp_salary(){
        
        $this->emp_current_salary= $this->emp_basic_sal+ $this->emp_allowns;
        return $this->emp_current_salary;
    }
}

?>