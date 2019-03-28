<?php
class Core
{
private static $smarty=null;
private static $godb=null;
//private static $user=null;

private static $config = array( 'host'     => 'localhost',
                         'username' => 'garageg',
                         'password'   => 'garage',
                         'dbname'   => 'garage',
                         'charset'  => 'utf8');   





   public static function load_smarty()
    {
       if (!self::$smarty) {
           self::$smarty=new Smarty();
           self::$smarty->setCompileDir($_SERVER['DOCUMENT_ROOT'] . '/tmpl/templates_c');
           self::$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT'] . '/tmpl/templates');
       }
           
        return self::$smarty;

    }
    
    public static function load_godb()
    {

       if (!self::$godb) {
           self::$godb=go\DB\DB::create(self::$config, 'mysql');
       }
      return self::$godb;  
        
    }
    
    
    public static function get_unique()
    {
        
       return md5(uniqid(mt_rand(),1)); 
        
    }
    
    
    public static function referer()
    {
        $referer_url=filter_input(INPUT_SERVER, 'HTTP_REFERER');
        if ($referer_url){
            $referer_array_url=parse_url($referer_url);
            if ($referer_array_url['host']!='www.workshoplog.com') {return null;}
            if (isset($referer_array_url['query'])){
               $redirect_url=$referer_array_url['path'].'?'.$referer_array_url['query'];
            } else {
            $redirect_url=$referer_array_url['path'];
            }   
            return $redirect_url;
        } else { return null;}
        
    }
    
    
   
}

