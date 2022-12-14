<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
  protected $allowedFields = ['name','email', 'phone', 'msg']; 
  public function getNews($slug = false)
  {
       if ($slug === false) {
         return $this->findAll();
      }

      return $this->where(['slug' => $slug])->first();
 }
}
