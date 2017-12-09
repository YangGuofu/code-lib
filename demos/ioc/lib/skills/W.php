<?php
namespace lib\skills;

use lib\skills\SkillInterface;

class W implements SkillInterface
{
    protected $name;
    protected $cd;

    public function __construct($options)
    {
        $this->name = $options[0];
        $this->cd = $options[1];
    }

    public function activate(array $target)
    {
        // TODO: Implement activate() method.
    }
}