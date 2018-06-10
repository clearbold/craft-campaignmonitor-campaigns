<?php

$vendorDir = dirname(__DIR__);

return array (
  'clearbold/craft-campaignmonitor-service' => 
  array (
    'class' => 'clearbold\\cmservice\\CmService',
    'basePath' => $vendorDir . '/clearbold/craft-campaignmonitor-service/src',
    'handle' => 'cm-service',
    'aliases' => 
    array (
      '@clearbold/cmservice' => $vendorDir . '/clearbold/craft-campaignmonitor-service/src',
    ),
    'name' => 'Campaign Monitor Service',
    'version' => '1.0.4',
    'description' => 'Campaign Monitor Service is an API wrapper and settings manager for Campaign Monitor plugins for Craft.',
    'developer' => 'Clearbold',
    'developerUrl' => 'http://clearbold.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/clearbold/craft-campaignmonitor-service/master/CHANGELOG.md',
    'hasCpSettings' => true,
  ),
);
