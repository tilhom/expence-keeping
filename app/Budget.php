<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
	protected $fillable = ['user_id', 'company_id','category_id','periosd_id','item', 'unit', 
	'quantity', 'budget',];
}
