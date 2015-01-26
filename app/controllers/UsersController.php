<?php 
class UsersController extends BaseController {
 
  public function show() {
    $users = User::all(); 
    return View::make('users.list', array('users' => $users));
  }
 
}
?>