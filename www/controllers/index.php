<?php

class Index
{
    
    
    public function auth()
    {
        $email=filter_input(INPUT_POST,'Email',FILTER_VALIDATE_EMAIL);
        $passwd=filter_input(INPUT_POST,'Passwd');
        if ($email&&$passwd)
        {     
            $member=new service_member();
            $member->auth_member($email,$passwd);
            throw new methodRedirect('/'); 
        }
    }
    
    
    
    public function logout()
    {
        session_start();
        session_destroy();
        throw new methodRedirect('/'); 
    }
    
    
    
    
    public function about()
    {
        
        
    }
    
    
    
     
    public function show()
    {
        $this->smarty=Core::load_smarty();
        $this->db=Core::load_godb();
        $this->smarty->display("site/about.tpl");
        
    }

}
?>