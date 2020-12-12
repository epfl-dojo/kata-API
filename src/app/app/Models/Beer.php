<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;
    // https://stackoverflow.com/a/28277980
    public $timestamps = false;
    protected $fillable = ['name', 'descript', 'last_mod', 'cat_id', 'style_id', 'abv', 'ibu', 'srm', 'upc', 'filepath', 'add_user', 'last_mod'];
}