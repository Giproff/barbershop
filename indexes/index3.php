<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Демо для управления порядком слоев</title>

  <link href="css/style3.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
</head>
<body>
 
   <div class="layer1 outline">.layer1<br/>position: relative;<br/>z-index: 4;</div>
   <div class="layer2 outline">.layer2<br/>position: relative;<br/>z-index: 2;</div>
   <div class="layer3 outline">.layer3<br/>position: absolute;<br/> z-index: 5;
     <div  class="layer4 outline">.layer4<br/>position:relative;<br/>z-index: 6;</div>    
     <div  class="layer5 outline">.layer5<br/>position: relative;<br/>z-index: 1;</div>
     <div  class="layer6 outline">.layer6<br/>position: absolute;<br/>z-index: 3;</div>
   </div>
 
  </body>
 </html>