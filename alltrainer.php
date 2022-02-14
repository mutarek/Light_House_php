<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
    $fetch_query = "SELECT * FROM trainer";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0 ) { 
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
         <th>Number</th>
        <th>Address</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while ($eachdata = mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><?php echo $eachdata['t_id']; ?></td>
                <td><?php echo $eachdata['t_name']; ?></td>
                <td><?php echo $eachdata['t_number']; ?></td>
                <td><?php echo $eachdata['t_address']; ?></td>
                <td>
                    <a href="trainerupdate.php?tid=<?php echo $eachdata['t_id']; ?>">Edit</a>
                     <a href="trainerdelete.php?trainer_id=<?php echo $eachdata['t_id']; ?>">Delete</a>
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
