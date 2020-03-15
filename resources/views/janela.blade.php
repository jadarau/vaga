<!DOCTYPE html>
<html>
<head>
<script src="js/websocket.js"></script>
<meta charset="UTF-8">
<title>Chat</title>
</head>

<body>

Título: {{$titulo}}

<h1 style="text-shadow: 2px 2px #BEBEBE;">CHAT</h1>

<div style="height:30px;background:none;">
    <div style="float:left;margin-top: 3px;">
        <label>Mensagem:</label> 
        <input type="text" name="msg" id="msg" style="width:250px;"> 
    </div>

    <div style="float:left;line-height: -20px;">
        <button id="envia" style="width:60px;height:25px;background:#7CFC00;font-weight: bold;">enviar</button>
    </div>
</div>

</body>

</html>