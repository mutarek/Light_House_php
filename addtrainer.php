<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Trainer</h2>
    <form class="post-form" action="functions/addtrainerdata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="tname" />
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="number" name="tnumber" />
        </div>
        <div class="form-group">
            <label>Date Of Birth</label>
            <input type="Date" name="tdob" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="taddress" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
