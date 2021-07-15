<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $event_part_name
 * @property string $event_part_link
 * @property string $event_part_image
 * @property string $created_by_admin
 * @property int    $display_order
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 */
class EventPartners extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'event_partners';

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
        'event_part_id', 'event_part_name', 'event_part_link', 'event_part_image', 'display_order', 'active', 'created_by_admin', 'created_at', 'updated_at'
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
        'event_part_name' => 'string', 'event_part_link' => 'string', 'event_part_image' => 'string', 'display_order' => 'int', 'active' => 'int', 'created_by_admin' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
