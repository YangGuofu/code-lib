<?php
namespace lib;

use lib\skills\Q;
use lib\skills\W;
use lib\skills\SkillInterface;

class Hero
{
    public $skill;
    public $skills = [];

    public function __construct(...$skills)
    {
        // 技能单一
        //$this->skills = new \lib\Skill(100, 5);

        // 多技能 多依赖 当技能类参数变化时必须改变类本身
        /*$this->skills[] = new Q(['剧毒踪迹', 10]);
        $this->skills[] = new W(['强力粘胶', 14]);*/

        // 控制反转 由工厂负责其依赖需求的行为
        // 通过工厂 改变技能时无需再改变类
        /*$skillFactory = new SkillFactory();
        foreach ($skills as $name => $options){
            $this->skills[] = $skillFactory->makeSkill($name, $options);
        }*/

        // 依赖注入 依赖不由内部产生 而是由外部注入
        foreach ($skills as $skill){
            $this->skills[] = $skill;
        }

    }
}