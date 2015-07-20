<?php namespace Components\Customer\Models;
   
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    /**
     * The attributes will be procced safely.
     *
     * @var array
     */
    protected $guarded = ['id'];
}