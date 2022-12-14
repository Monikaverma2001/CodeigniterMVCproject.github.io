<div class="d-flex bd-highlight"><div style="padding:130px 30px;text-align:center;color:black;width:30%;"class="transparent-bgopc fixed-top"><br><h2 style="font-size:60px;">EDIT ITEM</h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<br><br><br><br><br>
<form action="" method="post" style="background:black;padding:30px 30px;opacity:1;color:white;">
    <?= csrf_field() ?>
   
    <label for="id">ENTER ITEM ID</label>
    <input type="input" name="id" ><br>
<br>

    <label for="title">ENTER ITEM NAME</label>
    <input type="input" name="title" ><br>
<br>
    <label for="body">PRICE</label>
    <input name="body" cols="20" rows="10"><br>
    <br><br>
    <h2><?= esc($title) ?></h2>
    <input type="submit"  value="update item"  class="btn btn-info btn-lg">
    <br><br><br>
</form>

</div>
