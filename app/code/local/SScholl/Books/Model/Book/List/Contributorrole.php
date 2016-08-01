<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Contributorrole
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
		'A01'	=> 'By (author)', //Author of a textual work.	MARKER
		'A02'	=> 'With', //With or as told to: ‘ghost’ author of a literary work.	MARKER
		'A03'	=> 'Screenplay by', //Writer of screenplay or script (film or video).	MARKER
		'A04'	=> 'Libretto by', //Writer of libretto (opera): see also A31.	MARKER
		'A05'	=> 'Lyrics by', //Author of lyrics (song): see also A31.	MARKER
		'A06'	=> 'By (composer)', //Composer of music.	MARKER
		'A07'	=> 'By (artist)', //Visual artist when named as the primary creator of, eg, a book of reproductions of artworks.	MARKER
		'A08'	=> 'By (photographer)', //Photographer when named as the primary creator of, eg, a book of photographs.	MARKER
		'A09'	=> 'Created by', //	MARKER
		'A10'	=> 'From an idea by', //	MARKER
		'A11'	=> 'Designed by', //	MARKER
		'A12'	=> 'Illustrated by', //Artist when named as the creator of artwork which illustrates a text, or of the artwork of a graphic novel or comic book.	MARKER
		'A13'	=> 'Photographs by', //Photographer when named as the creator of photographs which illustrate a text.	MARKER
		'A14'	=> 'Text by', //Author of text which accompanies art reproductions or photographs, or which is part of a graphic novel or comic book.	MARKER
		'A15'	=> 'Preface by', //Author of preface.	MARKER
		'A16'	=> 'Prologue by', //Author of prologue.	MARKER
		'A17'	=> 'Summary by', //Author of summary.	MARKER
		'A18'	=> 'Supplement by', //Author of supplement.	MARKER
		'A19'	=> 'Afterword by', //Author of afterword.	MARKER
		'A20'	=> 'Notes by', //Author of notes or annotations: see also A29.	MARKER
		'A21'	=> 'Commentaries by', //Author of commentaries on the main text.	MARKER
		'A22'	=> 'Epilogue by', //Author of epilogue.	MARKER
		'A23'	=> 'Foreword by', //Author of foreword.	MARKER
		'A24'	=> 'Introduction by', //Author of introduction: see also A29.	MARKER
		'A25'	=> 'Footnotes by', //Author/compiler of footnotes.	MARKER
		'A26'	=> 'Memoir by', //Author of memoir accompanying main text.	MARKER
		'A27'	=> 'Experiments by', //Person who carried out experiments reported in the text.	MARKER
		'A29'	=> 'Introduction and notes by', //Author of introduction and notes: see also A20 and A24.	MARKER
		'A30'	=> 'Software written by', //Writer of computer programs ancillary to the text.	MARKER
		'A31'	=> 'Book and lyrics by', //Author of the textual content of a musical drama: see also A04 and A05.	MARKER
		'A32'	=> 'Contributions by', //Author of additional contributions to the text.	MARKER
		'A33'	=> 'Appendix by', //Author of appendix.	MARKER
		'A34'	=> 'Index by', //Compiler of index.	MARKER
		'A35'	=> 'Drawings by', //	MARKER
		'A36'	=> 'Cover design or artwork by', //Use also for the cover artist of a graphic novel or comic book if named separately.	MARKER
		'A37'	=> 'Preliminary work by', //Responsible for preliminary work on which the work is based.	MARKER
		'A38'	=> 'Original author', //Author of the first edition (usually of a standard work) who is not an author of the current edition.	MARKER
		'A39'	=> 'Maps by', //Maps drawn or otherwise contributed by.	MARKER
		'A40'	=> 'Inked or colored by', //When separate persons are named as having respectively drawn and colored artwork, eg for a graphic novel or comic book, use A12 for ‘drawn by’ and A40 for ‘colored by’.	MARKER
		'A41'	=> 'Pop-ups by', //Designer of pop-ups in a pop-up book, who may be different from the illustrator.	MARKER
		'A42'	=> 'Continued by', //Use where a standard work is being continued by somebody other than the original author.	MARKER
		'A43'	=> 'Interviewer', //	MARKER
		'A44'	=> 'Interviewee', //	MARKER
		'A99'	=> 'Other primary creator', //Other type of primary creator not specified above.	MARKER
		'B01'	=> 'Edited by', //	MARKER
		'B02'	=> 'Revised by', //	MARKER
		'B03'	=> 'Retold by', //	MARKER
		'B04'	=> 'Abridged by', //	MARKER
		'B05'	=> 'Adapted by', //	MARKER
		'B06'	=> 'Translated by', //	MARKER
		'B07'	=> 'As told by', //	MARKER
		'B08'	=> 'Translated with commentary by', //This code applies where a translator has provided a commentary on issues relating to the translation. If the translator has also provided a commentary on the work itself, codes B06 and A21 should be used.	MARKER
		'B09'	=> 'Series edited by', //Name of a series editor when the product belongs to a series.	MARKER
		'B10'	=> 'Edited and translated by', //	MARKER
		'B11'	=> 'Editor-in-chief', //	MARKER
		'B12'	=> 'Guest editor', //	MARKER
		'B13'	=> 'Volume editor', //	MARKER
		'B14'	=> 'Editorial board member', //	MARKER
		'B15'	=> 'Editorial coordination by', //	MARKER
		'B16'	=> 'Managing editor', //	MARKER
		'B17'	=> 'Founded by', //Usually the founder editor of a serial publication: Begruendet von.	MARKER
		'B18'	=> 'Prepared for publication by', //	MARKER
		'B19'	=> 'Associate editor', //	MARKER
		'B20'	=> 'Consultant editor', //Use also for ‘advisory editor’.	MARKER
		'B21'	=> 'General editor', //	MARKER
		'B22'	=> 'Dramatized by', //	MARKER
		'B23'	=> 'General rapporteur', //In Europe, an expert editor who takes responsibility for the legal content of a collaborative law volume.	MARKER
		'B24'	=> 'Literary editor', //An editor who is responsible for establishing the text used in an edition of a literary work, where this is recognised as a distinctive role (in Spain, ‘editor literario’).	MARKER
		'B25'	=> 'Arranged by (music)', //	MARKER
		'B26'	=> 'Technical editor', //	MARKER
		'B99'	=> 'Other adaptation by', //Other type of adaptation or editing not specified above.	MARKER
		'C01'	=> 'Compiled by', //	MARKER
		'C02'	=> 'Selected by', //	MARKER
		'C99'	=> 'Other compilation by', //Other type of compilation not specified above.	MARKER
		'D01'	=> 'Producer', //	MARKER
		'D02'	=> 'Director', //	MARKER
		'D03'	=> 'Conductor', //Conductor of a musical performance.	MARKER
		'D99'	=> 'Other direction by', //Other type of direction not specified above.	MARKER
		'E01'	=> 'Actor', //	MARKER
		'E02'	=> 'Dancer', //	MARKER
		'E03'	=> 'Narrator', //	MARKER
		'E04'	=> 'Commentator', //	MARKER
		'E05'	=> 'Vocal soloist', //Singer etc.	MARKER
		'E06'	=> 'Instrumental soloist', //	MARKER
		'E07'	=> 'Read by', //Reader of recorded text, as in an audiobook.	MARKER
		'E08'	=> 'Performed by (orchestra, band, ensemble)', //Name of a musical group in a performing role.	MARKER
		'E09'	=> 'Speaker', //Of a speech, lecture etc.	MARKER
		'E99'	=> 'Performed by', //Other type of performer not specified above: use for a recorded performance which does not fit a category above, eg a performance by a stand-up comedian.	MARKER
		'F01'	=> 'Filmed/photographed by', //	MARKER
		'F99'	=> 'Other recording by', //Other type of recording not specified above.	MARKER
		'Z01'	=> 'Assisted by', //May be associated with any contributor role, and placement should therefore be controlled by contributor sequence numbering.	MARKER
		'Z98'	=> '(Various roles)', //For use ONLY with ‘et al’ or ‘Various’ within <UnnamedPersons>, where the roles of the multiple contributors vary.	MARKER
		'Z99'	=> 'Other', //Other creative responsibility not falling within A to F above.	MARKER
	);

}
