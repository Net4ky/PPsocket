# PPsocket

# Examples

#php client
<?php
require_once('../shelper.php');

$sockethelper = new sockethelper('localhost',1333);

$sockethelper->send_data('Hello World');

echo $sockethelper->read_data();

$sockethelper->close_socket();
	
#python server

from shelper import SocketHelper

sockethelper = SocketHelper("localhost",1333)

while True:
	sockethelper.s_appept()
	print sockethelper.read_data()
	sockethelper.send_data("nice to meet you")
	sockethelper.close_socket
