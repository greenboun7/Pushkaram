<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $event_name
 * @property string $event_image
 * @property string $event_short_content
 * @property string $event_content
 * @property string $event_tags
 * @property string $created_by_admin
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 */
class Events extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

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
        'event_id', 'event_name', 'event_image', 'event_short_content', 'event_content', 'event_tags', 'created_by_admin', 'active', 'created_at', 'updated_at'
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
        'event_name' => 'string', 'event_image' => 'string', 'event_short_content' => 'string', 'event_content' => 'string', 'event_tags' => 'string', 'created_by_admin' => 'string', 'active' => 'int', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
