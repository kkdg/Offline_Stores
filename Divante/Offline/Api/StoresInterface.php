<?php
namespace Divante\Offline\Api;


interface StoresInterface {


    /**
     * GET for Stores API
     * @param string $param
     * @return array
     */

    public function getStores();
}