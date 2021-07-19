<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $fillable = ['company', 'contact', 'email', 'address','client_id','observation','phone','site'];

    /**
     *   Relationship
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
