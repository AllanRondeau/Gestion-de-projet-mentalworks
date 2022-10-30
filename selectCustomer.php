<?php
use App\HydrateCustomer;
$listCustomer = array();

function test(array $test)
{

    foreach ($test as $createCustomer) 
    {
        HydrateCustomer::createCustomer(array("code" => $createCustomer["code"], "name" => $createCustomer["name"], "note" => $createCustomer["note"]));
        array_push($listCustomer, HydrateCustomer::getCustomer());
    }
    echo json_encode($listCustomer);
}

if ($listCustomer){
    foreach ($listCustomer as $key => $customer){
        echo $key;
    }
}
