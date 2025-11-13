<?php

namespace roelvanhintum\commerce\buckaroo;

use roelvanhintum\commerce\buckaroo\gateways\CreditCardGateway;
use roelvanhintum\commerce\buckaroo\gateways\IdealGateway;
use roelvanhintum\commerce\buckaroo\gateways\PayPalGateway;
use roelvanhintum\commerce\buckaroo\gateways\SepaDirectDebitGateway;
use roelvanhintum\commerce\buckaroo\models\Settings;

use craft\commerce\services\Gateways;
use craft\events\RegisterComponentTypesEvent;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * Plugin::$plugin
     *
     * @var Plugin
     */
    public static Plugin $plugin;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(Gateways::class, Gateways::EVENT_REGISTER_GATEWAY_TYPES,  function (RegisterComponentTypesEvent $event) {
            $event->types[] = CreditCardGateway::class;
            $event->types[] = IdealGateway::class;
            $event->types[] = PayPalGateway::class;
            $event->types[] = SepaDirectDebitGateway::class;
        });
    }

    /**
     * @inheritdoc
     */
    protected function createSettingsModel(): Settings
    {
        return new Settings();
    }
}
