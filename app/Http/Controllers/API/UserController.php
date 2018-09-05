<?php

namespace App\Http\Controllers\API;

use Asahasrabuddhe\LaravelAPI\BaseController;
use App\User;
// use App\Http\Requests\UserIndexRequest;
// use App\Http\Requests\UserStoreRequest;
// use App\Http\Requests\UserShowRequest;
// use App\Http\Requests\UserUpdateRequest;
// use App\Http\Requests\UserDeleteRequest;
/**
 * Class User.
 */
class UserController extends BaseController
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
    // protected $indexRequest = UserIndexRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the store request.
     *
     * @var string
     */
    // protected $storeRequest = UserStoreRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the show request.
     *
     * @var string
     */
    // protected $showRequest = UserShowRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the update request.
     *
     * @var string
     */
    // protected $updateRequest = UserUpdateRequest::class;

    /*
     * Fully qualified name of the Request class that will be used to validate the delete request.
     *
     * @var string
     */
    // protected $deleteRequest = UserDeleteRequest::class;

//     public function index(){
//        return new UserResource(parent::index());
//     }
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
