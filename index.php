<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://github.com/LanceVaflor/xmlact1/blob/master/rss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Monster");
      ?>
       
       <h1>Monsters</h1>
      
      

      
       <?php
       foreach( $content as $data )
       {?>
           <div class="border">
           <?php
           $Monster = $data->getElementsByTagName("Monster")->item(0)->nodeValue;
           $Classification = $data->getElementsByTagName("Classification")->item(0)->nodeValue;
           $Immunity = $data->getElementsByTagName("Immunity")->item(0)->nodeValue;
           $Tactics = $data->getElementsByTagName("Tactics")->item(0)->nodeValue;
           $Occurence = $data->getElementsByTagName("Occurence")->item(0)->nodeValue;
           echo "<ul><h2>$Monster - $type</h2>
                    <ul>
                        <li>Classification: $Classification </li>
                        <li>Immunity: $Immunity</li>
                        <li>Tactics: $Tactics</li>
                        <li>Occurence: $Occurence</li>
                        
                    </ul>
                </ul>";
      ?>
    
<?php
 }
?>

  
