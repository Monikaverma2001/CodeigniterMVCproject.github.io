
<h2><?= esc($title) ?></h2>
<div style="margin:50px 20px;color:black;background:white;background-color:		aliceblue " class="table-responsive">


<?php if (! empty($stock) && is_array($stock)): ?>
    <h2 style="text-align:center;padding:30px 30px;color:red;background-color:green">ITEMS DETAIL</h2>
    <hr>
    <table style="font-family:Times New Roman;font-size:20px;width:80%;margin-bottom:400px;margin-left:200px;margin-right:400px;margin-top:60px;padding:100px 150px;background-color:linen " class="table-bordered">
    <tr>
    <th > SERIAL NUMBER.</td>
       <th > ITEM NAME</td>
       <th >PRICE</td>
   </tr>
   <?php $i=1;foreach ($stock as $news_item): ?>
    <tr style="width:70%">
    <td style="width:5%;color:blue;"><?= esc($news_item['id']) ?></td>
        <td style="width:60%;color:green;text-align:left;margin-left:40px"><?= esc($news_item['title']) ?></td>  
        <td style="text-align:center;color:orange;"> <?= esc($news_item['body']) ?></td>
         
    </tr>   
   
    <?php endforeach ?>
    </table>
<?php else: ?>

    <h3>No News</h3>
<hr>
    <p>Unable to find any stock for you.</p>

<?php endif ?>

</div>
