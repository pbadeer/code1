$(document).ready(function(){
	
	var chat_messages = ["Hello SC, how can I help you today?", "Sure! Lemme take a look at your account.","Yes that should show up next day"];
	
	$help_modal = $("#help-modal");
	
	$help_modal.dialog({
		height: 300,
		width: 500,
		modal: true,
		autoOpen: false
	});
	
	$("#help-icon").click(function(){
		$help_modal.dialog("open");
	});
	
	$("#send-banker-msg").click(function(){
		$("#banker-msg-chats").html($("#banker-msg-chats").html() + '<span classs="customer-chats"><span class="customer-tag">SC:</span> '+$("#customer-msg").val()+'</span><br><br>');
		$("#customer-msg").val('');
		setTimeout(function(){
			$("#banker-msg-chats").html($("#banker-msg-chats").html() + '<span classs="banker-chats"><span class="banker-tag">Banker:</span> '+chat_messages[0]+'</span><br><br>');
			chat_messages.shift();
		},(10+Math.random()*1000));
	});
	
	$("#waiting-available-banker-select").change(function(){
		$("#who-chat-with").fadeOut('fast');
		$("#waiting-available-banker-select").fadeOut('fast');
		$("#banker-msg").fadeIn();
	});
	
	$("#send-feedback, #send-feature").click(function(){
		var more_html = 'If you would like to see feedback and feature requests from other customers, <a href="pbport.com/adi">click here</a>.';
		$(this).prev().val('');
		$(this).attr('value','Thank you for your message. We will contact you shortly');
		$(this).parent().append(more_html);
		
	});
	
	
	 $(function() {
		$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
		$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
	});
	
});
