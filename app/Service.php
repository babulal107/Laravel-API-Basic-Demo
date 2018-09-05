<?php

namespace App;

use Asahasrabuddhe\LaravelAPI\BaseModel;
use App\Http\Resources\Service as ServiceResource;
use App\Speciality;
class Service extends BaseModel
{
    protected $fillable = ['name','speciality_id'];
    
//    protected $resource = ServiceResource::class;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filterable = [
        'id', 'name','speciality.id'
    ];
    
    public function speciality() {
        return $this->belongsTo(Speciality::class);
    }
    
    protected $default = ['id','name'];

}
