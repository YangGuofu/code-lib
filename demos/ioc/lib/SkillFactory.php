<?php
namespace lib;

use lib\skills\Q;
use lib\skills\W;
use lib\skills\E;
use lib\skills\R;

class SkillFactory
{
    public function makeSkill($type, $options)
    {
        switch ($type){
            case 'Q':
                return new Q($options);
                break;
            case 'W':
                return new W($options);
                break;
            case 'E':
                return new E($options);
                break;
        }
    }
}