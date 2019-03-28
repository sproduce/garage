<?php

require_once 'interface_user.php';


class model_user implements interface_user
{
function __construct(){
    
    $this->db=Core::load_godb();

}


  public function load_info($id)
{
    $result=$this->db->query("select user_id,user_fam,user_email,user_name,user_status,user_uniq from ?t where user_id=?",array("wsl_user",$id),'rowassoc'); 
    if ($result){return $result;}else {return 0;}
}


public function add_user($email,$passwd)
    {
        return $this->db->query("insert into ?t (user_email,user_passwd) value(?,md5(?))",array('wsl_user',$email,$passwd),'id');
        
    }

public function email_exist($email_s)
{
    $email=$this->db->query("select user_id from ?t where user_email=?",array('wsl_user',$email_s),'el');
    if ($email) {return $email;} else {return 0;}
}
    
public function login_user($email,$passwd)    
{
    $user_id=$this->db->query("select user_id from ?t where user_passwd=md5(?) and user_email=?",array("wsl_user",$passwd,$email),'el');
    if ($user_id){ return $user_id ;}
            else{ return 0;}
}
    
public function get_user_id_by_uuid($uuid)
{
    $user_id=$this->db->query("select user_id from ?t where user_uniq=?",["wsl_user",$uuid],'el');
    if ($user_id) {
        return $user_id;
    } else {
        return 0;
    }
}

public function get_user_cars_id($user_id)
{
    $user_cars_id=$this->db->query("select user_cars_carsid from ?t where user_cars_user_id=?",["wsl_user_cars",$user_id],'col');
    if ($user_cars_id){
        return $user_cars_id;
    } else{
        return 0;
    }
    
    
}





    
}
?>