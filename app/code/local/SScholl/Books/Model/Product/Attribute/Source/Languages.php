<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Product_Attribute_Source_Languages
	 extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
	
	protected $_options = array(
		"aar"	=>	"Afar",
		"abk"	=>	"abchasisch",
		"ace"	=>	"Aceh",
		"ach"	=>	"Acholi",
		"ada"	=>	"Adangme",
		"ady"	=>	"adygeisch",
		"afa"	=>	"Bidiyo",
		"afa"	=>	"Dangla",
		"afa"	=>	"Gidar",
		"afa"	=>	"Glavda",
		"afa"	=>	"Kera",
		"afa"	=>	"Lele",
		"afa"	=>	"Mada",
		"afa"	=>	"Mafa",
		"afa"	=>	"Masana",
		"afa"	=>	"Migama",
		"afa"	=>	"Mokilko",
		"afa"	=>	"Mupun",
		"afa"	=>	"Musgu",
		"afa"	=>	"Nancere",
		"afa"	=>	"Pero",
		"afa"	=>	"Peve",
		"afa"	=>	"Tangale",
		"afa"	=>	"Tupuri",
		"afh"	=>	"Afrihili",
		"afr"	=>	"Afrikaans",
		"ain"	=>	"Ainu",
		"aka"	=>	"Akan",
		"akk"	=>	"akkadisch",
		"akk"	=>	"assyrisch",
		"akk"	=>	"babylonisch",
		"alb"	=>	"albanisch",
		"ale"	=>	"aleutisch",
		"alg"	=>	"Abnaki",
		"alg"	=>	"Algonkin",
		"alg"	=>	"Kickapoo",
		"alg"	=>	"Maliseet",
		"alg"	=>	"Massachusetts",
		"alg"	=>	"Passamaquoddy",
		"alt"	=>	"altaisch",
		"alt"	=>	"südaltaisch",
		"amh"	=>	"amharisch",
		"ang"	=>	"altenglisch",
		"anp"	=>	"Angika",
		"apa"	=>	"Apache",
		"ara"	=>	"arabisch",
		"arc"	=>	"aramaeisch",
		"arg"	=>	"aragonesisch",
		"arm"	=>	"armenisch",
		"arn"	=>	"Mapuche",
		"arp"	=>	"Arapaho",
		"art"	=>	"Alteutonik",
		"art"	=>	"INTAL",
		"arw"	=>	"arawakanisch",
		"asm"	=>	"assamesisch",
		"ast"	=>	"asturianisch",
		"ath"	=>	"Athna",
		"ath"	=>	"Deg Hit'an athabaskisch",
		"ath"	=>	"Koyukon",
		"ath"	=>	"Tutchone",
		"aus"	=>	"Andilyaugwa",
		"aus"	=>	"Australische Sprachen",
		"aus"	=>	"Ngaanyatjara",
		"aus"	=>	"Nunggubuyu",
		"aus"	=>	"Pitjantjatjara",
		"aus"	=>	"Wailpi",
		"aus"	=>	"Walbiri",
		"ava"	=>	"awarisch",
		"ave"	=>	"awestisch",
		"ave"	=>	"baktrisch",
		"awa"	=>	"Avadhi",
		"aym"	=>	"Aymara",
		"aze"	=>	"aserbaidschanisch",
		"bad"	=>	"Banda",
		"bai"	=>	"Bamileke",
		"bak"	=>	"baschkirisch",
		"bal"	=>	"belutschisch",
		"bam"	=>	"Bambara",
		"ban"	=>	"balinesisch",
		"baq"	=>	"baskisch",
		"bas"	=>	"Basaa",
		"bat"	=>	"altpreußisch",
		"bat"	=>	"kurisch",
		"bej"	=>	"Bedauye",
		"bel"	=>	"belorussisch",
		"bem"	=>	"Bemba",
		"ben"	=>	"Bengali",
		"ber"	=>	"berberisch",
		"ber"	=>	"rifberberisch",
		"ber"	=>	"Senhaja de Srair",
		"ber"	=>	"Shawiya",
		"ber"	=>	"Tamazight",
		"bho"	=>	"Bhojpuri",
		"bho"	=>	"Sadani",
		"bih"	=>	"Bihari",
		"bik"	=>	"Bicol",
		"bin"	=>	"Emai",
		"bin"	=>	"Kwasprachen",
		"bis"	=>	"Bislama",
		"bla"	=>	"Blackfoot",
		"bnt"	=>	"Asu",
		"bnt"	=>	"Bangala",
		"bnt"	=>	"Bena",
		"bnt"	=>	"Benga",
		"bnt"	=>	"Bisa",
		"bnt"	=>	"Bulu",
		"bnt"	=>	"Buma",
		"bnt"	=>	"Bungnu",
		"bnt"	=>	"Chaga",
		"bnt"	=>	"Chokwe",
		"bnt"	=>	"Dengese",
		"bnt"	=>	"Djagga",
		"bnt"	=>	"Giryama",
		"bnt"	=>	"Gogo",
		"bnt"	=>	"Gusii",
		"bnt"	=>	"Haya",
		"bnt"	=>	"Hehe",
		"bnt"	=>	"Hunde",
		"bnt"	=>	"Ila",
		"bnt"	=>	"Jita",
		"bnt"	=>	"Kagulu",
		"bnt"	=>	"Kanyoka",
		"bnt"	=>	"Kaonde",
		"bnt"	=>	"Kinika",
		"bnt"	=>	"Kpa",
		"bnt"	=>	"Kwangali",
		"bnt"	=>	"Lega",
		"bnt"	=>	"Logooli",
		"bnt"	=>	"Lomwe",
		"bnt"	=>	"Luchazi",
		"bnt"	=>	"Luena",
		"bnt"	=>	"Luhia",
		"bnt"	=>	"Lumbu",
		"bnt"	=>	"Luyana",
		"bnt"	=>	"Makua",
		"bnt"	=>	"Mambwe-Lungu",
		"bnt"	=>	"Manyo",
		"bnt"	=>	"Masaba",
		"bnt"	=>	"Mashi",
		"bnt"	=>	"Mbunda",
		"bnt"	=>	"Meru",
		"bnt"	=>	"Mungaka",
		"bnt"	=>	"Mwera",
		"bnt"	=>	"Myene",
		"bnt"	=>	"Nande",
		"bnt"	=>	"Ndau",
		"bnt"	=>	"Ngangwela",
		"bnt"	=>	"Ngazija",
		"bnt"	=>	"Ngumbi",
		"bnt"	=>	"Nsenga",
		"bnt"	=>	"Nyakyusa",
		"bnt"	=>	"Nyaneka",
		"bnt"	=>	"Nyika",
		"bnt"	=>	"Nyore",
		"bnt"	=>	"Nzwani",
		"bnt"	=>	"Pende",
		"bnt"	=>	"Pokomo",
		"bnt"	=>	"Punu",
		"bnt"	=>	"Ronga",
		"bnt"	=>	"Sakata",
		"bnt"	=>	"Sanga",
		"bnt"	=>	"Sangu",
		"bnt"	=>	"Shambaa",
		"bnt"	=>	"Soga",
		"bnt"	=>	"Songe",
		"bnt"	=>	"Songo",
		"bnt"	=>	"Taita",
		"bnt"	=>	"Teke",
		"bnt"	=>	"Tetela",
		"bnt"	=>	"Tsogo",
		"bnt"	=>	"Tswa",
		"bnt"	=>	"Tuki",
		"bnt"	=>	"Vute",
		"bnt"	=>	"Yaka",
		"bnt"	=>	"Yans",
		"bnt"	=>	"Yombe",
		"bnt"	=>	"Zaramo",
		"bos"	=>	"bosnisch",
		"bra"	=>	"Braj",
		"bre"	=>	"bretonisch",
		"btk"	=>	"Batak",
		"bua"	=>	"burjatisch",
		"bug"	=>	"buginesisch",
		"bul"	=>	"bulgarisch",
		"bur"	=>	"birmanisch",
		"byn"	=>	"Bilin",
		"cad"	=>	"caddoanisch",
		"cai"	=>	"Amuzgo",
		"cai"	=>	"Bribri",
		"cai"	=>	"Chatino",
		"cai"	=>	"Chinanteco",
		"cai"	=>	"Chontal",
		"cai"	=>	"Comanche",
		"cai"	=>	"Cuicateco",
		"cai"	=>	"Garifuna",
		"cai"	=>	"Guatuso",
		"cai"	=>	"Hopi",
		"cai"	=>	"Huave",
		"cai"	=>	"Huichol",
		"cai"	=>	"Jicaque",
		"cai"	=>	"mazatekisch",
		"cai"	=>	"Miskito",
		"cai"	=>	"Mixe",
		"cai"	=>	"mixtekisch",
		"cai"	=>	"Pima-Bajo",
		"cai"	=>	"Shoshoni",
		"cai"	=>	"Sierra-Popoluca",
		"cai"	=>	"taraskanisch",
		"cai"	=>	"Tepehua",
		"cai"	=>	"Tol",
		"cai"	=>	"totonakanisch",
		"cai"	=>	"Trique",
		"cai"	=>	"Zoque",
		"car "	=>	"Macusi",
		"cat"	=>	"katalanisch",
		"cat"	=>	"valenzianisch",
		"cau"	=>	"abasinisch",
		"cau"	=>	"aghulisch",
		"cau"	=>	"lakkisch",
		"cau"	=>	"lasisch",
		"cau"	=>	"mingrelisch",
		"cau"	=>	"swanisch",
		"cau"	=>	"tabassaranisch",
		"cau"	=>	"Tsakhur",
		"cau"	=>	"tscherkessisch",
		"cau"	=>	"udisch",
		"ceb"	=>	"Cebuano",
		"cel"	=>	"keltisch",
		"cha"	=>	"Chamorro",
		"chb"	=>	"chibchanisch",
		"che"	=>	"tschetschenisch",
		"chg"	=>	"tschagataisch",
		"chi"	=>	"chinesisch",
		"chk"	=>	"trukesisch",
		"chm"	=>	"Mari",
		"chn"	=>	"Wawa",
		"cho"	=>	"Choktaw",
		"chp"	=>	"Chipewyan",
		"chr"	=>	"irokesisch",
		"chu"	=>	"altslawisch",
		"chu"	=>	"kirchenslawisch",
		"chv"	=>	"tschuwaschisch",
		"chy"	=>	"Cheyenne",
		"cmc"	=>	"Cham",
		"cmc"	=>	"Rade",
		"cop"	=>	"koptisch",
		"cor"	=>	"kornisch",
		"cos"	=>	"korsisch",
		"cpe"	=>	"englische Kreolsprachen",
		"cpe"	=>	"Pidgin",
		"cpe"	=>	"saramakkisch",
		"cpf"	=>	"franzoesische Kreolsprachen",
		"cpf"	=>	"Michif",
		"cpp"	=>	"portugisische Kreolsprachen",
		"cre"	=>	"Cree",
		"crh"	=>	"krimtatarisch",
		"crp"	=>	"arabische Kreolsprachen",
		"crp"	=>	"kreolisch",
		"crp"	=>	"nagamesisch",
		"crp"	=>	"niederlaendische Kreolsprachen",
		"crp"	=>	"spanische Kreolsprachen",
		"csb"	=>	"kaschubisch",
		"cus"	=>	"Baiso",
		"cus"	=>	"Boni",
		"cus"	=>	"Burji",
		"cus"	=>	"Gedeo",
		"cus"	=>	"Hadiyya",
		"cus"	=>	"Iraku",
		"cus"	=>	"Kambata",
		"cus"	=>	"kuschitisch",
		"cze"	=>	"tschechisch",
		"dak"	=>	"Sioux",
		"dan"	=>	"daenisch",
		"dar"	=>	"darginisch",
		"day"	=>	"Dayak",
		"del"	=>	"Delaware",
		"den"	=>	"Slave-Sprache",
		"dgr"	=>	"Dogrib",
		"din"	=>	"Jieng",
		"div"	=>	"maledivisch",
		"doi"	=>	"Dogri",
		"doi"	=>	"Kangri",
		"dra"	=>	"Brahui",
		"dra"	=>	"Kodagu",
		"dra"	=>	"Kolami",
		"dra"	=>	"Konda",
		"dra"	=>	"Koya",
		"dra"	=>	"Kui",
		"dra"	=>	"Kuvi",
		"dra"	=>	"Tulu",
		"dsb"	=>	"niedersorbisch",
		"dua"	=>	"Duala",
		"dum"	=>	"mittelniederlaendisch",
		"dut"	=>	"niederlaendisch",
		"dyu"	=>	"Dyula",
		"dzo"	=>	"Dzongkha",
		"efi"	=>	"Efik",
		"egy"	=>	"aegyptisch",
		"egy"	=>	"demotisch",
		"egy"	=>	"hieratisch",
		"egy"	=>	"hieroglyphisch",
		"eka"	=>	"Ekajuk",
		"elx"	=>	"elamisch",
		"eng"	=>	"englisch",
		"enm"	=>	"mittelenglisch",
		"epo"	=>	"Esperanto",
		"est"	=>	"estnisch",
		"ewe"	=>	"Ewe",
		"ewo"	=>	"Jaunde",
		"fan"	=>	"Fang",
		"fao"	=>	"faeroeisch",
		"fat"	=>	"Fante",
		"fij"	=>	"fidschianisch",
		"fil"	=>	"Pilipino",
		"fin"	=>	"finnisch",
		"fiu"	=>	"chantisch",
		"fiu"	=>	"livisch",
		"fiu"	=>	"mansisch",
		"fiu"	=>	"mordwinisch",
		"fiu"	=>	"wepsisch",
		"fon"	=>	"Fon-Gbe",
		"fre"	=>	"franzoesisch",
		"frm"	=>	"mittelfranzoesisch",
		"fro"	=>	"altfranzösisch",
		"frr"	=>	"nordfriesisch",
		"frs"	=>	"ostfriesisch",
		"fry"	=>	"friesisch",
		"ful"	=>	"Ful",
		"ful"	=>	"Pulaar",
		"fur"	=>	"friaulisch",
		"gaa"	=>	"Ga",
		"gay"	=>	"Gayo",
		"gba"	=>	"Gbaya",
		"gba"	=>	"Nordwest-Gbaya",
		"gem"	=>	"niedersaechsisch",
		"gem"	=>	"preußisch",
		"gem"	=>	"zimbrisch",
		"geo"	=>	"georgisch",
		"ger"	=>	"deutsch",
		"gez"	=>	"aethiopisch",
		"gil"	=>	"gilbertesisch",
		"gla"	=>	"schottisch-gälisch",
		"gle"	=>	"irisch",
		"glg"	=>	"galicisch",
		"glg"	=>	"galicisch-portugiesisch",
		"glv"	=>	"Manx",
		"gmh"	=>	"mittelhochdeutsch",
		"goh"	=>	"althochdeutsch (ca. 750 – 1050)",
		"goh"	=>	"deutsch (althoch-deutsch) (750 – 1050)",
		"gon"	=>	"Gondi",
		"gor"	=>	"gorontalesisch",
		"got"	=>	"gotisch",
		"grb"	=>	"Grebo",
		"grb"	=>	"Jabo-Grebo",
		"grc"	=>	"altgriechisch (bis 1453)",
		"gre"	=>	"neugriechisch (ab 1453-)",
		"grn"	=>	"Guarani",
		"gsw"	=>	"hochalemannisch",
		"guj"	=>	"Gujarati",
		"gwi"	=>	"Kutchin",
		"gwi"	=>	"Tukkuthkutchin",
		"hai"	=>	"Haida",
		"hat"	=>	"haitianisch",
		"hau"	=>	"Hausa",
		"haw"	=>	"hawaiisch",
		"heb"	=>	"hebraeisch",
		"her"	=>	"Dhimba",
		"her"	=>	"Herero",
		"hil"	=>	"Hiligaynon",
		"him"	=>	"Gadi",
		"him"	=>	"Himachali",
		"him"	=>	"Pahari",
		"hin"	=>	"Hindi",
		"hit"	=>	"hethitisch",
		"hit"	=>	"hieroglyphenluwisch",
		"hmn"	=>	"Miao",
		"hmn"	=>	"Pei-Miao",
		"hmo"	=>	"Hiri-Motu",
		"hmo"	=>	"Police Motu",
		"hrv"	=>	"kroatisch",
		"hsb"	=>	"obersorbisch",
		"hun"	=>	"ungarisch",
		"hup"	=>	"Hupa",
		"iba"	=>	"Iban",
		"ibo"	=>	"Ibo",
		"ibo"	=>	"Igbo",
		"ice"	=>	"islaendisch",
		"ido"	=>	"Ido",
		"ido"	=>	"Sinohoan",
		"iiii"	=>	"Sichuan-Y",
		"ijo"	=>	"Ijo",
		"iku"	=>	"Inuktitut",
		"ile"	=>	"Interlingue",
		"ilo"	=>	"Iloko",
		"ina"	=>	"Interlingua (International Auxiliary Language Association)",
		"inc"	=>	"Apabhramsa",
		"inc"	=>	"Badaga",
		"inc"	=>	"Bagheli",
		"inc"	=>	"Bajjika",
		"inc"	=>	"Bangaru",
		"inc"	=>	"Bundeli",
		"inc"	=>	"Chakma",
		"inc"	=>	"Chattisgarhi",
		"inc"	=>	"Dungari",
		"inc"	=>	"Garhwali",
		"inc"	=>	"Halbi",
		"inc"	=>	"Khandeshi",
		"inc"	=>	"Khowar",
		"inc"	=>	"Kumauni",
		"inc"	=>	"Kurmali",
		"inc"	=>	"Maiya",
		"inc"	=>	"Sumu",
		"inc"	=>	"Wagdi",
		"ind"	=>	"indonesisch",
		"ine"	=>	"Darai",
		"ine"	=>	"lykisch",
		"ine"	=>	"milyisch",
		"ine"	=>	"venetisch",
		"inh"	=>	"inguschisch",
		"ipk"	=>	"Inupiaq",
		"ipk"	=>	"Malimiut",
		"ira"	=>	"chaladschisch",
		"ira"	=>	"Logari",
		"ira"	=>	"parthisch",
		"ira"	=>	"Sangisari",
		"ira"	=>	"talyschisch",
		"ira"	=>	"Tat",
		"ira"	=>	"Vafsi",
		"ira"	=>	"Wachi",
		"iro"	=>	"Cayuga",
		"iro"	=>	"Oneida",
		"iro"	=>	"Onondaga",
		"iro"	=>	"Tuscarora",
		"iro"	=>	"Wyandot",
		"ita"	=>	"italienisch",
		"jav"	=>	"javanisch",
		"jbo"	=>	"Lojban",
		"jpn"	=>	"japanisch",
		"jpr"	=>	"judenpersisch",
		"jrb"	=>	"judenarabisch",
		"kaa"	=>	"karakalpakisch",
		"kab"	=>	"kabylisch",
		"kac"	=>	"Kachin",
		"kal"	=>	"Kalatdlisut",
		"kam"	=>	"Kamba",
		"kan"	=>	"kanaresisch",
		"kar"	=>	"Karen",
		"kas"	=>	"Kaschmiri",
		"kau"	=>	"Kanuri",
		"kaw"	=>	"Kawi",
		"kaz"	=>	"kasachisch",
		"kbd"	=>	"kabardinisch",
		"kha"	=>	"Khasi",
		"khi"	=>	"Akhoe",
		"khi"	=>	"Ju'hoan",
		"khi"	=>	"Khoisan",
		"khi"	=>	"Kung",
		"khi"	=>	"Kxoe",
		"khi"	=>	"Nama",
		"khm"	=>	"Khmer",
		"kho"	=>	"sakisch",
		"kik"	=>	"Kikuyu",
		"kin"	=>	"Kinyaruanda",
		"kin"	=>	"Rwanda",
		"kir"	=>	"kirgisisch",
		"kmb"	=>	"Mbundu",
		"kok"	=>	"Konkani",
		"kom"	=>	"Komi",
		"kon"	=>	"Kongo",
		"kon"	=>	"Laari",
		"kor"	=>	"Bassa",
		"kor"	=>	"koreanisch",
		"kos"	=>	"kosraeanisch",
		"kpe"	=>	"Kpelle",
		"krc"	=>	"karatschaisch",
		"krl"	=>	"karelisch",
		"kro"	=>	"Kwaa",
		"kro"	=>	"Sapo",
		"kro"	=>	"Tepo",
		"kru"	=>	"Kurukh",
		"kua"	=>	"Kwanyama",
		"kua"	=>	"Ovambo",
		"kum"	=>	"kumükisch",
		"kur"	=>	"kurdisch",
		"kut"	=>	"Kutenai",
		"lad"	=>	"judenspanisch",
		"lah"	=>	"Lahnda",
		"lam"	=>	"Lamba",
		"lao"	=>	"laotisch",
		"lat"	=>	"lateinisch",
		"lav"	=>	"lettisch",
		"lez"	=>	"Lesginisch",
		"lez"	=>	"rutulisch",
		"lim"	=>	"limburgisch",
		"lin"	=>	"Lingala",
		"lit"	=>	"litauisch",
		"lol"	=>	"Mongo",
		"loz"	=>	"Lozi",
		"ltz"	=>	"luxemburgisch",
		"lua"	=>	"Luba-Lulua",
		"lub"	=>	"Luba",
		"lug"	=>	"Ganda",
		"lui"	=>	"Luiseno",
		"lun"	=>	"Lunda",
		"luo"	=>	"Luo",
		"lus"	=>	"Mizo",
		"mac"	=>	"mazedonisch",
		"mad"	=>	"Madurese",
		"mag"	=>	"Magahi",
		"mah"	=>	"marschallesisch",
		"mai"	=>	"Maithili",
		"mak"	=>	"makassarisch",
		"mal"	=>	"Malayalam",
		"mal"	=>	"Manipravala",
		"man"	=>	"Malinke",
		"man"	=>	"Mandinka",
		"mao"	=>	"Maori",
		"map"	=>	"Adzera",
		"map"	=>	"Ajie",
		"map"	=>	"Aneityumesisch",
		"map"	=>	"Apma",
		"map"	=>	"Atchin",
		"map"	=>	"Aulua",
		"map"	=>	"bellonesisch",
		"map"	=>	"Bwaidoga",
		"map"	=>	"Camuhi",
		"map"	=>	"Dobuanisch",
		"map"	=>	"Enggano",
		"map"	=>	"Gari",
		"map"	=>	"Gedaged",
		"map"	=>	"Kenyah",
		"map"	=>	"Lombaha",
		"map"	=>	"Lonwolwol",
		"map"	=>	"Manggarai",
		"map"	=>	"Muyuw",
		"map"	=>	"Nengone",
		"map"	=>	"Nord-Tanna",
		"map"	=>	"Nukuoro",
		"map"	=>	"Panayati",
		"map"	=>	"Penan",
		"map"	=>	"Santo",
		"map"	=>	"Suau",
		"map"	=>	"woleaianisch",
		"map"	=>	"Yabem",
		"mar"	=>	"Marathi",
		"mas"	=>	"Maasai",
		"may"	=>	"malaiisch",
		"mdf"	=>	"mokschamordwinisch",
		"mdr"	=>	"mandaresisch",
		"men"	=>	"Mende",
		"mga"	=>	"irisch (mittelirisch) (900 – 1200)",
		"mga"	=>	"mittelirisch (900 – 1200)",
		"mic"	=>	"micmac",
		"min"	=>	"Minangkabau",
		"mis"	=>	"Buruschaski",
		"mis"	=>	"Car Nikobar.",
		"mis"	=>	"etruskisch",
		"mis"	=>	"hurritisch",
		"mis"	=>	"jukagirisch",
		"mis"	=>	"ketisch",
		"mis"	=>	"korjakisch",
		"mis"	=>	"nenzisch",
		"mis"	=>	"niwchisch",
		"mis"	=>	"Onge",
		"mis"	=>	"samojedisch",
		"mis"	=>	"tschuktschisch",
		"mis"	=>	"Warao",
		"mkh"	=>	"Bahnar",
		"mkh"	=>	"Chrau",
		"mkh"	=>	"Koho",
		"mkh"	=>	"Sapuon",
		"mkh"	=>	"Sedang",
		"mlg"	=>	"malagasy",
		"mlt"	=>	"maltesisch",
		"mnc"	=>	"mandschurisch",
		"mni"	=>	"Meithei",
		"mno"	=>	"Manobo",
		"moh"	=>	"Mohawk",
		"mon"	=>	"mongolisch",
		"mos"	=>	"More",
		"mul"	=>	"polyglott",
		"mun"	=>	"Bathudi",
		"mun"	=>	"Gadaba",
		"mun"	=>	"Ho",
		"mun"	=>	"Irula",
		"mun"	=>	"Juang",
		"mun"	=>	"Kharia",
		"mun"	=>	"Mundari",
		"mun"	=>	"Parengi",
		"mun"	=>	"Remo",
		"mun"	=>	"Saora",
		"mus"	=>	"muskogisch",
		"mwl"	=>	"mirandesisch",
		"mwr"	=>	"Bikaneri",
		"mwr"	=>	"Dingal",
		"mwr"	=>	"Marwari",
		"mwr"	=>	"Mewari",
		"myn"	=>	"Cakchiquel",
		"myn"	=>	"Chol",
		"myn"	=>	"Chuj",
		"myn"	=>	"Itza",
		"myn"	=>	"jakaltekisch",
		"myn"	=>	"Kanjobal",
		"myn"	=>	"Kekchi",
		"myn"	=>	"Mam",
		"myn"	=>	"Pokonchi",
		"myn"	=>	"Quiche",
		"myn"	=>	"Tzeltal",
		"myn"	=>	"Tzotzil",
		"myn"	=>	"yukatekisch",
		"myv"	=>	"erza-mordwinisch",
		"nah"	=>	"Nahuatl",
		"nai"	=>	"Chickasaw",
		"nai"	=>	"Nez perce",
		"nai"	=>	"Nisenan",
		"nai"	=>	"Piro",
		"nai"	=>	"Serrano",
		"nai"	=>	"Wichita",
		"nai"	=>	"Wintu",
		"nap"	=>	"neopolitanisch",
		"nau"	=>	"nauruisch",
		"nav"	=>	"Navajo",
		"nbl"	=>	"Ndebele (Süd-Ndebele)",
		"nbl"	=>	"Süd-Ndebele",
		"nde"	=>	"Ndebele (Nord-Ndebele)",
		"nde"	=>	"Nord-Ndebele",
		"ndo"	=>	"Kwambi",
		"ndo"	=>	"Ndonga",
		"nds"	=>	"deutsch (niederdeutsch)",
		"nds"	=>	"niederdeutsch",
		"nep"	=>	"Nepali",
		"new"	=>	"Newari",
		"nia"	=>	"Niassisch",
		"nic"	=>	"Abe",
		"nic"	=>	"Akye",
		"nic"	=>	"Alladian",
		"nic"	=>	"Anyi",
		"nic"	=>	"Baatonum",
		"nic"	=>	"Bamum",
		"nic"	=>	"Bandi",
		"nic"	=>	"Barambu",
		"nic"	=>	"Baule",
		"nic"	=>	"Benue-Kongo",
		"nic"	=>	"Bidyogo",
		"nic"	=>	"Boboda",
		"nic"	=>	"Buli",
		"nic"	=>	"Busa",
		"nic"	=>	"Bwamu",
		"nic"	=>	"Dagari",
		"nic"	=>	"Dagbane",
		"nic"	=>	"Dan",
		"nic"	=>	"Diola",
		"nic"	=>	"Dogon",
		"nic"	=>	"Egon",
		"nic"	=>	"Engenni",
		"nic"	=>	"Gade",
		"nic"	=>	"Gen-Gbe",
		"nic"	=>	"Gourma",
		"nic"	=>	"Guang",
		"nic"	=>	"Guro",
		"nic"	=>	"Idoma",
		"nic"	=>	"Igala",
		"nic"	=>	"Isoko",
		"nic"	=>	"Jukun",
		"nic"	=>	"Kissi",
		"nic"	=>	"Koranko",
		"nic"	=>	"Koromfe",
		"nic"	=>	"Krongo",
		"nic"	=>	"Kulango",
		"nic"	=>	"Limba",
		"nic"	=>	"Loma",
		"nic"	=>	"Mbili",
		"nic"	=>	"Metyibo",
		"nic"	=>	"Minianka",
		"nic"	=>	"Moba",
		"nic"	=>	"Mundang",
		"nic"	=>	"Nankan",
		"nic"	=>	"Nawdm",
		"nic"	=>	"Ngbaka-Ma'bo",
		"nic"	=>	"Ngbandi",
		"nic"	=>	"Nupe",
		"nic"	=>	"Nura",
		"nic"	=>	"Ogoni",
		"nic"	=>	"Rubasa",
		"nic"	=>	"Senufo",
		"nic"	=>	"Sherbro",
		"nic"	=>	"Tikar",
		"nic"	=>	"Tura",
		"nic"	=>	"Urhobo",
		"nic"	=>	"westatlantisch",
		"nic"	=>	"Yakoma",
		"nic"	=>	"Yala",
		"niu"	=>	"niueanisch",
		"nno"	=>	"Nynorsk",
		"nob"	=>	"Bokmal",
		"nog"	=>	"nogaisch",
		"non"	=>	"altnordisch",
		"non"	=>	"nordgermanisch",
		"nor"	=>	"norwegisch",
		"nqo"	=>	"N’Ko",
		"nso"	=>	"Pedi",
		"nub"	=>	"nubisch",
		"nwc"	=>	"Alt-Newari",
		"nwc"	=>	"Newari (Alt-Newari)",
		"nya"	=>	"Nyanja",
		"nym"	=>	"Nyamwezi",
		"nyn"	=>	"Nkole",
		"nyo"	=>	"Nyoro",
		"nzi"	=>	"Nzema",
		"oci"	=>	"gaskognisch",
		"oci"	=>	"neuokzitanisch",
		"oci"	=>	"provenzalisch",
		"oji"	=>	"Ojibwe",
		"ori"	=>	"Adivasi-Oriya",
		"ori"	=>	"Kupia",
		"ori"	=>	"Oriya",
		"orm"	=>	"Borana",
		"orm"	=>	"Oromo",
		"osa"	=>	"Osage",
		"oss"	=>	"ossetisch",
		"ota"	=>	"Osmanisch-türkisch (1500 – 1928)",
		"ota"	=>	"türkisch-osmanisch (1500 – 1928)",
		"oto"	=>	"Mazahua",
		"oto"	=>	"Otomi",
		"oto"	=>	"Popoloca",
		"oto"	=>	"Yuhú",
		"paa"	=>	"Bori",
		"paa"	=>	"Eipo",
		"paa"	=>	"Foi",
		"paa"	=>	"Gorokansprachen",
		"paa"	=>	"Guhu-Samane",
		"paa"	=>	"Huli",
		"paa"	=>	"Kapauku",
		"paa"	=>	"Kate",
		"paa"	=>	"Kewa",
		"paa"	=>	"Medlpa",
		"paa"	=>	"Papua-Sprache",
		"paa"	=>	"Pintubi",
		"paa"	=>	"Rao",
		"paa"	=>	"Sinasina",
		"paa"	=>	"Tauya",
		"paa"	=>	"Telefol",
		"paa"	=>	"Toaripi",
		"paa"	=>	"Wantoat",
		"paa"	=>	"West-Mendi",
		"paa"	=>	"Woisika",
		"paa"	=>	"Yareba",
		"paa"	=>	"Yimas-Sprache",
		"pag"	=>	"Pangasinan",
		"pal"	=>	"Pehlevi",
		"pam"	=>	"Pampangan",
		"pan"	=>	"Panjabi",
		"pap"	=>	"Papiamentu",
		"pau"	=>	"Palauanisch",
		"peo"	=>	"altpersisch (ca. 600 – 400 v. Chr.)",
		"peo"	=>	"persisch (alt-) (ca. 600 – 400 v.Chr.)",
		"per"	=>	"Dari",
		"per"	=>	"persisch",
		"phi"	=>	"Kuyonon",
		"phi"	=>	"Palawan",
		"phi"	=>	"Tiruray",
		"phi"	=>	"Yakan",
		"phn"	=>	"phoenizisch",
		"pli"	=>	"Pali",
		"pol"	=>	"polnisch",
		"pon"	=>	"ponapeanisch",
		"por"	=>	"portugiesisch",
		"pra"	=>	"Ardhamagadhi",
		"pra"	=>	"Magadhi",
		"pra"	=>	"Maharashtri",
		"pra"	=>	"Prakrit",
		"pra"	=>	"Sauraseni",
		"pro"	=>	"altokzitanisch",
		"pro"	=>	"altprovenzalisch",
		"pro"	=>	"frankoprovenzalisch",
		"pus"	=>	"Paschto",
		"qaa"	=>	"Falasha",
		"qac"	=>	"lothringisch (dt.)",
		"qad"	=>	"Nkengo",
		"qae"	=>	"lothringisch (franz.)",
		"qra"	=>	"Eskimo",
		"qrb"	=>	"kyrillisch",
		"qrc"	=>	"rätoromanisch",
		"qrd"	=>	"gaelisch",
		"qrf"	=>	"tschadisch",
		"que"	=>	"Quechua",
		"raj"	=>	"Bagri",
		"raj"	=>	"Banjari",
		"raj"	=>	"Dhundari",
		"raj"	=>	"Gujari",
		"raj"	=>	"Harauti",
		"raj"	=>	"Malvi",
		"raj"	=>	"Mewati",
		"raj"	=>	"Nimadi",
		"raj"	=>	"Rajasthani",
		"rap"	=>	"rapanuianisch",
		"rar"	=>	"Rarotonga",
		"rmap"	=>	"Sangi",
		"roa"	=>	"Aljamiado",
		"roa"	=>	"anglonormannisch",
		"roa"	=>	"dalmatisch",
		"roa"	=>	"frankoitalienisch",
		"roa"	=>	"italisch",
		"roa"	=>	"ligurisch",
		"roa"	=>	"lombardisch",
		"roa"	=>	"meglenorumaenisch",
		"roa"	=>	"mozarabisch",
		"roa"	=>	"normannisch",
		"roa"	=>	"piemontesisch",
		"roa"	=>	"romagnolisch",
		"roh"	=>	"bündnerromanisch",
		"roh"	=>	"engadinisch",
		"roh"	=>	"ladinisch",
		"rom"	=>	"Romani",
		"rum"	=>	"moldauisch",
		"rum"	=>	"moldawisch",
		"rum"	=>	"rumaenisch",
		"run"	=>	"Rundi",
		"rup"	=>	"aromunisch",
		"rus"	=>	"russisch",
		"sad"	=>	"Sandawe",
		"sag"	=>	"Sango",
		"sah"	=>	"dolganisch",
		"sah"	=>	"jakutisch",
		"sai"	=>	"Angaite",
		"sai"	=>	"Ashluslay",
		"sai"	=>	"Callawaya",
		"sai"	=>	"Camsá",
		"sai"	=>	"Jarawara",
		"sai"	=>	"jivaroanisch",
		"sai"	=>	"Kuna",
		"sai"	=>	"Lengua",
		"sai"	=>	"Páez",
		"sai"	=>	"Patamona",
		"sai"	=>	"Piaroa",
		"sai"	=>	"Timuka",
		"sai"	=>	"Toba",
		"sai"	=>	"Tunebo",
		"sai	 =>	Yaghan",
		"sal"	=>	"Bilkula",
		"sal"	=>	"Lilloet",
		"sal"	=>	"Salish",
		"sam"	=>	"samaritanisch",
		"san"	=>	"Sanskrit",
		"san"	=>	"vedisch",
		"sas"	=>	"Sasak",
		"sat"	=>	"Santali",
		"scn"	=>	"sizilianisch",
		"sco"	=>	"schottisch",
		"sel"	=>	"selkupisch",
		"sem"	=>	"altsüdarabisch",
		"sem"	=>	"Chaha",
		"sem"	=>	"eblaitisch",
		"sem"	=>	"Soqotri",
		"sga"	=>	"altirisch (bis 900)",
		"sga"	=>	"irisch (altirisch) (bis 900)",
		"sgn"	=>	"Gebärdensprache",
		"shn"	=>	"Schan",
		"si"	=>	"Tangkhul",
		"sid"	=>	"Sidamo",
		"sin"	=>	"singhalesisch",
		"sio"	=>	"Hidatsa",
		"sio"	=>	"Lakota",
		"sio"	=>	"Teton",
		"sit"	=>	"Adi",
		"sit"	=>	"Aka",
		"sit"	=>	"Anal",
		"sit"	=>	"Angami",
		"sit"	=>	"Ao",
		"sit"	=>	"Apatani",
		"sit"	=>	"Arleng",
		"sit"	=>	"Biate",
		"sit"	=>	"Bokar",
		"sit"	=>	"Bom",
		"sit"	=>	"Boro",
		"sit"	=>	"Brokeh",
		"sit"	=>	"Brokskat",
		"sit"	=>	"bugunisch",
		"sit"	=>	"Cangluo Monpa",
		"sit"	=>	"Chakhesang",
		"sit"	=>	"Chang",
		"sit"	=>	"Deor",
		"sit"	=>	"Dhimal",
		"sit"	=>	"Dimasa",
		"sit"	=>	"Dumi",
		"sit"	=>	"dunganisch",
		"sit"	=>	"Gallong",
		"sit"	=>	"Gangte",
		"sit"	=>	"Garo",
		"sit"	=>	"Gurung",
		"sit"	=>	"Hmar",
		"sit"	=>	"Hrangkhol",
		"sit"	=>	"Jugli",
		"sit"	=>	"Kabui",
		"sit"	=>	"Kanauri",
		"sit"	=>	"Karbi",
		"sit"	=>	"Kezhama",
		"sit"	=>	"Khaling",
		"sit"	=>	"Khamti",
		"sit"	=>	"Kheimnungan",
		"sit"	=>	"Kokborok",
		"sit"	=>	"Kom",
		"sit"	=>	"Konyak",
		"sit"	=>	"Kuki",
		"sit"	=>	"Kulung",
		"sit"	=>	"Lahu",
		"sit"	=>	"Lalung",
		"sit"	=>	"Lepcha",
		"sit"	=>	"Lhota",
		"sit"	=>	"Liangmai",
		"sit"	=>	"Limbu",
		"sit"	=>	"Lisu",
		"sit"	=>	"Lolo",
		"sit"	=>	"Lotha",
		"sit"	=>	"Lungchang",
		"sit"	=>	"Magar",
		"sit"	=>	"Manang",
		"sit"	=>	"Mao",
		"sit"	=>	"Mara",
		"sit"	=>	"Maram",
		"sit"	=>	"Maring",
		"sit"	=>	"Midu",
		"sit"	=>	"Miji",
		"sit"	=>	"Mikir",
		"sit"	=>	"Milang",
		"sit"	=>	"Mishing",
		"sit"	=>	"Mishmi",
		"sit"	=>	"Moklum",
		"sit"	=>	"Nakhi",
		"sit"	=>	"Nishi",
		"sit"	=>	"Nissi",
		"sit"	=>	"Nocte",
		"sit"	=>	"Padam",
		"sit"	=>	"Paite",
		"sit"	=>	"Phom",
		"sit"	=>	"Pochuri",
		"sit"	=>	"Rabha",
		"sit"	=>	"Rawang",
		"sit"	=>	"Reang",
		"sit"	=>	"Rengma",
		"sit"	=>	"Rongmei",
		"sit"	=>	"Sangtam",
		"sit"	=>	"Sema",
		"sit"	=>	"Sherdukpen",
		"sit"	=>	"Tamang",
		"sit"	=>	"tTangsa",
		"sit"	=>	"tangutisch",
		"sit"	=>	"Taraon",
		"sit"	=>	"Thado",
		"sit"	=>	"Vaiphei",
		"sit"	=>	"Wancho",
		"sit"	=>	"Yimchungur",
		"sit"	=>	"Zan-Zun",
		"sit"	=>	"Zeme",
		"sit"	=>	"Zomi",
		"sit "	=>	"Simte",
		"sla"	=>	"polabisch",
		"sla"	=>	"pomoranisch",
		"slo"	=>	"slowakisch",
		"slv"	=>	"slowenisch",
		"sma"	=>	"samisch (südsamisch)",
		"sma"	=>	"südsamisch",
		"sme"	=>	"nordsamisch",
		"sme"	=>	"samisch (nordsamisch)",
		"smi"	=>	"lappisch",
		"smj"	=>	"lule-Samisch",
		"smj"	=>	"samisch (Lule-Samisch)",
		"smn"	=>	"Inari-Samisch",
		"smn"	=>	"samisch (Inari-Samisch)",
		"smo"	=>	"samoanisch",
		"sms"	=>	"samisch (Skolt-Samisch)",
		"sms"	=>	"Skolt-Samisch",
		"sna"	=>	"Shona",
		"snd"	=>	"Sindhi",
		"snk"	=>	"Soninke",
		"so"	=>	"Tsongat",
		"sog"	=>	"sogdisch",
		"som"	=>	"Somali",
		"son"	=>	"Dyerma",
		"son"	=>	"Songhai",
		"sot"	=>	"Sotho",
		"spa"	=>	"spanisch",
		"srd"	=>	"sardisch",
		"srn"	=>	"Sranan",
		"srp"	=>	"serbisch",
		"srp"	=>	"serbokroatisch",
		"srr"	=>	"Serer",
		"ssa"	=>	"Alur",
		"ssa"	=>	"Anuak",
		"ssa"	=>	"Bari",
		"ssa"	=>	"Colo",
		"ssa"	=>	"Endo",
		"ssa"	=>	"Gambai",
		"ssa"	=>	"Karamojong",
		"ssa"	=>	"Karanga",
		"ssa"	=>	"Kelenjin",
		"ssa"	=>	"Kunama",
		"ssa"	=>	"Lango",
		"ssa"	=>	"Lendu",
		"ssa"	=>	"Lotuko",
		"ssa"	=>	"Lugbara",
		"ssa"	=>	"Maba-Gruppe-Sprachen",
		"ssa"	=>	"Madi",
		"ssa"	=>	"Mamvu",
		"ssa"	=>	"Mangbetu",
		"ssa"	=>	"Masalit",
		"ssa"	=>	"Mbay",
		"ssa"	=>	"Modo",
		"ssa"	=>	"Moru",
		"ssa"	=>	"Nuer",
		"ssa"	=>	"Pokot",
		"ssa"	=>	"Sar",
		"ssa"	=>	"Schilluk",
		"ssa"	=>	"Teso",
		"ssa"	=>	"Turkana",
		"ssa"	=>	"Zaghawa",
		"ssa"	=>	"Zarma",
		"ssw"	=>	"Swazi",
		"suk"	=>	"Sukuma",
		"sun"	=>	"Anywa",
		"sun"	=>	"sundanesisch",
		"sus"	=>	"Susu",
		"sux"	=>	"sumerisch",
		"swa"	=>	"Swahili",
		"swa"	=>	"Swahili/Komoren",
		"swe"	=>	"schwedisch",
		"syc"	=>	"altsyrisch (syrisch, klassisch)",
		"syc"	=>	"syrisch, klassisch",
		"syr"	=>	"neusyrisch (syrisch, modern)",
		"syr"	=>	"syrisch, modern",
		"tah"	=>	"tahitisch",
		"tai"	=>	"Ahom",
		"tai"	=>	"Kam-Tai",
		"tai"	=>	"Tai-Kadai",
		"tam"	=>	"Tamil",
		"tat"	=>	"tatarisch",
		"tel"	=>	"Telugu",
		"tem"	=>	"Temne",
		"ter"	=>	"Terena",
		"tet"	=>	"Tetun",
		"tgk"	=>	"tadschikisch",
		"tgl"	=>	"Tagalog",
		"tha"	=>	"Thai",
		"tib"	=>	"Kham",
		"tib"	=>	"Memba",
		"tib"	=>	"Sherpa",
		"tib"	=>	"tibetisch",
		"tig"	=>	"Tigre",
		"tir"	=>	"Tigrinya",
		"tiv"	=>	"Tiv",
		"tkl"	=>	"Tokelau",
		"tlh"	=>	"Klingon",
		"tli"	=>	"Tlingit",
		"tmh"	=>	"Tamahaq",
		"tmh"	=>	"tamaschekisch",
		"tog"	=>	"Tonga (Nyasa)",
		"ton"	=>	"tongaisch (Tonga Islands)",
		"tpi"	=>	"Tok Pisin",
		"tsi"	=>	"Tsimshian",
		"tsn"	=>	"Tswana",
		"tuk"	=>	"turkmenisch",
		"tum"	=>	"Tumbuka",
		"tup"	=>	"Tupi",
		"tur"	=>	"türkisch",
		"tut"	=>	"alttürkisch",
		"tut"	=>	"balkarisch",
		"tut"	=>	"chakassisch",
		"tut"	=>	"enzisch",
		"tut"	=>	"ewenkisch",
		"tut"	=>	"gagausisch",
		"tut"	=>	"Karatschai-balkarisch",
		"tut"	=>	"Kim",
		"tut"	=>	"kiptschakisch",
		"tut"	=>	"nanaiisch",
		"tut"	=>	"schorisch",
		"tut"	=>	"Sibe-Mandschur",
		"tvl"	=>	"tuvaluanisch",
		"twi"	=>	"Twi",
		"tyv"	=>	"tuwinisch",
		"udm"	=>	"udmurtisch",
		"uga"	=>	"ugaritisch",
		"uig"	=>	"uigurisch",
		"ukr"	=>	"ukrainisch",
		"umb"	=>	"Umbundu",
		"urd"	=>	"Urdu",
		"uzb"	=>	"usbekisch",
		"vai"	=>	"Vai",
		"ven"	=>	"Venda",
		"vie"	=>	"vietnamesisch",
		"vol"	=>	"Volapük",
		"vot"	=>	"wotisch",
		"wak"	=>	"Kwakwala",
		"wak"	=>	"Nootka",
		"wak"	=>	"Wakashan",
		"wal"	=>	"Walamo",
		"war"	=>	"Samaron",
		"war"	=>	"Waray",
		"was"	=>	"Washo",
		"wel"	=>	"kymrisch",
		"wen"	=>	"sorbisch",
		"wln"	=>	"wallonisch",
		"wol"	=>	"Wolof",
		"xal"	=>	"kalmückisch",
		"xho"	=>	"Xhosa",
		"yao"	=>	"Yao",
		"yap"	=>	"yapesisch",
		"yid"	=>	"jiddisch",
		"yor"	=>	"Yoruba",
		"ypk"	=>	"Yupik",
		"zap"	=>	"Ixtlan-zapotekisch",
		"zap"	=>	"Papabuco",
		"zap"	=>	"zapotekisch",
		"zbl"	=>	"Bliss-Symbol-Sprache",
		"zen"	=>	"Zenaga",
		"zha"	=>	"Zhuang",
		"znd"	=>	"Zande",
		"zul"	=>	"Zulu",
		"zun"	=>	"Zuni",
		"zza"	=>	"Zaza",
		"zza"	=>	"Zazaki",
	);
	protected $_allOptions = null;
	
    public function getAllOptions()
    {
    	if ( is_null($this->_allOptions) ) {
    		$this->_allOptions[] = array(
    				'value' => 0,
    				'label' => '-',
    		);
    		foreach ( $this->_options as $value => $label ) {
    			$this->_allOptions[] = array(
    					'value' => $value,
    					'label' => $label,
    			);
    		}
    	}
        return $this->_allOptions;
    }
	
    public function getString($key)
    {
        return isset($this->_options[$key]) ? $this->_options[$key] : '';
    }
}
