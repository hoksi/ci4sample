<?php

namespace app\Models\Tutorial;

use CodeIgniter\Model;

/**
 * Tutorial of News Model
 *
 * @author hoksi
 */
class News extends Model
{
    protected $table = 'news';

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