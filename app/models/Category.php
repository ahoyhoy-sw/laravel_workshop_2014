<?php

class Category extends \Eloquent {
	protected $table = 'categories';
	protected $fillable = ['name'];

	//
	public function posts() {
		return $this->hasMany('Post');
	}
}
