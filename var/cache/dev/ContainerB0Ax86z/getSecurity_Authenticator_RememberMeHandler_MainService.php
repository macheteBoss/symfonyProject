<?php

namespace ContainerB0Ax86z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMeHandler_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me_handler.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/RememberMeHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/AbstractRememberMeHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/SignatureRememberMeHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Signature/SignatureHasher.php';

        return $container->privates['security.authenticator.remember_me_handler.main'] = new \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler(new \Symfony\Component\Security\Core\Signature\SignatureHasher(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), [], $container->getEnv('APP_SECRET'), NULL, NULL), ($container->privates['security.user.provider.concrete.database_users'] ?? $container->load('getSecurity_User_Provider_Concrete_DatabaseUsersService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ['secret' => 'notSoSecretArendaToken', 'lifetime' => 604800, 'path' => '/', 'user_providers' => [], 'catch_exceptions' => true, 'signature_properties' => [], 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => 'lax', 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
