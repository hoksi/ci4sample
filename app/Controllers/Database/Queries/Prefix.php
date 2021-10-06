<?php
namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Prefix
 *
 * @author hoksi
 */
class Prefix extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
        $this->db->setPrefix('sample_');
    }

    public function index()
    {
        echo $this->db->prefixTable('tablename');
    }

    public function setPrefix()
    {
        $this->db->setPrefix('newprefix_');
        echo $this->db->prefixTable('tablename');
    }

    public function getPrefix()
    {
        echo $this->db->getPrefix();
    }
}