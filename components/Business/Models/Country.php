<?php namespace Components\Business\Models;
   
use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'country_code', 'currency', 'currency_code', 'currency_symbol',
    					   'full_name', 'iso_3166_2', 'iso_3166_3', 'calling_code', 'flag'];

    /**
     * The property will desable timestamping
     * 
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The attributes will be guarded.
     * 
     * @var array
     */
    protected $guarded = ['id'];

    public function states()
    {
        return $this->hasMany('Components\Business\Models\State');
    }
}