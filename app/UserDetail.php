<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
	protected $table = "user-details";
    protected $fillable = ['user_id', 'company_id','category_id'];
}
