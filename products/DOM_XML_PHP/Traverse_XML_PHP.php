<html>
  <head>
    <title>Lets traverse XML now....</title>
  </head>
  <body>
    <?php
    
    
    //echo 100+100;
    
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("products.xml");
    $x = $xmlDoc->documentElement;
   foreach ($x->childNodes as $item){
     print $item->nodeName . " = " . $item->nodeValue . "<br />";
     "<br />";
   }
    ?>
    
  </body>
</html>