<?php
namespace App\Services;

class Car
{
    protected $color;
    protected $model;
    protected $maxSeed;
    protected $country;
    protected $engine;

    public function __construct(Engine $engine, $color, $model, $maxSeed, $country)
    {
         $this->engine = $engine;
         $this->color = $color;
         $this->model = $model;
         $this->maxSeed = $maxSeed;
         $this->country = $country;
    }
    public function seed($km)
    {
        return $this->engine->start().', '.$this->color.', '.$this->model.', '.$this->maxSeed.', '.$this->country.','. $km.' km';
    }
}