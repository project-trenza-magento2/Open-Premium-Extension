<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Marketplace
 * @version     1.2
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2017 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 * */
namespace Apptha\Marketplace\Block\Adminhtml\Review;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

/**
 * Class for Seller Review Edit and Delete in Manage Seller Reviews Grid
 */
class Edit extends Container {
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;
    
    /**
     * Constructor function
     * @param Context $context            
     * @param Registry $registry            
     *
     * @param array $data       
     * @return object     
     */
    public function __construct(Context $context, Registry $registry, array $data = []) {
        $this->_coreRegistry = $registry;
        parent::__construct ( $context, $data );
    }
    
    /**
     * Prepare layout
     *
     * @return \Magento\Framework\View\Element\AbstractBlock
     */
    protected function _prepareLayout() {
        $this->_formScripts [] = "function toggleEditor() { if (tinyMCE.getInstanceById('post_content') == null) {  tinyMCE.execCommand('mceAddControl', false, 'post_content');
                } else { tinyMCE.execCommand('mceRemoveControl', false, 'post_content'); }  }; ";
        return parent::_prepareLayout ();
    }
    
    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct() {
        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_review';
        $this->_blockGroup = 'Apptha_Marketplace';
        parent::_construct ();
        $this->buttonList->update ( 'save', 'label', __ ( 'Save' ) );
        $this->buttonList->add ( 'saveandcontinue', ['label' => __ ( 'Save and Continue Edit' ),'class' => 'save','data_attribute' => ['mage-init' => [ 
        'button' => ['event' => 'saveAndContinueEdit','target' => '#edit_form']]]], - 100 );
        $this->buttonList->remove ( 'delete', 'label', __ ( 'Delete' ) );
    }
}