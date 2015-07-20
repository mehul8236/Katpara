<?php namespace Components\Customer\Models;
   
use Illuminate\Database\Eloquent\Model;

class Login extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logins';

    /**
     * The model will not check for the timestamps,
     * before updating and deleting the table rows.
     * 
     * @var boolean
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','logged_in', 'ip'];

    /**
     * The attributes will be procced safely.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('Components\Customer\Models\User');
    }

}