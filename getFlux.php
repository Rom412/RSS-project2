<?php
   header ("Content-Type:text/xml");
   echo file_get_contents('http://www.lequipe.fr/rss/actu_rss_Hand.xml');
?>