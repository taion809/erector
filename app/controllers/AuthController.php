<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 10/26/13
 * Time: 5:49 PM
 */

class AuthController extends BaseController
{
    public function getLogin()
    {
        $this->layout = 'auth.login';

        $this->setupLayout();
    }
}
