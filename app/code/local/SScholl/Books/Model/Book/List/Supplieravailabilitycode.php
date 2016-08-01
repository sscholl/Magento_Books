<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Supplieravailabilitycode
{
	
	protected $_options = array(
		'AB'	=>	'Cancelled', //Publication abandoned after having been announced.
		'AD'	=>	'Available direct from publisher only', //Apply direct to publisher, item not available to trade.
		'CS'	=>	'Availability uncertain', //Check with customer service.
		'EX'	=>	'No longer stocked by us', //Wholesaler or vendor only.
		'IP'	=>	'Available', //In-print and in stock.
		'MD'	=>	'Manufactured on demand', //May be accompanied by an estimated average time to supply.
		'NP'	=>	'Not yet published', //MUST be accompanied by an expected availability date.
		'NY'	=>	'Newly catalogued, not yet in stock', //Wholesaler or vendor only: MUST be accompanied by expected availability date.
		'OF'	=>	'Other format available', //This format is out of print, but another format is available: should be accompanied by an identifier for the alternative product.
		'OI'	=>	'Out of stock indefinitely', //No current plan to reprint.
		'OP'	=>	'Out of print', //Discontinued, deleted from catalogue.
		'OR'	=>	'Replaced by new edition', //This edition is out of print, but a new edition has been or will soon be published: should be accompanied by an identifier for the new edition.
		'PP'	=>	'Publication postponed indefinitely', //Publication has been announced, and subsequently postponed with no new date.
		'RF'	=>	'Refer to another supplier', //Supply of this item has been transferred to another publisher or distributor: should be accompanied by an identifier for the new supplier.
		'RM'	=>	'Remaindered', //
		'RP'	=>	'Reprinting', //MUST be accompanied by an expected availability date.
		'RU'	=>	'Reprinting, undated', //Use instead of RP as a last resort, only if it is really impossible to give an expected availability date.
		'TO'	=>	'Special order', //This item is not stocked but has to be specially ordered from a supplier (eg import item not stocked locally): may be accompanied by an estimated average time to supply.
		'TP'	=>	'Temporarily out of stock because publisher cannot supply', //Wholesaler or vendor only.
		'TU'	=>	'Temporarily unavailable', //MUST be accompanied by an expected availability date.
		'UR'	=>	'Unavailable, awaiting reissue', //The item is out of stock but will be reissued under the same ISBN: MUST be accompanied by an expected availability date and by the reissue date in the <Reissue> composite. See notes on the <Reissue> composite for details on treatment of availability status during reissue.
		'WR'	=>	'Will be remaindered as of (date)', //MUST be accompanied by the remainder date.
		'WS'	=>	'Withdrawn from sale', //Typically, withdrawn indefinitely for legal reasons.
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

