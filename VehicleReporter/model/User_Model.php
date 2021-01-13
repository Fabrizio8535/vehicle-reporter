<?php
class User_Model
{
    private $userID, $firstName, $surName, $email, $password, $phoneNumber;
    
    public function __construct($firstName, $surName, $email, $password, $phoneNumber)
    {
       $this->firstName = $firstName; 
       $this->surName = $surName; 
       $this->email = $email; 
       $this->password = $password; 
       $this->phoneNumber = $phoneNumber; 
    }
    
    public function getUserID()
    {
          return $this->userID;
    }
    
    public function getFirstName()
    {
          return $this->firstName;
    }
    public function setFirstName($firstName)
    {
          $this->firstName = $firstName;
    }
    
    public function getSurName()
    {
          return $this->surName;
    }
    public function setSurName($surName)
    {
          $this->surName = $surName;
    }
    
    public function getFullName()
    {
        return $this->firstName. " ".$this->surName;
    }
    
    public function getEmail()
    {
          return $this->email;
    }
    public function setEmail($email)
    {
          $this->email = $email;
    }
    
    public function getPassword()
    {
          return $this->password;
    }
    public function setPassword($password)
    {
          $this->password = $password;
    }
    
    public function getPhoneNumber()
    {
          return $this->phoneNumber;
    }
    public function setPhoneNumber($phoneNumber)
    {
          $this->phoneNumber = $phoneNumber;
    }
}
