<?php 

    namespace Lurique\ApiCep;

    class Search{
        private $url = "https://viacep.com.br/ws/";

        public function getAddressFromZipCode(String $zipCode):array{
            $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
            $get = $this->getData($zipCode);
            return (array) json_decode($get);
        }

        private function getData(String $zipCode){
            return file_get_contents($this->url. $zipCode ."/json");
        }
    }