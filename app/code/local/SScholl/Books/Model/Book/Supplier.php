<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_Supplier
	extends Varien_Object
{

	private $_prices = array();

	public function addPrice(SScholl_Books_Model_Book_Supplier_Price $price)
	{
		$this->_prices[] = $price;
		return $this;
	}
	
	public function getPrices()
	{
		return $this->_prices;
	}

	private $_stocks = array();

	public function addStock(SScholl_Books_Model_Book_Supplier_Stock $stock)
	{
		$this->_stocks[] = $stock;
		return $this;
	}
	
	public function getStocks()
	{
		return $this->_stocks;
	}

}