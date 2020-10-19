<?php 
require_once('./config/dbconfig.php');
$db = new operations();
$id = $_GET['U_ID'];
$result = $db->get_record($id);
$data = mysqli_fetch_assoc($result);
$db->update();



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
                                                    <h2>Update Record</h2>
                                                 </div>
                                                        <?php $db->store_Record(); ?>
                                                         <div class = "card-body">
                                                                <form method ="POST">
                                                                    <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
                                                                    <input type="text" name="first" class = "form-control mb-2"  placeholder = "First Name" value = "<?php echo $data['FirstName']; ?>" required>
                                                                    <input type="text" name="last" class = "form-control mb-2"  placeholder = "Last Name" required value = "<?php echo $data['LastName']; ?>">
                                                                    <input type="text" name="userName" class = "form-control mb-2"  placeholder = "User Name" required value = "<?php echo $data['UserName']; ?>"> 
                                                                    <input type="email" name="userEmail" class = "form-control mb-2"  placeholder = "User Email"  required value = "<?php echo $data['Email']; ?>">
                                                                    


                                                             
                                                        </div>
                                                        <div class = "card-footer">
                                                                        <button class="btn btn-success" name = "btn_update" >update</button>
                                                                </form>
                                                        </div>
                                                
                                        </div>
                                </div>
                        </div>
            </div>
</body>
</html>