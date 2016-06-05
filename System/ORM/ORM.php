<?php

namespace System\ORM;

use System\DB\DB;
use System\Security\Security;

class ORM extends DB {
    /** 
     *  ชื่อตาราง ดึงค่า auto จากชื่อ class ดึงนั้นต้องตั้งชื่อ class ให้ตรงกับชื่อ table 
     * @var String   
     */
    private $name = "";
    /**
     * Field ที่เป็น pk ดึงค่า auto จากการ new class
     * @var String  
     */
    private $pk = "";
    /**
     * กำหนดเงื่อนไขการ Query  คือ WHERE นั่นเอง เช่น เรากำหนด $whare ="id=1" เป็นการกำหนดเงื่อไขการ Query เลิอกเฉพาะ id =1
     * @var String   
     */
    public $where = ""; 
    
    /**
     * ค่าการ sort เวลา query จะให้เรียงตาม column ไหน เช่น $order = "id";  เวลา Query ก็จะลงท้ายด้วย ORDER BY id 
     * @var String 
     */
    public $order = "";
    
    /**
     * ค่าการ sort  น้อยไปมาก มากไปน้อย  $orderSort = "ASC" คือการ sort จาก น้อยไปมาก  $orderSort = "DESC" จากมากไปน้อย
     * @var String 
     */
    public $orderSort = "ASC";
    
    /**
     *  การกำหนด limit เช่น $limit = "1" หรือ "20,5"
     * @var String 
     */
    public $limit = "";
    
    /**
     *
     * @var String 
     */
    public $groupBy = "";
    
    /**
     * ชื่อ column กรณี select เช่น $select = "id,name,abz...."; ถ้าไม่กำหนด จะเป็นการ select * 
     * @var String 
     */
    public  $select = "*";
    
    
    
          

    public function __construct() {
        $this->name = str_replace("App\Models\\", "", get_class($this));
        parent::__construct();
    }

    public function setName($name){
         $this->name = $name;
    }
    public function left($fk,$field){
        $exp = explode(".", $field);
        $table = $exp[0];
        $fr = $exp[1];
        
         $sql = "SELECT ".$this->name.".*,".$table.".".$fr." AS ".$table."_".$fr." FROM ".$this->name." LEFT JOIN ".$table." ON (".$this->name.".".$fk." = ".$table.".".$this->findPK($table).") ";
         if($this->where){ $sql.= " WHERE ".$this->where;}
         if($this->order){$sql.= " ORDER BY ".$this->order." ".$this->orderSort;}
         if($this->limit){$sql.= " LIMIT ".$this->limit;}
         return $this->result = $this->query($sql);
    }
    
    public function  multiLeftJoin($fk,$arrayJoinFormat = array()){
        $sql_sec1 = "SELECT ".$this->name.".* ";
        $sql_sec2 = " FROM ".$this->name." LEFT JOIN ".$arrayJoinFormat[0]->name." ON (".$this->name.".".$fk."=";
       
        for($i =0; $i < count($arrayJoinFormat);$i++){
            $tbObj = $arrayJoinFormat[$i];
            $sql_sec1.=",".$tbObj->name.".".$tbObj->display." AS ".$tbObj->name."_".$tbObj->display;
            if($tbObj->moreDisplay){
                  $sql_sec1.=",".$tbObj->name.".".$tbObj->moreDisplay;
            }
            if($i<(count($arrayJoinFormat)-1)){
                $sql_sec2.= $tbObj->name.".".$tbObj->pk.") LEFT JOIN ".$arrayJoinFormat[$i+1]->name." ON (".$tbObj->name.".".$tbObj->fk."=";
            }else{
                $sql_sec2.= $tbObj->name.".".$tbObj->pk.")";
            }
        }
          $sql = $sql_sec1.$sql_sec2;
         if($this->where){ $sql.= " WHERE ".$this->where;}
         if($this->order){$sql.= " ORDER BY ".$this->order." ".$this->orderSort;}
         if($this->limit){$sql.= " LIMIT ".$this->limit;}
         return $this->result = $this->query($sql);
        
     
    }

    public function  right($fk,$field){
         $exp = explode(".", $field);
        $table = $exp[0];
        $fr = $exp[1];
        
         $sql = "SELECT ".$this->name.".*,".$table.".".$fr." AS ".$table."_".$fr." FROM ".$this->name." RIGHT JOIN ".$table." ON (".$this->name.".".$fk." = ".$table.".".$this->findPK($table).") ";
           if($this->where){ $sql.= " WHERE ".$this->where;}
            if($this->order){$sql.= " ORDER BY ".$this->order." ".$this->orderSort;}
        if($this->limit){$sql.= " LIMIT ".$this->limit;}
         return $this->result = $this->query($sql);
    }
    
    

    public function select() {
        $sql =  "SELECT ".$this->select." FROM " . $this->name; 
        if($this->where){ $sql.= " WHERE ".$this->where;}
        if($this->order){$sql.= " ORDER BY ".$this->order." ".$this->orderSort;}
        if($this->limit){$sql.= " LIMIT ".$this->limit;}
        
        
        return $this->result = $this->query($sql);
    }

    public function count($field){
         $sql =  "SELECT COUNT(".$field.") as val FROM " . $this->name; 
         if($this->where){ $sql.= " WHERE ".$this->where;}
         $this->result = $this->query($sql);
         return $this->fetch()->val;
    }
    
    public function max($field = null){
          if($field == null){$field = $this->pk();}
         $sql =  "SELECT MAX(".$field.")  as val FROM " . $this->name; 
          if($this->where){ $sql.= " WHERE ".$this->where;}
          $this->result = $this->query($sql);
          return $this->fetch()->val;
    }
    
    public function min($field){
         $sql =  "SELECT MIN(".$field.") as val FROM " . $this->name; 
         if($this->where){ $sql.= " WHERE ".$this->where;}
         $this->result = $this->query($sql);
         return $this->fetch()->val;
    }
    
    public function sum($field){
          $sql =  "SELECT SUM(".$field.") as val FROM " . $this->name; 
          if($this->where){ $sql.= " WHERE ".$this->where;}
          $this->result = $this->query($sql);
          return $this->fetch()->val;
    }
    
    public function avg($field){
          $sql =  "SELECT AVG(".$field.") as val FROM " . $this->name; 
          if($this->where){ $sql.= " WHERE ".$this->where;}
          $this->result = $this->query($sql);
          return $this->fetch()->val;
    }
            

    public function insert() {
        
        $this->fields($this->name);
        $sql = "INSERT INTO " . $this->name . " VALUES(";

        while ($fields = $this->fetch()) {
           
            
            if ($fields->Key == "PRI" && $fields->Extra == "auto_increment") {
                $sql .= "NULL,";
            } else if((strtolower($_POST[$fields->Field]) == "null" || $_POST[$fields->Field] == NULL || $_POST[$fields->Field] == "")  &&  $fields->Null  == "YES" ){ 
                $sql .= "NULL,";
            } else if ($_POST[$fields->Field] != "" ) {
                if($this->chkQuote($fields->Type)) {
                    $quo = "'";
                } 
                $sql .= $quo . $_POST[$fields->Field] . $quo . ",";
            }  else {
                
			if($this->chkTime($fields->Type)){
                    $sql .= "NOW(),";
                }else{
                    $sql .= "'',";
                }
            }
        }
            $query =  substr($sql,0,-1).")" ;
        return $this->result = $this->query($query);
    }
    
    public function update($id) {
         
        $this->fields($this->name);

        $sql = "UPDATE " . $this->name . " SET ";
        $pk = "";
        while ($fields = $this->fetch()) {
          //  print_r($fields);
            if ($fields->Key == "PRI" && $fields->Extra == "auto_increment") {
                $pk  .= " WHERE ".$fields->Field."=".$id;
                if(!Security::num($id)){throw new \Exception("ID not found",22,null);}
            } else if((strtolower($_POST[$fields->Field]) == "null" || $_POST[$fields->Field] == NULL || $_POST[$fields->Field] == "")    ){ 
                $sql .= $fields->Field."=".$fields->Field.",";
            } else if ($_POST[$fields->Field] != "" ) {
                if($this->chkQuote($fields->Type)) {
                    $quo = "'";
                } 
                $sql .= $fields->Field."=".$quo . $_POST[$fields->Field] . $quo . ",";
            }  else {
               $sql .= "'',";
            }
        }
            $query =  substr($sql,0,-1)." ".$pk ;
          return $this->result = $this->query($query);
    }
    
    
    public function  pk(){
        if($this->pk ==""){ 
        $this->fields($this->name); 
            while ($fields = $this->fetch()) { 
                if ($fields->Key == "PRI" && $fields->Extra == "auto_increment") { 
                   $this->pk = $fields->Field;
                    break;
                }  
            } 
        }
        return $this->pk;
    }

     public function  findPK($table){
        
        $this->fields($table); 
        while ($fields = $this->fetch()) {
          //  print_r($fields);
            if ($fields->Key == "PRI" && $fields->Extra == "auto_increment") {
                 $pk =  $fields->Field;
                break;
            }  
        }
        return $pk;
    }
    
    public function delete($id) { 
         if(!Security::num($id)){ throw new \Exception("ID not found",22,null);}
         $sql = "DELETE FROM " . $this->name." WHERE ".$this->pk()."=".$id; 
         return $this->result = $this->query($sql);
    }
     
    
    /**
     *  get ค่าใน row by id(pk) 
     * @param type $id คือ ค่าของ pk 
     * @return type object row
     * @throws \Exception
     */
    public function get($id) {   
         if(!Security::num($id)){ throw new \Exception("ID not found",22,null);} 
         $sql = "SELECT  ".$this->select." FROM " . $this->name. " WHERE ".$this->pk()."=".$id;
         return $this->fetch($this->query($sql));
    }
    
	
    /**
     * @param $condition เงื่อนไขในการค้นหา ex. id = 1 หรือ price >= 200 หรือ name like xxx
     * @return mysql_result
     */
    public function find($condition){
        $sql = "SELECT ".$this->select." FROM " . $this->name . " WHERE " . $condition;
        return $this->query($sql);
    }
	
    private function chkQuote($type)
	{
		if($this->chkTime($type)||$this->chkChar($type))
		{return true;}else{return false;}
	}
	
	private function chkTime($type)
	{
		if($type == "date" || $type == "time" || $type == "datetime")
		{return true;}else{return false;}
	}

	private function chkChar($type)
	{	$type = substr($type,0,4);
		if($type == "char" || $type == "varc" || $type == "text")
		{return true;}else{return false;}
	}

}

?>
