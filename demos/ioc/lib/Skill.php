<?php
namespace lib;

class Skill
{
    protected $damage;
    protected $cd;

    public function __construct($damage, $cd)
    {
        $this->damage = $damage;
        $this->cd = $cd;
    }
}