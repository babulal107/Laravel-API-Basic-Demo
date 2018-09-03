<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
class Speciality extends Model
{
    protected $fillable = ['name'];
    
    public $timestamps=false;
    
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
}
