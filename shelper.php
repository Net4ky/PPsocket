<?php

class SocketHelper{
   
   public $socket;

   public function __construct($host,$port){
       $this->socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
   	   $result = socket_connect($this->socket,$host,$port);
   }

   public function send_data($content){
       socket_write($this->socket,$content,strlen($content));
   }

   public function read_data(){
   	   while($out = socket_read($this->socket,3)){
	       return $out;
       }
   }

   public function close_socket(){
   	   socket_close($this->socket);
   }
}
