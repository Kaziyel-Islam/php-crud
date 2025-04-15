<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="s_id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php 

       if(isset($_POST['showbtn'])){

         include "config.php";

         $stu_id = $_POST["s_id"];
       
         $sql = "SELECT * FROM students WHERE s_id = {$stu_id}";

         $result = mysqli_query($connec, $sql) or die("Query Unsuccesfull");

         if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){

    
    ?>

         <form class="post-form" action="updatedata.php" method="post">

            <div class="form-group">

                    <label for="">Name</label>
                    <input type="hidden" name="s_id"  value="<?php echo $row['s_id']; ?>" />
                    <input type="text" name="s_name" value="<?php echo $row['s_name'] ;?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="s_address" value="<?php echo $row['s_address']; ?>" />

            </div>

            <div class="form-group">

                <label>Class</label>

                        <?php 
                        
                            $sql_1 = "SELECT * FROM students_dept";

                            $result_1 = mysqli_query($connec, $sql_1) or die("Query Unsuccesfull");

                            if(mysqli_num_rows($result_1) > 0){

                                echo "<select name='s_dept'>";

                            while($row_1 = mysqli_fetch_assoc($result_1)){

                                if($row['s_dept'] == $row_1['dept_id']){

                                    $select = "selected";
                                }else{
                                    $select = "";
                                }

                        
                                echo "<option {$select} value='{$row_1['dept_id']}'>{$row_1['dept_name']}</option>";

                            }
                            
                            echo "</select>";

                            }

                        ?>
            </div>

                <div class="form-group">

                    <label>Phone</label>
                    <input type="text" name="s_phone" value="<?php echo $row['s_phone']; ?>" />

                </div>

                <input class="submit" type="submit" value="Update"  />

        </form>

    <?php }}} ?>


</div>
</div>
</body>
</html>
