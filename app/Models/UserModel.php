<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  // protected $DBGroup = 'ci4tutorial';
   
    protected $table = 'news';
    public $allowedFields = ['id','title', 'slug', 'body']; 
      public function getNews($slug = false )
   {
        if ($slug === false) {
          return $this->findAll();
       }

       return $this->where(['slug' => $slug])->first();
  } 
       
}

