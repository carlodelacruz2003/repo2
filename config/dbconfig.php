<?php    
        session_start();
        require_once('./config/operations.php');
        class dbconfig
        {
                public $connection;

                function __construct(){

                    $this->db_connect();

                }

               

                function db_connect(){

                    $this->connection = mysqli_connect('localhost', 'root', '', 'crud');
                    if(mysqli_connect_error())
                    {
                        die("connect failed");
                    }

                }

                 function check($a){

            
                   // $return = mysqli_real_escape_string($this->connection,$a);
                   $return = $this->connection -> real_escape_string($a);
                    return $return;

                }
        }

        

  




?>