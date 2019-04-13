<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version February 16, 2019, 4:26 pm UTC
 *
 * @property string name
 * @property integer role_id
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes, Notifiable;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'role_id',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role_id' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function qrcodes()
    {
        return $this->hasMany('App\Models\Qrcode');
    }

    public function account_histories()
    {
        return $this->hasMany('App\Models\AccountHistory');
    }

    public function account()
    {
        return $this->hasOne('App\Models\Account');
    }

}
