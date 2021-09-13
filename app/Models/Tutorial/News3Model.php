<?php

namespace App\Models\Tutorial;

use CodeIgniter\Model;

/**
 * Tutorial of News3Model
 *
 * @author hoksi
 */
class News3Model extends Model
{
    protected $table = 'news';

    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
    }
}