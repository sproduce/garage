<?php

class service_member
{
    private $member_info=array('id'=>0,
                               'status'=>'0',
                               'parent_page'=>'index.tpl',
                               'uuid'=>'',
                               'work_id'=>'',
                               'email'=>'',
                               'cars'=>''
                               
        );
    
    
    function __construct()
    {
        $this->user=new model_user;
        if ( session_status()==PHP_SESSION_NONE){
            session_start ();
        }
        if (empty($_SESSION['user_id'])){
            session_destroy();    
            } else {
               $this->get_member_info($_SESSION['user_id']);
            }
    }
    
    
    
private function get_member_info($id)
{
    $result=$this->user->load_info($id);
    if (!$result){
        session_start();
        session_destroy();
        throw new methodRedirect('/'); 
    }
    $this->member_info['id']=$id;
    $this->member_info['status']=$result['user_status'];
    $this->member_info['uuid']=$result['user_uniq'];
    $this->member_info['email']=$result['user_email'];
    
    if ($this->member_info['status']=='10') {
        $this->member_info['parent_page']='index_user.tpl';
    }
    if ($this->member_info['status']=='100') {
        $this->member_info['parent_page']='index_car_service.tpl';
    }
    $user_cars=$this->user->get_user_cars_id($id);
    if ($user_cars) {
        $this->member_info['cars']=$user_cars;
    }
}
    
public function get_member_id()
{
    return $this->member_info['id'];
}
    
public function get_status()
{
    return $this->member_info['status'];
}

public function get_parent_page()
{
    return $this->member_info['parent_page'];
}        


public function get_email()
{
    return $this->member_info['email'];
}
    

    
public function auth_member($member_login,$member_passwd)
    {
        $id=$this->user->login_user($member_login,$member_passwd);
        if ($id){
            session_start();
            $_SESSION['user_id']=$id;
            $this->get_member_info($id);
        }
    }
    

public function get_info()
{
    return array('email'=>$this->member_info['email'],'uuid'=> $this->member_info['uuid']);
    
}

public function is_auth()
{
    if ($this->member_info['id']){ return $this->member_info['id'];}
    else {return 0;}
        
}

public function is_user_cars($cars_id)
{
   if (in_array($cars_id,  $this->member_info['cars'])) {
       return $cars_id;
   } else { return 0;}
    
}




    
}
