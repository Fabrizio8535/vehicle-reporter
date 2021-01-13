<?php
class DatabaseHandler
{
    private static $instance = null;
    private $pdo,
            $query,
            $error = false,
            $count = 0,
            $results;

    private function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/dbname'), Config::get('mysql/username'), Config::get('mysql/password'));
        
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    
    public static function getInstance(){
          if (!isset(self::$instance)) {
            self::$instance = new DatabaseHandler();
        }
        return self::$instance;
    }
       
    public function query($sql, $params = array())
    {
        $this->error = false;
        if($this->query = $this->pdo->prepare($sql))
        {
            $iterator =1;
            if(count($params))
            {
                foreach($params as $param)
                {
                    $this->query->bindValue($iterator, $param);
                    $iterator++;
                }
            }
            if($this->query->execute())
            {
                $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
                $this->count = $this->query->rowCount();
            }
            else
            {
                $this->error = true;
            }
        }
        return $this;
    }
    
    public function action($action, $table, $where = array())
    {
        if(count($where) === 3)
        {
            $operators = array('=', '>', '<', '>=', '<=');
            $field = $where[0];
            $operator= $where[1];
            $value = $where[2];
            
            if(in_array($operator, $operators))
            {
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                if(!$this->query($sql, array($value))->error())
                {
                    return $this;
                }
            }
        }
        return false;
    }
    
    public function get($table, $where)
    {
        return $this->action("SELECT *", $table, $where);
    }
    
    public function delete($table, $where)
    {
             return $this->action("DELETE FROM", $table, $where);
    }
    
    public function results()
    {
        return $this->results;
    }
    
    public function firstResult()
    {
        return $this->results()[0];
    }
    
    public function count()
    {
        return $this->count;
    }
    
    
    
    public function error()
    {
        return $this->error;
    }
          


}
