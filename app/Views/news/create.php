<div style="margin:130px 30px;text-align:center"><h2>Registeration Details</h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>


<form action="" method="post">
    <?= csrf_field() ?>

    <label for="title">Username</label>
    <input type="input" name="title" ><br>

    <label for="body">Password</label>
    <textarea name="body" cols="20" rows="1"></textarea><br>

    <input type="submit" name="submit" value="Register" >
</form>

</div>
