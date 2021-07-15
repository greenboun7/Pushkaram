<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $academic_name
 * @property string $academic_image
 * @property string $academic_content
 * @property string $created_by_admin
 * @property int    $display_order
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 */
class Academics extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'academics';

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
        'academic_id', 'academic_name', 'academic_image', 'academic_content', 'display_order', 'created_by_admin', 'active', 'created_at', 'updated_at'
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
        'academic_name' => 'string', 'academic_image' => 'string', 'academic_content' => 'string', 'display_order' => 'int', 'created_by_admin' => 'string', 'active' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
