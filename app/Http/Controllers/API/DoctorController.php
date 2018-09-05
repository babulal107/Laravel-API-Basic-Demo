<?php

namespace App\Http\Controllers\API;

use Asahasrabuddhe\LaravelAPI\BaseController;

use App\User;
use Illuminate\Http\Request;
// use App\Http\Requests\DoctorIndexRequest;
use App\Http\Requests\DoctorStoreRequest;
// use App\Http\Requests\DoctorShowRequest;
// use App\Http\Requests\DoctorUpdateRequest;
// use App\Http\Requests\DoctorDeleteRequest;
/**
 * Class Doctor.
 */
class DoctorController extends BaseController
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
    // protected $indexRequest = DoctorIndexRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the store request.
     *
     * @var string
     */
     protected $storeRequest = DoctorStoreRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the show request.
     *
     * @var string
     */
    // protected $showRequest = DoctorShowRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the update request.
     *
     * @var string
     */
    // protected $updateRequest = DoctorUpdateRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the delete request.
     *
     * @var string
     */
    // protected $deleteRequest = DoctorDeleteRequest::class;

    public function store() {
        request()->request->add(['user_type'=>'D']);
        return parent::store();
    }
    /*
     * Modify the query for index request.
     * @param $query
     * @return mixed
     */
     protected function modifyIndex($query)
     {
//         Modifications like adding joins, inner queries etc can be done here.
        return $query->where("user_type", "D");
     }

    /*
     * Modify the query for show request.
     * @param $query
     * @return mixed
     */
     protected function modifyShow($query)
     {
        return $query->where("user_type", "D");
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
