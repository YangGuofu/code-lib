<?php
namespace lib\skills;

use lib\skills\SkillInterface;

class R implements SkillInterface
{
    protected $name;
    protected $cd;
    protected $damage;

    public function __construct($options)
    {
        $this->name = $options[0];
        $this->cd = $options[1];
        $this->damage = $options[2];
    }

    public function activate(array $target)
    {

    }
}