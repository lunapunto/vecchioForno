<?php
/*
* Funciones de página principal
* Llama a las funciones globales.
*/
require_once dirname(__DIR__).'/global/funcs.php';
use Postmark\PostmarkClient;

function sendemail(){
  $tm = array(
    'nombre' => v('name'),
    'telefono' => v('phone'),
    'email'    => v('email'),
    'mensaje' => v('msg')
  );

  $newClient = new PostmarkClient("518c7535-b772-4bf3-a7cd-ac611d7c2052");
      $msg = array(
                'TemplateId'    => 2312024,
                'TemplateModel' => $tm,
                'From'          => 'developer@lunapunto.com',
                'To'            => 'mauricio@lunapunto.com'
             );
  $newClient->sendEmailBatch([$msg]);

  echo 'ok';
  die();
}
