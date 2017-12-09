<?php
namespace lib\skills;

use lib\skills\SkillInterface;

class Q implements SkillInterface
{
    protected $name;
    protected $damage;

    public function __construct($options)
    {
        $this->name = $options[0];
        $this->damage = $options[1];
    }

    public function activate(array $target)
    {
        // TODO: Implement activate() method.
    }
}