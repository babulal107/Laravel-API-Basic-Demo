<?php

namespace App\Http\Controllers\API;

use Asahasrabuddhe\LaravelAPI\BaseController;

use App\Qualification;
// use App\Http\Requests\QualificationIndexRequest;
// use App\Http\Requests\QualificationStoreRequest;
// use App\Http\Requests\QualificationShowRequest;
// use App\Http\Requests\QualificationUpdateRequest;
// use App\Http\Requests\QualificationDeleteRequest;
/**
 * Class Qualification.
 */
class QualificationController extends BaseController
{
    /*
     * Fully qualified name of the Model class that this controller represents.
     *
     * @var string
     */
     protected $model = Qualification::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the index request.
     *
     * @var string
     */
    // protected $indexRequest = QualificationIndexRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the store request.
     *
     * @var string
     */
    // protected $storeRequest = QualificationStoreRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the show request.
     *
     * @var string
     */
    // protected $showRequest = QualificationShowRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the update request.
     *
     * @var string
     */
    // protected $updateRequest = QualificationUpdateRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the delete request.
     *
     * @var string
     */
    // protected $deleteRequest = QualificationDeleteRequest::class;

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
