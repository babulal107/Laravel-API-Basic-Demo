<?php

namespace App;

use Asahasrabuddhe\LaravelAPI\BaseModel as Model;

//use App\Http\Resources\QualificationResource;
/**
 * Class Qualification.
 */
class Qualification extends Model
{
    /*
     * Fully qualified of the Eloquent API Resource class that this model will be transformed into
     *
     * @var string
     */
    //protected $resource = QualificationResource::class;

    /*
     * Array of fields that will be included in the default representation of this model in JSON.
     * NOTE: The default preoperty will always be overridden by the resource property.
     *
     * @var array
     */
     protected $default = [ 'id', 'institute', 'degree','from_date','to_date' ];

    /*
     * Array of fields that can be filtered using the API.
     *
     * @var array
     */
    protected $filterable = ['id', 'institute','user_id'];

    public function doctor() {
        return $this->belongsTo(User::class);
    }
}
