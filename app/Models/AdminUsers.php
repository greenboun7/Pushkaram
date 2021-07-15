<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $username
 * @property string $password
 * @property string $admin_desc
 * @property string $created_by_admin
 * @property int    $active
 * @property int    $is_superadmin
 * @property int    $created_at
 * @property int    $updated_at
 */
class AdminUsers extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin_users';

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
        'name', 'email', 'mobile', 'username', 'password', 'active', 'admin_desc', 'is_superadmin', 'created_by_admin', 'created_at', 'updated_at'
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
        'name' => 'string', 'email' => 'string', 'mobile' => 'string', 'username' => 'string', 'password' => 'string', 'active' => 'int', 'admin_desc' => 'string', 'is_superadmin' => 'int', 'created_by_admin' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
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
