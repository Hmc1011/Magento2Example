<?php
namespace Magento\Theme\Model\DesignConfigRepository;

/**
 * Interceptor class for @see \Magento\Theme\Model\DesignConfigRepository
 */
class Interceptor extends \Magento\Theme\Model\DesignConfigRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Theme\Model\Design\Config\Storage $configStorage, \Magento\Framework\App\Config\ReinitableConfigInterface $reinitableConfig, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry)
    {
        $this->___init();
        parent::__construct($configStorage, $reinitableConfig, $indexerRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Theme\Api\Data\DesignConfigInterface $designConfig)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($designConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Theme\Api\Data\DesignConfigInterface $designConfig)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($designConfig);
    }
}
