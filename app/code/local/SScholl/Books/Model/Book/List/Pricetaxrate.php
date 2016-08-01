<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Pricetaxrate
	extends Varien_Object
{

	public function getAllOptions()
	{
		return $this->_options;
	}
	
    public function getOption($option)
    {
        return $this->_options[$option];
    }

	protected $_options = array(
		'H'	=> 'Higher rate', //Specifies that tax is applied at a higher rate than standard.
		'P'	=> 'Tax paid at source (Italy)', //Under Italian tax rules, VAT on books may be paid at source by the publisher, and subsequent transactions through the supply chain are tax-exempt.
		'R'	=> 'Lower rate', //Specifies that tax is applied at a lower rate than standard.
		'S'	=> 'Standard rate', //	
		'Z'	=> 'Zero-rated', //
	);

}