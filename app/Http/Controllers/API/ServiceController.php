<?php

namespace App\Http\Controllers\API;

use Asahasrabuddhe\LaravelAPI\BaseController;
use App\Service;
// use App\Http\Requests\ServiceIndexRequest;
// use App\Http\Requests\ServiceStoreRequest;
// use App\Http\Requests\ServiceShowRequest;
// use App\Http\Requests\ServiceUpdateRequest;
// use App\Http\Requests\ServiceDeleteRequest;
/**
 * Class Service.
 */
class ServiceController extends BaseController
{
    /*
     * Fully qualified name of the Model class that this controller represents.
     *
     * @var string
     */
     protected $model = Service::class;
    /*
     * Fully qualified name of the Request class that will be used to validate the index request.
     *
     * @var string
     */
    // protected $indexRequest = ServiceIndexRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the store request.
     *
     * @var string
     */
    // protected $storeRequest = ServiceStoreRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the show request.
     *
     * @var string
     */
    // protected $showRequest = ServiceShowRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the update request.
     *
     * @var string
     */
    // protected $updateRequest = ServiceUpdateRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the delete request.
     *
     * @var string
     */
    // protected $deleteRequest = ServiceDeleteRequest::class;

    /*
     * Modify the query for index request.
     * @param $query
     * @return mixed
     */
    // protected function modifyIndex($query)
    // {
    //     Modifications like adding joins, inner queries etc can be done here.
    //     return $query->where("status", "active");
    //     return $query;
    // }

    /*
     * Modify the query for show request.
     * @param $query
     * @return mixed
     */
    // protected function modifyShow($query)
    // {
    //     return $query;
    // }

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
