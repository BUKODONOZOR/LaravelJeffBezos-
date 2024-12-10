<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'lastname', 'email', 'gender', 'phone', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
