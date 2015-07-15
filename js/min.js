function load_messes(chanel) { //загрузка чата
	$.ajax({
		type: "POST",
		url:  "include/loadChat.php",
		data: "chanel="+chanel,
		success: function(html) {   
			$("#messages").empty();
			$("#messages").append(html);
		}
	});
};
function send()  { //отправка сообщения
	var message=$("#mess_to_send").val();
	var chanel=$("#chanel").val();	
	var user=$("#user").val();
	$.ajax({
		type: "POST",
		url: "include/newMessage.php",
		data:"message="+message+"&chanel="+chanel+"&user="+user,
		success: function(html) {
			$('#forerror').append ( '<p style=" color: red;">'+html+'</p>');
			load_messes();
			$("#mess_to_send").val('');
		}
    });
};




