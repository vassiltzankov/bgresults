<?php

namespace Api\Models;

class Tournaments extends ModelBase
{

    public $id;
    public $type_id;
    public $year_start;
    public $year_end;
    public $name;
    public $description;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("bgresults");
        $this->setSource("tournaments");
    }
}
