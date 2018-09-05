<?php

namespace App;

use Asahasrabuddhe\LaravelAPI\BaseModel as Model;

//use App\Http\Resources\CertificateResource;
/**
 * Class Certificate.
 */
class Certificate extends Model
{
    //protected $fillable = ['name','number','date','user_id'];
    /*
     * Fully qualified of the Eloquent API Resource class that this model will be transformed into
     *
     * @var string
     */
    //protected $resource = CertificateResource::class;

    /*
     * Array of fields that will be included in the default representation of this model in JSON.
     * NOTE: The default preoperty will always be overridden by the resource property.
     *
     * @var array
     */
     protected $default = [ 'id', 'name', 'number','date' ];

    /*
     * Array of fields that can be filtered using the API.
     *
     * @var array
     */
     protected $filterable = ['id', 'name','user_id'];
     
    public function doctor() {
        return $this->belongsTo(User::class);
    }
}
