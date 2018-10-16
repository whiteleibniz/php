<?php

/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/19
 * Time: 16:36
 */
class MemberAction extends PublicAction
{
    public function index()
    {
        $userObj = D("User");
        $rows = $userObj->get_user();
        $this->assign("data", $rows);
        $this->display();
    }
}