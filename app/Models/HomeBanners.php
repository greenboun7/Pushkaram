<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $banner_img
 * @property string $banner_title
 * @property string $banner_desc
 * @property string $banner_read_more
 * @property string $banner_read_more_link
 * @property string $created_by_admin
 * @property int    $banner_order
 * @property int    $active
 * @property int    $created_at
 * @property int    $updated_at
 */
class HomeBanners extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'home_banners';

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
        'banner_id', 'banner_img', 'banner_title', 'banner_desc', 'banner_read_more', 'banner_read_more_link', 'banner_order', 'active', 'created_by_admin', 'created_at', 'updated_at'
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
        'banner_img' => 'string', 'banner_title' => 'string', 'banner_desc' => 'string', 'banner_read_more' => 'string', 'banner_read_more_link' => 'string', 'banner_order' => 'int', 'active' => 'int', 'created_by_admin' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
