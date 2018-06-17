<?php

namespace EliModel;

use Illuminate\Database\Eloquent\Model As Model;

class Image extends Model{

	protected $table = 'images';

	protected $fillable = ['img', 'image_name'];

	public $timestamps = false;


}