<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table='tenants';
    protected $fillable =['firstname','middlename','lastname','email','address','phone'];

}
