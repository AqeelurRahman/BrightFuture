<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountSector extends Model
{
    protected $table = 'account_sectors';
    
    public function school()
    {
        return $this->belongsTo('App\School', 'school_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
