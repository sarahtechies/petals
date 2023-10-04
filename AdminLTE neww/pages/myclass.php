<?php
include ('constant.php');
class Profile{
   public function __construct(){
        if(array_key_exists('Login', $_POST)) {
            $this->Login();
            }
        elseif (array_key_exists('Signup', $_POST)) {
                $this->Signup();                 
        }
        elseif (array_key_exists('AddParents', $_POST)) {
                    $this->AddParent();
                }
                elseif (array_key_exists('AddStudent', $_POST)) {
                    $this->AddStudent();
                }
                elseif (array_key_exists('class_category', $_POST)) {
                    $this->class_category();
                }
                elseif (array_key_exists('class_arm', $_POST)) {
                    $this->class_arm();
                }
                elseif (array_key_exists('addsubjects', $_POST)) {
                    $this->Addsubjects();
                }
                elseif (array_key_exists('addstaffs', $_POST)) {
                    $this->AddStaffs();
                }
                elseif (array_key_exists('resultSetup', $_POST)) {
                    $this->resultSetup();
                }
                elseif (array_key_exists('searchstudent', $_POST)) {
                    $this->searchstudent();
                }
                elseif (array_key_exists('createfee', $_POST)) {
                    $this->createfee();
                }
                  elseif (array_key_exists('setfee', $_POST)) {
                    $this->setfee();
                }
                elseif (array_key_exists('assignsubjects', $_POST)) {
                    $this->assignsubjects();
                }
                elseif (array_key_exists('updatepermission', $_POST)) {
                    $this->updatepermission();
                }
                
                elseif (array_key_exists('UpdateAllPermission', $_POST)) {
                    $this->UpdateAllPermission();
                }
                elseif (array_key_exists('GradeSet', $_POST)) {
                    $this->GradeSet();
                }
                elseif (array_key_exists('RemarkSet', $_POST)) {
                    $this->RemarkSet();
                }
                elseif (array_key_exists('AddTerm', $_POST)) {
                    $this->AddTerm();
                }
                elseif (array_key_exists('Addresult', $_POST)) {
                    $this->Addresult();
                }
                 elseif (array_key_exists('GradeSet', $_POST)) {
                    $this->GradeSet();
                }
                 elseif (array_key_exists('RemarkSet', $_POST)) {
                    $this->RemarkSet();
                }
                 elseif (array_key_exists('schoolInfo', $_POST)) {
                    $this->schoolInfo();
                }
                elseif (array_key_exists('activate', $_POST)) {
                    $this->Activate();
                }
                elseif (array_key_exists('resultSum', $_POST)) {
                    $this->resultSum();
                }
                
        }
    public function Signup(){
            global $con;
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "INSERT into users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";
                mysqli_query($con, $sql);
                return;
        }
    public function Login()
        {
            global $con;
     if ($_SERVER['REQUEST_METHOD']=="POST")
        {
            // something was posted
            $email= $_POST['email'];
            $password = $_POST['password'];

      if (!empty ($email) && !empty($password) && !is_numeric($email) ){
                // save to database
                $query = "SELECT * FROM users WHERE email = '$email' ";
                $result = mysqli_query ($con, $query);
                if($result && mysqli_num_rows($result) ==1)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if ($user_data['password']== $password){
                        $_SESSION['user_id']= $user_data['user_id'];
                        header("location: index.php"); 
                        exit;
                    }
                }
                
            }
            echo "Wrong username and  password";
        }else{
            echo "please enter some valid information";
        }
        return;
    }


  public  function Alert() {
        global $report,$count;
        return $count==1  ?  "toastr.error('".$report."')" : "toastr.success('".$report."')";
    
    }

    public function AddParent(){
        global $con;
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];
        $lga = $_POST['lga'];
        $sql = "INSERT into parents(name, address, email, phone, state, lga) VALUES('$name', '$address', '$email', '$phone', '$state', '$lga')";
        mysqli_query($con, $sql);
        return;
    }

    public function AddStudent(){
        global $con;
        $guardian = $_POST['guardian'];
        $category = $_POST['category'];
        $class_arm = $_POST['class_arm'];
        $surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
        $othernames = $_POST['othernames'];
        $gender = $_POST['gender'];
        $regnumber = $_POST['regnumber'];
            $sql = "INSERT into students(guardian, category, class_arm, surname, firstname, othernames, gender, regnumber) VALUES('$guardian', '$category', '$class_arm', '$surname', '$firstname', '$othernames','$gender','$regnumber')";
    mysqli_query($con, $sql);

    return;
    }
function getClassCategory($sn){
    global $con;
            $sql = $con->query("SELECT * FROM class WHERE sn = '$sn'");
            $rows= mysqli_fetch_assoc($sql);
            return $rows['category'];
}
    public function class_category(){
        global $con;
        
        $category = $_POST['category'];
$sql = "INSERT into  class(category)VALUE('$category')";
  mysqli_query($con, $sql);
 
        return;
    }

    function getClassArm($sn){
    global $con;
            $sql = $con->query("SELECT * FROM arm WHERE sn = '$sn'");
            $rows= mysqli_fetch_assoc($sql);
            return $rows['arm'];
    }

     public function class_arm(){
        global $con;
        
        $arm = $_POST['arm'];
$sql = "INSERT into  arm(arm)VALUE('$arm')";
  mysqli_query($con, $sql);
        return;
    }

    public function Addsubjects(){
        global $con;

        $subject= $_POST['subject'];
        $sql = "INSERT INTO subjects(subject) VALUE('$subject')";
        mysqli_query($con, $sql);

        return;
    }

    public function AssignSubjects(){
        global $con;

        $subject= $_POST['subject'];
        $class= $_POST['class'];
        $teacher= $_POST['teacher'];
        
        $sql = "INSERT INTO subject_teachers(subject, class, teacher) VALUES('$subject', '$class', '$teacher')";
        mysqli_query($con, $sql);
        return;
    }

    public function AddStaffs(){
        global $con;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $sql= "INSERT INTO staffs(name, email, phone, role) VALUES('$name', '$email', '$phone', '$role')";
        mysqli_query($con, $sql);

        return;
    }
     function staffRole($role){
        $post ='';
        if($role == 7){
            $post = 'Teacher';
           
        }
         elseif($role == 8){
                $post = 'Accountant';
            }
            elseif($role == 9){
                $post = 'Administrator';
            }
            return $post;
     }

     function Total($table){
        global $con;
        $sql = $con->query("SELECT * FROM $table");
        return mysqli_num_rows($sql);
     }

     function total_Fees(){
        global $con;
        $sql = $con->query("SELECT sum(feeAmount) as total FROM set_fee");
        $rows = mysqli_fetch_assoc($sql);
        return $rows['total'];
     }
    function total_scores(){
        global $con;
        $sql= $con->query("SELECT SUM(total) AS all_score FROM results_setup WHERE sn = '$sn'");
        $rows = mysqli_fetch_assoc($sql);
        return number_format($rows['all_score']); 
    }
     function SqLx($table, $key, $value, $pin){
          global $con;
          $sql = $con->query("SELECT * FROM $table WHERE $key = '$value'");
          $row = mysqli_fetch_assoc($sql);
          return $row[$pin];
               }

     function sql($table, $col, $val){
                global $con;
                $sql = $con->query("SELECT * FROM $table WHERE $col = '$val'");
                return mysqli_num_rows($sql);
               }

function SqLx1($table, $col, $val, $ret){
                global $con;
                $sql = $con->query("SELECT * FROM $table WHERE $col = '$val'");
                $rows = mysqli_fetch_assoc($sql);
                return $rows[$ret];
               }


    public function resultSetup(){
        global $con, $count, $report;

        $ca1 = $_POST['ca1'];
        $ca2 = $_POST['ca2'];
        $ca3 = $_POST['ca3'];
        $exam = $_POST['exam'];
       
        
        
      $con->query ("UPDATE results_setup SET ca1='$ca1', ca2='$ca2', ca3='$ca3', exam='$exam' WHERE sn = 1");
      return;

    }

function GradeSet(){
    global $con,$report,$count;
       $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $E = $_POST['E'];
        $F = $_POST['F'];
        $ar = $_POST['ar'];
        $br = $_POST['br'];
        $cr = $_POST['cr'];
        $dr = $_POST['dr'];
        $er = $_POST['er'];
        $fr = $_POST['fr'];

      $con->query ("UPDATE results_setup SET A='$A', B='$B', C='$C', D='$D', E='$E', F='$F', ar='$ar', br='$br', cr='$cr', dr='$dr', er='$er', fr='$fr' WHERE sn = 1");
      

       $report = 'operation successfully'; $count = 1; return;

        return;
    }



    //function GradeSet(){
       
       // global $con, $count, $report;
        //if($score >= 75){
           // $grade = 'A';
        //}
        //elseif($score >= 60){
            //$grade = 'B';
        //}
        //elseif($score >= 50){
            //$grade = 'C';
       // }
        //elseif($score >= 45){
            //$grade = 'D';
        //}
        //elseif($score >= 40){
            //$grade = 'E';
        //}
        //elseif($score >= 0){
           // $grade = 'F';
        //}
        //else{
           // $report = 'invalid input'; $count = 1; return;
        //}
        //return $grade;
   // }

    function RemarkSet($remarks){
        $remarks = '';
        global $con;
        if($total >= 70){
            $remarks = 'Excellent';
        }
        elseif($total >= 60){
            $remarks = 'V.good';
        }
        elseif($total >= 50){
            $remarks = 'Good';
        }
        elseif($total >= 45){
            $remarks = 'Poor';
        }
        elseif($total >= 40){
            $remarks = 'V.poor';
        }
        elseif($total >= 0){
            $remarks = 'Fail';
        }
        else{
            $report = 'invalid input'; $count = 1; return;
        }
        return $remarks;
    }

     public function CreateFee(){
        global $con;
        $fee_category = $_POST['fee_category'];
        $description = $_POST['description'];
         $sql= "INSERT INTO create_fee(fee_category, description) VALUES('$fee_category', '$description')";
         mysqli_query($con, $sql);
         return;
    }
        
public function setfee(){
global $con;
 $feeClass = $_POST['feeClass'];
        $feeCategory = $_POST['feeCategory'];
          $feeAmount = $_POST['feeAmmount'];
        $sql = $con->query("SELECT * FROM students WHERE category = '$feeClass' ") ;
             while($rows = mysqli_fetch_assoc($sql)){
             $studentid = $rows['sn'];
             
             $sq= "INSERT INTO set_fee(feeClass, feeCategory, feeAmount, studentid) VALUES('$feeClass', '$feeCategory','$feeAmount','$studentid')";
         mysqli_query($con, $sq);
             }
         return;

}

public function updatePermission(){
    global $con;
    $staff_id = $_POST['updatepermission'];
    $p1 = $_POST['p1'] ?? 0;
    $p2 = $_POST['p2'] ?? 0;
    $p3 = $_POST['p3'] ?? 0;
    $p4 = $_POST['p4'] ?? 0;
    $sql= "UPDATE permission SET p1 = '$p1', p2 = '$p2', p3 = '$p3', p4 = '$p4' WHERE staff_id = '$staff_id'";
    $con->query($sql);
    //$report = "successful" . $p2 .$p3;
    return;
}


public function UpdateAllPermission(){
    global $con,$report;
    $staff = $_POST['staffid'];
    $i = 0; 
    while($i < count($staff)){$e=$i++;
$staff_id = $_POST['staffid'][$e];
    $p1 = $_POST['p1'][$staff_id] ?? 0;
    $p2 = $_POST['p2'][$staff_id] ?? 0;
    $p3 = $_POST['p3'][$staff_id] ?? 0;
    $p4 = $_POST['p4'][$staff_id] ?? 0;
    $sql= "UPDATE permission SET p1 = '$p1', p2 = '$p2', p3 = '$p3', p4 = '$p4' WHERE staff_id = '$staff_id'";
    $con->query($sql);
    }
    //$report = "successful" . json_encode($_POST['p1']);
    return;
}

public function PromoteUser($sn){
    $post='';
    if($sn > 3){
        $post = '1';
    }
}


function AddTerm(){
    global $con, $count, $report;
    $session =$_POST['session'];
    if(empty($session)){
        $report = 'Select a session'; $count = 1; return;
    }

    $i = 0;
    while($i < 3){
        $i++;
        $sql= "INSERT INTO terms(term, session) VALUES('$i', '$session')";
        mysqli_query($con, $sql);
    }
    $report = "Section successfully added";
    return;
}

function Addresult(){
    global $con, $count, $report;

    $studentid = $_POST['studentid'];
     $resultid = $_POST['resultid'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $ca1 = $_POST['ca1'];
    $ca2 = $_POST['ca2'];
    $exam = $_POST['exam'];

    $i = 0;

    while ($i < count($studentid)){
        $e = $i++;

        $student = $studentid[$e];
        $c1 = $ca1[$e];
        $c2 = $ca2[$e];
        $term = $this->SqLx('terms', 'status', 1, 'term');
        $exa = $exam[$e];
        $total =(int)$c1 + (int)$c2 + (int)$exa;
        if(empty($c1) || empty($c2) || empty($exa)){
            $report = 'input all fields'; $count = 1; return;
        }
        $sql = "INSERT INTO add_results(studentid, class, subject, ca1, ca2, term, exam, total) VALUES('$student', '$class', '$subject', '$c1', '$c2', '$term', '$exa', '$total')";
        mysqli_query($con, $sql);
    }
    $report = 'results added successfully';
    return;
}


 public function schoolInfo(){
    global $con, $count, $report;
    $school_name = $_POST['school_name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $phone = $_POST['phone'];
    $alt_phone = $_POST['alt_phone'];
    $motto = $_POST['motto'];
    $address = $_POST['address'];

     $con->query ("UPDATE school_info SET school_name='$school_name', email='$email', website='$website', phone='$phone', alt_phone='$alt_phone', motto='$motto', address='$address', WHERE sn = 1");
    $report = "Submitted successfully"; $count = 1;
    return;
}

function realTerm($t){
    $term = '';
    if($t == 1) {
        $term = 'First Term';
    }
    elseif($t == 2){
        $term = 'Second Term';
    }
    elseif($t == 3){
        $term = 'Third Term';
    }
    return $term;
}

function Activate(){
    global $con, $count, $report;
    $sn = $_POST['activate'];
    $con->query ("UPDATE terms SET status = 0");
    $con->query("UPDATE terms SET status =1 WHERE sn='$sn'");
    $report = 'term updated successfully' . $sn;
    echo $sn;
   return;
}

function resultSum(){
    global $con;
    $sql = $con->query("SELECT *FROM $table WHERE $col = '$val'");
        $sql = "SELECT * FROM results_sum WHERE stid='$stid' AND term='$term' AND session='$session'";
    if(mysqli_num_rows($sql) == 0){
    $sql = "INSERT INTO results_sum(stid, term, session) VALUES ('$stid', '$term', '$session')";
        mysqli_query($con, $sql);
        $result = $rows['sn'];
        return $result;
    }
}

function resultid(){
    global $con;
    
}

function checkResultProfile($stid, $class){
    global $con;
    $term = $this->sqLx1('terms', 'status', 1, 'term');
    $session = $this->sqLx1('terms', 'status', 1, 'session');
    $sql = $con->query("SELECT * FROM results_sum WHERE stid ='$stid' AND term = '$term' AND class = '$class' AND session = '$session'");
    if(mysqli_num_rows($sql) == 0){
        $con->query("INSERT INTO results_sum(stid, term, class, session) VALUES ('$stid', '$term', '$class', '$session')");
        return;
    }
}


function checkResultSum(){
    global $con;
    $sql = $con->query("SELECT * FROM students");
    while($rows = mysqli_fetch_assoc($sql)){
        $stid = $rows['sn'];
        $class = $rows['category'];
       $this->checkResultProfile($stid, $class); 
    }
    return;

}
    
}

    

      


$pro = new Profile();

?>