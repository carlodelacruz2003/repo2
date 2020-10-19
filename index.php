<?php 
require_once('./config/dbconfig.php');
$db = new operations();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud Operation in PHP using OOp</title>
</head>
<body class = "bg-dark">
            <div class = "container">
                        <div class = "row">
                        <!-- m-auto -- margin auto -->
                                <div class = "col-lg-6 m-auto">

                                         <div class = "card mt-5">
                                                <div class = "card-header">
                                                    <h2>carlo sign ka ang pogi</h2>
                                           
                                                                    <input type="text" name="userName" class = "form-control mb-2"  placeholder = "User Name" required>
                                                                    <input type="email" name="userEmail" class = "form-control mb-2"  placeholder = "User Email"  required>
                                                                    


                                                             
                                                        </div>
                                                        <div class = "card-footer">
                                                                        <button class="btn btn-success" name = "btn_save">Save</button>
                                                                </form>
                                                        </div>
                                                
                                        </div>
                                </div>
                        </div>
            </div>
</body>
</html>