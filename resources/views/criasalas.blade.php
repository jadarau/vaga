<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Chat</title>
</head>

<body>
    <script>       
      function abrir(url){
        var titulo = document.getElementById('titulo').value;
        // url = url+'/'+titulo;
        window.open(url,'janela',"width=810,height=550,left=350,top=70");   
      }
    </script>

<h1 style="text-shadow: 2px 2px #BEBEBE;">SALAS DE TRANSMISSÃO DE VÍDEO - VAGA</h1>

<H2>Para iniciar adicione um vídeo e em seguida click em "<span style="text-decoration: underline">Iniciar</span>".</H2>

<div style="width:610px;height:310px;background: #363636;">
    <video id="video" controls="controls" style="width:610px;height:310px;">
        <source src="media/video1.mp4" type="video/mp4">                           
    </video>
</div>

<br>

<div><input type="file"></div>

<br>

<div style="height:30px;background:none;">
    <div style="float:left;margin-top: 3px;"><label>Título do vídeo:</label> <input type="text" name="titulo" id="titulo" style="width:250px;"> </div>

    <div style="float:left;line-height: -20px;"><button onclick="abrir('chat')" style="width:60px;height:25px;background:#7CFC00;font-weight: bold;">Iniciar</button></div>
</div>

</body>

</html>