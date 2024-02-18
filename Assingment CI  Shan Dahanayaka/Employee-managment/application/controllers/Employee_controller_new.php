<?php
include "Employee_controller.php";

class Employee_controller_new extends Employee_controller
{

    public function employee_15_days_sal()
    {
        try {
            $res=$this->employeePerDaySalary();
            $emp_per_day_sal = round($this->perdaySal,2) ;
            echo json_encode(["15-day-sal" => $emp_per_day_sal != 0 ? round($emp_per_day_sal * 15,2) : 0, "per_day_Salary" => $emp_per_day_sal]);
        } catch (Exception $e) {
            echo json_encode(["error" => $e->getMessage()]);
        }
    }
}
