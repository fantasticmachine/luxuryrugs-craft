<?php
/**
 * LuxuryRugs module for Craft CMS 3.x
 *
 * Business logic for Luxury Rugs site
 *
 * @link      https://fantasticmachine.co.uk
 * @copyright Copyright (c) 2021 Fantastic Machine
 */

namespace fantasticmachine\luxuryrugs;

use Craft;
use craft\events\RegisterUrlRulesEvent;
use craft\web\UrlManager;
use craft\helpers\FileHelper;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;
use yii\base\Module;

/**
 * Craft plugins are very much like little applications in and of themselves. We’ve made
 * it as simple as we can, but the training wheels are off. A little prior knowledge is
 * going to be required to write a plugin.
 *
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL,
 * as well as some semi-advanced concepts like object-oriented programming and PHP namespaces.
 *
 * https://craftcms.com/docs/plugins/introduction
 *
 * @author    Fantastic Machine
 * @package   luxuryrugs
 * @since     1.0
 *
 */
class LuxuryRugs extends Module
{
	public function init(): void
    {
		parent::init();

        Craft::setAlias('@fantasticmachine/luxuryrugs', __DIR__);

		$this->controllerNamespace = 'fantasticmachine\\luxuryrugs\\controllers';

		$this->setComponents([
			'example' => Example::class,
		]);

		Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('luxuryrugs', LuxuryrugsVariable::class);
            }
		);

        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_SITE_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
    
				
			}
		);
    }



	static function log($message)
    {
        $file = Craft::getAlias('@storage') . '/logs/luxuryrugs.log';
        $log = date('Y-m-d H:i:s').' '.$message."\n";

        FileHelper::writeToFile($file, $log, ['append' => true]);
	}
}
