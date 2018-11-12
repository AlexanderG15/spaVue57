<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $guarded = [];

  public function getRouteKeyName()
  {
    return 'url';
  }

	public function setNameAttribute($name)
	{
		$this->attributes['name'] = $name;
		$this->attributes['url'] = str_slug($name);
	}

  public function posts()
  {
    return $this->hasMany(Post::class);
  }
}