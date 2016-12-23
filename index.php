<?php
if(isset($_REQUEST['email'])){
     mail($_REQUEST['email'], 'Carte de voeux cadeau !', 'http://marieb.student.codeur.online/carte-voeux/', null,
     'marie.b@codeur.online');
   }
