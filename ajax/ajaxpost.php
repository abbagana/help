<?php
include('../config.php');

if(isset($_POST["school_id"]) && !empty($_POST["school_id"])){
    $query = $conn->query("SELECT * FROM tbl_department WHERE school_id = ".$_POST['school_id']." AND status = 'Active'");
    
    $rowCount = $query->num_rows;
    
    if($rowCount > 0){
        echo '<option value="">----Select Department Here----</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['department_id'].'">'.$row['department'].'</option>';
        }
    }else{
        echo '<option value="">No Department Available for Now</option>';
    }
}

if(isset($_POST["department_id"]) && !empty($_POST["department_id"])){
    $query = $conn->query("SELECT * FROM tbl_users WHERE department = ".$_POST['department_id']." AND acc_stat = '1'");
    
    $rowCount = $query->num_rows;
    
    if($rowCount > 0){
        echo '<option value="">----Select T.P Supervisor Here----</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['user_id'].'">'.$row['firstname'].' '.$row['surname'].' '.$row['othername'].'</option>';
        }
    }else{
        echo '<option value="">No T.p Supervisors Available for Now</option>';
    }
}

if(isset($_POST["zone_id"]) && !empty($_POST["zone_id"])){
    $query = $conn->query("SELECT * FROM tbl_tp_school WHERE zone = ".$_POST['zone_id']." AND status = 'Active'");
    
    $rowCount = $query->num_rows;
    
    if($rowCount > 0){
        echo '<option value="">----Select T.P School Here----</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id'].'">'.$row['school'].'</option>';
        }
    }else{
        echo '<option value="">No T.p School Available for Now</option>';
    }
}


?>