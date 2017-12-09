<?php
spl_autoload_register();



// 技能单一
//$metalMaker = new \lib\Hero('');

// 多技能
//$metalMaker = new \lib\Hero('');

// 工厂调用
/*$metalMaker = new \lib\Hero([
    'Q' => ['剧毒踪迹', 10],
    'W' => ['强力粘胶', 14],
    'E' => ['过肩摔', 14, 120],
]);*/

// 依赖注入
$Q = new \lib\skills\Q(['剧毒踪迹', 10]);
$W = new \lib\skills\W(['强力粘胶', 14]);
$E = new \lib\skills\E(['过肩摔', 14, 120]);
$R = new \lib\skills\R(['疯狂药剂', 100, 1000]);


$metalMaker = new \lib\Hero($Q, $W, $E, $R);
var_dump($metalMaker->skills);


// IoC
$container = new \lib\Container();

$container->bind('Hero', function ($skills) {
    return new \lib\Hero($skills);
});
$container->bind('Q', function ($options){
    return new \lib\skills\Q($options);
});
$container->bind('W', function ($options){
    return new \lib\skills\W($options);
});
$container->bind('E', function ($options){
    return new \lib\skills\E($options);
});
$container->bind('R', function ($options){
    return new \lib\skills\R($options);
});

$metalMaker = $container->make('Hero', 'Q', 'W', 'E', 'R');
var_dump($metalMaker->skills);


