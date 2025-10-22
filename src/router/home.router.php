<?php
use Controller\TemplateRender;
$router->get( '',  function(){
  TemplateRender::run()->renderMake('pages::home', []);
});

$router->post(  '',   function () {
    var_dump( $_POST);
});
?>