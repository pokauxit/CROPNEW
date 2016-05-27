<?php
namespace System\DB;
$CONNECTION = FALSE;
class DB{
    protected  $HOST;
    protected  $USER;
    protected  $PASS;
    protected  $DB;
    
      protected  $result;
    
    function __construct()
    {
        
        global  $CONNECTED;
        $this->HOST = APP_HOST;
        $this->USER = APP_USER;
        $this->PASS = APP_PASS;
        $this->DB = APP_DB;
          
        if(!$CONNECTED){
            $this->open();
            
        }
    }
    
     public  function open(){
        global  $CONNECTED;
        try{
          
            $CONNECTED = @mysqli_connect($this->HOST,  $this->USER,  $this->PASS);
                if(!$CONNECTED){
                    throw new Exception('Connect DB Failure',141);
                }else{
                    if(!@mysqli_query($CONNECTED,"USE ".$this->DB)){
                        throw new Exception('DB not found',141);
                    }
                    
                     @mysqli_query($CONNECTED,'SET NAMES utf8');
                } 
           
          } catch (Exception  $e){ 
                print_r($e);
          }
    
    }
    
    /**
     *  
     * @param type $query  is Query String   
     * @return type Mixed
     *  ถ้า Query String มีปัญหาจะ return false  ถ้าทำงานได้ จะ return mysql result
     */
    public function query($query){
         global  $CONNECTED;  
          $this->result  = mysqli_query($CONNECTED,$query);  
        return  $this->result;
    }
    
    /**
     * Fetch Data from mysql result 
     * <br>
     * ทำการ Fetch ข้อมูล  เปรียบได้กับการใช้ mysql_fetch_object
     * @return  mysql_result  
     */
   public function fetch($result = null){ 
      
       if(!$result){ 
        return mysqli_fetch_object($this->result);
       }else{
           return mysqli_fetch_object($result);
       }
    }
    
    /**
     *  Count row of result 
     * <br>
     *  นับจำนวนแถว
     * @return type int num of row
     */
    public function  num($result = null){
        
          if(!$result){
        return mysqli_num_rows($this->result);
       }else{
           return mysqli_num_rows($result);
       }
    }
    
    /**
     *  Clear  result 
     * <br> 
     * ล้าง result ที่ select ไว้
     * @return type void
     */
    public function  free(){
         return mysqli_free_result($this->result); 
    }
    
    
    
   public function fields($tb)
    {
		  $sql = "SHOW FULL COLUMNS FROM ".$tb;
		return $this->result = $this->query($sql);
    } 
    
}
?>
