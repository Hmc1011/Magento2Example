<?php
namespace Magento\CatalogInventory\Block\Stockqty\DefaultStockqty;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Block\Stockqty\DefaultStockqty
 */
class Interceptor extends \Magento\CatalogInventory\Block\Stockqty\DefaultStockqty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $stockState, $stockRegistry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function isMsgVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMsgVisible');
        return $pluginInfo ? $this->___callPlugins('isMsgVisible', func_get_args(), $pluginInfo) : parent::isMsgVisible();
    }

    /**
     * {@inheritdoc}
     */
    public function getStockQtyLeft()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockQtyLeft');
        return $pluginInfo ? $this->___callPlugins('getStockQtyLeft', func_get_args(), $pluginInfo) : parent::getStockQtyLeft();
    }
}
