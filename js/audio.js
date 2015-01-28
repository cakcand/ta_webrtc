var connection = new RTCMultiConnection('only-audio-and-data', {
            session: 'audio+data'
        });
        var roomsList = document.getElementById('rooms-list');
        connection.onNewSession = function(session) {
            console.log('New Session', session);
            var alreadyExists = document.getElementById(session.userid);
            if (alreadyExists) return;
            if (!window.sessions) window.sessions = {};
            window.sessions[session.userid] = session;
            var tr = document.createElement('tr');
            tr.innerHTML = '<td>' + session.userid + ' shared a room with you.</td>';
            var td = document.createElement('td');
            var button = document.createElement('button');
            button.setAttribute('id', session.userid);
            button.innerHTML = 'Join';
            td.appendChild(button);
            tr.appendChild(td);
            roomsList.insertBefore(tr, roomsList.firstChild);
            button.onclick = function() {
                var session = window.sessions[this.id];
                connection.join(session);
                roomsList.style.display = 'none';
                document.getElementById('open-session').disabled = true;
            };
        };
        connection.onopen = function() {
            if (document.getElementById('chat-input')) document.getElementById('chat-input').disabled = false;
            if (document.getElementById('file')) document.getElementById('file').disabled = false;
            if (document.getElementById('open-session')) {document.getElementById('open-session').disabled = true;
			
			}
        };
        connection.onmessage = function(data) {
            appendDIV(data);
        };
        connection.onstream = function(stream) {
            if (stream.type === 'remote') {
                var mediaElement = stream.mediaElement;
                if (stream.direction !== RTCDirection.OneWay) {
                    var remoteMediaStreams = document.getElementById('remote-media-streams');
                    remoteMediaStreams.insertBefore(mediaElement, remoteMediaStreams.firstChild);
                } else document.getElementById('local-media-stream').appendChild(mediaElement);
				
                mediaElement.controls = true;
            }
            if (stream.type === 'local') {
                mediaElement = stream.mediaElement;
                document.getElementById('local-media-stream').appendChild(mediaElement);
                mediaElement.controls = true;
				
            }
        };
        connection.onFileProgress = function(packets) {
            appendDIV(packets.remaining + ' packets remaining.');
            if (packets.sent) appendDIV(packets.sent + ' packets sent.');
            if (packets.received) appendDIV(packets.received + ' packets received.');
        };
        connection.onFileReceived = function(fileName) {
            appendDIV(fileName + ' received.');
        };
        connection.onFileSent = function(file) {
            appendDIV(file.name + ' sent.');
        };
        document.getElementById('open-session').onclick = function() {
            connection.open();
            this.disabled = true;
            var hash = location.hash.replace('#', '');
            roomsList.style.display = 'none';
            document.getElementById('open-session').disabled = true;
        };
        document.getElementById('file').onchange = function() {
            var file = this.files[0];
            connection.send(file);
        };
        var chatOutput = document.getElementById('chat-output');
        function appendDIV(data) {
            var div = document.createElement('div');
            div.innerHTML = data;
			chatOutput.appendChild(div);
            //chatOutput.insertBefore(div, chatOutput.firstChild);
            div.tabIndex = 0;
            div.focus();
        }
        document.getElementById('chat-input').onkeypress = function(e) {
            if (e.keyCode !== 13 || !this.value) return;
            appendDIV(this.value);
            connection.send(this.value);
            this.value = '';
            this.focus();
        };