<?php
class Validator{
    /**
     * Ckeck Required fields
     */
    public function isRequired($field_array){
        foreach($field_array as $field){
            if($_POST[''.$field.'']==''){
                return false;
            }
            return true;

        }
    }
      //validate email
      public function isValidEmail($email){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return true;
        }
    }
    //validate password
     public function passwordsMatch($pw1,$pw2){
         if($pw1==$pw2){
             return true;
         }else{
             return false;
         }
     }
  
}