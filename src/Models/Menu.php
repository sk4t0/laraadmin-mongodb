<?php
/**
 * Code generated using LaraAdmin
 * Help: http://laraadmin.com
 * LaraAdmin is open-sourced software licensed under the MIT license.
 * Developed by: Dwij IT Solutions
 * Developer Website: http://dwijitsolutions.com
 */

namespace Dwij\Laraadmin\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Dwij\Laraadmin\Helpers\LAHelper;

/**
 * Class Menu
 * @package Dwij\Laraadmin\Models
 *
 * Menu Model which looks after Menus in Sidebar and Navbar
 */
class Menu extends Eloquent
{
    protected $table = 'la_menus';
    
    protected $guarded = [
    
    ];
}
