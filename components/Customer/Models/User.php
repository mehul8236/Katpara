<?php namespace Components\Customer\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Components\Customer\Models\Login;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    use EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes will be guarded.
     * 
     * @var array
     */
    protected $guarded = ['id'];

    // public function setLoginTime($date)
    // {
    //     if("object" == gettype($date))
    //     {
    //         $property = Property::where('user_id', $this->id)->first();
    //         if(null == $property)
    //         {
    //             $property = new Property;
    //             $property->user_id = $this->id;
    //         }

    //         $property->logged_in = $date;
    //         $property->save();
    //         return true;
    //     }
    //     return false;
    // }

    public function updateUserLogin($date, $ip)
    {
        if("object" == gettype($date) && "string" == gettype($ip))
        {
            // $login = Login::where('user_id', $this->id)->firstOrCreate(['logged_in' => $date, 'ip' => ]);

            // $login-> = $date;
            // $login->ip = $ip;
            // $login->save();

            return true;
        }

        return false;
    }

    public function businesses()
    {
        return $this->hasMany('Components\Business\Models\Business');
    }

    public function login()
    {
        return $this->hasOne('Components\Customer\Models\Login');
    }
}
