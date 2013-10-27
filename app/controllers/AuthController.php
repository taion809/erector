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

    public function getRegister()
    {
        $this->layout = 'auth.register';

        $this->setupLayout();
    }

    public function getPasswordReset()
    {
        $this->layout = 'auth.password_reset';

        $this->setupLayout();
    }

    public function getForgotPassword()
    {
        $this->layout = 'auth.forgot_password';

        $this->setupLayout();
    }
}
