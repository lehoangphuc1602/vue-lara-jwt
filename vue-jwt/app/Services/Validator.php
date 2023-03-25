<?php 
class Validator{
    public function checkValidator($data) {
        
    }
    public function requiredFields($data){
        foreach ($data as $key => $value){

        }
    }

    public function initFields(){
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ];
    }
} 
?>