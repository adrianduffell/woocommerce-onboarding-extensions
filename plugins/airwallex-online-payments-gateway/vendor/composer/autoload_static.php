<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b5065520dfde76e60e0af108822b0af
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Airwallex\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Airwallex\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Airwallex\\Client\\AbstractClient' => __DIR__ . '/../..' . '/includes/Client/AbstractClient.php',
        'Airwallex\\Client\\AdminClient' => __DIR__ . '/../..' . '/includes/Client/AdminClient.php',
        'Airwallex\\Client\\CardClient' => __DIR__ . '/../..' . '/includes/Client/CardClient.php',
        'Airwallex\\Client\\GatewayClient' => __DIR__ . '/../..' . '/includes/Client/GatewayClient.php',
        'Airwallex\\Client\\HttpClient' => __DIR__ . '/../..' . '/includes/Client/HttpClient.php',
        'Airwallex\\Client\\LoggingClient' => __DIR__ . '/../..' . '/includes/Client/LoggingClient.php',
        'Airwallex\\Client\\MainClient' => __DIR__ . '/../..' . '/includes/Client/MainClient.php',
        'Airwallex\\Client\\Response' => __DIR__ . '/../..' . '/includes/Client/Response.php',
        'Airwallex\\Client\\WeChatClient' => __DIR__ . '/../..' . '/includes/Client/WeChatClient.php',
        'Airwallex\\Constants\\ExpressCheckoutStates' => __DIR__ . '/../..' . '/includes/Constants/ExpressCheckoutStates.php',
        'Airwallex\\Constants\\HongKongStates' => __DIR__ . '/../..' . '/includes/Constants/HongKongStates.php',
        'Airwallex\\Controllers\\AirwallexController' => __DIR__ . '/../..' . '/includes/Controllers/AirwallexController.php',
        'Airwallex\\Controllers\\ControllerFactory' => __DIR__ . '/../..' . '/includes/Controllers/ControllerFactory.php',
        'Airwallex\\Controllers\\GatewaySettingsController' => __DIR__ . '/../..' . '/includes/Controllers/GatewaySettingsController.php',
        'Airwallex\\Controllers\\OrderController' => __DIR__ . '/../..' . '/includes/Controllers/OrderController.php',
        'Airwallex\\Controllers\\PaymentConsentController' => __DIR__ . '/../..' . '/includes/Controllers/PaymentConsentController.php',
        'Airwallex\\Controllers\\PaymentSessionController' => __DIR__ . '/../..' . '/includes/Controllers/PaymentSessionController.php',
        'Airwallex\\Controllers\\QuoteController' => __DIR__ . '/../..' . '/includes/Controllers/QuoteController.php',
        'Airwallex\\Gateways\\AbstractAirwallexGateway' => __DIR__ . '/../..' . '/includes/Gateways/AbstractAirwallexGateway.php',
        'Airwallex\\Gateways\\AirwallexGatewayLocalPaymentMethod' => __DIR__ . '/../..' . '/includes/Gateways/AirwallexGatewayLocalPaymentMethod.php',
        'Airwallex\\Gateways\\AirwallexGatewayTrait' => __DIR__ . '/../..' . '/includes/Gateways/AirwallexGatewayTrait.php',
        'Airwallex\\Gateways\\Blocks\\AirwallexCardWCBlockSupport' => __DIR__ . '/../..' . '/includes/Gateways/Blocks/AirwallexCardWCBlockSupport.php',
        'Airwallex\\Gateways\\Blocks\\AirwallexExpressCheckoutWCBlockSupport' => __DIR__ . '/../..' . '/includes/Gateways/Blocks/AirwallexExpressCheckoutWCBlockSupport.php',
        'Airwallex\\Gateways\\Blocks\\AirwallexKlarnaWCBlockSupport' => __DIR__ . '/../..' . '/includes/Gateways/Blocks/AirwallexKlarnaWCBlockSupport.php',
        'Airwallex\\Gateways\\Blocks\\AirwallexMainWCBlockSupport' => __DIR__ . '/../..' . '/includes/Gateways/Blocks/AirwallexMainWCBlockSupport.php',
        'Airwallex\\Gateways\\Blocks\\AirwallexWCBlockSupport' => __DIR__ . '/../..' . '/includes/Gateways/Blocks/AirwallexWCBlockSupport.php',
        'Airwallex\\Gateways\\Blocks\\AirwallexWeChatWCBlockSupport' => __DIR__ . '/../..' . '/includes/Gateways/Blocks/AirwallexWeChatWCBlockSupport.php',
        'Airwallex\\Gateways\\Card' => __DIR__ . '/../..' . '/includes/Gateways/Card.php',
        'Airwallex\\Gateways\\CardSubscriptions' => __DIR__ . '/../..' . '/includes/Gateways/CardSubscriptions.php',
        'Airwallex\\Gateways\\ExpressCheckout' => __DIR__ . '/../..' . '/includes/Gateways/ExpressCheckout.php',
        'Airwallex\\Gateways\\GatewayFactory' => __DIR__ . '/../..' . '/includes/Gateways/GatewayFactory.php',
        'Airwallex\\Gateways\\Klarna' => __DIR__ . '/../..' . '/includes/Gateways/Klarna.php',
        'Airwallex\\Gateways\\Main' => __DIR__ . '/../..' . '/includes/Gateways/Main.php',
        'Airwallex\\Gateways\\Settings\\APISettings' => __DIR__ . '/../..' . '/includes/Gateways/Settings/APISettings.php',
        'Airwallex\\Gateways\\Settings\\AbstractAirwallexSettings' => __DIR__ . '/../..' . '/includes/Gateways/Settings/AbstractAirwallexSettings.php',
        'Airwallex\\Gateways\\Settings\\AdminSettings' => __DIR__ . '/../..' . '/includes/Gateways/Settings/AdminSettings.php',
        'Airwallex\\Gateways\\Settings\\AirwallexSettingsTrait' => __DIR__ . '/../..' . '/includes/Gateways/Settings/AirwallexSettingsTrait.php',
        'Airwallex\\Gateways\\WeChat' => __DIR__ . '/../..' . '/includes/Gateways/WeChat.php',
        'Airwallex\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
        'Airwallex\\Services\\CacheService' => __DIR__ . '/../..' . '/includes/Services/CacheService.php',
        'Airwallex\\Services\\LogService' => __DIR__ . '/../..' . '/includes/Services/LogService.php',
        'Airwallex\\Services\\OrderService' => __DIR__ . '/../..' . '/includes/Services/OrderService.php',
        'Airwallex\\Services\\ServiceFactory' => __DIR__ . '/../..' . '/includes/Services/ServiceFactory.php',
        'Airwallex\\Services\\Util' => __DIR__ . '/../..' . '/includes/Services/Util.php',
        'Airwallex\\Services\\WebhookService' => __DIR__ . '/../..' . '/includes/Services/WebhookService.php',
        'Airwallex\\Struct\\AbstractBase' => __DIR__ . '/../..' . '/includes/Struct/AbstractBase.php',
        'Airwallex\\Struct\\Customer' => __DIR__ . '/../..' . '/includes/Struct/Customer.php',
        'Airwallex\\Struct\\PaymentAttempt' => __DIR__ . '/../..' . '/includes/Struct/PaymentAttempt.php',
        'Airwallex\\Struct\\PaymentConsent' => __DIR__ . '/../..' . '/includes/Struct/PaymentConsent.php',
        'Airwallex\\Struct\\PaymentIntent' => __DIR__ . '/../..' . '/includes/Struct/PaymentIntent.php',
        'Airwallex\\Struct\\PaymentSession' => __DIR__ . '/../..' . '/includes/Struct/PaymentSession.php',
        'Airwallex\\Struct\\Quote' => __DIR__ . '/../..' . '/includes/Struct/Quote.php',
        'Airwallex\\Struct\\Refund' => __DIR__ . '/../..' . '/includes/Struct/Refund.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b5065520dfde76e60e0af108822b0af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b5065520dfde76e60e0af108822b0af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b5065520dfde76e60e0af108822b0af::$classMap;

        }, null, ClassLoader::class);
    }
}
