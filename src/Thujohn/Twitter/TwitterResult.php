<?php
/**
 * Created by PhpStorm.
 * User: bosco
 * Date: 08.12.17
 * Time: 17:39
 */

namespace Thujohn\Twitter;


class TwitterResult
{

    private $result;
    private $header;

    public function __construct($result, $header)
    {
        $this->result = $result;
        $this->header = $header;
    }


    public function getResult()
    {
        return $this->result;
    }

    public function getHeader()
    {
        return $this->header;
    }

}