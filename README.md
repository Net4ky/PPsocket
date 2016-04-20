# PPsocket

# Examples

####php client
<code><?php</code>
<code>require_once('../shelper.php');</code>

<code>$sockethelper = new sockethelper('localhost',1333);</code>

<code>$sockethelper->send_data('Hello World');</code>

<code>echo $sockethelper->read_data();</code>

<code>$sockethelper->close_socket();</code>
	
####python server

<code>from shelper import SocketHelper</code>

<code>sockethelper = SocketHelper("localhost",1333)</code>

<code>while True:</code>
	<p><code>sockethelper.s_appept()</code></p>
	<code>print sockethelper.read_data()</code>
	<code>sockethelper.send_data("nice to meet you")</code>
	<code>sockethelper.close_socket</code>
