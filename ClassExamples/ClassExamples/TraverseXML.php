<DOCTYPE html>
<html>
  
  <head>
    <title>Let's traverse some XML now...</title>
  </head>
  
  <body>
    
    <?php 
    
    $xmlDoc = new DOMDocument();
    
    $xmlDoc->load("books.xml");
    
    $x = $xmlDoc->documentElement;
    
    print "hello";
    
    foreach ($x->childNodes As $item){
       
      print $item->nodeName . " = " . $item->nodeValue . "<br/>";
    }
    ?>
  </body>
</html>