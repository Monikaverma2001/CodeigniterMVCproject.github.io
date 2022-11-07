<h2><?= esc($title) ?></h2>
<div style="margin:20px 20px">
<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>
       
        
        <div class="main">
            <?= esc($news_item['body']) ?><br>
            <?= esc($news_item['slug']) ?><hr>
        </div>
       
        <hr>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>
<hr>
    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>


<?php

$query   = $db->query('SELECT name, title, email FROM my_table');
$results = $query->getResult();

foreach ($results as $row) {
    echo $row->title;
    echo $row->name;
    echo $row->email;
}

echo 'Total Results: ' . count($results);
