<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Productform
{
	
	protected $_options = array(
		'00'	=>	'Undefined',
		'AA'	=>	'Audio', //Audio recording – detail unspecified.MARKER
		'AB'	=>	'Audio cassette', //Audio cassette (analogue).MARKER
		'AC'	=>	'CD-Audio', //Audio compact disc, in any recording format: use coding in Product Form Detail to specify the format, if required.MARKER
		'AD'	=>	'DAT', //Digital audio tape cassette.MARKER
		'AE'	=>	'Audio disc', //Audio disc (excluding CD).MARKER
		'AF'	=>	'Audio tape', //Audio tape (open reel tape).MARKER
		'AG'	=>	'MiniDisc', //Sony MiniDisc format.MARKER
		'AH'	=>	'CD-Extra', //Audio compact disc with part CD-ROM content.MARKER
		'AI'	=>	'DVD Audio', //MARKER
		'AJ'	=>	'Downloadable audio file', //Audio recording downloadable online.MARKER
		'AK'	=>	'Pre-recorded digital audio player', //For example, Playaway audiobook and player: use coding in Product Form Detail to specify the recording format, if required.MARKER
		'AL'	=>	'Pre-recorded SD card', //For example, Audiofy audiobook chip.MARKER
		'AZ'	=>	'Other audio format', //Other audio format not specified by AB to AL.MARKER
		'BA'	=>	'Book', //Book – detail unspecified.MARKER
		'BB'	=>	'Hardback', //Hardback or cased book.MARKER
		'BC'	=>	'Paperback / softback', //Paperback or other softback book.MARKER
		'BD'	=>	'Loose-leaf', //Loose-leaf book.MARKER
		'BE'	=>	'Spiral bound', //Spiral, comb or coil bound book.MARKER
		'BF'	=>	'Pamphlet', //Pamphlet or brochure, stapled; German ‘geheftet’.MARKER
		'BG'	=>	'Leather / fine binding', //MARKER
		'BH'	=>	'Board book', //Child’s book with all pages printed on board.MARKER
		'BI'	=>	'Rag book', //Child’s book with all pages printed on textile.MARKER
		'BJ'	=>	'Bath book', //Child’s book printed on waterproof material.MARKER
		'BK'	=>	'Novelty book', //A book whose novelty consists wholly or partly in a format which cannot be described by any other available code – a ‘conventional’ format code is always to be preferred; one or more Product Form Detail codes, eg from the B2nn group, should be used whenever possible to provide additional description.MARKER
		'BL'	=>	'Slide bound', //Slide bound book.MARKER
		'BM'	=>	'Big book', //Extra-large format for teaching etc; this format and terminology may be specifically UK; required as a top-level differentiator.MARKER
		'BN'	=>	'Part-work (fascículo)', //A part-work issued with its own ISBN and intended to be collected and bound into a complete book.MARKER
		'BO'	=>	'Fold-out book or chart', //Concertina-folded book or chart, designed to fold to pocket or regular page size: use for German ‘Leporello’.MARKER
		'BP'	=>	'Foam book', //A children’s book whose cover and pages are made of foam.MARKER
		'BZ'	=>	'Other book format', //Other book format or binding not specified by BB to BP.MARKER
		'CA'	=>	'Sheet map', //Sheet map – detail unspecified.MARKER
		'CB'	=>	'Sheet map, folded', //MARKER
		'CC'	=>	'Sheet map, flat', //MARKER
		'CD'	=>	'Sheet map, rolled', //See Code List 80 for ‘rolled in tube’.MARKER
		'CE'	=>	'Globe', //Globe or planisphere.MARKER
		'CZ'	=>	'Other cartographic', //Other cartographic format not specified by CB to CE.MARKER
		'DA'	=>	'Digital', //Digital or multimedia (detail unspecified).MARKER
		'DB'	=>	'CD-ROM', //MARKER
		'DC'	=>	'CD-I', //CD interactive.MARKER
		'DD'	=>	'DVD', //DEPRECATED – use VI for DVD video, AI for DVD audio, DI for DVD-ROM.MARKER
		'DE'	=>	'Game cartridge', //MARKER
		'DF'	=>	'Diskette', //AKA ‘floppy disc’.MARKER
		'DG'	=>	'Electronic book text', //Electronic book text in proprietary or open standard format.MARKER
		'DH'	=>	'Online resource', //An electronic database or other resource or service accessible through online networks.MARKER
		'DI'	=>	'DVD-ROM', //MARKER
		'DJ'	=>	'Secure Digital (SD) Memory Card', //MARKER
		'DK'	=>	'Compact Flash Memory Card', //MARKER
		'DL'	=>	'Memory Stick Memory Card', //MARKER
		'DM'	=>	'USB Flash Drive', //MARKER
		'DN'	=>	'Double-sided CD/DVD', //Double-sided disc, one side Audio CD/CD-ROM, other side DVD.MARKER
		'DZ'	=>	'Other digital', //Other digital or multimedia not specified by DB to DN.MARKER
		'FA'	=>	'Film or transparency', //Film or transparency – detail unspecified.MARKER
		'FB'	=>	'Film', //Continuous film or filmstrip: DEPRECATED – use FE or FF.MARKER
		'FC'	=>	'Slides', //Photographic transparencies mounted for projection.MARKER
		'FD'	=>	'OHP transparencies', //Transparencies for overhead projector.MARKER
		'FE'	=>	'Filmstrip', //MARKER
		'FF'	=>	'Film', //Continuous movie film as opposed to filmstrip.MARKER
		'FZ'	=>	'Other film or transparency format', //Other film or transparency format not specified by FB to FF.MARKER
		'MA'	=>	'Microform', //Microform – detail unspecified.MARKER
		'MB'	=>	'Microfiche', //MARKER
		'MC'	=>	'Microfilm', //Roll microfilm.MARKER
		'MZ'	=>	'Other microform', //Other microform not specified by MB or MC.MARKER
		'PA'	=>	'Miscellaneous print', //Miscellaneous printed material – detail unspecified.MARKER
		'PB'	=>	'Address book', //May use product form detail codes P201 to P204 to specify binding.MARKER
		'PC'	=>	'Calendar', //MARKER
		'PD'	=>	'Cards', //Cards, flash cards (eg for teaching reading).MARKER
		'PE'	=>	'Copymasters', //Copymasters, photocopiable sheets.MARKER
		'PF'	=>	'Diary', //May use product form detail codes P201 to P204 to specify binding.MARKER
		'PG'	=>	'Frieze', //Narrow strip-shaped printed sheet used mostly for education or children’s products (eg depicting alphabet, number line, procession of illustrated characters etc). Usually intended for horizontal display.MARKER
		'PH'	=>	'Kit', //Parts for post-purchase assembly.MARKER
		'PI'	=>	'Sheet music', //MARKER
		'PJ'	=>	'Postcard book or pack', //MARKER
		'PK'	=>	'Poster', //Poster for retail sale – see also XF.MARKER
		'PL'	=>	'Record book', //Record book (eg ‘birthday book’, ‘baby book’): may use product form detail codes P201 to P204 to specify binding.MARKER
		'PM'	=>	'Wallet or folder', //Wallet or folder (containing loose sheets etc): it is preferable to code the contents and treat ‘wallet’ as packaging (List 80), but if this is not possible the product as a whole may be coded as a ‘wallet’.MARKER
		'PN'	=>	'Pictures or photographs', //MARKER
		'PO'	=>	'Wallchart', //MARKER
		'PP'	=>	'Stickers', //MARKER
		'PQ'	=>	'Plate (lámina)', //A book-sized (as opposed to poster-sized) sheet, usually in colour or high quality print.MARKER
		'PR'	=>	'Notebook / blank book', //A book with all pages blank for the buyer’s own use: may use product form detail codes P201 to P204 to specify binding.MARKER
		'PS'	=>	'Organizer', //May use product form detail codes P201 to P204 to specify binding.MARKER
		'PT'	=>	'Bookmark', //MARKER
		'PZ'	=>	'Other printed item', //Other printed item not specified by PB to PT.MARKER
		'VA'	=>	'Video', //Video – detail unspecified.MARKER
		'VB'	=>	'Video, VHS, PAL', //DEPRECATED – use new VJ.MARKER
		'VC'	=>	'Video, VHS, NTSC', //DEPRECATED – use new VJ.MARKER
		'VD'	=>	'Video, Betamax, PAL', //DEPRECATED – use new VK.MARKER
		'VE'	=>	'Video, Betamax, NTSC', //DEPRECATED – use new VK.MARKER
		'VF'	=>	'Videodisc', //eg Laserdisc.MARKER
		'VG'	=>	'Video, VHS, SECAM', //DEPRECATED – use new VJ.MARKER
		'VH'	=>	'Video, Betamax, SECAM', //DEPRECATED – use new VK.MARKER
		'VI'	=>	'DVD video', //DVD video: specify TV standard in List 78.MARKER
		'VJ'	=>	'VHS video', //VHS videotape: specify TV standard in List 78.MARKER
		'VK'	=>	'Betamax video', //Betamax videotape: specify TV standard in List 78.MARKER
		'VL'	=>	'VCD', //VideoCD.MARKER
		'VM'	=>	'SVCD', //Super VideoCD.MARKER
		'VN'	=>	'HD DVD', //High definition DVD disc, Toshiba HD DVD format.MARKER
		'VO'	=>	'Blu-ray', //High definition DVD disc, Sony Blu-ray format.MARKER
		'VP'	=>	'UMD Video', //Sony Universal Media disc.MARKER
		'VZ'	=>	'Other video format', //Other video format not specified by VB to VP.MARKER
		'WW'	=>	'Mixed media product', //A product consisting of two or more items in different media or different product forms, eg book and CD-ROM, book and toy, hardback book and e-book, etc.MARKER
		'WX'	=>	'Multiple copy pack', //A product containing multiple copies of one or more items packaged together for retail sale, consisting of either (a) several copies of a single item (eg 6 copies of a graded reader), or (b) several copies of each of several items (eg 3 copies each of 3 different graded readers), or (c) several copies of one or more single items plus a single copy of one or more related items (eg 30 copies of a pupil’s textbook plus 1 of teacher’s text). NOT TO BE CONFUSED WITH: multi-volume sets, or sets containing a single copy of a number of different items (boxed, slip-cased or otherwise); items with several components of different physical forms (see WW); or packs intended for trade distribution only, where the contents are retailed separately (see XC, XE, XL).MARKER
		'XA'	=>	'Trade-only material', //Trade-only material (unspecified).MARKER
		'XB'	=>	'Dumpbin – empty', //MARKER
		'XC'	=>	'Dumpbin – filled', //Dumpbin with contents.MARKER
		'XD'	=>	'Counterpack – empty', //MARKER
		'XE'	=>	'Counterpack – filled', //Counterpack with contents.MARKER
		'XF'	=>	'Poster, promotional', //Promotional poster for display, not for sale – see also PK.MARKER
		'XG'	=>	'Shelf strip', //MARKER
		'XH'	=>	'Window piece', //Promotional piece for shop window display.MARKER
		'XI'	=>	'Streamer', //MARKER
		'XJ'	=>	'Spinner', //MARKER
		'XK'	=>	'Large book display', //Large scale facsimile of book for promotional display.MARKER
		'XL'	=>	'Shrink-wrapped pack', //A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually – see also WX. For products or product bundles supplied shrink-wrapped for retail sale, use the Product Form code of the contents plus code 21 from List 80.MARKER
		'XZ'	=>	'Other point of sale', //Other point of sale material not specified by XB to XL.MARKER
		'ZA'	=>	'General merchandise', //General merchandise – unspecified.MARKER
		'ZB'	=>	'Doll', //MARKER
		'ZC'	=>	'Soft toy', //Soft or plush toy.MARKER
		'ZD'	=>	'Toy', //MARKER
		'ZE'	=>	'Game', //Board game, or other game (except computer game: see DE).MARKER
		'ZF'	=>	'T-shirt', //MARKER
		'ZZ'	=>	'Other merchandise', //Other merchandise not specified by ZB to ZF.MARKER
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

