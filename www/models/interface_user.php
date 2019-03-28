<?php

interface interface_user
{

public function load_info($id);
public function add_user($email,$passwd);
public function email_exist($email);
public function login_user($email,$passwd);
public function get_user_id_by_uuid($uuid);    
public function get_user_cars_id($user_id);    
}
?>