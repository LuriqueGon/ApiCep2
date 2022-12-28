<?php 

    require "vendor/autoload.php";

    use Lurique\ApiCep\Search;

    $search = new Search;
    var_dump($search->getAddressFromZipcode('53540115'));