<?php
namespace Magento\Security\Controller\Adminhtml\Session\LogoutAll;

/**
 * Interceptor class for @see \Magento\Security\Controller\Adminhtml\Session\LogoutAll
 */
class Interceptor extends \Magento\Security\Controller\Adminhtml\Session\LogoutAll implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Security\Model\AdminSessionsManager $sessionsManager)
    {
        $this->___init();
        parent::__construct($context, $sessionsManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
