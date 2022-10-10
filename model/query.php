<?php

class employee 
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "Amarta@070";
    private $database = "myDB";
    public $con;

    public function connect()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } 
        else {
               echo "connected";
        }
    }
    public function query1(){
        $query1 = "select distinct employee_first_name as first_name
        from employee_details_table 
        join employee_salary_table on
         employee_salary_table.employee_id = employee_details_table.employee_id 
         where employee_salary_table.employee_salary > 50;";

        $result = $this->con->query($query1);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                   
            }
            return $data;
            }else{
             echo "No found records";
            }
    }
    public function query2(){
        $query2 = " select distinct employee_last_name from employee_details_table where Graduation_percentile > 70;
        ";

        $result2 = $this->con->query($query2);
        if ($result2->num_rows > 0) {
            $data2 = array();
            while ($row = $result2->fetch_assoc()) {
                   $data2[] = $row;
                   
            }
            return $data2;
            }else{
             echo "No found records";
            }
    }
    public function query3(){
        $query3 = "select distinct employee_code_name 
        from employee_code_table
        join employee_salary_table on
        employee_code_table.employee_code = employee_salary_table.employee_code
        where employee_code_table.employee_code in
        (select distinct employee_code
        from employee_salary_table
        join employee_details_table on
        employee_salary_table.employee_id = employee_details_table.employee_id
        where employee_details_table.Graduation_percentile < 70);";

        $result3 = $this->con->query($query3);
        if ($result3->num_rows > 0) {
            $data3 = array();
            while ($row = $result3->fetch_assoc()) {
                   $data3[] = $row;
                   
            }
            return $data3;
            }else{
             echo "No found records";
            }
    }
    public function query4(){
        $query4 = "select concat(employee_details_table.employee_first_name,' ',employee_details_table.employee_last_name) as Fullname 
        from employee_details_table
        join employee_salary_table on
        employee_details_table.employee_id = employee_salary_table.employee_id 
        where employee_details_table.employee_id in
        (select employee_id 
        from employee_salary_table 
        join employee_code_table on
        employee_salary_table.employee_code = employee_code_table.employee_code
        where employee_domain = 'Java');";

        $result4 = $this->con->query($query4);
        if ($result4->num_rows > 0) {
            $data4 = array();
            while ($row = $result4->fetch_assoc()) {
                   $data4[] = $row;
                   
            }
            return $data4;
            }else{
             echo "No found records";
            }
    }
    public function query5(){
        $query5 = "select employee_code_table.employee_domain , sum(employee_salary_table.employee_salary) as sum_of_salary
        from employee_salary_table 
        join employee_code_table
        on employee_salary_table.employee_code = employee_code_table.employee_code
        group by employee_code_table.employee_domain;";

        $result5 = $this->con->query($query5);
        if ($result5->num_rows > 0) {
            $data5 = array();
            while ($row = $result5->fetch_assoc()) {
                   $data5[] = $row;
                   
            }
            return $data5;
            }else{
             echo "No found records";
            }
    }

    public function query6(){
        $query6 = "select employee_code_table.employee_domain , sum(employee_salary_table.employee_salary) as sum_of_salary
        from employee_salary_table 
        join employee_code_table
        on employee_salary_table.employee_code = employee_code_table.employee_code
        group by employee_code_table.employee_domain
        having sum_of_salary > 30;";

        $result6 = $this->con->query($query6);
        if ($result6->num_rows > 0) {
            $data6 = array();
            while ($row = $result6->fetch_assoc()) {
                   $data6[] = $row;
                   
            }
            return $data6;
            }else{
             echo "No found records";
            }
    }
    public function query7(){
        $query7 = "select employee_details_table.employee_id as id_of_Unassigned_employee_code
        from employee_details_table
        join employee_salary_table on
        employee_details_table.employee_id = employee_salary_table.employee_id
        where employee_details_table.employee_id not in
        (select distinct employee_id
        from employee_salary_table
        join employee_code_table on
        employee_salary_table.employee_code = employee_code_table.employee_code);";

        $result7 = $this->con->query($query7);
        if ($result7->num_rows > 0) {
            $data7 = array();
            while ($row = $result7->fetch_assoc()) {
                   $data7[] = $row;
                   
            }
            
            }
            return $data7;
    }

}
?>