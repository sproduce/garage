<?php
/* Smarty version 3.1.28, created on 2019-03-27 19:23:53
  from "/var/www/ig-garage/www/tmpl/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5c9ba399208731_41116818',
  'file_dependency' => 
  array (
    '370371a7d53b0bf741a401a06982236e30fa4d42' => 
    array (
      0 => '/var/www/ig-garage/www/tmpl/templates/index.tpl',
      1 => 1553703663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ba399208731_41116818 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
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
        
        
        
       <?php if (!empty($_smarty_tpl->tpl_vars['notice_text']->value)) {?>
      
  <div class="alert alert-warning" role="alert">
  <?php echo $_smarty_tpl->tpl_vars['notice_text']->value;?>

    </div>
      <?php }?>   
        
        
        <main role="main" class="container">
            <div style="background:transparent !important" class="jumbotron">  
                <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_97611135c9ba3991ff786_33191245',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
       
            </div>
            <footer class="footer">footer</footer>
        </main>  
     
     
     
    </body>
                
                
<?php if (!empty($_smarty_tpl->tpl_vars['redirect_page']->value)) {?>                
    <?php if (empty($_smarty_tpl->tpl_vars['redirect_time']->value)) {?>
        <?php echo '<script'; ?>
>setTimeout("location.href = '<?php echo $_smarty_tpl->tpl_vars['redirect_page']->value;?>
';",0);   <?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
>setTimeout("location.href = '<?php echo $_smarty_tpl->tpl_vars['redirect_page']->value;?>
';",<?php echo $_smarty_tpl->tpl_vars['redirect_time']->value;?>
);   <?php echo '</script'; ?>
>
    <?php }?>
    

<?php }?>            


<?php echo '<script'; ?>
 src="/js_vendor/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js_vendor/jquery.maskedinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/input_init.js"><?php echo '</script'; ?>
>


</html>
<?php }
/* {block 'content'}  file:index.tpl */
function block_97611135c9ba3991ff786_33191245($_smarty_tpl, $_blockParentStack) {
?>
  <?php
}
/* {/block 'content'} */
}
