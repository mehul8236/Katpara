<?php namespace Components\Business\Models;
   
use Illuminate\Database\Eloquent\Model;

class Business extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'businesses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'open', 'close', 'phone', 'email', 'logo', 'dir', 'field_id'];

    /**
     * The attributes will be guarded.
     * 
     * @var array
     */
    protected $guarded = ['id', 'user_id'];


    /**
     * The method returns the user that owns the business
     * @return User User instance
     */
    public function user()
    {
        return $this->belongsTo('Components\Customer\Models\User');
    }

    public function locations()
    {
        return $this->hasMany('Components\Business\Models\Location');
    }

    public function field()
    {
        return $this->hasOne('Components\Business\Models\Field');
    }


}