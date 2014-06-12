<?php

class LoginController extends BaseController {
  public function store(){

    $login = new Login;

    $login->username   = Input::get('username');;
    $login->password   = Input::get('password');;

    $login->save ();

  }
}

?>