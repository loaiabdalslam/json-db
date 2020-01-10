<?php

namespace Samirzz\JsonDB;



    /**
     * convert array to object
     *
     * @param  string $array
     * @return $this
     */
     function toObject(array $array)
    {
     return (object)json_decode(json_encode($array));
    }
