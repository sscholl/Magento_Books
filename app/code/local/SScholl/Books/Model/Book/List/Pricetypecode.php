<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Pricetypecode
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
		'01'		=>	'RRP excluding tax', //RRP excluding any sales tax or value-added tax. MARKER
		'02'		=>	'RRP including tax', //RRP including sales or value-added tax if applicable. MARKER
		'03'		=>	'Fixed retail price excluding tax', //In countries where retail price maintenance applies by law to certain products: not used in USA. MARKER
		'04'		=>	'Fixed retail price including tax', //In countries where retail price maintenance applies by law to certain products: not used in USA. MARKER
		'05'		=>	'Supplier’s net price excluding tax', //Unit price charged by supplier to reseller excluding any sales tax or value-added tax: goods for retail sale. MARKER
		'06'		=>	'Supplier’s net price excluding tax: rental goods', //Unit price charged by supplier to reseller / rental outlet, excluding any sales tax or value-added tax: goods for rental (used for video and DVD). MARKER
		'07'		=>	'Supplier’s net price including tax', //Unit price charged by supplier to reseller including any sales tax or value-added tax if applicable: goods for retail sale. MARKER
		'08'		=>	'Supplier’s alternative net price excluding tax', //Unit price charged by supplier to a specified class of reseller excluding any sales tax or value-added tax: goods for retail sale (this value is for use only in countries, eg Finland, where trade practice requires two different net prices to be listed for different classes of resellers, and where national guidelines specify how the code should be used). MARKER
		'09'		=>	'Supplier’s alternative net price including tax', //Unit price charged by supplier to a specified class of reseller including any sales tax or value-added tax: goods for retail sale (this value is for use only in countries, eg Finland, where trade practice requires two different net prices to be listed for different classes of resellers, and where national guidelines specify how the code should be used). MARKER
		'11'	=>	'Special sale RRP excluding tax', //Special sale RRP excluding any sales tax or value-added tax. Note ‘special sales’ are sales where terms and conditions are different from normal trade sales, when for example products that are normally sold on a sale-or-return basis are sold on firm-sale terms, or where a particular product is tailored for a specific retail outlet (often termed a ‘premium’ product). Further details of the modified terms and conditioins should be given in <PriceTypeDescription>. MARKER
		'12'	=>	'Special sale RRP including tax', //Special sale RRP including sales or value-added tax if applicable. MARKER
		'13'	=>	'Special sale fixed retail price excluding tax', //In countries where retail price maintenance applies by law to certain products: not used in USA. MARKER
		'14'	=>	'Special sale fixed retail price including tax', //In countries where retail price maintenance applies by law to certain products: not used in USA. MARKER
		'15'	=>	'Supplier’s net price for special sale excluding tax', //Unit price charged by supplier to reseller for special sale excluding any sales tax or value-added tax. MARKER
		'17'	=>	'Supplier’s net price for special sale including tax', //Unit price charged by supplier to reseller for special sale including any sales tax or value-added tax. MARKER
		'21'	=>	'Pre-publication RRP excluding tax', //Pre-publication RRP excluding any sales tax or value-added tax. MARKER
		'22'	=>	'Pre-publication RRP including tax', //Pre-publication RRP including sales or value-added tax if applicable. MARKER
		'23'	=>	'Pre-publication fixed retail price excluding tax', //In countries where retail price maintenance applies by law to certain products: not used in USA. MARKER
		'24'	=>	'Pre-publication fixed retail price including tax', //In countries where retail price maintenance applies by law to certain products: not used in USA. MARKER
		'25'	=>	'Supplier’s pre-publication net price excluding tax', //Unit price charged by supplier to reseller pre-publication excluding any sales tax or value-added tax. MARKER
		'27'	=>	'Supplier’s pre-publication net price including tax', //Unit price charged by supplier to reseller pre-publication including any sales tax or value-added tax. MARKER
		'31'	=>	'Freight-pass-through RRP excluding tax', //In the US, books are sometimes supplied on ‘freight-pass-through’ terms, where a price that is different from the RRP is used as the basis for calculating the supplier’s charge to a reseller. To make it clear when such terms are being invoked, code 31 is used instead of code 01 to indicate the RRP. Code 32 is used for the ‘billing price’. MARKER
		'32'	=>	'Freight-pass-through billing price excluding tax', //When freight-pass-through terms apply, the price on which the supplier’s charge to a reseller is calculated, ie the price to which trade discount terms are applied. See also code 31. MARKER
		'41'	=>	'Publishers retail price excluding tax', //For a product supplied on agency terms, the retail price set by the publisher, excluding any sales tax or value-added tax. MARKER
		'42'	=>	'Publishers retail price including tax', //For a product supplied on agency terms, the retail price set by the publisher, including sales or value-added tax if applicable. MARKER
	);

}