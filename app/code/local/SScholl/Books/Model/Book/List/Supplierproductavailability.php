<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Supplierproductavailability
{
	
	protected $_options = array(
		1	=>	'Cancelled', //Cancelled: product was announced, and subsequently abandoned.
		10	=>	'Not yet available', //Not yet available (requires <ExpectedShipDate>, except in exceptional circumstances where no date is known).
		11	=>	'Awaiting stock', //Not yet available, but will be a stock item when available (requires <ExpectedShipDate>, except in exceptional circumstances where no date is known). Used particularly for imports which have been published in the country of origin but have not yet arrived in the importing country.
		12	=>	'Not yet available, will be POD', //Not yet available, to be published as print-on-demand only. May apply either to a POD successor to an existing conventional edition, when the successor will be published under a different ISBN (normally because different trade terms apply); or to a title that is being published as a POD original.
		20	=>	'Available', //Available from us (form of availability unspecified).
		21	=>	'In stock', //Available from us as a stock item.
		22	=>	'To order', //Available from us as a non-stock item, by special order.
		23	=>	'POD', //Available from us by print-on-demand.
		30	=>	'Temporarily unavailable', //Temporarily unavailable: temporarily unavailable from us (reason unspecified) (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with <SupplyDateRole> coded �08� (ONIX 3.0), except in exceptional circumstances where no date is known).
		31	=>	'Out of stock', //Stock item, temporarily out of stock (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with <SupplyDateRole> coded �08� (ONIX 3.0), except in exceptional circumstances where no date is known).
		32	=>	'Reprinting', //Temporarily unavailable, reprinting (requires expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with <SupplyDateRole> coded �08� (ONIX 3.0), except in exceptional circumstances where no date is known).
		33	=>	'Awaiting reissue', //Temporarily unavailable, awaiting reissue (requires the <Reissue> composite, and expected date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with <SupplyDateRole> coded �08� (ONIX 3.0), except in exceptional circumstances where no date is known).
		34	=>	'Temporarily withdrawn from sale', //May be for quality or technical reasons. Requires expected availability date, either as <ExpectedShipDate> (ONIX 2.1) or as <SupplyDate> with <SupplyDateRole> coded �08� (ONIX 3.0), except in exceptional circumstances where no date is known.
		40	=>	'Not available (reason unspecified)', //Not available from us (for any reason).
		41	=>	'Not available, replaced by new product', //This product is unavailable, but a successor product or edition is or will be available from us (identify successor in <RelatedProduct>).
		42	=>	'Not available, other format available', //This product is unavailable, but the same content is or will be available from us in an alternative format (identify other format product in <RelatedProduct>).
		43	=>	'No longer supplied by us', //Identify new supplier in <NewSupplier> if possible.
		44	=>	'Apply direct', //Not available to trade, apply direct to publisher.
		45	=>	'Not sold separately', //Must be bought as part of a set (identify set in <RelatedProduct>).
		46	=>	'Withdrawn from sale', //May be for legal reasons or to avoid giving offence.
		47	=>	'Remaindered', //Remaindered.
		48	=>	'Not available, replaced by POD', //Out of print, but a print-on-demand edition is or will be available under a different ISBN. Use only when the POD successor has a different ISBN, normally because different trade terms apply.
		49	=>	'Recalled', //Recalled for reasons of consumer safety.
		50	=>	'Not sold as set', //When a collection that is not sold as a set nevertheless has its own ONIX record.
		51	=>	'Not available, publisher indicates OP', //This product is unavailable, no successor product or alternative format is available or planned. Use this code only when the publisher has indicated the product is out of print.
		52	=>	'Not available, publisher no longer sells product in this market', //This product is unavailable in this market, no successor product or alternative format is available or planned. Use this code when a publisher has indicated the product is permanently unavailable (in this market) while remaining available elsewhere.
		97	=>	'No recent update received', //Sender has not received any recent update for this product from the publisher/supplier (for use when the sender is a data aggregator): the definition of �recent� must be specified by the aggregator, or by agreement between parties to an exchange.
		98	=>	'No longer receiving updates', //Sender is no longer receiving any updates from the publisher/supplier of this product (for use when the sender is a data aggregator).
		99	=>	'Contact supplier', //Availability not known to sender.
	);
	
    public function getAllOptions()
    {
        return $this->_options;
    }
	
    public function getOption($option)
    {
        return $this->_options[$option];
    }
    
    public function isSellable($value)
    {
    	switch ( $value ) {
    		case 20:
    		case 21:
    		case 22:
    		case 23:
    			return true;
    		break;
    		default:
    			return false;
    		break;
    	}
    }
}

