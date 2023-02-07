<?php

namespace App\Models;

use CodeIgniter\Model;



class NewsModel extends Model
{
    protected $table = 'news';

    protected $allowedFields = ['title', 'slug', 'body'];

    //This function returns news items from the database
    public function getNews($slug = false)
        {
            // if no slug (id) provided, select all
            if ($slug === false) {
                return $this->findAll();
            }
             // if slug provided, select just that one
            return $this->where(['slug' => $slug])->first();
        }
}