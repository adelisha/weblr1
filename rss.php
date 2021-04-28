<?php
   $tek=$_GET["tek"];
   $rss = simplexml_load_file("https://www.9tv.co.il/rss/mainfeed");      
   $s=0;
   foreach ($rss->channel->item as $item) {
       $s++;
       echo "<div style='width: 500px; border: 3px solid white; background-color: white'>";
       echo '<h3 style="font-weight: bold">'.$item->title.'</h3>';
       echo '<p>'.$item->description.'</p>'; 
       echo "<img src=\"". (string)$item->enclosure['url'][0]. "\" style='width: 400px'></div><br>";
       if($s==$tek) {
          break;
         }
   }
?>