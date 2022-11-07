<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
   
    protected $table = 'news';
  protected $allowedFields = ['title', 'slug', 'body']; 
      public function getNews($slug = false )
   {
        if ($slug === false) {
          return $this->findAll();
       }

       return $this->where(['slug' => $slug])->first();
  } 
   public function getN($slug = false)
   {
      $query = $db->query('SELECT title FROM my_table LIMIT 1');
	$row   = $query->getRow();
	return $row->title;
  
  } 
       
}

