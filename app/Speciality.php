<?php

namespace App;

use Asahasrabuddhe\LaravelAPI\BaseModel;
use App\Http\Resources\Speciality as SpecialityResource;
use App\Service;
class Speciality extends BaseModel
{
    protected $fillable = ['name'];
    
    public $timestamps=false;
    
    protected $resource = SpecialityResource::class;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filterable = [
        'id', 'name'
    ];
    
    public function services() {
        return $this->hasMany(Service::class);
    }
    
    protected $default = ['id','name'];
}
