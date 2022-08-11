<?php

namespace RossWintle\ORM\WP;

use RossWintle\ORM\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('RossWintle\ORM\WP\UserMeta', 'user_id');
    }
}
