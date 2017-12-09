<?php
require_once "vendor/autoload.php";

/*spl_autoload_register();
if (isset($_GET['test'])){
    require_once 'tests/' . ucfirst($_GET['test']) . 'Test.php';
}else {
    $self = $_SERVER['SCRIPT_NAME'];
    $ignores = ['.', '..', 'tests', substr($self, strrpos($self, '/')+1)];
    foreach (scandir('.') as $file){
        !in_array($file, $ignores) && print_r("<h1><a href='{$self}?test={$file}'>{$file}</a><h1>");
    }
}*/

/* -------------------------------------- simpleFactory -------------------------------------- */
/*use src\simpleFactory\Car;
use src\simpleFactory\Bike;
use src\simpleFactory\VehicleFactory as VehicleFactory;

$factory = new VehicleFactory();
$vehicles = ['Car', 'Bike'];
foreach ($vehicles as $vehicle){
    var_dump($factory->create($vehicle));
}*/



/* -------------------------------------- factoryMethod -------------------------------------- */
/*use src\factoryMethod\VehicleFactory;
use src\factoryMethod\MiniFactory;
use src\factoryMethod\SuperFactory;

$types = [VehicleFactory::SLOW, VehicleFactory::FAST];
$factories = [MiniFactory::class, SuperFactory::class];

foreach ($factories as $factory){
    $factory = new $factory();
    foreach ($types as $type){
        var_dump($factory->create($type));
    }
}*/


/* -------------------------------------- abstractFactory -------------------------------------- */
/*use src\abstractFactory\HtmlFactory;
use src\abstractFactory\JsonFactory;

$factories = [new HtmlFactory(), new JsonFactory()];
foreach ($factories as $factory){
    $img = $factory->img('people.png');
    $input = $factory->input('text', 'mobile');

    print_r($img->render());
    print_r($input->render());
}*/



/* -------------------------------------- abstractFactory -------------------------------------- */
/*use src\staticFactory\formatterFactory;

$stringFormatter = formatterFactory::factory('string');
$numberFormatter = formatterFactory::factory('number');

var_dump($stringFormatter);
var_dump($numberFormatter);*/



/* -------------------------------------- singleton -------------------------------------- */
/*use src\singleton\Singleton;
use src\singleton\SubSingleton;

$singleton = SubSingleton::getInstance();
$serialized_singleton = serialize($singleton);
$unserialized_singleton = unserialize($serialized_singleton);
var_dump($unserialized_singleton);
// wakeup私有化导致警告
var_dump($unserialized_singleton->getName());*/



/* -------------------------------------- multiton -------------------------------------- */
/*use src\multiton\Mysql;
use src\multiton\PostgresSql;

$mysql_primary_one = Mysql::getInstance('primary');
$mysql_primary_two = Mysql::getInstance('primary');

$mysql_secondary_one = Mysql::getInstance('secondary');
$mysql_secondary_two = Mysql::getInstance('secondary');

$postgreSql_primary_one = PostgresSql::getInstance('primary', 123456);
$postgreSql_primary_two = PostgresSql::getInstance('primary', 123456);

$postgreSql_secondary_one = PostgresSql::getInstance('secondary', 123456);
$postgreSql_secondary_two = PostgresSql::getInstance('secondary', 123456);

var_dump(
    $mysql_primary_one === $mysql_primary_two,
    $mysql_secondary_one === $mysql_secondary_two,
    $postgreSql_primary_one === $postgreSql_primary_two,
    $postgreSql_secondary_one === $postgreSql_secondary_two,

    $mysql_primary_one === $mysql_secondary_one,
    $mysql_primary_one === $postgreSql_primary_one
);*/




/* -------------------------------------- builder -------------------------------------- */
/*use src\builder\Builder;
use src\builder\Mysql;
use src\builder\Oracle;

$mysqlBuilder = new Builder(new Mysql('User'));
$oracleBuilder = new Builder(new Oracle('User'));

$result = $mysqlBuilder->select(['id','name'])->where(5)->getSql();
echo $result;*/



/* -------------------------------------- pool -------------------------------------- */
use src\pool\Pool;

$pool = new Pool();

$pool->get();


/* -------------------------------------- prototype -------------------------------------- */
/* -------------------------------------- adapter -------------------------------------- */
/* -------------------------------------- bridge -------------------------------------- */
/* -------------------------------------- composite -------------------------------------- */
/* -------------------------------------- dataMapper -------------------------------------- */
/* -------------------------------------- decorator -------------------------------------- */
/* -------------------------------------- dependencyInjection -------------------------------------- */
/* -------------------------------------- facade -------------------------------------- */
/* -------------------------------------- fluentInterface -------------------------------------- */
/* -------------------------------------- proxy -------------------------------------- */
/* -------------------------------------- registry -------------------------------------- */
/* -------------------------------------- chainOfResponsibilities -------------------------------------- */
/* -------------------------------------- command -------------------------------------- */
/* -------------------------------------- iterator -------------------------------------- */
/* -------------------------------------- mediator -------------------------------------- */
/* -------------------------------------- memento -------------------------------------- */
/* -------------------------------------- nullObject -------------------------------------- */
/* -------------------------------------- observer -------------------------------------- */
/* -------------------------------------- specification -------------------------------------- */
/* -------------------------------------- state -------------------------------------- */
/* -------------------------------------- strategy -------------------------------------- */
/* -------------------------------------- templeteMethod -------------------------------------- */
/* -------------------------------------- visitor -------------------------------------- */
/* -------------------------------------- delegation -------------------------------------- */
/* -------------------------------------- serviceLocator -------------------------------------- */
/* -------------------------------------- repository -------------------------------------- */