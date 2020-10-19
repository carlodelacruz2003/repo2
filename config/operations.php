<?php



require_once('./config/dbconfig.php');
$dbConfig = new dbconfig();


                class operations extends dbconfig{

                    // insert record in the database

                    function store_Record(){

                        global $dbConfig;

                            if(isset($_POST['btn_save'])){

                                $firstName = $dbConfig->check($_POST['first']);
                                $lastName = $dbConfig->check($_POST['last']);
                                $userName = $dbConfig->check($_POST['userName']);
                                $userEmail = $dbConfig->check($_POST['userEmail']);

                                if ($this->insert_Record($firstName, $lastName, $userName, $userName)){

                                    echo ' <div class = "alert alert-success"> Your Record has been saved </div> ';

                                }
                                else{
                                    echo ' <div class = "alert alert-danger"> record failed </div> ';

                                }

                            }
                        
                    }

                    
                    // insert record in the database using query

                    function insert_Record($a, $b, $c, $d){
                        global $dbConfig;
                            $query = "insert into employees (FirstName, Lastname, UserName, Email) values ('$a', '$b', '$c', '$d') ";
                            $result = mysqli_query($dbConfig->connection, $query);

                            if(true){
                                    return true;
                            }
                            else{
                                false;
                            }
                    }

                    //view database record
                    function view_Record(){

                        global $dbConfig;
                        $result = mysqli_query($dbConfig->connection, "select * from employees"); 
                        return $result;

                    }

                    //get particular record
                    Function get_record($id){

                        global $dbConfig;
                        $data= mysqli_query($dbConfig->connection, "select * from employees where ID = '$id' ");
                        return $data;

                    }

                    //Update Record
                    function update(){
                    global $dbConfig;
                     if (isset($_POST['btn_update'])) {

                        $ID = $dbConfig->check($_POST['ID']);
                        $firstName = $dbConfig->check($_POST['first']);
                        $lastName = $dbConfig->check($_POST['last']);
                        $userName = $dbConfig->check($_POST['userName']);
                        $userEmail = $dbConfig->check($_POST['userEmail']);

                        if($this->update_record($ID,$firstName,$lastName,$userName,$userEmail)){
                                $this->set_message('<div class="alert alert-success">Yozur Record has been updated : )</div>');
                                header("location:view.php");
                        }
                        else{
                            $this->set_message('<div class="alert alert-success">Something wrong :)</div>');
                            }

                     
                    
                        
                     }

                    }

                    //Update function 2
                    function update_record($id,$first,$Last,$User,$Email){
                        global $dbConfig;
                        $result = mysqli_query($dbConfig->connection,  "update employees set FirstName='$first' , LastName='$Last', UserName ='$User', Email ='$Email' WHERE ID= '$id' ");
                        return ($result) ? true : false; 
                     
                        // if ($result) {
                        //     return true;
                        // }
                        // else
                        // {
                        //     return false;
                        // }
                    }

                    // Set Session Message
                    function set_message($msg){
 
                        if (!empty($msg)) {
                             $_SESSION['Message'] = $msg;
                        }

                        else
                        {
                            $msg = "";
                        }

                    }

                    //Display Session Message
                    function display_message(){
                        if (isset($_SESSION['Message'])) {
                            echo $_SESSION['Message'];
                            unset($_SESSION['Message']);
                         
                        }
                    }

                    //delete record
                    function deleteRecord($id){
                        global $dbConfig;
                        // $result = mysqli_query($dbConfig->connection, "delete * from employee where ID ='$id'");
                        // //  return ($result) ? true : false; 

                        $query = "delete from employees where ID='$id'";
                        $result = mysqli_query($dbConfig->connection,$query);

                        if($result){
                            return true;
                        }
                        else{
                            return false;
                        }



                    }





}
//6:25
?>