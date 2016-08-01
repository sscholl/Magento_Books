<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book
	extends Varien_Object
{

	private $_suppliers = array();
	private $_contributors = array();
	
	public function addSupplier(SScholl_Books_Model_Book_Supplier $supplier)
	{
		$this->_suppliers[] = $supplier;
		return $this;
	}
	
	public function getSuppliers()
	{
		return $this->_suppliers;
	}
	
	/**
	 * @return SScholl_Books_Model_Book_Supplier
	 */
	public function getSupplier()
	{
		/* @var $supplier SScholl_Books_Model_Book_Supplier */
		if ( !$this->_suppliers[0] instanceof SScholl_Books_Model_Book_Supplier ) {
			return Mage::getModel('sschollbooks/book_supplier');
		}
		return $this->_suppliers[0];
	}
	
	public function addContributor(SScholl_Books_Model_Book_Contributor $contributor, $number = 0)
	{
		$number = (int) $number;
		if ( $number < 0 ) {
			$this->_contributors[$number] = $contributor;
		} else {
			$this->_contributors[] = $contributor;
		}
		return $this;
	}
	
	public function getContributors()
	{
		return $this->_contributors;
	}
	
	public function getSku()
	{
		if ( $this->getEan() ) {
			return $this->getEan();
		} else {
			return $this->getIsbn();
		}
	}

	public function addListData($key, $value, $seperator = ';')
	{
		if ((string) $value){
			if ($this->getData($key)) {
				$value = $this->getData($key) . $seperator . $value;
			}
			$this->setData($key, $value);
		}
	}

	public function setStatus($value)
	{
		if (is_bool($value)) {
			if ($value) $value = 1;
			else $value = 2;
		}
		if (!$value) $value = 2;
		$this->setData('status', $value);
		return $this;
	}
	
	public function setData($key, $value=null)
	{
		if( !is_array($key) && $value === "" ) {
			unset($this->_data[$key]);
			return $this;
		}
		return parent::setData($key, $value);
	}
	
	public function setDefaultSupplier()
	{
		$this->setSupplierName($this->getSupplier()->getName());
		$this->setSupplierAvailabilityCode($this->getSupplier()->getSupplierAvailabilityCode());
		$this->setSupplierProductAvailability($this->getSupplier()->getSupplierProductAvailability());
		$this->setDefaultPrice();
		$this->setDefaultStock();
	}
	
	public function setDefaultPrice()
	{
		/* @var $supplierproductavailability SScholl_Books_Model_Book_List_Supplierproductavailability */
		$supplierproductavailability = Mage::getModel('sschollbooks/book_list_supplierproductavailability');
		if (
			$supplierproductavailability->isSellable($this->getSupplier()->getSupplierProductAvailability())
			|| (
					!$this->getSupplier()->getSupplierProductAvailability()
					&& $this->getSupplier()->getSupplierAvailabilityCode() === self::CODE_AVAILABLE
			)
		) {
			foreach ( $this->getSupplier()->getPrices() as $priceModel ) {
				if (
					Mage::app()->getStore()->getCurrentCurrencyCode()
					===  $priceModel->getCurrencyCode()
						|| $priceModel->getCurrencyCode() === 'USD'//remove this
				) {
					$this->setCurrencyCode(Mage::app()->getStore()->getCurrentCurrencyCode());//$priceModel->getCurrencyCode());
					$this->setPrice($priceModel->getAmount());
					$this->setTaxRateCode($priceModel->getTaxRateCode());
					//$this->setTaxRatePercent($priceModel->getTaxRatePercent());
				}
			}
		}
	}
	
	public function setDefaultStock()
	{
		if ( sizeof($this->getSupplier()->getStocks()) > 0 ) {
			foreach ( $this->getSupplier()->getStocks() as $stockModel ) {
				$this->setQty($this->getQty() + $stockModel->getOnHand());
			}
			$this->setManageStock(true);
		} else {
			$this->setManageStock(false);
		}
	}

}