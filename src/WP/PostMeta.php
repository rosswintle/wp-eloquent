<?php

namespace RossWintle\ORM\WP;

use RossWintle\ORM\Eloquent\Model;

class PostMeta extends Model
{
    protected $primaryKey = 'meta_id';

    public $timestamps    = false;

    public function getTable()
    {
        return $this->getConnection()->db->prefix . 'postmeta';
    }
}
