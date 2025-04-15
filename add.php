<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="s_name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="s_address" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="s_dept">
                <option value="" selected disabled>Select Class</option>

                <?php 
       
                    include "config.php";

                    $sql = "SELECT * FROM students_dept";

                    $result = mysqli_query($connec, $sql) or die("Query Unsuccesfull");

                    while($row = mysqli_fetch_assoc($result)){
    
                ?>
                <option value="<?php echo $row['dept_id']; ?>"><?php echo $row['dept_name']; ?></option>

                <?php } ?>
                
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="s_phone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
