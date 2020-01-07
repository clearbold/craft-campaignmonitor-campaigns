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
    'version' => '1.0.8',
    'description' => 'Campaign Monitor Service is an API wrapper and settings manager for Campaign Monitor plugins for Craft.',
    'developer' => 'Clearbold',
    'developerUrl' => 'http://clearbold.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/clearbold/craft-campaignmonitor-service/master/CHANGELOG.md',
    'hasCpSettings' => true,
  ),
  'clearbold/craft-campaignmonitor-lists' => 
  array (
    'class' => 'clearbold\\cmlists\\CmLists',
    'basePath' => $vendorDir . '/clearbold/craft-campaignmonitor-lists/src',
    'handle' => 'cm-lists',
    'aliases' => 
    array (
      '@clearbold/cmlists' => $vendorDir . '/clearbold/craft-campaignmonitor-lists/src',
    ),
    'name' => 'Campaign Monitor Lists',
    'version' => '1.1.7',
    'description' => 'View and manage your Campaign Monitor subscriber lists in your Craft CMS control panel, add a subscribe form to your website for new subscribers.',
    'developer' => 'Clearbold',
    'developerUrl' => 'http://clearbold.com/',
    'hasCpSection' => true,
  ),
);
