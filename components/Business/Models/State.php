<?php namespace Components\Business\Models;
   
use Illuminate\Database\Eloquent\Model;

class State extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['country_id', 'region_code', 'name'];

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

    public function country()
    {
        $this->belongsTo('Components\Business\Models\Country');
    }

}