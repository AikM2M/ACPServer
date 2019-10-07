
<?php
	 class MyDB extends SQLite3 {
      function __construct() {
//         $this->open('test.db');
         $this->open('/home/pi/MN_v01/Middle Node.db');
      }
   }  
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }
/*
   */ 
//   else { echo "Opened database successfully\n";   }
?>
