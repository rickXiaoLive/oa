<?php
/**
 * Created by PhpStorm.
 * User: xiao
 * Date: 2018/5/15
 * Time: 下午2:51
 */

namespace App\Service;
use App\Model\Auth as AuthModel;
use Illuminate\Support\Facades\Auth;


class MenuService
{
    private $authModel;

    public function __construct(AuthModel $authModel)
    {
        $this->authModel = $authModel;
    }

    public function getLeftMenu(){
        $user = Auth::user();
        $roleString = $user->roleString;
        return $this->authModel->getListInId($roleString);
    }
}