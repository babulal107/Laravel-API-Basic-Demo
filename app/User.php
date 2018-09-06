<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Asahasrabuddhe\LaravelAPI\BaseUser as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile','dateofbirth','gender','user_type','stripe_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filterable = [
        'id', 'name', 'email','mobile','gender'
    ];
    
    protected $default = ['id','name','email','mobile','dateofbirth','gender'];
    
    
//    protected $resource = UserResource::class;
    
    public function certificates() {
        return $this->hasMany(Certificate::class);
    }
    public function qualifications() {
        return $this->hasMany(Qualification::class);
    }
    
    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
