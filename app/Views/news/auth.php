<h2><?= esc($title) ?></h2>
 <div style="padding:300px 100px;color:black;"class="transparent-bgopc">
      
        <form action="http://localhost/code/public/news" >
        <br>
        <br>
        <p style="color:black;font-size:50px;" >welcome here<br>
        <?php if (! empty($news) && is_array($news)): ?>
            <?php
            foreach($news as $n)
            {
            	if($n['title']===$title)
            	{
            		echo "<h2 >WELCOME $title and </h2>";
            		break;
            	}
            	else
            	{
            	
            	echo "<h2>WELCOME</h2>";
            	}
            }
            
            
            ?>
            
    <?php endif ?>

            <input type="submit" value="seestock" class="btn btn-info btn-lg">
        </p>
      </form>
      
      </div>
