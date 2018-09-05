<?php

namespace App\Http\Controllers\API;

use Asahasrabuddhe\LaravelAPI\BaseController;

use App\Certificate;
// use App\Http\Requests\CertificateIndexRequest;
// use App\Http\Requests\CertificateStoreRequest;
// use App\Http\Requests\CertificateShowRequest;
// use App\Http\Requests\CertificateUpdateRequest;
// use App\Http\Requests\CertificateDeleteRequest;
/**
 * Class Certificate.
 */
class CertificateController extends BaseController
{
    /*
     * Fully qualified name of the Model class that this controller represents.
     *
     * @var string
     */
     protected $model = Certificate::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the index request.
     *
     * @var string
     */
    // protected $indexRequest = CertificateIndexRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the store request.
     *
     * @var string
     */
    // protected $storeRequest = CertificateStoreRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the show request.
     *
     * @var string
     */
    // protected $showRequest = CertificateShowRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the update request.
     *
     * @var string
     */
    // protected $updateRequest = CertificateUpdateRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the delete request.
     *
     * @var string
     */
    // protected $deleteRequest = CertificateDeleteRequest::class;

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
