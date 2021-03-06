<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Eloquent
{
    use SoftDeletes;
	
	protected $table = 'employees';
	
	protected $hidden = [
        
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'designation', 'mobile', 'email', 'dept'
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];
}
