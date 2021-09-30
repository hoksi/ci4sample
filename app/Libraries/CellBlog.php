<?php
namespace App\Libraries;

/**
 * Description of CellBlog
 *
 * @author hoksi
 */
class CellBlog
{
    public function recentPosts(array $params = [])
    {
        return $this->recent(($params['category'] ?? ''), ($params['limit'] ?? 10));
    }

    public function recent(string $category, int $limit)
    {
        $posts = [];

        for($i = 0; $i < $limit; $i++) {
            $posts[] = [
                'title' => 'Title' . $i,
                'content' => 'Content' . $i,
                'rdate' => date('Y-m-d H:i:s'),
            ];
        }

        return view('response/cell/recentPosts', ['posts' => $posts]);
    }
}