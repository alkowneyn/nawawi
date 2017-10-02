<?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
    include("falad2.php");
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "
        SELECT * FROM registration 
        WHERE studentname LIKE '%".$search."%'
        OR ID LIKE '%".$search."%'
         OR phone LIKE '%".$search."%'
        ";
    }
    else
    {
        $query = "
        SELECT * FROM registration ORDER BY ID
        ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { ?>





<div class="container">
<div class="row">
     <div class="col-sm-2">
         </div>
    <div class="col-sm-10" style="margin: 0 0 0 -40px">
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                    <thead style="background-color:black;color:white; font-size:11px;">
                          <th>ID</th>
					<th>Student name</th>
					<th>Gender</th>
					<th>Mother name</th>
					<th>Guardian name</th>
                  <th>Gardian relation</th>
                    <th>Guardian tell</th>
					<th>Guardian occupation</th>
					<th>POB</th>
					<th>Address</th>
					<th>DOB</th>
                    <th>Phone</th>
					<th>Level</th>
					<th>Class name</th>
					<th>Section</th>
					<th>Branch</th>
                    <th>Nationality</th>
					<th>Registration date</th>
					<th>Image</th>
				    <th>Edit </th>
					<th>Delete</th> 
                         </thead> 
                </tr>
                <tbody style="font-size:11px;">
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                     <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row["studentname"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row['mothername'] ?></td>
					<td><?php echo $row['guardianname'] ?></td>
                	<td><?php echo $row['guardianrelation'] ?></td>
					<td><?php echo $row['guardiantell'] ?></td>
                    <td><?php echo $row['guardianoccupation'] ?></td>
					<td><?php echo $row['pob'] ?></td>
					<td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
					<td><?php echo $row['phone'] ?></td>
					<td><?php echo $row['level'] ?></td>
                     <td><?php echo $row['classname'] ?></td>
					<td><?php echo $row['section'] ?></td>
					<td><?php echo $row['branch'] ?></td>
                     <td><?php echo $row['nationality'] ?></td>
					<td><?php echo $row['registrationdate'] ?></td>
					<td><?php echo $row['image'] ?></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['ID']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['ID']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 id="">Update customer</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                        <label> ID : </label>
                                            <input type="text" name="cusId" id="#edit-<?php echo $row['ID']; ?>"style="width:430px ; height:31px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['ID']; ?>"><br>
                                            <label> Student name : </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="cusName" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['studentname']; ?>"><br>
                                            <label> Gender: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="cusPhone" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['gender']; ?>"><br>
                                            <button type="submit" class="btn btn-success" name="update_customer" id="#edit-<?php echo $row['id']; ?>">Update</button>
                                        </form>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                     </td>
                                </div>
                            </div>
                        </div><td>
                        <a href="?idDelete=<?php echo $row['ID'] ?>"><button name="idDelete" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm"></i> Delete</button></a>
                    </td>
                </tr>
                <?php 
            }
    }
else
{
 echo 'Data Not Found';
}
echo " </tbody></table></div></div></div></div>";
?>