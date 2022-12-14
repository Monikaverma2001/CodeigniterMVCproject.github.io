 

 
<div style="margin:0px 200px;padding:90px 30px;text-align:center;background:black;color:white"class="transparent-bgopc"><br>
 
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

            <form action=""  method="post">
            <?= csrf_field() ?>
                <h3>Drop Us a Message</h3>

<br><br><br><br><br>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" >
                        </div><br>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" >
                            
                        </div><br>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" >
                        </div><br>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 160px;"></textarea>
                        </div>
                    </div>
                    <input type="submit"  value="submit"  class="btn btn-info btn-lg" style="width:20%;margin-left:600px">
                </div>
            </form>

<br><br><br><br><br>
</div>
