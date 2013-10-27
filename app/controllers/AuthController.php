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

    public function postLogin()
    {
        $fields = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
        );

        $rules = array(
            'email' => 'required|email',
            'password' => 'required',
        );

        $v = Validator::make($fields, $rules);
        if($v->fails()) {
            return Redirect::back()->withErrors($v)->withInput(Input::except('password'));
        }
    }

    public function getRegister()
    {
        $this->layout = 'auth.register';

        $this->setupLayout();
    }

    public function postRegister()
    {
        $fields = array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'password_confirm' => Input::get('password_confirm'),
        );

        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirm' => 'same:password',
        );

        $v = Validator::make($fields, $rules);
        if($v->fails()) {
            return Redirect::back()->withErrors($v)->withInput(Input::except('password', 'password_confirm'));
        }
    }

    public function getPasswordReset()
    {
        $this->layout = 'auth.password_reset';

        $this->setupLayout();
    }

    public function postPasswordReset()
    {
        $fields = array(
            'password' => Input::get('password'),
            'password_confirm' => Input::get('password_confirm'),
        );

        $rules = array(
            'password' => 'required|min:8',
            'password_confirm' => 'same:password',
        );

        $v = Validator::make($fields, $rules);
        if($v->fails()) {
            return Redirect::back()->withErrors($v);
        }
    }

    public function getForgotPassword()
    {
        $this->layout = 'auth.forgot_password';

        $this->setupLayout();
    }

    public function postForgotPassword()
    {
        $fields = array(
            'email' => Input::get('email'),
        );

        $rules = array(
            'email' => 'required|email',
        );

        $v = Validator::make($fields, $rules);
        if($v->fails()) {
            return Redirect::back()->withErrors($v)->withInput();
        }
    }
}
