<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Apa yang ada di login?
// Cek validasi
// Nyimpen data mungkin
// Buat session

  


class Login {

    
    private $data;//data nanti diisi
    private $error=[]; //error banyak
    private $fields=['name','telp','email']; //ngecek 

    public function __construct($post_data){
        //nah ini ngapaya
        $this->data = $post_data;//ini ngisi data dengan manggil data sendiri ke post data yang tadi di post
    }

    public function takeData($post_data){
        if (isset($GET_['submit'])){
            //instance
            $validation  = new Login($_GET);
            // kek gini tuh harus instance
            $errors = self::validasiForm();
            return $errors;}  
    }

    static function validasiForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, self::$data)){
                trigger_error("there are no field") ;
                return;
                }
        }

        self::validasiNama();
        self::validasiEmail();
        self::validasiTelepon();
        return collect(self::$error);
    }
    
    private function validasiNama(){
        //kalau nama harus alphabet, hal boleh lebih dari 12, gak boleh juga kosong
        $val= trim($this->data['name']);
            
        if(empty($val)){
                $this->addError('name', 'name is empty');
            } else if(preg_match('/^[0-9]$/', $val)){
                $this->addError('name','name should not be numeric');
            } else if(!preg_match('/^{6,12}$/', $val)){
                $this->addError('name', 'at least it should more than 6 characters and less than 12 characters');
            }    
    }

    private function validasiEmail(){
        // di trim dulu supaya bisa keliatan
        $val= trim($this->data['email']);
        
        if(empty($val)){
            $this->addError('email', 'emailnya gak ada');
        }  else if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
            $this->addError('email', 'this is not an email bruh');
        }
    }
    
    private function validasiTelepon(){
        // di trim dulu supaaya bisa keliatan
        $val= trim($this->data['telp']);
        if(empty($val)){
            $this->addError('telp','teleponnya gak ada');
        } else if(preg_match('/^[a-zA-Z]$/', $val)){
            $this->addError('telp', 'ini bukan numeric');
        }
    }
        
    private function addError($kuncinm, $val){
        return $this->error[$kuncinm] = $val; 
    }


}
