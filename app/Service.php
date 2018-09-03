<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Speciality;
class Service extends Model
{
    protected $fillable = ['name'];
    
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

}
