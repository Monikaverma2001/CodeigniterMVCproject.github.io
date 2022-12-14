

<div style="margin-top:0px;margin-left:600px;padding:40px 40px;color:black;background:	whitesmoke ;border-style: dotted solid double;" class="table-responsive ">

<?php if (! empty($stock) && is_array($stock)): ?>
    <h2 style="text-align:center;padding :20px 120px;black;background:green">ITEMS DETAIL</h2>
    <hr>
<div class="btn-group " >
<form action="http://localhost/code/public/news/add">
    <button type="submit" class="btn btn-secondary" style="margin:20px 20px">REFRESH</button>
</form>
<form action="http://localhost/code/public/home">
    <button type="submit" class="btn btn-info" style="margin:20px 20px">LOGOUT</button>
</form>
    <form action="http://localhost/code/public/news/add" >
            <button type="submit" class="btn btn-primary" style="margin:20px 20px">ADD ITEM</button>
    </form>
    <form action="http://localhost/code/public/news/delete" >
            <button type="submit" class="btn btn-danger" style="margin:20px 20px">DELETE ITEM</button>
    </form>
    <form action="http://localhost/code/public/news/update" >
            <button type="submit" class="btn btn-warning" style="margin:20px 20px">EDIT ITEM</button>
    </form>

</div>

    <table style="font-family:Times New Roman;font-size:20px;width:1200px;margin-bottom:400px;padding:100px 0px;background-color:linen " class="table-bordered">
    <tr>
    <th > SERIAL NUMBER.</th>
       <th > ITEM NAME</th>
       <th >ITEM PRICE</th>
       
   </tr>
   <?php $i=1;foreach ($stock as $news_item): ?>
    <tr style="width:70%">
    <td style="width:5%;color:blue;"><?= esc($news_item['id']) ?></td>
        <td style="width:60%;color:green;text-align:left;"><?= esc($news_item['title']) ?></td>  
        <td style="text-align:center;color:orange;"> <?= esc($news_item['body']) ?></td>
         
    </tr>   
   
    <?php endforeach ?>
    </table>
    <hr>
<?php else: ?>

    <h3>No News</h3>
<hr>
    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>
</div>