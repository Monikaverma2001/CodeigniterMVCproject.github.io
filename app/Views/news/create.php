<div style="margin:0px 200px;padding:90px 30px;text-align:center;background:black;color:white"class="transparent-bgopc"><br>
<h2 style="font-size:60px;">Registeration Details</h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<br><br><br><br><br>
<form action="" method="post">
    <?= csrf_field() ?>
    <label for="id" >ENTER YOUR ID</label>
    <input name="id" cols="20" rows="1"><br><br>
           
    <label for="title">ENTER YOUR USERNAME</label>
    <input type="input" name="title" ><br>
<br>
    <label for="body">ENTER YOU PASSWORD</label>
    <input name="body" cols="20" rows="1"><br>
    <br><br>
<h4><?= esc($title)?></h4>
    <input type="submit"  value="Register"  class="btn btn-info btn-lg">
    <br><br><br>
</form>

</div>
