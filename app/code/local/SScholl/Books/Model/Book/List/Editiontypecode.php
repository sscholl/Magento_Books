<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Editiontypecode
{
	
	protected $_options = array(
		'ABR'	=>	'Abridged', //Content has been shortened: use for abridged, shortened, concise, condensed. MARKER
		'ACT'	=>	'Acting edtion', //Version of a play or script intended for use of those directly involved in a production, usually including full stage directions in addition to the text of the script. MARKER
		'ADP'	=>	'Adapted', //Content has been adapted to serve a different purpose or audience, or from one medium to another: use for dramatization, novelization etc. Use <EditionStatement> to describe the exact nature of the adaptation. MARKER
		'ALT'	=>	'Alternate', //Do not use. This code is now DEPRECATED, but is retained in the list for reasons of backwards compatibility. MARKER
		'ANN'	=>	'Annotated', //Content is augmented by the addition of notes. MARKER
		'BLL'	=>	'Bilingual edition', //Both languages should be specified in the ‘Language’ group. Use MLL for an edition in more than two languages. MARKER
		'BRL'	=>	'Braille', //Braille edition. MARKER
		'CMB'	=>	'Combined volume', //An edition in which two or more works also published separately are combined in a single volume; AKA ‘omnibus’ edition. MARKER
		'CRI'	=>	'Critical', //Content includes critical commentary on the text. MARKER
		'CSP'	=>	'Coursepack', //Content was compiled for a specified educational course. MARKER
		'DGO'	=>	'Digital original', //A digital product which has no print counterpart and is not expected to have a print counterpart. MARKER
		'ENH'	=>	'Enhanced', //Use for e-publications that have been enhanced with additional text, speech, other audio, video, interactive or other content. MARKER
		'ENL'	=>	'Enlarged', //Content has been enlarged or expanded from that of a previous edition. MARKER
		'EXP'	=>	'Expurgated', //‘Offensive’ content has been removed. MARKER
		'FAC'	=>	'Facsimile', //Exact reproduction of the content and format of a previous edition. MARKER
		'FST'	=>	'Festschrift', //A collection of writings published in honor of a person, an institution or a society. MARKER
		'ILL'	=>	'Illustrated', //Content includes extensive illustrations which are not part of other editions. MARKER
		'LTE'	=>	'Large type / large print', //Large print edition, print sizes 14 to 19 pt – see also ULP. MARKER
		'MCP'	=>	'Microprint', //A printed edition in a type size too small to be read without a magnifying glass. MARKER
		'MDT'	=>	'Media tie-in', //An edition published to coincide with the release of a film, TV program, or electronic game based on the same work. Use <EditionStatement> to describe the exact nature of the tie-in. MARKER
		'MLL'	=>	'Multilingual edition', //All languages should be specified in the ‘Language’ group. Use BLL for a bilingual edition. MARKER
		'NED'	=>	'New edition', //Where no other information is given, or no other coded type is applicable. MARKER
		'NUM'	=>	'Edition with numbered copies', //A limited edition in which each copy is individually numbered. MARKER
		'PRB'	=>	'Prebound edition', //In the US, a book that was previously bound, normally as a paperback, and has been rebound with a library-quality hardcover binding by a supplier other than the original publisher. See also the <Publisher> and <RelatedProduct> composites for other aspects of the treatment of prebound editions in ONIX. MARKER
		'REV'	=>	'Revised', //Content has been revised from that of a previous edition. MARKER
		'SCH'	=>	'School edition', //An edition intended specifically for use in schools. MARKER
		'SMP'	=>	'Simplified language edition', //An edition that uses simplified language (Finnish ‘Selkokirja’). MARKER
		'SPE'	=>	'Special edition', //Use for anniversary, collectors’, de luxe, gift, limited, numbered, autographed edition. Use <EditionStatement> to describe the exact nature of the special edition. MARKER
		'STU'	=>	'Student edition', //Where a text is available in both student and teacher’s editions. MARKER
		'TCH'	=>	'Teacher’s edition', //Where a text is available in both student and teacher’s editions; use also for instructor’s or leader’s editions. MARKER
		'UBR'	=>	'Unabridged', //Where a title has also been published in an abridged edition; also for audiobooks, regardless of whether an abridged audio version also exists. MARKER
		'ULP'	=>	'Ultra large print', //For print sizes 20pt and above, and with typefaces designed for the visually impaired – see also LTE. MARKER
		'UXP'	=>	'Unexpurgated', //Content previously considered ‘offensive’ has been restored. MARKER
		'VAR'	=>	'Variorum', //Content includes notes by various commentators, and/or includes and compares several variant texts of the same work. MARKER

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

