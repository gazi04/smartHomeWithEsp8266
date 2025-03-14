$(document).ready(function() {
  let socket = new WebSocket('ws://192.168.1.43:81');

  socket.onopen = function() {
    console.log("WebSocket connection established!");
  };

  socket.onmessage = function(event) {
    console.log("Data received from NodeMCU:", event.data);
  };

  $("#sendData").on("click", function(){
    const data = $("#dataInput").value().trim();
    socket.send(data);
    console.log("Data sent to NodeMCU:", data);
  });
});
