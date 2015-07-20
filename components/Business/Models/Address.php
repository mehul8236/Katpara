<?php namespace Components\Business\Models;
   
use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['street1', 'street2', 'city', 'region', 'postalcode', 'country', 'country_code', 'region_code'];

    /**
     * The attributes will be guarded.
     * 
     * @var array
     */
    protected $guarded = ['id'];

}