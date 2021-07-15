<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $gallery_type_id
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 * @property string $gallery_image
 * @property string $gallery_desc
 * @property string $created_by_admin
 */
class Gallery extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gallery';

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
        'gallery_id', 'gallery_type_id', 'gallery_image', 'gallery_desc', 'active', 'created_by_admin', 'created_at', 'updated_at'
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
        'gallery_type_id' => 'int', 'gallery_image' => 'string', 'gallery_desc' => 'string', 'active' => 'int', 'created_by_admin' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
