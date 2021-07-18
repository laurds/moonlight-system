<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address','client_id','observation','phone'];

    /**
     *   Relationship
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}

