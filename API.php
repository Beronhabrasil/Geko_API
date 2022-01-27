<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of API
 *
 * @author jonnzrotten
 */
namespace Geko;
require 'vendor/autoload.php';
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
class API {
    
    private function Getdata() {
      $result = new CoinGeckoClient(); 
      return  $result;
    }
    public function data_api() {
        $client = $this->Getdata();
        $data = $client->simple()->getPrice('bitcoin', 'brl');
        return $data;
    } 
    public function Getlist(){
         $client = $this->Getdata();
        $list = $client->coins()->getMarkets('usd');

        return $list;
    }
   
}


