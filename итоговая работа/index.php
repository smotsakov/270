<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Чат</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link rel="shortcut icon" href="icon.png" type="image/png">
  
 

</head>


<body onload="chat();">

<div id="up">
<div id="radiobells_container"></div>
<marquee scrollamount="5" class="marquee">Рекламное место сдается</marquee>
<link href="radio.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">var rad_backcolor="#000000"; var rad_logo = "black"; var rad_autoplay = false; var rad_width = "fixed"; var rad_width_px = 180;var rad_stations =
[['https://eu6.fastcast4u.com/proxy/polygonf?mp=/stream','Polygon FM','polygonfm'],['https://nashe1.hostingradio.ru/nashe-256','Наше радио','nashe'],['https://rusradio.hostingradio.ru/rusradio96.aacp','Русское радио','russradio'],['https://nashe1.hostingradio.ru/rock-128.mp3','ROCK FM','rockfm'],['https://pub0101.101.ru/stream/air/aac/64/100','Авторадио','avtoradio'],['https://cast2.my-control-panel.com/proxy/vladas/stream','Rock Radio','rockradio'],['https://retro.hostingradio.ru:8043/retro256.mp3','Ретро ФМ','retrofmrus'],['https://pub0302.101.ru:8000/stream/pro/aac/64/191','Радио Король и Шут','korolishutradio'],['https://dorognoe.hostingradio.ru/radio','Дорожное радио','dorognoe'],['https://evcast.mediacp.eu:2075/stream','Радио Советская эстрада','sovetestrada'],['https://rock.amgradio.ru/RusRock','Русский Рок','makradiorusrock'],['https://listen1.myradio24.com/6262','Спокойное радио','spokoinoe']];
</script>
<script type="text/javascript" src="radio.js" charset="UTF-8"></script>
</div>



<div class="qwer">
  <h2>Чат</h2>
  <div id="chat" class="chat" name="chat">
  </div>
      <span>Никнейм:</span>
      <input type="text" name="name" id="name">

      <div id="in">
          <span>Cообщение:</span>
          <input type="text" name="message" id="message">
          <input type="button" id="button" value="Сказать!" onclick="addMessage();">
      </div>    
  </div>
</div>
</body>
</html>

