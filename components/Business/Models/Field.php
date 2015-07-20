<?php namespace Components\Business\Models;
   
use Illuminate\Database\Eloquent\Model;

class Field extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fields';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'label', 'description'];

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

}