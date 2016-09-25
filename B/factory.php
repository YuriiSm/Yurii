<?php
abstract class Race
{
    public function force()
    {
        $force=100;
    }

    public function speed()
    {
        $speed=100;
    }

    public function reaction()
    {
        $reaction=100;
    }
}

class Zoombie extends Race
{
    public function force()
    {
        $force=100;
    }

    public function speed()
    {
        $speed=10;
    }

    public function reaction()
    {
        $reaction=60;
    }
}

class Aliens extends Race
{
    public function force()
    {
        $force=50;
    }

    public function speed()
    {
        $speed=90;
    }

    public function reaction()
    {
        $reaction=40;
    }
}

class Vampires extends Race
{
    public function force()
    {
        $force=40;
    }

    public function speed()
    {
        $speed=80;
    }

    public function reaction()
    {
        $reaction=90;
    }
}

class StartGame
{
    private static $race=[
        'one'=>'Zoombie',
        'two'=>'Aliens',
        'three'=>'Vampires'

    ];

    public static function createRase($race)
    {
        switch (self::$race[$race]){
            
        }
    }
}