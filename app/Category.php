<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
		'precategory_id','name','slug','body'
	];

	public function precategory() 
	{
		return $this->belongsTo(Precategory::class);
	}

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }


}

