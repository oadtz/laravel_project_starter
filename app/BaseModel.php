<?php
namespace App;

use Moloquent\Eloquent\Model as Eloquent;

class BaseModel extends Eloquent {

    protected $connection = 'mongodb';

}