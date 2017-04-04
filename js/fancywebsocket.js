var FancyWebSocket = function(url)
{
	var callbacks = {};
	var ws_url = url;
	var conn;
	
	this.bind = function(event_name, callback)
	{
		callbacks[event_name] = callbacks[event_name] || [];
		callbacks[event_name].push(callback);
		return this;
	};
	
	this.send = function(event_name, event_data){
		this.conn.send( event_data );
		return this;
	};
	
	this.connect = function() 
	{
		if ( typeof(MozWebSocket) == 'function' )
		this.conn = new MozWebSocket(url);
		else
		this.conn = new WebSocket(url);

		this.conn.onmessage = function(evt){
			dispatch('message', evt.data);
		};
		
		this.conn.onclose = function(){dispatch('close',null)}
		this.conn.onopen = function(){dispatch('open',null)}
	};
	
	this.disconnect = function()
	{
		this.conn.close();
	};
	
	var dispatch = function(event_name, datos){
		if (event_name=="message") {
			console.log(datos);
			var datos = JSON.parse(datos); //parseo la informacion
			$.ajax({
				url: base_path+"ajax.php?case=show_count_user_online&nid="+datos.nid,
				success:function(res){
					$("#show_count_user_online").html(res);
				}
			})
		}
	}
};

var Server;
function send( datos ) {
    Server.send( 'message', datos );
}

$(document).ready(function(){
	Server = new FancyWebSocket('ws://172.16.50.30:12345');
    Server.bind('open', function()
	{
    });
    Server.bind('close', function( data ) 
	{
    });
    Server.bind('message', function( payload ) 
	{
    });
    Server.connect();
});
// setTimeout(check_user_online, 500);// Verificar usuarios en linea