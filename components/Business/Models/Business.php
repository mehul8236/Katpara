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
    protected $fillable = ['name', 'description', 'open', 'close', 'phone', 'email', 'logo', 'dir'];

    /**
     * The attributes will be guarded.
     * 
     * @var array
     */
    protected $guarded = ['id', 'user_id', 'field_id', 'address_id'];


}