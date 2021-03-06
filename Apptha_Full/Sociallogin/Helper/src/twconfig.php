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
 * @category     Apptha
 * @package      Apptha_Sociallogin
 * @version      1.2
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2017 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 * */

$objectManager = \Magento\Framework\App\ObjectManager::getInstance ();
$consumerkey = $objectManager->create ( 'Apptha\Sociallogin\Helper\Data' )->getConfig ( 'sociallogin/twitterlogin/twconsumerkey' );
$secretKey = $objectManager->create ( 'Apptha\Sociallogin\Helper\Data' )->getConfig ( 'sociallogin/twitterlogin/twsecretkey' );
/**
 * To declare twitter configuration
 */
define ( 'YOUR_CONSUMER_KEY', $consumerkey );
define ( 'YOUR_CONSUMER_SECRET', $secretKey );
?>
