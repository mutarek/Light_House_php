<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
    $fetch_query = "SELECT * FROM student INNER JOIN course ON student.s_course = course.c_id 
    INNER JOIN trainer ON student.s_trainer = trainer.t_id ORDER BY s_name";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0 ) { 
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Course</th>
        <th>Trainer</th>
        <th>Actions</th>
        </thead>
        <tbody>
            <?php
            while ($eachdata = mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><?php echo $eachdata['s_id']; ?></td>
                <td><?php echo $eachdata['s_name']; ?></td>
                <td><?php echo $eachdata['s_number']; ?></td>
                <td><?php echo $eachdata['c_name']; ?></td>
                <td><?php echo $eachdata['t_name']; ?></td>
                <td>
                    <a href="updatestudent.php?s_id=<?php echo $eachdata['s_id']; ?>">Edit</a>
                    <a href="studentdelete.php?student_id=<?php echo $eachdata['s_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>
