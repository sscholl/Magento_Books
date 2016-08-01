<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Product_Convert
{

	private $_book = null;
	
	/**
	 * @var Mage_Catalog_Model_Product
	 */
	private $_product = null;
	
	/**
	 * generates one if not set
	 * @return SScholl_Books_Model_Book
	 */
	public function getBook()
	{
		if ( !$this->_book instanceof SScholl_Books_Model_Book ) {
			$this->_book = Mage::getModel('sschollbooks/book');
		}
		return $this->_book;
	}
	
	/**
	 * @param SScholl_Books_Model_Book $book
	 * @return SScholl_Books_Model_Product
	 */
	public function setBook(SScholl_Books_Model_Book $book)
	{
		$this->_book = $book;
		return $this;
	}
	
	/**
	 * @return Mage_Catalog_Model_Product
	 */
	public function getProduct()
	{
		if ( !$this->_product instanceof Mage_Catalog_Model_Product ) {
			$this->_product = Mage::getModel('catalog/product');
			//$result = $this->_product->loadByAttribute('sku', $this->getSku());
			//if ( $result ) $this->_product = $result;
		}
		return $this->_product;
	}
	
	public function setProduct(Mage_Catalog_Model_Product $product)
	{
		$this->_product = $product;
		return $this;
	}
	
	public function getSku()
	{
		return $this->getBook()->getEan() ?
			$this->getBook()->getEan()
			: $this->getBook()->getIsbn()
		;
	}
	
	public function import()
	{
		$this->getProduct()->addData($this->getBook()->getData());
		$this->getProduct()->setSku($this->getSku());
		$this->getProduct()->setAttributeSetId($this->_config()->getAttributeSetId());
		$this->getProduct()->setTypeId('simple');
		$this->getProduct()->setTaxClassId($this->getBookTaxClass()); # My default tax class
		$this->getProduct()->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH);

		/* @var $stockItem Mage_CatalogInventory_Model_Stock_Item */
		if ( !($stockItem = $this->getProduct()->getStockItem()) instanceof Mage_CatalogInventory_Model_Stock_Item ) {
			$stockItem = Mage::getModel('cataloginventory/stock_item')
				->loadByProduct($this->getProduct()->getId());
		}
		$stockItem->addData($this->getStockData());
		$stockItem->setForceReindexRequired(true);
		$this->getProduct()->setStatus(true);
		if (Mage::app()->isSingleStoreMode()) {
			$this->getProduct()->setWebsiteIds(array(Mage::app()->getStore(true)->getWebsite()->getId()));
		}
		$this->getProduct()
			->setForceReindexRequired(true)
			->setIsChangedCategories(true);
	}
	
	public function getBookTaxClass()
	{
		switch ( $this->getBook()->getTaxRateCode() ) {
			case 'Z':
				return $this->_config()->getTaxClassFree();
			case 'R':
				return $this->_config()->getTaxClassReduced();
			case 'S':
				return $this->_config()->getTaxClassStandard();
			case 'H':
				return $this->_config()->getTaxClassHigh();
			default:
				return null;
			
		}
	}
	
	public function getStockData()
	{
		return array(
			'is_in_stock'				=> $this->getBook()->getQty() ? true : false,
			'qty'						=> $this->getBook()->getQty(),
			'manage_stock'				=> $this->getBook()->getManageStock(),
			'use_config_manage_stock'	=> false
		);
	}
	
	/**
	 * @return SScholl_Books_Helper_Config
	 */
	private function _config()
	{
		return Mage::helper('sschollbooks/config');
	}

}