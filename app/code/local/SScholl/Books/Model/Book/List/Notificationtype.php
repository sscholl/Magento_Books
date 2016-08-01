<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Notificationtype
{
	
	protected $_options = array(
		1	=>	'Early notification', //Use for a complete record issued earlier than approximately six months before publication.
		2	=>	'Advance notification (confirmed)', //Use for a complete record issued to confirm advance information approximately six months before publication; or for a complete record issued after that date and before information has been confirmed from the book-in-hand.
		3	=>	'Notification confirmed on publication', //Use for a complete record issued to confirm advance information at or just before actual publication date; or for a complete record issued at any later date.
		4	=>	'Update (partial)', //In ONIX 3.0 only, use when sending a �block update� record. In previous ONIX releases, ONIX updating has generally been by complete record replacement using code 03, and code 04 is not used.
		5	=>	'Delete', //Use when sending an instruction to delete a record which was previously issued. Note that a Delete instruction should NOT be used when a product is cancelled, put out of print, or otherwise withdrawn from sale: this should be handled as a change of Publishing status, leaving the receiver to decide whether to retain or delete the record. A Delete instruction is only used when there is a particular reason to withdraw a record completely, eg because it was issued in error.
		8	=>	'Notice of sale', //Notice of sale of a product, from one publisher to another: sent by the publisher disposing of the product.
		9	=>	'Notice of acquisition', //Notice of acquisition of a product, by one publisher from another: sent by the acquiring publisher.
		12	=>	'Update � SupplyDetail only', //ONIX Books 2.1 supply update � <SupplyDetail> only (not used in ONIX 3.0).
		13	=>	'Update � MarketRepresentation only', //ONIX Books 2.1 supply update � <MarketRepresentation> only (not used in ONIX 3.0).
		14	=>	'Update � SupplyDetail and MarketRepresentation', //ONIX Books 2.1 supply update � both <SupplyDetail> and <MarketRepresentation> (not used in ONIX 3.0).
	);
	
    public function getAllOptions()
    {
        return $this->_options;
    }
	
    public function getOption($option)
    {
        return $this->_options[$option];
    }
}

