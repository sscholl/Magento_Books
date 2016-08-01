<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Audiencecode
{

	protected $_options = array(
		1	=>	'General/trade', //For a non-specialist adult audience.
		2	=>	'Children/juvenile', //For a juvenile audience, not specifically for any educational purpose.
		3	=>	'Young adult', //For a teenage audience, not specifically for any educational purpose.
		4	=>	'Primary and secondary/elementary and high school', //Kindergarten, pre-school, primary/elementary or secondary/high school education.
		5	=>	'College/higher education', //For universities and colleges of further and higher education.
		6	=>	'Professional and scholarly', //For an expert adult audience, including academic research.
		7	=>	'ELT/ESL', //Intended for use in teaching English as a second language.
		8	=>	'Adult education', //For centres providing academic, vocational or recreational courses for adults.
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
