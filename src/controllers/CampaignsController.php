<?php
/**
 * @link      https://github.com/clearbold/craft-campaignmonitor-campaigns
 * @copyright Copyright (c) Clearbold, LLC
 *
 * Post your rendered Craft content to your Campaign Monitor account as a new campaign.
 *
 */

namespace clearbold\cmcampaigns\controllers;

use clearbold\cmcampaigns\CmCampaigns;

use Craft;
use craft\web\Controller;
use craft\elements\User;

/**
 * @author    Mark Reeves
 * @since     0.1.0
 */
class CampaignsController extends Controller
{

    // Protected Properties
    // =========================================================================

    protected $allowAnonymous = ['index'];

    public function actionIndex()
    {
        $this->requirePostRequest();
        $request = Craft::$app->getRequest();

        // Pass campaign to CM Service
        $response = CmCampaigns::getInstance()->campaignmonitor->createCampaign();
        var_dump($response); exit;
        if ($response['success'])
            Craft::$app->getSession()->setNotice($response['body']->TotalUniqueEmailsSubmitted . ' users synched');
        else
            Craft::$app->getSession()->setError($response['reason']);
    }

}