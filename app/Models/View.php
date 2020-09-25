<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = ['times'];

    public function viewable()
    {
        return $this->morphTo();
    }
}
