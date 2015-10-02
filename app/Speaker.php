<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    private $organisers;

    public function __construct()
    {
        $this->organisers = array("Shaun", "Adam","Matt","James","Lewis","Keil");
    }

    /**
     * @return array
     */
    public function getOrganisers()
    {
        return $this->organisers;
    }


    public function getOrganiserName($position)
    {

        return $this->organisers[$position];

    }
}
