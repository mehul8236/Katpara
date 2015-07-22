<?php namespace Components\Business\Models;
   
use Illuminate\Database\Eloquent\Model;

class Location extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'locations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'type', 'street1', 'street2', 'city', 'postalcode', 'country_id', 'region_id'];

    /**
     * The attributes will be guarded.
     * 
     * @var array
     */
    protected $guarded = ['id', 'business_id'];

    public function country()
    {
        return $this->hasOne('Components\Business\Models\Country');
    }

    public function state()
    {
        return $this->hasOne('Components\Business\Models\State');
    }

}