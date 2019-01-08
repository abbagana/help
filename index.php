<!DOCTYPE html>
<html>
<head>
<title>Fetch Data from Db</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">

<script src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#school').on('change',function(){
        var schoolID = $(this).val();
        if(schoolID){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxpost.php',
                data:'school_id='+schoolID,
                success:function(html){
                    $('#dept').html(html);
                }
            }); 
        }else{
            $('#dept').html('<option value="">Select School First</option>');
        }
    });
});

$(document).ready(function(){
    $('#dept').on('change',function(){
        var deptID = $(this).val();
        if(deptID){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxpost.php',
                data:'department_id='+deptID,
                success:function(html){
                    $('#exstaff').html(html);
                }
            }); 
        }else{
            $('#exstaff').html('<option value="">Select Department First</option>');
        }
    });
});

$(document).ready(function(){
    $('#zone').on('change',function(){
        var zoneID = $(this).val();
        if(zoneID){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxpost.php',
                data:'zone_id='+zoneID,
                success:function(html){
                    $('#tpschool').html(html);
                }
            }); 
        }else{
            $('#tpschool').html('<option value="">Select Zone First</option>');
        }
    });
});

$(document).ready(function(){
    $('#zone').on('change',function(){
        var zoneID = $(this).val();
        if(zoneID){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxpost.php',
                data:'zone_id='+zoneID,
                success:function(html){
                    $('#tpschool').html(html);
                }
            }); 
        }else{
            $('#tpschool').html('<option value="">Select Zone First</option>');
        }
    });
});
</script>
</head>


        <body>
            <h1 align="center">Adding of Staff details</h1>
            <br><br>
            <form action="pages/addme.php" method="POST"> 

                      <div class="col-lg-4 col-md-4">
                        <div class="panel-body">
                            <div class="form-group">            
                                <label for="exampleInputEmail1">Select School of Staff</label>
                                    <select class="form-control" name="school" id="school" required>
                                        <option value="" selected disabled>-Select School-</option>
                                            <?php
                                            include 'config.php';
                                            $sql = "SELECT * FROM tbl_school WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['school_id'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
                                             ?>
                                            
                                                </select>
                                                    </div></div></div>

                <div class="col-lg-4 col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Department of staff</label>
                                    <select class="form-control" name="dept" id="dept" required>
                                        <option value="" selected disabled>-Select School First-</option>
                                            </select>
                                                </div></div></div>

                <div class="col-lg-4 col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Supervisor/Staff</label>
                                    <select class="form-control" name="staff" id="exstaff" required>
                                        <option value="" selected disabled>-Select Department First-</option>
                                            </select>
                                                </div></div></div>                

                <div class="col-lg-4 col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Zone for the staff to review</label>
                                    <select class="form-control" name="zone" id="zone" required>
                                        <option value="" selected disabled>-Select Zone-</option>
                                            <?php
                                            include 'config.php';
                                            $sql = "SELECT * FROM tbl_zone WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['zone_id'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
                                             ?>
                                            
                                                </select>
                                                    </div></div></div>


                    <div class="col-lg-4 col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select School to Review</label>
                                    <select class="form-control" name="psschool" id="tpschool" required>
                                        <option value="" selected disabled>-Select Zone First-</option>
                                            </select>
                                                </div></div></div>

                    <div class="col-lg-4 col-md-4">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Group</label>
                                    <select class="form-control" name="group" id="group" required>
                                        <option value="" selected disabled>-Select Group Here-</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                            </select>
                                                </div></div></div>

                <div class="col-lg-12 col-md-4">
                    <div class="panel-body">
                        <div class="form-group choosingouting">
                            <label for="exampleInputEmail1">Select Outing</label>
                                <div class="chooseouting">
                                    <button type="button" id="first" class="btn btn-info unselected selected" name="first" value="First Outing">First Outing</button>
                                    <button type="button" id="first" class="btn btn-info unselected selected" name="first" value="First Outing">Second Outing</button>
                                    <button type="button" id="first" class="btn btn-info unselected selected" name="first" value="First Outing">Third Outing</button>
                                    <button type="button" id="first" class="btn btn-info unselected selected" name="first" value="First Outing">Fourth Outing</button>
                                    <button type="button" id="first" class="btn btn-info unselected selected" name="first" value="First Outing">Fifth Outing</button>
                                    <button type="button" id="first" class="btn btn-info unselected selected" name="first" value="First Outing">Sixth Outing</button>
                                        </div></div></div></div>
                                        
                    <div class="submit">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>

                    
                </form>
      
        </body>
        </html>
        