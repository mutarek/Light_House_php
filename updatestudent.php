<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Student</h2>
    <?php 
    $student_id = $_GET['s_id'];
    $db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
    $fetch_query1 = "SELECT * FROM student WHERE s_id = $student_id";
    $result1 = mysqli_query($db,$fetch_query1) or die(mysqli_error()); 
    if (mysqli_num_rows($result1) > 0) {
        while ($stinfo = mysqli_fetch_assoc($result1)) {
    ?>
    <form class="post-form" action="functions/updatestudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="hidden" name="sid" value="<?php echo$stinfo['s_id'] ?>"  />
            <input type="text" name="sname" value="<?php echo$stinfo['s_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" value="<?php echo$stinfo['s_number'] ?>"  />
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="s_course">
                <option value=""selected disabled>Select Course</option>
                <?php 
                $fetch_query = "SELECT * FROM course";
                $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
                if (mysqli_num_rows($result) > 0 ) {
                    while ($allcourse = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo$allcourse['c_id'] ?>"><?php echo$allcourse['c_name'] ?></option>
            <?php }  } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Update Student" name="update"  />
    </form>
<?php } } ?>
</div>
</div>
<?php include 'footer.php'; ?>
