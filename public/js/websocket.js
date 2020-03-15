url = "ws://localhost:8080/echo";
// url = "localhost/chat/chat.html";

w = new WebSocket(url);

w.onopen = function(){

  log("open web socket");
  w.send("thank you for accepting this Web Socket request");
  
  }
  
  w.onmessage = function(e) {
    log(e.data.toString());
  }
  w.onclose = function(e) {
    log("closed");
  }
  w.onerror = function(e) {
    log("error");
  }
  
  window.onload = function(){
  
    document.getElementById("envia").onclick = function() {
      w.send(document.getElementById("msg").value);
    }
  }
  
  function log(s) {
      var logOutput = document.getElementById("logOutput");
      var el = $("#logOutput").after('<p>' + s + '</p>');
      $("p").slice(2).addClass("highlight");
  }