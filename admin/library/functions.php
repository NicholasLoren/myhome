<?php
/*<!--  */

function checkUser() {
    // if user is not loggedin, redirect to login page
    if (!isset($_SESSION['user_id'])) {
        header('location: ../login.php');
        exit;
    } 

    // logout user
    if (isset($_GET['logout'])) {
        doLogout();
    }
}

function doLogin() {

    // if we find an error message, save it in a variable
    $errorMessage = '';
    $userName = $_POST['txtUserName'];
    $userPassword = $_POST['txtPassWord'];

    if ($userName == '' || $userPassword == '') {
        $errorMessage = 'Enter Both Username and Password';
    } else {

        $PassWord = sha1($userPassword);
       
        $sql = "SELECT tbl_users.*, tbl_user_roles.* FROM tbl_users INNER JOIN tbl_user_roles ON tbl_users.user_role=tbl_user_roles.user_role_id WHERE `username`='$userName' AND `password`='$PassWord' AND user_status='1'";
        
        $result = dbQuery($sql);
        if (dbNumRows($result) > 0) {
            $row = dbFetchAssoc($result);

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_code'] = $row['user_code'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['fullnames'] = $row['fullnames'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_role'] = $row['user_role_name'];
            $_SESSION['role'] = $row['user_role'];
            $_SESSION['profile_pic'] = $row['photo'];

            // user last login
             // user last login  86a8c2da8527a1c6978bdca6d7986fe1
               //to be coded

            //register user login logs
            //INSERT INTO `tbl_emp_login_logs`(`login_log_id`, `emp_id`, `emp_ip_address`, `login_date`, `logout_date`, `emp_location`, `emp_login_status`) VALUES ()";
            $user = $_SESSION['user_id'];
            $loginlog = "INSERT INTO tbl_user_logs(`user_id`, `login_status`) VALUES('$user','Active')";
            $loginquery = dbQuery($loginlog);
            header('location:index.php');
            
        } else {
            $errorMessage = 'Wrong Username or Password';
        }
// checking whether the user has been terminated or inactive
        $sql2 = "SELECT * FROM `tbl_users` INNER JOIN tbl_user_roles ON tbl_users.user_role=tbl_user_roles.user_role_id WHERE `username`='$userName' AND `password`='$PassWord' AND user_status ='0'";
        
        $result2 = dbQuery($sql2);
         if (dbNumRows($result2) > 0) {
            $errorMessage = 'Your Account was Deactived. Contact the useristrator to Re-Activate it';
            }
        }
    
    return $errorMessage;
}

// Checking useristrators Access rights 

function accessChk($userTypeId, $page) {
    if ($userTypeId != 1) {
        $chkAccess = dbFetchAssoc(dbQuery("SELECT * FROM `tbl_user_roles`,`tbl_user_permissions` WHERE `pg_id`=`page_id` AND `user_type_id` = '$userTypeId' AND pg_name = '$page'"));
        if ($chkAccess['role_status'] == 0) {
            header("location:index.php?page=404");
        }
    }
}

//page link to display
function _link() {
    echo 'index.php?page=';
}

function doLogout() {
    if (isset($_SESSION['user_id'])) {
        $user = $_SESSION['user_id'];
        $loginlog = "UPDATE tbl_user_logs SET login_status = 'logged out' WHERE user_id = '$user' ";
        $loginquery = dbQuery($loginlog);
        session_destroy();
    }
    header('location:login.php');
    exit();
}

// Select dropdown from database
function dropDowns($table, $placeHolder) {
    echo '<option value =""> Select ' . $placeHolder . ' </option>';
    $result = dbQuery("SELECT * FROM $table");
    while ($row = dbFetchArray($result)) {
        echo "<option value='$row[0]'> $row[1]</option>";
    }
}

// get name from another table
function getIdName($id, $table, $columnName, $columnId) {
    $row = dbFetchArray(dbQuery("SELECT $columnName, $columnId FROM $table WHERE $columnId=$id"));
    $name = $row[0];
    return $name;
}

function successMsg($msg) {
    echo'<div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        
        <strong>Success :</strong> ' . $msg . '
        </div>';
}

function errorMsg($msg) {
    echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                    
                    <strong>Error :</strong> ' . $msg . '
                  </div>';
}

function warningMsg($msg) {
    echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Warning :</strong> ' . $msg . '
                  </div>';
}

function _system($name) {
    $system_option = array(
        'name' => 'Frankline IT Solutions Ltd',
        'sys_name' => 'Frankline IT Solutions',
        'org' => 'Frankline IT Solutions ',
        'slogan' => 'IT for generations',
        'developer' => 'Frankline IT Solns (U) Ltd',
        'copyright' => 'Copyright © 2021 Frankline IT Solutions (U) Ltd. All rights Reserved.'
    );
    echo $system_option[$name];
}

function chkExist($table, $column, $chkValue) {
    $number = dbNumRows(dbQuery("SELECT $column FROM $table WHERE $column ='$chkValue'"));
    return $number;
}

function redWord($msg) {
    echo "<div style='color:red;'>" . $msg . "</div>";
}

function greenWord($msg) {
    echo "<div style='color:green;'>" . $msg . "</div>";
}

function goToPage($page) {
    return header("refresh:1;url=index.php?page=" . $page);
}

function readMoreFormat($msg){
    $post = substr($msg, 0, 200);
    echo $post." ...";
}

function setValue( $fieldName ) {
                        if ( isset( $_POST[$fieldName] ) ) {
                            echo $_POST[$fieldName];
                        }
                    }
                    function setChecked( $fieldName, $fieldValue ) {
                        if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
                            echo ' checked="checked"';
                        }
                    }
                    function setSelected( $fieldName, $fieldValue ) {
                        if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
                            echo  'selected     ="selected"';
                        }
                    }
$errors = array();
 function text_validate ($formname,$name){
            if (empty($formname) ) {
                global $errors;
                $errors[] = redWord( $name." cannot be blank");
            }else{
                global $dbConn;
                $dbname = mysqli_real_escape_string($dbConn,trim($formname));
                return $dbname;
            }

        }
 //number validating
 
         function num_validate($formname,$Name)
        {
            if (!empty($formname)) {
                if(!strcmp(intval($formname), $formname)){
                    global $dbConn;
                    $dbname = mysqli_real_escape_string($dbConn,trim($formname));
                    return $dbname;
                }else{
                    global $errors;
                $errors[] = redWord($Name." value provided is not a number");
            }
            }else{
                global $errors;
                $errors[] = redWord($Name." field can't be blank");
            }
        } 


        function relocate($page)
        {   
            ?>
                <script>
                    setTimeout(goTo,2200);
                    function goTo (pageName) {
                        window.location.href = "index.php?page=<?php echo $page; ?>";
                    }
                </script>
            <?php
        }
?>