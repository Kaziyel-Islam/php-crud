<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="s_id" />
        </div>

       <input class="submit" type="submit" name="deletebtn" value="Delete" />

       <?php 

            if(isset($_POST['deletebtn'])){

            include "config.php";

            $stu_id = $_POST["s_id"];

            $sql = "DELETE FROM students WHERE s_id ='{$stu_id}'";

            $result = mysqli_query($connec, $sql) or die("Query Unsuccesfull");

            header("Location: http://localhost/crud_html/index.php");

            mysqli_close($connec);

            }

        ?>

    </form>
</div>
</div>
</body>
</html>
