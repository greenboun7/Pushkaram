<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $fact_dept_id
 * @property int    $display_order
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 * @property string $fact_name
 * @property string $fact_image
 * @property string $fact_desc
 * @property string $fact_designation
 * @property string $created_by_admin
 */
class Faculties extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faculties';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fact_id', 'fact_dept_id', 'fact_name', 'fact_image', 'fact_desc', 'fact_designation', 'display_order', 'active', 'created_by_admin', 'created_at', 'updated_at'
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
        'fact_dept_id' => 'int', 'fact_name' => 'string', 'fact_image' => 'string', 'fact_desc' => 'string', 'fact_designation' => 'string', 'display_order' => 'int', 'active' => 'int', 'created_by_admin' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
