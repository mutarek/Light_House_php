<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Trainer</h2>
    <?php 
    $tainer_id = $_GET['tid'];
    $db = mysqli_connect("localhost","root","","lighthouse") or die(mysqli_error());
    $fetch_query = "SELECT * FROM trainer WHERE t_id = $tainer_id";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
        while ($trainerdata = mysqli_fetch_assoc($result)) {
    ?>
    <form class="post-form" action="functions/updatetrainerdata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="tid" value="<?php echo $trainerdata['t_id']; ?>" />
            <input type="text" name="tname" value="<?php echo $trainerdata['t_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="number" name="tnumber" value="<?php echo $trainerdata['t_number']; ?>"/>
        </div>
        <div class="form-group">
            <label>Date Of Birth</label>
            <input type="Date" name="tdob" value="<?php echo $trainerdata['t_dob']; ?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="taddress" value="<?php echo $trainerdata['t_address']; ?>" />
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
<?php 
} 
}

?>
</div>
</div>
<?php include 'footer.php'; ?>
