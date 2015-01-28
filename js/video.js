var connection = new RTCMultiConnection();

connection.session = {
     audio:     true, // by default, it is true
     video:     true, // by default, it is true
     data:      true
};

connection.extra = {status: user_status};

connection.userid = username;
connection.body = document.getElementById('videos-container');
connection.getExternalIceServers = false;

var screenContainer = document.getElementById('screen-container');
var chatOutput = document.getElementById('chat-output');

function appendDIV(data) {
	var div = document.createElement('div');
	div.innerHTML = data;
	chatOutput.appendChild(div);
	div.tabIndex = 0;
	document.getElementById('chat-input').focus();
}

connection.ondisconnected = function(event) {
    appendDIV("Room is closed.");
	
	if(user_status == 'dosen'){
		document.getElementById('joinRoom').disabled = true;
		document.getElementById('openRoom').disabled = false;
		document.getElementById('openRoom').style.display = "";
		document.getElementById('closeRoom').style.display = "none";
	}
	else{
		document.getElementById('joinRoom').disabled = false;
	}
	
	document.getElementById('shareScreen').disabled = true;
	document.getElementById('recordAudioVideo').disabled = true;
	document.getElementById('chat-input').disabled = true;
};

connection.onmessage = function(event) {
	appendDIV(event.data);
};

connection.onstream = function(e) {
	console.log("Stream connected : "+e.streamid);

	document.getElementById('chat-input').disabled = false;
	document.getElementById('shareScreen').disabled = false;
    document.getElementById('recordAudioVideo').disabled = false;
    document.getElementById('openRoom').disabled = true;
    document.getElementById('joinRoom').disabled = true;
	
	document.getElementById('openRoom').style.display = "none";
	if(document.getElementById('closeRoom')) document.getElementById('closeRoom').style.display = "";

	var data = "";
	var divider = "<div style='float: left; width: 3px'>&nbsp;</div>";
	//var divider = "<span>&nbsp;</span>";
	
	if(e.isVideo){
		if(connection.userid == e.userid){
			data = "<i style='color: green'><b>You</b> joined room.</i>";
		}
		else{
			data = "<i style='color: green'><b>"+e.userid+"</b> joined room.</i>";
		}
		
		var videoDiv = '<div id="'+e.userid+e.streamid+'" style="float: left; max-width: 80px; height: 80px">'+
							'<div style="height: 18px; text-align: center">'+
								'<b>'+e.userid+"</b>"+
							'</div>'+
							'<div id="'+e.userid+'">'+
								
							'</div>'+
						'</div>';
		
		$("#videos-container").append(videoDiv);
		
		e.mediaElement.style.width = "76px";
		e.mediaElement.style.height = "60px";
		
		$("#"+e.userid).html(e.mediaElement);
		$("#"+e.streamid).addClass("video"+e.extra.status);
		//connection.body.appendChild(e.mediaElement);
		
		$('#videos-container').append(divider);
	}
	else{
		document.getElementById('shareScreen').disabled = true;
		document.getElementById('recordScreen').disabled = false;
	
		e.mediaElement.style.width = "575px";
		e.mediaElement.style.height = "400px";
		screenContainer.appendChild(e.mediaElement);
		$("#"+e.streamid).addClass("screen"+e.extra.status);
	}

	appendDIV(data);
};

connection.onstreamended = function (e) {
	var data = "";
	
	if(e.isVideo){
		if(connection.userid == e.userid){
			data = "<i style='color: red'><b>You</b> left room.</i>";
		}
		else{
			data = "<i style='color: red'><b>"+e.userid+"</b> left room.</i>";
		}
		
		$("#"+e.userid+e.streamid).next().remove();
		$("#"+e.userid+e.streamid).remove();
		//$('#'+e.streamid).next().remove();
		//e.mediaElement.parentNode.removeChild(e.mediaElement);
	}
	else{
		document.getElementById('shareScreen').disabled = false;
		document.getElementById('recordScreen').disabled = true;
		
		$("#screen-container").html("");
	}
	
	appendDIV(data);
}

if(document.getElementById('closeRoom')){
	document.getElementById('closeRoom').onclick = function() {
		// http://www.rtcmulticonnection.org/docs/connect/
		connection.disconnect();
	};
}

document.getElementById('chat-input').onkeyup = function(e) {
    if(e.keyCode != 13) return; // if it is not Enter-key
    var value = this.value.replace(/^\s+|\s+$/g, '');
    if(!value.length) return; // if empty-spaces
    
	var data = "<b>"+username+":</b> <i>"+value+"</i>";
	
	appendDIV(data);
    connection.send(data);
    this.value = '';
};

document.getElementById('openRoom').onclick = function() {
    // http://www.rtcmulticonnection.org/docs/open/
    connection.open();
	$('#chat-output').html('');
};

document.getElementById('joinRoom').onclick = function() {
    // http://www.rtcmulticonnection.org/docs/connect/
    connection.connect();
	$('#chat-output').html('');
};

document.getElementById('shareScreen').onclick = function() {
    // http://www.rtcmulticonnection.org/docs/addStream/
    connection.addStream({
        screen: true,
        oneway: true
    });
	
    document.getElementById('recordScreen').disabled = false;
};

document.getElementById('recordScreen').onclick = function() {
    // http://www.rtcmulticonnection.org/docs/streams/
	var screenDosenId = $('.screendosen').attr('id');
	
	var button = this;
	
	if (button.innerHTML == 'Record Screen') {
        button.innerHTML = 'Stop Record';
		
        connection.streams[screenDosenId].startRecording({
			video: true
		});
    } else if (button.innerHTML == 'Stop Record') {
        connection.streams[screenDosenId].stopRecording(function (blob) {
			alert("Record Screen Success.");
			button.innerHTML = 'Record Screen';
			connection.saveToDisk(blob.video, "Screen Record.mp4");
		}, {video:true});
    }
};

document.getElementById('recordAudioVideo').onclick = function() {
	var videoDosenId = $('.videodosen').attr('id');
	
	var button = this;
	
	if (button.innerHTML == 'Record Video') {
        button.innerHTML = 'Stop Record';
		
        connection.streams[videoDosenId].startRecording({
			audio: true,
			video: true
		});
    } else if (button.innerHTML == 'Stop Record') {
        connection.streams[videoDosenId].stopRecording(function (blob) {
			alert("Record Video Success.");
			button.innerHTML = 'Record Video';
			connection.saveToDisk(blob.video, "Video Record.mp4");
		}, {video:true});
    }
};