<?php


$name=$_GET["name"];
$email=$_GET["email"];
$comment=$_GET["comment"];
echo($email);
$xml = simplexml_load_file("comment.xml"); 

$cs = $xml->addChild('comments','');
$cs->addChild("name", $name);
$cs->addChild("email", $email);
$cs->addChild("comment", $comment);
$done = $xml->asXML("comment.xml");
$schiotchik=0;
$cn = count($xml->comments);
$xml = simplexml_load_file("comment.xml");
        for($i = 0; $i <= $cn; $i++){
          $schiotchik++;
          echo("<br><div style='border:  3px solid white; background-color: white'>");
       echo "Имя: ".$xml->comments[$i]->name . "<br>";
       echo "Почта: ".$xml->comments[$i]->email . "<br>";
       echo "Отзыв: ".$xml->comments[$i]->comment . "<br>";
       echo("</div>");
       if($schiotchik==$cn)break;
        }



?>