<?php
use Controller\TemplateRender;

$router->mount(baseRoute: '', fn: function() use ($router): void {
  $router->get('/', function(): void {
    TemplateRender::run()->renderMake(template: 'pages::home', data: [
    "nome_usuario" => "Crises Existenciais",
    "titulo" => "Existência da costa firme"
    ]);
  });
});

$router->mount('/login', function() use ($router): void {

  $router->get('/', function(): void {
    TemplateRender::run()->renderMake(template:'pages::login', data: []);
  });
});

$router->mount('/about', function() use ($router): void {

  $router->get('/', function(): void {
    TemplateRender::run()->renderMake(template:'pages::sobre_nos', data: []);
  });
});