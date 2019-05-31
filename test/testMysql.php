<?php

require dirname(__FILE__).'/../vendor/autoload.php';


$db = new MysqliDb ();


$tyr_master_config = array(
    'host'      => 'master.db.com',
    'username'  => 'root', 
    'password'  => '',
    'db'        => '',
    'port'      => 3306,
    'charset'   => 'utf8',
);

$tyr_slave_config = array(
    'host'      => 'slave.db.com',
    'username'  => 'root', 
    'password'  => '',
    'db'        => '',
    'port'      => 3306,
    'charset'   => 'utf8',
);
$shorturl_slave_config = array(
    'host'      => 'slave.db.com',
    'username'  => 'root', 
    'password'  => '',
    'db'        => '',
    'port'      => 3306,
    'charset'   => 'utf8',
);
$db->addConnection('tyr_master', $tyr_master_config);
$db->addConnection('tyr_slave', $tyr_slave_config);
$db->addConnection('shorturl_slave', $shorturl_slave_config);


// $ad_list = $db->connection('tyr_master')->get('ad_info', 10);
// var_dump($ad_list);




$date = '2019-05-29';
$start_time = $date . ' 00:00:00';
$end_time   = $date . ' 23:59:59';




// $ad_show_list = $db->connection('tyr_master')->where('create_time', $start_time, '>=')->where('create_time', $end_time, '<=')->groupBy('ad_group')->get('csr_ad_details_201905', null, 'ad_group, count(*) as count');
// var_dump($ad_show_list);
// $ad_show_list = $db->connection('tyr_master')->where('create_time', $start_time, '>=')->where('create_time', $end_time, '<=')->groupBy('ad_group')->get('csr_ad_details_201905', null, 'ad_group, count(distinct(csr_id)) as count');
// var_dump($ad_show_list);

$ad_show_list = $db->connection('tyr_master')
    ->where('create_time', $start_time, '>=')
    ->where('create_time', $end_time, '<=')
    ->where('ad_data', '%1Hot07%', 'like')
    ->groupBy('ad_group')
    ->get('csr_ad_details_201905', null, 'ad_group, count(*) as count');
var_dump($ad_show_list);











