<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $department_name
 * @property string $department_image
 * @property string $department_short_content
 * @property string $department_content
 * @property string $created_by_admin
 * @property int    $is_show_homepage
 * @property int    $display_order
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 */
class Departments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'department_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'department_id', 'department_name', 'department_image', 'department_short_content', 'department_content', 'is_show_homepage', 'display_order', 'created_by_admin', 'active', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'department_name' => 'string', 'department_image' => 'string', 'department_short_content' => 'string', 'department_content' => 'string', 'is_show_homepage' => 'int', 'display_order' => 'int', 'created_by_admin' => 'string', 'active' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
