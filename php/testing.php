<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "call-center";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>

<?php 
    /*
    class responsibles{
        //Properties
        public $id;
        public $name;
        
        // Methods 
        public function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }
        
        public function get_id(){
            return $this->id;
        }
        public function get_name(){
            return $this->name;
        }
    }
    
    $responsible = new responsibles('1', 'Marcelo');
    
    echo $responsible->get_id();
    echo $responsible->get_name();
    */

    try {
        $statement = $conn->prepare("SELECT * FROM responsibles");
        $statement->execute();
        
        /* Não entendo ma funciona */
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($statement->fetchAll() as $key => $value) {
            // var_dump($value);
            // echo '<br>';
            // echo$value['id'];
            // echo$value['name'];

            echo "<option value=".$value['id'].">".$value['name']."</option>";
        }
    } catch(PDOException $e){
        echo "Error: ". $e->getMenssage();
    }

    /* **************************** */

    
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Firstname</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
      function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
      }
    
      function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
      }
    
      function beginChildren() {
        echo "<tr>";
      }
    
      function endChildren() {
        echo "</tr>" . "\n";
      }
    }

    try {
    // set the resulting array to associative
        $stmt = $conn->prepare("SELECT * FROM responsibles");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
?>