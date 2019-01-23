<?php namespace Webdevflux\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model {
	use \October\Rain\Database\Traits\Validation;


	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'webdevflux_movies_';

	/**
	 * @var array Validation rules
	 */
	public $rules = [
	];

	//############################
	//jsonable for repeating fields
	protected $jsonable = ['actors'];

	/*Relations*/

	public $belongsToMany = [
			'genres' => [
					"Webdevflux\Movies\Models\Genre",
					"table"=> "webdevflux_movies_generes_pivot",
					"order" => "genre_title"
			]
	];

	public $attachOne = [
			'poster' => 'System\Models\File',
	];

	public $attachMany = [
			'gallery' => 'System\Models\File'
	];
}
