<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $notice_name
 * @property string $notice_desc
 * @property string $notice_link
 * @property string $created_by_admin
 * @property int    $display_order
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 */
class Notice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notice';

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
        'notice_id', 'notice_name', 'notice_desc', 'notice_link', 'display_order', 'active', 'created_by_admin', 'created_at', 'updated_at'
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
        'notice_name' => 'string', 'notice_desc' => 'string', 'notice_link' => 'string', 'display_order' => 'int', 'active' => 'int', 'created_by_admin' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
