<?php

/* 
 * Customized phone number validation from country name and phone number

 * autor:viveks
 * link:https://github.com/sviveks/libphonefromcountryname/
 */
require 'libphp/libphone.php';
class verifyNumber{
    
    
    
     /**
     * Get the country code list
     *
     * @return  array
     */
    public static function get_country_list()
    {
        return require 'codelist.php';
    }

    /*
     * 
     */
    public function verifyPhone($country,$number){
         $countrycodes = self::get_country_list();
         $isoCode=array_search(strtolower($country), array_map('strtolower', $countrycodes));
         if($isoCode){
             $libphp=new libphone();
             $result=$libphp->checkLibphone($isoCode,$number);            
             
         }else{
             $result['valid']=0;
             $result['message']='invalid country name';
         }
         return $result;
    }
    
    
    
}
