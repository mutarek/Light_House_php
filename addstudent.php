<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Course</h2>
    <form class="post-form" action="functions/addstudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" />
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="s_course">
                <option value=""selected disabled>Select Course</option>
                <?php
                $db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());$fetch_query = "SELECT * FROM course";
                $result = mysqli_query($db,$fetch_query) or die(mysqli_error()); 
                while ($trainer =mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $trainer['c_id']; ?>"><?php echo $trainer['c_name']; ?></option>
                <?php } ?> 
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
