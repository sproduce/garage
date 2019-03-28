<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
   <link rel="stylesheet" href="/css_vendor/bootstrap.min.css"/>
        
    <title>IG</title>
    
</head>
    <body style="padding-top: 4.5rem;">
        
        
        
        
        
        <nav class="navbar navbar-expand-md fixed-top bg-light">
            <img src="/img/ig.jpg" height="50">
            <div class="collapse navbar-collapse row justify-content-between">
                <div class="col-1 text-center"> <h5>Izmailovo<br/>Garage</h5></div>
                <div>
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" href="/about">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/">Для клиентов</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <form class="form-inline mt-2 mt-md-0" method="post" action="/index/auth">
                        <input class="form-control mr-sm-2" id="login-phone" type="tel" name="phone" placeholder="+7(___) ___-__-__" required/>
                        <input class="form-control mr-sm-2" type="password" name="Passwd" placeholder="Пароль" required>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Войти</button>
                    </form>
                </div>
            </div>
        </nav>
        
        
        
       {if !empty($notice_text)}
      
  <div class="alert alert-warning" role="alert">
  {$notice_text}
    </div>
      {/if}   
        
        
        <main role="main" class="container">
            <div style="background:transparent !important" class="jumbotron">  
                {block name='content'}  {/block}       
            </div>
            <footer class="footer">footer</footer>
        </main>  
     
     
     
    </body>
                
                
{if !empty($redirect_page)}                
    {if empty($redirect_time)}
        <script>setTimeout("location.href = '{$redirect_page}';",0);   </script>
        {else}
            <script>setTimeout("location.href = '{$redirect_page}';",{$redirect_time});   </script>
    {/if}
    

{/if}            


<script src="/js_vendor/jquery.min.js"></script>
<script src="/js_vendor/jquery.maskedinput.js"></script>
<script src="/js/input_init.js"></script>


</html>
