<?php

/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/19
 * Time: 16:31
 */
class UserModel extends Model
{
    function get_user()
    {
        $userObj = D("User");
        $row = $userObj->select();
        return $row;

    }
}