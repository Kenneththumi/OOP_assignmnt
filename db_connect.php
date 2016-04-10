
<?php
   class Connect{
      public $host="host=localhost";
      public $port="port=5432";
      public $dbname="dbname=postgres";
      public $user="user=postgres";
      public $password="password=Kenmwangi1.";
            public function __construct()
            {
            	pg_connect(''.$this->host.' '.$this->port.' '.$this->dbname.' '.$this->user.' '.$this->password.'');                     
            }
            public function Insert($var1, $var2){
                   pg_query( "INSERT INTO USERS(fname,lname)
                           VALUES('$var1','$var2')");
            }
            public function getTable(){
                   return pg_query("SELECT * FROM USERS");
            }
   }
?>