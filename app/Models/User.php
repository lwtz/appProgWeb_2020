<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use UxWeb\SweetAlert\SweetAlert;
use Alert;

class User extends Model
{
    protected $fillable= ['name','email'];
}
