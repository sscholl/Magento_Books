<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Product_Attribute_Source_Notificationtype
	 extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{

	protected $_options = null;
	
    public function getAllOptions()
    {
    	if ( is_null($this->_options) ) {
    		$this->_options[] = array(
    				'value' => 0,
    				'label' => '-',
    		);
    		foreach ( Mage::getSingleton('sschollbooks/book_list_notificationtype')->getAllOptions() as $value => $label ) {
    			$this->_options[] = array(
    					'value' => $value,
    					'label' => $label,
    			);
    		}
    	}
        return $this->_options;
    }

    /**
     * Get a text for option value
     *
     * @param  string|integer $value
     * @return string|bool
     */
    public function getOptionText($value)
    {
        $label = Mage::getSingleton('sschollbooks/book_list_notificationtype')->getOption($value);
        if ( $label ) return $label;
        else return $value;
    }
    
}

