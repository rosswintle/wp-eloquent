<?php

namespace RossWintle\ORM\WP;

use RossWintle\ORM\Eloquent\Model;

class UserMeta extends Model
{
    protected $primaryKey = 'umeta_id';

    public $timestamps    = false;

    public function getTable()
    {
        return $this->getConnection()->db->prefix . 'usermeta';
    }
}
