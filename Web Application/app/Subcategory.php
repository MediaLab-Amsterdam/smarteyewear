<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Subcategory extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	public function category()
  {
    return $this->belongsTo('App\Category', 'category_id', 'id');
  }

  public function subcategorylocations()
  {
    return $this->hasMany('App\SubcategoryLocation', 'subcategory_id', 'id');
  }


  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subcategories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['category_id', 'name', 'name_nl', 'code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}
