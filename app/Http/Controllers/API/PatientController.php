<?php

namespace App\Http\Controllers\API;

use Asahasrabuddhe\LaravelAPI\BaseController;

use App\User;
use Stripe;
// use App\Http\Requests\PatientIndexRequest;
// use App\Http\Requests\PatientStoreRequest;
// use App\Http\Requests\PatientShowRequest;
// use App\Http\Requests\PatientUpdateRequest;
// use App\Http\Requests\PatientDeleteRequest;
/**
 * Class Patient.
 */
class PatientController extends BaseController
{
    /*
     * Fully qualified name of the Model class that this controller represents.
     *
     * @var string
     */
     protected $model = User::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the index request.
     *
     * @var string
     */
    // protected $indexRequest = PatientIndexRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the store request.
     *
     * @var string
     */
    // protected $storeRequest = PatientStoreRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the show request.
     *
     * @var string
     */
    // protected $showRequest = PatientShowRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the update request.
     *
     * @var string
     */
    // protected $updateRequest = PatientUpdateRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the delete request.
     *
     * @var string
     */
    // protected $deleteRequest = PatientDeleteRequest::class;

    public function store() {
        $customer = Stripe::customers()->create([
            'email' => request()->email,
        ]);
        request()->request->add(['stripe_id'=>$customer['id']]);
        request()->request->add(['user_type'=>'P']);
        return parent::store();
    }
    /*
     * Modify the query for index request.
     * @param $query
     * @return mixed
     */
     protected function modifyIndex($query)
     {
        return $query->where("user_type", "P");
     }

    /*
     * Modify the query for show request.
     * @param $query
     * @return mixed
     */
     protected function modifyShow($query)
     {
        return $query->where("user_type", "P");
     }

    /*
     * Modify the query for update request.
     * @param $query
     * @return mixed
     */
    // protected function modifyUpdate($query)
    // {
    //     return $query;
    // }

    /*
     * Modify the query for delete request.
     * @param $query
     * @return mixed
     */
    // protected function modifyDelete($query)
    // {
    //     return $query;
    // }
}
