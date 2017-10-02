<?php
$conn = new mysqli("localhost", "root", "", "simpledata");
if(isset($_GET['idDelete'])){
        $idDelete = $_GET['idDelete'];
        $sql = "delete from registration where ID='$idDelete'";
        if($conn->query($sql)===true) {
            header("location: falad4.php");
        }
        else { ?>
            <script>
                alert("failed to delete");
                window.location.href='customers.php';
            </script>
            <?php
            echo "failed to delete";
        }
    }
    if(isset($_POST['update_customer'])) {
        $updateID = $_POST['cusId'];
        $cusName = "";
        $cusPhone = "";
        $cusName = $_POST['cusName'];
        $cusPhone = $_POST['cusPhone'];
        $sql = "UPDATE registration SET studentname= '$cusName', gender= '$cusPhone' WHERE ID = '$updateID'";
        if($conn->query($sql)===TRUE) {?>
            <script>
            alert("sucessfull updated");
            </script><?php
           
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
<html>
    <head>
        <title>Document</title>
        <?php include("falad2.php"); ?>
        </head>
        <body>
            <?php include("falad3.php"); ?>
            </body>
            </html>