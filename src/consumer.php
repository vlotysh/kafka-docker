<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = \Kafka\ConsumerConfig::getInstance();
$config->setMetadataRefreshIntervalMs(10000);
$config->setMetadataBrokerList('kafka:9092');
$config->setGroupId('test');
$config->setBrokerVersion('1.0.0');
$config->setTopics(['test']);
$consumer = new \Kafka\Consumer();

$consumer->start(function($topic, $part, $message) {
    var_dump($message);
});
