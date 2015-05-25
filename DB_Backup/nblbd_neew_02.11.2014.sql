-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 09:06 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nblbd_neew`
--

-- --------------------------------------------------------

--
-- Table structure for table `asabranchlist`
--

DROP TABLE IF EXISTS `asabranchlist`;
CREATE TABLE IF NOT EXISTS `asabranchlist` (
  `asa_id` int(11) NOT NULL AUTO_INCREMENT,
  `asa_name` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `asa_district` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `asa_division` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `abm` varchar(200) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`asa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=303 ;

--
-- Dumping data for table `asabranchlist`
--

INSERT INTO `asabranchlist` (`asa_id`, `asa_name`, `asa_district`, `asa_division`, `address`, `phone`, `abm`) VALUES
(1, 'KALATIA BRANCH', 'DHAKA', 'DHAKA', '', '01917473395 ', 'MD.MAINUL HASAN'),
(2, 'ABDULLAHPUR BRANCH  ', 'DHAKA  ', 'DHAKA  ', '', '01716350150  ', 'MD.YOUNUS ALI BAGMAR  '),
(3, 'SHAHINPUKUR BRANCH', 'DHAKA', 'DHAKA', '', '01710901142  ', 'MD.WASIM HOSSAIN  '),
(4, 'DHAMRAI BRANCH-1', 'DHAKA', 'DHAKA', '', '01911252301', 'LAXAN CHY.MONDOL'),
(5, 'DOHAR BRANCH', 'DHAKA', 'DHAKA', '', '01721935133', 'ANWAR HOSSAIN'),
(6, 'KERANIGONJ BRANCH', 'DHAKA', 'DHAKA', '', '', ''),
(7, 'NAWABGONJ BRANCH', 'DHAKA', 'DHAKA', '', '01917473395', 'MD.MOINUL HASAN'),
(8, 'BOARD BAZAR BRANCH', 'GAZIPUR', 'DHAKA', '', '01719523912', 'MASUD AHMED'),
(9, 'TONGI SADAR BRANCH', 'GAZIPUR', 'DHAKA', '', '01712550280 ', 'MD.ALAMIN'),
(10, 'PUBAIL BRANCH', 'GAZIPUR', 'DHAKA', '', '01726563068', 'SHARIFUL ISLAM'),
(11, 'KAPASHIA BRANCH', 'GAZIPUR', 'DHAKA', '', '01721297137', 'MD.ABUBAKAR SIDDIQUE'),
(12, 'KONABARI BRANCH', 'GAZIPUR', 'DHAKA', '', '01721499284', 'MD.NURUL ISLAM'),
(13, 'KALIGONJ 1 BRANCH', 'GAZIPUR', 'DHAKA', '', '01726299010', 'MOSLEH UDDIN'),
(14, 'SREEPUR 1 BRANCH', 'GAZIPUR', 'DHAKA', '', '01913626640', 'ABUL BASHAR'),
(15, 'JAMSHA BRANCH', 'MANIKGONJ', '', '', '01725058335', 'MD.BADSH MIA'),
(16, 'CHARIGRAM BRANCH', 'MANIKGONJ', '', '', '01710097534', 'MD.JAHID HASSAN'),
(17, 'BALIRTECH BRANCH', 'MANIKGONJ', '', '', '01726208298', 'ASADUL ISLAM'),
(18, 'MANIKGONJ SADAR BR.', 'MANIKGONJ', 'DHAKA', '', '01734664830', 'LUTFOR RAHMAN'),
(19, 'SATURIA BRANCH', 'MANIKGONJ', '', '', '01721138122', 'MD.SHAH ALAM'),
(20, 'SHIBALOYA BRANCH', 'MANIKGONJ', 'DHAKA', '', '01726102926', 'AHAMMAD SHARIF'),
(21, 'SINGAIR BRANCH', 'MANIKGONJ', '', '', '01717709047', 'AMRAN HOSSAIN'),
(22, 'LOUHAJONG BRANCH', 'MANIKGONJ', '', '', '01195115429', 'MUHAMMAD RAJU AHMMED'),
(23, 'BHOBERCHAR BRANCH', 'MUNSHIGONJ', '', '', '01815499045', 'MD.MANSUR ELAHI'),
(24, 'BALASUR BRANCH', 'MUNSHIGONJ', '', '', '01819048132', 'MD.SHAFIQUL'),
(25, 'GAZARIA BRANCH', 'MUNSHIGONJ', '', '', '01556430640', 'MD.IQBAL KARIM'),
(26, 'DIGIRPAR BRANCH', 'MUNSHIGONJ', '', '', '01716262055', 'PAPEL SHEIKH'),
(27, 'MUNSHIGONJ SADAR-1 BR', 'MUNSHIGONJ', '', '', '01912914717', 'MD.ALTAF HOSSAIN'),
(28, 'SIRAJDIKHAN BRANCH', 'MUNSHIGONJ', '', '', '01719072216', 'MD.MOKTAR HOSSAIN'),
(29, 'MUNSHIGONJ SADAR-2 BR.', 'MUNSHIGONJ', '', '', '01914948744', 'YASMIN AKHTER'),
(30, 'BANDOR-1 BRANCH', 'N.GONJ', '', '', '01724936194', 'MD.MANIR HOSSAIN'),
(31, 'RUPGONJ-1 BRANCH', 'N.GONJ', '', '', '01714824440', 'GULJAR HOSSAIN'),
(32, 'PANCHABATI-1 BRANCH', 'N.GONJ ', '', '', '01716087786', 'MD.HAZRAT ALI'),
(33, 'SONARGAON-1 BRANCH', 'N.GONJ', '', '', '01925498857', 'MUHAMMAD NURUL AMIN'),
(34, 'ARIHAZAR BRANCH', 'N.GONJ', '', '', '01812282333', 'MD.KAMAL UDDIN'),
(35, 'SHIDDIRGONJ-1 BRANCH', 'N.GONJ', '', '', '01718923418', 'SUKUMAR CHANDRA GOPE'),
(36, 'ARUAIL BRANCH', 'B.BARIA', '', '', '', ''),
(37, 'AKHAURA BRANCH', 'B.BARIA', '', '', '01731771177', 'JASIM UDDIN'),
(38, 'ASHUGONJ 1 BRANCH', 'B.BARIA', '', '', '01725722938', 'SHAHIDUL ISLAM'),
(39, 'KASBA BRANCH', 'B.BARIA', '', '', '01818425695', 'K.M HUMAYUN KHALED'),
(40, 'NABINAGAR BRANCH', 'B.BARIA', '', '', '', ''),
(41, 'SARAIL BRANCH', 'B.BARIA', '', '', '01731588612', 'RAYHAN UDDIN'),
(42, 'BANCHARAMPUR BRANCH', 'B.BARIA', '', '', '01718600934', 'GOLAM SAMDANI'),
(43, 'NASIRNAGAR BRANCH', 'B.BARIA', '', '', '01734272020', 'TOFAZZAL HOSSEN'),
(44, 'SHIBPUR BRANCH', 'NARSINGDI ', '', '', '01726867381', 'MOHAMMAD MANIK MIA'),
(45, 'GHORASHAL BRANCH', 'NARSINGDI ', '', '', '01712471738', 'SHIBLI BEGUM'),
(46, 'CHARSINDUR BRANCH', 'NARSINGDI ', '', '', '01734698610', 'GANESH CHANDRA DAS'),
(47, 'PACHDONA BRANCH', 'NARSINGDI ', '', '', '01718963794', 'MD.RUHUL AMIN'),
(48, 'RAIPURA', 'NARSINGDI ', '', '', '01719878717', 'SUBASH CHAN. SUTRA DHAR'),
(49, 'MONOHARDI 1 BRANCH', 'NARSINGDI ', '', '', '', ''),
(50, 'BELABO BRANCH', 'NARSINGDI ', '', '', '01710902675', 'MD.SHAHABUDDIN'),
(51, 'KARIMPUR BRANCH', 'MYMENSINGH', '', '', '01721819461', 'MD.IFTEKHAR ALAM'),
(52, 'TARAKANDA BRANCH', 'MYMENSINGH', '', '', '01735711079', 'UMMA MORIUM'),
(53, 'DHOBAURA BRANCH', 'MYMENSINGH', '', '', '01915925411', 'MOHAMMAD SAJUT MIA'),
(54, 'HALUAGHAT BRANCH', 'MYMENSINGH', '', '', '01717317361', 'RANA SARKER'),
(55, 'FULPUR BRANCH', 'MYMENSINGH', '', '', '01717103911', 'MOHAMMAD AL MOMEN'),
(56, 'GAFORGAON BRANCH', 'MYMENSINGH', '', '', '01725943947', 'RIFAT ARA KHANAM'),
(57, 'NANDAIL BRANCH', 'MYMENSINGH', '', '', '01736327164', 'MD.ANWARUL HOQUE'),
(58, 'GOURIPUR BRANCH', 'MYMENSINGH', '', '', '01918727380', 'MOHAMMAD JABAN ALI'),
(59, 'FULBARIA BRANCH', 'MYMENSINGH', '', '', '01729302412', 'MD.JAHANGIR HOSSAIN'),
(60, 'TRISHAL BRANCH', 'MYMENSINGH', '', '', '01724734009', 'MD.MOSARAF HOSEN'),
(61, 'MUKTAGACHA SADAR-1 BR.', 'MYMENSINGH', '', '', '01721529808', 'BIJAN CHANDRA DAS'),
(62, 'SHARISHABARI BRANCH', 'JAMALPUR ', '', '', '01722113767', 'MOHAMMAD BABUL MIAH'),
(63, 'MADARGONJ BRANCH', 'JAMALPUR ', '', '', '01716170113', 'MD.MONIRUZZAMAN'),
(64, 'ISLAMPUR BRANCH', 'JAMALPUR ', '', '', '01724012974', 'SALIM REZA'),
(65, 'KAROTIA BRANCH', 'TANGAIL', '', '', '01728620930', 'ALI AKBAR HOSSAIN'),
(66, 'GHATAIL-1 BRANCH', 'TANGAIL', '', '', '01716248320', 'MOHAMMAD ABDUL KARIM'),
(67, 'NAGARPUR BRANCH', 'TANGAIL', '', '', '01721779289', 'MD.MATIUR RAHMAN'),
(68, 'DHANBARI BRANCH', 'TANGAIL', '', '', '01715591742', 'MD.MOSTAFA KAMAL'),
(69, 'KALIHATI BRANCH', 'TANGAIL', '', '', '01814247527', 'MD.HAZRAT ALI MANDOL'),
(70, 'DELDUWAR BRANCH', 'TANGAIL', '', '', '01725026175', 'NUR NABI AKANDA'),
(71, 'BHUIYAPUR BRANCH', 'TANGAIL', '', '', '01718622051', 'MOHAMMAD ZAKIUL HAQUE'),
(72, 'MIRZAPUR 1 BRANCH', 'TANGAIL', '', '', '01710679020', 'MD.YEAR ALI MONDAL'),
(73, 'SAKHIPUR BRANCH', 'TANGAIL', '', '', '01718065281', 'MD.JAHANGIR ALOM'),
(74, 'BASAILI BRANCH', 'TANGAIL', '', '', '01729196558', 'MD.ABDUL BASED'),
(75, 'SALTHA BRANCH', 'FARIDPUR ', '', '', '01916641166', 'MUHAMMAD TOUIDUL ISLAM'),
(76, 'BOALMARI SADOR-1 BR.', 'FARIDPUR ', '', '', '0172272995', 'MOHAMMAD JAMALUDDIN'),
(77, 'NAGORKANDA-1 BRANCH', 'FARIDPUR ', '', '', '01710447204', 'AFROZA SIDDIQUA'),
(78, 'CHAR BHADRASAN BRANCH', 'FARIDPUR ', '', '', '01710447204', 'JHERULE ISLAM LETON'),
(79, 'SADARPUR BRANCH', 'FARIDPUR ', '', '', '01716575778', 'FARUK HOSSAIN'),
(80, 'ALPHADANGA BRANCH', 'FARIDPUR ', '', '', '01715399447', 'KAMAL SARDER'),
(81, 'MADHUKHALI BRANCH', 'FARIDPUR ', '', '', '01712732465', 'MONJURI METRA'),
(82, 'RAJBARI-1 BRANCH', 'RAJBARI ', '', '', '01718901849', 'MUHAMMAD KAMRUL ISLAM'),
(83, 'BALIAKANDI SADOR-1 BR.', 'RAJBARI ', '', '', '01717606895', 'MD.SHAFIQUL ALAM KHAN'),
(84, 'PANGSHA SADOR-1 BR.', 'RAJBARI ', '', '', '01718123156', 'RAGHU NANDAN KUNDU'),
(85, 'GOALANDA SADAR BRANCH', 'RAJBARI ', '', '', '01718553844', 'MOHAMMAD KAUSAR ALI'),
(86, 'TAKERHAT-1 BRANCH', 'MADARIPUR', '', '', '01914954239', 'MOH. IQBAL HOSSAIN MOLLA'),
(87, 'MUSTAFAPUR BRANCH', 'MADARIPUR', '', '', '01723528029', 'SHIKHA BANIK'),
(88, 'KHASHER HAT BRANCH', 'MADARIPUR', '', '', '01718920042', 'JULHAS MIAH'),
(89, 'CHHILARCHAR BRANCH', 'MADARIPUR', '', '', '01713641708', 'MOH. KAMAL HOSSAIN UZZAL'),
(90, 'MADARIPUR SADAR BR.', 'MADARIPUR', '', '', '01712693241', 'MONIRUL ISLAM'),
(91, 'KALKINI BRANCH', 'MADARIPUR', '', '', '01728218725', 'ASADUZZAMAN'),
(92, 'RAJOIR BRANCH', 'MADARIPUR', '', '', '01732945853', 'KAMAL HOSSAIN'),
(93, 'CHIKANDI BRANCH', 'SHARIATPUR ', '', '', '01719609165', 'NILKOMOL MOJUMDER'),
(94, 'SHAKHIPUR BRANCH', 'SHARIATPUR ', '', '', '01912291172', 'MOHAMMAD TOTA MIAH'),
(95, 'GOSHAIRHAT BRANCH', 'SHARIATPUR ', '', '', '01728481029', 'ANWAR HOSSAIN'),
(96, 'KAZIR HAT BRANCH', 'SHARIATPUR ', '', '', '01719607040', 'RATAN KUMAR SAHA'),
(97, 'CHANDAPUR BRANCH', 'SHARIATPUR ', '', '', '01721815738', 'ABADUL HUQ BADOL'),
(98, 'SHARIATPUR SADAR BR.', 'SHARIATPUR ', '', '', '01913726767', 'MOSTAFIZUR RAHMAN'),
(99, 'ZAZIRA BRANCH', 'SHARIATPUR ', '', '', '01721639215', 'NUR MOHAMMAD'),
(100, 'DAMODDA BRANCH', 'SHARIATPUR ', '', '', '01819917767', 'ALAMGIR MUNSHI'),
(101, 'VEDERGONJ BRANCH', 'SHARIATPUR ', '', '', '01720648034', 'ABDUL MAJID MOLLAH'),
(102, 'GOPALGONJ-1 BRANCH', 'GOPALGONJ ', '', '', '01716725882', 'MD.KAMAL MUNSHI'),
(103, 'KOTALIPARA-1 BRANCH', 'GOPALGONJ ', '', '', '01913021285', 'MOHAMMAD ZIAUL ISLAM'),
(104, 'KASHIANI BRANCH', 'GOPALGONJ ', '', '', '01196088877', 'MD.SHAHIDUL ISLAM'),
(105, 'TONGIPARA BRANCH', 'GOPALGONJ ', '', '', '01717081146', 'MANIK CHANDRA GHOSH'),
(106, 'MUKSUDPUR-1 BRANCH', 'GOPALGONJ ', '', '', '01729691591', 'MD.HABIBUL ISLAM'),
(107, 'DOULATPUR-1 BRANCH', 'KHULNA ', '', '', '01917052428', 'MD.PARVEZ BHUYAN'),
(108, 'FULTALA BRANCH', 'KHULNA ', '', '', '01914651183', 'MD.ZAHIDUL ISLAM'),
(109, 'TEROKHADA BRANCH', 'KHULNA ', '', '', '01721854216', 'SALIM REZA'),
(110, 'BATIAGHATA BRANCH', 'KHULNA ', '', '', '01719021954', 'MD.OHIDUL ISLAM'),
(111, 'DUMORIA BRANCH', 'KHULNA ', '', '', '01913813648', 'MD.BABUL HOSEN'),
(112, 'CHUKNAGOR BRANCH', 'KHULNA ', '', '', '01914655491', 'B.M.MONOARUL ISLAM'),
(113, 'PAIK GACHA BRANCH', 'KHULNA ', '', '', '01923970389', 'SYED BABUL HOSSAIN'),
(114, 'KOYRA BRANCH', 'KHULNA ', '', '', '01717612800', 'MD.FARUKUJJAMAN'),
(115, 'BAGERHAT-1 BRANCH', 'BAGERHAT', '', '', '01711163678', 'BAKI BILLAH'),
(116, 'FAKIRHAT BRANCH', 'BAGERHAT', '', '', '01718445676', 'SANJIB KUMAR PAUL'),
(117, 'MOLLAHAT BRANCH', 'BAGERHAT', '', '', '01725755414', 'MAHAMUD SHAIKH'),
(118, 'MORELGONJ BRANCH', 'BAGERHAT', '', '', '01912839519', 'AMINUL HAQUE'),
(119, 'SHARONKHOLA BRANCH', 'BAGERHAT', '', '', '01735947619', 'SHAIKH AZIER RAHMAN'),
(120, 'MONGLA-1 BRANCH', 'BAGERHAT', '', '', '01920759236', 'MANOG KUMAR GOLDER'),
(121, 'RAMPAL BRANCH', 'BAGERHAT', '', '', '01714514869', 'MD.TITUMIR JALAL'),
(122, 'MIRPUR BRANCH', 'KUSHTIA ', '', '', '01813749344', 'MD.ABU SAYED'),
(123, 'BHERAMARA-1 BRANCH', 'KUSHTIA ', '', '', '01728345475', 'MD.ANAWARUL ISLAM'),
(124, 'DOULATPUR BRANCH', 'KUSHTIA ', '', '', '01720959529', 'MD.ZILLUR RAHMAN'),
(125, 'KUMARKHALI-1 BRANCH', 'KUSHTIA ', '', '', '01725624755', 'MD.NAZIM UDDIN'),
(126, 'KHOKSHA-1 BRANCH', 'KUSHTIA ', '', '', '01721563960', 'MD.TARIKUL ISLAM'),
(127, 'MEHERPUR-1 BRANCH', 'MEHERPUR', '', '', '01712417699', 'MD.SALIM AZAD'),
(128, 'MUJIBNAGOR BRANCH', 'MEHERPUR', '', '', '01721562897', 'MD.ZIAUR RAHAMAN'),
(129, 'GANGI SADOR-1 BRANCH', 'MEHERPUR', '', '', '01710745505', 'MD.SHAHINUR RAHMAN'),
(130, 'CHUADANGA-1 BRANCH', 'CHUADANGA ', '', '', '01923185044', 'MD.KAMAL UDDIN'),
(131, 'JIBON NAGOR BRANCH', 'CHUADANGA ', '', '', '01718767414', 'MD.MOSHARROF HOSSAIN'),
(132, 'DAMURHUDA BRANCH', 'CHUADANGA ', '', '', '01728124979', 'MD.SHARIFUL ISLAM'),
(133, 'ALAMDANGA BRANCH', 'CHUADANGA', '', '', '01714730907', 'MD. ABUL BASAR'),
(134, 'DARSHANA BRANCH', 'CHUADANGA', '', '', '01720302356', 'MD.ABDUR RAZZAK'),
(135, 'JHINAIDHA-1 BRANCH', 'JHINAIDHA ', '', '', '01711023298', 'MD.ASADUR RAHMAN'),
(136, 'SHOULAKUPA-1 BRANCH', 'JHINAIDHA ', '', '', '01721953206', 'MD.SHAHABUDDIN'),
(137, 'HARINAKUNDU BRANCH', 'JHINAIDHA ', '', '', '01914778262', 'MD.JAMIRUL ISLAM'),
(138, 'MOHESHPUR BRANCH', 'JHINAIDHA ', '', '', '01734165128', 'DEPTHE KHATUN'),
(139, 'COUTCHANDPUR', 'JHINAIDHA ', '', '', '01925551186', 'MD.NASIR UDDIN'),
(140, 'KALIGONJ -1 BRANCH', 'JHINAIDHA ', '', '', '01716874865', 'MD.MOTIER RAHAMAN'),
(141, 'MAGURA BRANCH', 'MAGURA ', '', '', '01713908136', 'GOPAL SAHA'),
(142, 'ARPARA BRANCH', 'MAGURA ', '', '', '01714778966', 'MD.MOKLESUR RAHMAN'),
(143, 'MOHAMMADPUR BRANCH', 'MAGURA ', '', '', '01717410065', 'MD.SAIYED AHAMED'),
(144, 'SREEPUR SADOR BRANCH', 'MAGURA ', '', '', '01921450730', 'MD.SHAMIM HOSSAIN'),
(145, 'CHARKHAI BRANCH', 'SYLHET ', '', '', '01718267724', 'MD.JAMAL HUSAN'),
(146, 'BHADERSHOR BRANCH', 'SYLHET ', '', '', '01718021783', 'SWAPAN KUMAR SINGHA'),
(147, 'COMPANYGONJ-1 BRANCH', 'SYLHET ', '', '', '01716165303', 'SYED MD.ALAMGIR'),
(148, 'DARBASHTA BRANCH', 'SYLHET ', '', '', '01714674484', 'MD.AMINUL ISLAM'),
(149, 'KALIGONJ BAZAR BRANCH', 'SYLHET ', '', '', '', 'MD.SADIKUR RAHMAN'),
(150, 'SALUTIKAR BRANCH', 'SYLHET ', '', '', '01716971804', 'PRASHANTA DEBA NATH'),
(151, 'KAMAL BAZAR BRANCH', 'SYLHET ', '', '', '01721187609', 'MD.ABDUL MALEK'),
(152, 'BELAGONJ BRANCH', 'SYLHET ', '', '', '01724445786', 'RATAN CHANDRA DEB'),
(153, 'FENCHUGONJ BRANCH', 'SYLHET ', '', '', '01716562757', 'BOKUL CHANDRA'),
(154, 'GOWAINGHAT BANCH', 'SYLHET ', '', '', '01725003335', 'FARHAD HOSSAIN'),
(155, 'JAINTAPUR BRANCH', 'SYLHET ', '', '', '01911116764', 'PROTIRODH TALUKDER'),
(156, 'KANAIGHAT BRANCH', 'SYLHET', '', '', '01726240467', 'SALIM PARVEJ'),
(157, 'ZAKIGONJ BRANCH', 'SYLHET', '', '', '01724691865', 'SHAMSUL CHANDRA '),
(158, 'KAMALPUR BRANCH', 'MOULVIBAZAR ', '', '', '01717681266', 'TRIDIP ROY'),
(159, 'SHERPUR BRANCH', 'MOULVIBAZAR ', '', '', '01714866527', 'MOHAMMAD ZIAUR RAHMAN'),
(160, 'SATGAON BRANCH', 'MOULVIBAZAR ', '', '', '01710706788', 'DIPA RANI DEB'),
(161, 'SHAMSER NAGOR BRANCH', 'MOULVIBAZAR ', '', '', '01712402113', 'NILANDU BICKESH DEB'),
(162, 'JURI SADAR-1 BRANCH', 'MOULVIBAZAR ', '', '', '01728207355', 'MD.SADIK MIAH'),
(163, 'FULTALA BRANCH', 'MOULVIBAZAR ', '', '', '01710943416', 'PRONOY KUMER DEB'),
(164, 'GOBINDAGONJ BRANCH', 'MOULVIBAZAR ', '', '', '01717414619', 'IQBAL HOSSAIN'),
(165, 'BARLEKHA BRANCH', 'MOULVIBAZAR ', '', '', '01723033431', 'RABINDRA CHANDRA NATH'),
(166, 'KAMALGONJ BRANCH', 'MOULVIBAZAR ', '', '', '01717092627', 'TONMOY RAY'),
(167, 'KULAURA 1 BRANCH', 'MOULVIBAZAR ', '', '', '01716832602', 'AMITAV DAS CHY.'),
(168, 'RAJNAGAR BRANCH', 'MOULVIBAZAR ', '', '', '01734899992', 'SAMIRON CHANDRA'),
(169, 'JAMALGONJ BRANCH', 'SUNAMGONJ ', '', '', '01739020632', 'RAHANA AKTER DOLLY'),
(170, 'SALLA BRANCH', 'SUNAMGONJ ', '', '', '01718979966', 'DILIP KUMAR DASH'),
(171, 'DOLAR BAZAR BRANCH', 'SUNAMGONJ ', '', '', '01712452421', 'MD.ALAM HUSSAIN'),
(172, 'BISWAMBARPUR BRANCH', 'SUNAMGONJ ', '', '', '', 'PROBIR CHANDRA SADDYA'),
(173, 'CHHATAK 1 BRANCH', 'SUNAMGONJ ', '', '', '01718023004', 'SWARUP ROY'),
(174, 'DERAI BRANCH', 'SUNAMGONJ ', '', '', '01718977881', 'SREENATH BHATTACHARJEE'),
(175, 'DHARMAPASHA 1 BRANCH', 'SUNAMGONJ', '', '', '01716303936', 'A.K.M SHAMSUL ISLAM'),
(176, 'JAGANNATHPUR BRANCH', 'SUNAMGONJ', '', '', '01728648565', 'BIDYUT KANTI TALUKDER'),
(177, 'DAWARABAZAR BRANCH', '', '', '', '', ''),
(178, 'MIRPUR BRANCH', 'HABIGONJ ', '', '', '01717708098', 'SK.MUJAHIDUL ISLAM'),
(179, 'SHAYESTAGONJ BRANCH', 'HABIGONJ ', '', '', '01721395123', 'MD.MAKSUD ALI'),
(180, 'NALMUK BRANCH', 'HABIGONJ ', '', '', '', 'MD.HUMAYUN KABIR'),
(181, 'DHARMAGHAR BRANCH', 'HABIGONJ ', '', '', '', 'MD.ABDUL KADIR'),
(182, 'BULLAH BRANCH', 'HABIGONJ ', '', '', '', 'SUKA DEB GOSWAMI'),
(183, 'MARKULI BRANCH', 'HABIGONJ ', '', '', '01195079681', 'MD.ABDUR RAHMAN'),
(184, 'GAJNAIPUR BRANCH', 'HABIGONJ ', '', '', '', 'MD.MUZIBUR RAHMAN'),
(185, 'AJMIRIGONJ BRANCH', 'HABIGONJ', '', '', '01717447338', 'AJIT DAS TALUKDER'),
(186, 'BAHUBAL BRANCH', 'HABIGONJ', '', '', '01718821366', 'ARYAN DEBNATH'),
(187, 'BANIACHONG 1 BRANCH', 'HABIGONJ', '', '', '01714484526', 'SHAHABUDDIN'),
(188, 'CHUNARUGHAT BRANCH', 'HABIGONJ', '', '', '01718977815', 'MAHBUBUL ALAM'),
(189, 'LAKHAI BRANCH ', 'HABIGONJ ', '', '', '01920585348', 'HAMID HOSSAIN'),
(190, 'MADHABPUR 1 BRANCH', 'HABIGONJ ', '', '', '01745339260', 'SHAKIL MIAH'),
(191, 'NABIGONJ 1 BRANCH', 'HABIGONJ ', '', '', '01710942732', 'GOPAL SINHA'),
(192, 'MEHENDIGONJ BRANCH', 'BARISAL ', '', '', '01714809048', 'MIHIR KUMAR KARMAKAR'),
(193, 'MULADI BRANCH', 'BARISAL ', '', '', '01712395510', 'MD.MAHFUZUR RAHMAN'),
(194, 'BANARIPARA BRANCH', 'BARISAL ', '', '', '01725764949', 'MD.MAHERUL ISLAM'),
(195, 'UZIRPUR BRANCH', 'BARISAL ', '', '', '01918854669', 'JEBAN CHANDRA SOMADDER'),
(196, 'HIZLA BRANCH', 'BARISAL ', '', '', '01728368493', 'MD.JAHID HOSSEN'),
(197, 'GOURANADI BRANCH', 'BARISAL ', '', '', '01719565958', 'SUMON CHANDRA DAS'),
(198, 'BAKERGONJ BRANCH', 'BARISAL ', '', '', '01725765057', 'MD.ANWAR HOSSAIN'),
(199, 'BABUGONJ BRANCH', 'BARISAL ', '', '', '01712801631', 'MD.JAKIR HOSSEN'),
(200, 'TORKI BANDOR BRANCH', 'BARISAL ', '', '', '01716382465', 'MD.MAHMUDUL HASAN'),
(201, 'PAYSHAR HAT BRANCH', 'BARISAL ', '', '', '0171618081', 'KAZI GOLAM SOROWAR'),
(202, 'PIROJPUR BRANCH', 'PIROJPUR ', '', '', '01714977293', 'MD.ARFATUR RAHMAN'),
(203, 'ZIANAGOR BRANCH', 'PIROJPUR ', '', '', '01918597576', 'MD.SOHRAB HOSSAIN'),
(204, 'MOTHBARIA-1, 2 BRANCH', 'PIROJPUR ', '', '', '01715330356', 'MUHAMMAD ABDUR RAZZAK'),
(205, 'BHANDARIA-1 BRANCH', 'PIROJPUR ', '', '', '01721809873', 'MD.RAFIQUL ISLAM'),
(206, 'KAWKHALI BRANCH', 'PIROJPUR ', '', '', '01724536252', 'MOHAMMAD YOUSUF ALI'),
(207, 'NAZIRPUR BRANCH', 'PIROJPUR ', '', '', '01712449879', 'MD.MAINUR RAHMAN'),
(208, 'NESERABAD BRANCH', 'PIROJPUR ', '', '', '01710179009', 'MD.NAZRUL ISLAM'),
(209, 'PATUAKHALI SADAR-1 BR.', 'PATUAKHALI ', '', '', '01715538953', 'MD.FIROZ HOSSAIN'),
(210, 'GALACHIPA CELL BRANCH', 'PATUAKHALI ', '', '', '01920969545', 'MD.ABU YUSSUF'),
(211, 'DUMKI BRANCH', 'PATUAKHALI ', '', '', '01718319286', 'MD.HARUN AR RASID'),
(212, 'BAUFAL BRANCH', 'PATUAKHALI ', '', '', '01712435857', 'MD.SHAMIM HOSSAIN'),
(213, 'DASHMINA BRANCH', 'PATUAKHALI ', '', '', '01716238996', 'UTTAM KUMAR DAS'),
(214, 'KALAPARA BRANCH', 'PATUAKHALI ', '', '', '01712410567', 'ABDUL HALIM'),
(215, 'MIRZAGONJ BRANCH', 'PATUAKHALI ', '', '', '01725961896', 'MD.ASADUZZAMAN'),
(216, 'BORGUNA SADAR BRANCH', 'BORGUNA ', '', '', '01718797948', 'YOUSUF ALI'),
(217, 'AMTALI BRANCH', 'BORGUNA ', '', '', '01725496462', 'DULAL CHAKRAVORTY'),
(218, 'BETAGI BRANCH', 'BORGUNA ', '', '', '01718992236', 'ABUL KALAM '),
(219, 'BAMNA BRANCH ', 'BORGUNA ', '', '', '01198110018', 'MD.BELAL HOSSAIN'),
(220, 'PATARGHATA-1 BRANCH', 'BORGUNA ', '', '', '01712667161', 'A.Y.M ZAHID HOSSAIN'),
(221, 'RAMU BRANCH', 'COX''S BAZAR ', '', '', '01816722945', 'MUSTAFA KAMAL'),
(222, 'MOHESHKHALI BRANCH', 'COX''S BAZAR ', '', '', '01920559190', 'ZUBAIR AZAM'),
(223, 'TEKNAF BRANCH', 'COX''S BAZAR ', '', '', '01815234900', 'MD.SANAULLAH'),
(224, 'UKHIA BRANCH', 'COX''S BAZAR ', '', '', '01818155455', 'NURUL AMIN'),
(225, 'CHAKORIA BRANCH', 'COX''S BAZAR ', '', '', '01720352042', 'NEZAM UDDIN'),
(226, 'PEKUA BRANCH', 'COX''S BAZAR ', '', '', '01814468974', 'MANASH CHOWDHURY'),
(227, 'EIDHGAON', 'COX''S BAZAR ', '', '', '01816054537', 'MD.KHORSHED ALAM'),
(228, 'BADARKHALI', 'COX''S BAZAR ', '', '', '01813701853', 'RIPON KANTI DAS'),
(229, 'BANDORBAN BRANCH', 'BANDORBON', '', '', '01816037102', 'MD.ANWAR HOSSAIN'),
(230, 'LAMA BRANCH', 'BANDORBON', '', '', '01815929112', 'SALIM'),
(231, 'ALIKADOM BRANCH', 'BANDORBON', '', '', '04435012961', 'SUVASH KUMAR NATH'),
(232, 'KHAGRACHARI BRANCH', 'KHAGRACHARI ', '', '', '01195204681', 'SUBAL CHANDRA CHAKMA'),
(233, 'NIMSHAR BRANCH', 'COMILLA ', '', '', '01817078045', 'REDWAN AHMED'),
(234, 'MADHAYEA-1 BRANCH', 'COMILLA ', '', '', '01721865282', 'MD.ABUL HOSSAIN BHUIYAN'),
(235, 'DEBIBDER BRANCH', 'COMILLA ', '', '', '01714438878', 'MD.HOMAYON KABIR'),
(236, 'COMPANIGONJ BRANCH', 'COMILLA ', '', '', '01190485099', 'SHAFIQUL ISLAM'),
(237, 'MEGHNA BRANCH', 'COMILLA ', '', '', '01813141200', 'MOH. BADRUDDUZA AL-MAMUN'),
(238, 'BIJRA BAZAR BRANCH', 'COMILLA ', '', '', '01715735100', 'MD.MASUD ALAM'),
(239, 'GUNOBATI BRANCH', 'COMILLA ', '', '', '01724456184', 'MOHAMMAD MONIRUL ISLAM'),
(240, 'MANOHARGONJ BRANCH', 'COMILLA ', '', '', '01813097556', 'MOHAMMAD HUMAYAN KABIR'),
(241, 'TITAS SADAR BRANCH', 'COMILLA ', '', '', '01818779146', 'MUHAMMAD OSMAN AZAD'),
(242, 'JHALAM BAZAR BRANCH', 'COMILLA ', '', '', '01720334448', 'MD.SAIFUL ISLAM'),
(243, 'BARURA 1 BRANCH', 'COMILLA ', '', '', '0171274045', 'ABDUL HANNAN'),
(244, 'BURICHONG BRANCH', 'COMILLA ', '', '', '01924118583', 'DELWAR HOSSAIN'),
(245, 'CHANDINA 1 BRANCH', 'COMILLA ', '', '', '01725883590', 'ANISUR RAHMAN'),
(246, 'DAUDKANDI BRANCH', 'COMILLA ', '', '', '01196051181', 'JAKIR HOSSAIN'),
(247, 'HOMNA 1 BRANCH', 'COMILLA ', '', '', '01814227882', 'JASIM UDDIN'),
(248, 'LAKSAM 1 BRAANCH', 'COMILLA ', '', '', '01728314625', 'KABIR HOSSAIN'),
(249, 'MURADNAGAR BRANCH', 'COMILLA ', '', '', '01726032148', 'MOHAMMAD ULLAH'),
(250, 'NANGOLKOT 1 BRANCH', 'COMILLA ', '', '', '01722010031', 'NANTU CHANDRA ROY'),
(251, 'BRAHMANPARA BRANCH', 'COMILLA ', '', '', '', ''),
(252, 'LAXMANPUR BRANCH', 'COMILLA ', '', '', '01725267281', 'MD.SAIFUL ISLAM'),
(253, 'ELIATGONJ BAZAR BRANCH', 'COMILLA ', '', '', '01818138932', 'KANU LAL SUTRADHAR'),
(254, 'GAURIPUR 1 BRANCH', 'COMILLA ', '', '', '01914112918', 'A.T.M ATIKULLAH'),
(255, 'CHAR JUBLI BRANCH', 'NOAKHALI  ', '', '', '01729391016', 'MOHAMMAD IQBAL HOSSAIN'),
(256, 'BEGUMGONJ-1 BRANCH', 'NOAKHALI  ', '', '', '01712851532', 'MUHAMMED JAMAL UDDIN'),
(257, 'HATIA BRANCH', 'NOAKHALI  ', '', '', '01724562562', 'SHARIFUL ALAM RUBEL'),
(258, 'MUSAPUR BRANCH', 'NOAKHALI  ', '', '', '01814726766', 'SHIRIS CHANDRA BARUA'),
(259, 'CHAPRASHIR HAT BRANCH', 'NOAKHALI  ', '', '', '01730093096', 'MD.SAHIDUL HASAN'),
(260, 'SHAHEBER HAT BRANCH', 'NOAKHALI  ', '', '', '01911302074', 'MD.MAHBUBUR RAHMAN'),
(261, 'AMISHAPARA', 'NOAKHALI  ', '', '', '01727612010', 'MOHAMMAD MOHIN UDDIN'),
(262, 'SONAPUR', 'NOAKHALI  ', '', '', '01712903475', 'SHAHIDUL HAIDER'),
(263, 'CHATKHIL BRANCH', 'NOAKHALI  ', '', '', '01719804633', 'RAKHAL CHANDRA'),
(264, 'JAMIDARHAT BRANCH', 'NOAKHALI  ', '', '', '01922397256', 'RAZIB CHANDRA SOM'),
(265, 'NOAKHALI SADAR 1 BR.', 'NOAKHALI  ', '', '', '01718682482', 'SHAFIQUL ISLAM'),
(266, 'SENBAGH BRANCH', 'NOAKHALI  ', '', '', '01720504915', 'ARIFUL MOWLA'),
(267, 'SONAIMURI BRANCH', 'NOAKHALI  ', '', '', '01819866097', 'ASISH CHANDRA SAHA'),
(268, 'DALAL BAZAR BRANCH', 'LAXMIPUR ', '', '', '01719882187', 'SUMAN KARMAKAR'),
(269, 'HAIDERGONJ BRANCH', 'LAXMIPUR ', '', '', '01712992413', 'SAYED MAYIN UDDIN'),
(270, 'HAZIRHAT BRANCH', 'LAXMIPUR ', '', '', '01720534772', 'MOHAMMAD RAKIBUL ALAM'),
(271, 'ALEKGENDER BRANCH', 'LAXMIPUR ', '', '', '01721960430', 'ALEYA BEGUM'),
(272, 'BATRA BRANCH', 'LAXMIPUR ', '', '', '01716660559', 'ASADUZZAMAN'),
(273, 'PANPARA', 'LAXMIPUR ', '', '', '01717537163', 'MD. RIADOAN ULLAH'),
(274, 'LAXMIPUR SADAR 1 BR.', 'LAXMIPUR ', '', '', '01721442394', 'SHAMSUL ISLAM'),
(275, 'RAIPUR BRANCH', 'LAXMIPUR ', '', '', '01715892015', 'DELWAR HOSSAIN'),
(276, 'RAMGONJ 1 BRANCH', 'LAXMIPUR ', '', '', '01728167316', 'RIPON CHANDRA MOJUMDER'),
(277, 'BIBIRHAT BRANCH', 'LAXMIPUR ', '', '', '01720354894', 'NAZIM UDDIN'),
(278, 'PARSHURAM BRANCH', 'FENI ', '', '', '01711072612', 'MD.KHAIRUL ALAM'),
(279, 'KAZIRHAT BRANCH', 'FENI ', '', '', '01724698735', 'BIDHAN CHANDRA SAHA'),
(280, 'MAHURIGONJ BRANCH', 'FENI ', '', '', '01819164536', 'MD.NUR ALAM'),
(281, 'MUNSHIR HAT BRANCH', 'FENI ', '', '', '01816558300', 'MOHAMMAD KAMRUZZAMAN'),
(282, 'RAJAPUR BRANCH', 'FENI ', '', '', '01812743700', 'MIZANUR RAHMAN'),
(283, 'CHHAGOLNAIYA BRANCH', 'FENI ', '', '', '01814928317', 'JOINAL ABEDIN'),
(284, 'FULGAZI BRANCH', 'FENI ', '', '', '01917046003', 'PARESH CHANDRA DAS'),
(285, 'SONAGAZI BRANCH', 'FENI ', '', '', '01917582533', 'HEDAYET ULLAH'),
(286, 'ANWARA BRANCH', 'CHITTAGONG', '', '', '01815123011', 'SUMON SARKER'),
(287, 'FATIKCHARI BRANCH', 'CHITTAGONG', '', '', '01818894755', 'SHAHEDUL ANWAR'),
(288, 'HATHAZARI 1 BRANCH', 'CHITTAGONG', '', '', '01818958254', 'TITO SARKER'),
(289, 'LOHAGARA BRANCH', 'CHITTAGONG', '', '', '01813385724', 'MD.YUNUS'),
(290, 'RAOZAN 1 BRANCH', 'CHITTAGONG', '', '', '01818529212', 'RISH KUMAR SHIL'),
(291, 'CHANDANAISH BRANCH', 'CHITTAGONG', '', '', '01815139096', 'SUGOY GANGULY'),
(292, 'BOALKHALI 1 BRANCH', 'CHITTAGONG', '', '', '01812800981', 'MD.ABU TAHER'),
(293, 'BANSHKHALI BRANCH', 'CHITTAGONG', '', '', '01814380479', 'NIDHAN KUMAR DAS'),
(294, 'RANGUNIA 1 BRANCH', 'CHITTAGONG', '', '', '01815102402', 'MD.SALAUDDIN'),
(295, 'SATKANIA BRANCH', 'CHITTAGONG', '', '', '01818805148', 'DIDARUL HAQUE'),
(296, 'BAJITPUR 1 BRANCH', 'KISHOREGONJ', '', '', '01716743581', 'KAMAL UDDIN'),
(297, 'BHAIRAB 1 BRANCH', 'KISHOREGONJ', '', '', '01728008340', 'DULAL CHANDRA DAS'),
(298, 'FARIDGONJ 1 BRANCH', 'CHANDPUR', '', '', '01818901782', 'OMAR FARUK'),
(299, 'HAZIGONJ BRANCH', 'CHANDPUR', '', '', '01816338189', 'MOZAMMEL HAQUE'),
(300, 'KACHUA 1 BRANCH', 'CHANDPUR', '', '', '01720303126', 'SIDDIKUR RAHMAN'),
(301, 'MATLAB 1 BRANCH', 'CHANDPUR', '', '', '01818042300', 'MASUDUR RAHMAN'),
(302, 'SHAHRASTI 1 BRANCH', 'CHANDPUR', '', '', '01818969091', 'SHAFIQUR RAHMAN');

-- --------------------------------------------------------

--
-- Table structure for table `atm_location`
--

DROP TABLE IF EXISTS `atm_location`;
CREATE TABLE IF NOT EXISTS `atm_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `under_branch` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `district` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `address` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `atm_location`
--

INSERT INTO `atm_location` (`id`, `under_branch`, `district`, `address`) VALUES
(10, 'Z.H.S.W.M.C.', 'Dhaka', 'Z. H. Sikder Womens'' Medical College, Rayer Bazar, Dhaka.'),
(9, 'Dhanmondi', 'Dhaka', 'Administritive Building,Dhaka University, Dhaka.'),
(8, 'Bogra', 'Bogra', 'Baragola Bazar, Bogra.'),
(7, 'Mymensingh', 'Mymensingh', '29/1, durgabari Road, Mymensingh.'),
(6, 'Karwan Bazar', 'Dhaka', 'BTMC Bhavan, Karawan Bazar, Dhaka.'),
(5, 'Malibagh', 'Dhaka', '474, Malibagh, DIT Road, Dhaka.'),
(4, 'Gulshan', 'Dhaka', '97/1, Gulshan Avenue, Gulshan, Dhaka.'),
(3, 'Dilkusha', 'Dhaka', '48, Dilkusha C/A, Dhaka.'),
(2, 'Uttara', 'Dhaka', 'Hossain Tower, Next to over Bridge, Uttara, Dhaka.'),
(1, 'Dhanmondi', 'Dhaka', '761, Satmashjid Road, Dhanmondi, Dhaka.');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
CREATE TABLE IF NOT EXISTS `board` (
  `board_sl` int(11) NOT NULL AUTO_INCREMENT,
  `board_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pos_index` int(3) NOT NULL,
  `active` int(1) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`board_sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`board_sl`, `board_name`, `designation`, `pos_index`, `active`, `image`) VALUES
(1, 'Mr. Zainul Haque Sikder', 'Chairman', 1, 1, '966ea-zhsikder.jpg'),
(2, 'Mrs. Monowara Sikder', 'Director', 2, 1, '5b82b-monowara.jpg'),
(3, 'Ms. Parveen Haque Sikder', 'Director', 3, 1, '8b181-phsikder.gif'),
(4, 'Alhaj Khalilur Rahman', 'Director', 4, 1, 'b191f-khalilur_rahmah.gif'),
(5, 'Mr. Moazzam Hossain', 'Director', 5, 1, '3500c-moazzam_hossain.gif'),
(6, 'Mr. Zakaria Taher', 'Director', 6, 1, '2a487-zakariataher.gif'),
(7, 'Mr. Rick Haque Sikder', 'Director', 7, 1, '8ba1b-rick.gif'),
(8, '  Mr. Ron Haque Sikder', 'Director', 8, 1, 'eba2d-ron.gif'),
(9, 'Mr. Mabroor Hossain', 'Director', 9, 1, '900a0-mabroor_hossain.gif'),
(10, 'Mr. Salim Rahman', 'Director', 10, 1, '958e4-salimrahman.gif'),
(11, 'Mr. Jonas Khan Sikder', 'Director', 11, 1, 'f2b87-jonas_khan_sikder.gif'),
(12, 'Mr. Md. Anwar Hussain', 'Independent Director', 12, 1, '2174e-md_anwar_idirector.jpg'),
(13, 'Mr. Md. Mahbubur Rahman Khan', 'Independent Director', 13, 1, '476dd-mahabubur_rahman_khan.gif'),
(14, 'Mr. Shamsul Huda Khan', 'Managing Director(CC)', 15, 1, '484b2-mr_shamsul_hudakhan.jpg'),
(15, 'Mr. A K M Enamul Hoque Shameem', 'Independent Director', 14, 1, 'a849c-enamulhaque.gif');

-- --------------------------------------------------------

--
-- Table structure for table `branchinfo`
--

DROP TABLE IF EXISTS `branchinfo`;
CREATE TABLE IF NOT EXISTS `branchinfo` (
  `branch_code` int(11) NOT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `branch_type` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `division` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `swift` varchar(100) DEFAULT NULL,
  `incharge` varchar(100) DEFAULT NULL,
  `adbranch` varchar(100) DEFAULT NULL,
  `online` varchar(100) DEFAULT NULL,
  `telex` varchar(100) DEFAULT NULL,
  `egp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`branch_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchinfo`
--

INSERT INTO `branchinfo` (`branch_code`, `branch_name`, `branch_type`, `address`, `division`, `phone`, `fax`, `district`, `email`, `swift`, `incharge`, `adbranch`, `online`, `telex`, `egp`) VALUES
(171, 'Kadamtali Branch', 'Branch', 'Shapla Bhaban,Mohammadbagh Chowrasta,Union-Shampur,Dist. Dhaka', 'Dhaka', '01730-330476', NULL, 'Dhaka', 'kadamtali@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(168, 'Pangshai Branch', 'Branch', 'Adbul Malek Plaza (1st Floor),Holding No-554,Ward-4,Purashava-Pangsha,PS-Pangsha,Dist.Rajbari', 'Dhaka', '01730-330356', NULL, 'Rajbari', 'Pangsha@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(169, 'Saturia Branch', 'Branch', NULL, 'Dhaka', '01730-330414', NULL, 'Dhaka', 'saturai@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(170, 'Gopalgonj Branch', 'Branch', 'Nafco Shopping Complex,Holding No.37,Holding No.37 Gopalgonj Purashava,W-4, Dist. Gopalgonj', 'Dhaka', '01730-330362', NULL, 'Dhaka', 'gopalgonj@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(167, 'Birampur Branch', 'Branch', 'Mizan Market (1st Floor), Holing No:952,Ward:4,Pourashava-Birampur,PS-Birampur,Dist.Dinajpur', 'Rangpur', '01730330338, 01730000000', NULL, 'Dinajpur', 'birampur@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(166, 'Rajbari Branch', 'Branch', '65, Hospital Road,Pourashava- Rajbari,Ward No.04,PO-Rajbari,PS-Rajbari Sadar', 'Dhaka', '01730-034912', NULL, 'Rajbari', 'rajbari@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(165, 'Nimtola Branch', 'Branch', 'Nimtoli Bazar,Dhaka-Maowa Road,Sirajdikhan,Munshigonj', 'Dhaka', '01730-339097', NULL, 'Munshigonj', 'nimtola@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(164, 'Z. H. Sikder University of Science & Technology Branch', 'Branch', 'Modhupur,Kartikpur,Rambhadrapur,Bhedergonj, Shariatpur.', 'Dhaka', '01730-339807', NULL, 'Shariatpur', 'zhsust@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(163, 'Chhayfullah Kandi Bazar', 'Branch', 'P.O. Chhayfullah Kandi,Union-Chhayfullah Kandi,P.S. Bancharampur,Dist. Brahmanbaria', 'Chittagong', '017303-39962', NULL, 'Brahmanbaria', 'chhayfullah@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(162, 'Rangunia Branch', 'Branch', 'Gausia SUper Market, Kapatia Road, Roazarhat,Ragunia Pourasahava', 'Chittagong', '01730-313900', NULL, 'Chittagong', 'rangunia@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(161, 'Sikder Tower Branch', 'Branch', 'Sikder Tower 847,Mirabazar Tamabil Road PS- Sylhet Sadar', 'Sylhet', '01730-339992', NULL, 'Shylhet Sadar', 'sikdertower@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(160, 'Goshairhat Branch', 'Branch', 'P.O. Gosharihat, Union-Edilpur,P.S. Goshairhat', 'Dhaka', '01730014046, 01713000000', NULL, 'Shariatpur', 'goshairhat@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(159, 'Mirhajirbagh Branch', 'Branch', '285 Mirhajibagh, Dhaka City Corporation, , Mirhajibagh-Dolaipar, Word- 87(old), 51 (New), Ps- Jatrabari', 'Dhaka', '01713190840, 01713000000', NULL, 'Dhaka', 'mirhajibagh@nblbd.com', NULL, 'A G M Golam Rasul', NULL, '1', NULL, NULL),
(157, 'Alipur Branch', 'Branch', 'PO-Kuakata, Union- 7 No Latachapi, PS- Kolapara', 'Barisal', '01730701643, 01713378965', NULL, 'Patuakhali', 'alipur@nblbd.com', NULL, 'Mohd. Jalal Uddin Ahmed', NULL, '1', NULL, NULL),
(158, 'Goalchamat  Branch', 'Branch', 'Hotel Raffles Inn Building 31/D, Goalchamat Pourashava- Faridpur, PS- Kotowali ', 'Dhaka', '01713190844, 01714161201', NULL, 'Faridpur', 'goalcham@nblbd.com', NULL, 'Muhammad Jahidul Islam', NULL, '1', NULL, NULL),
(156, 'Gazaria Branch', 'Branch', 'Mohammad Ali pradan Plaza, Bhabarchar bus stand, dhaka highway,PO- Bhabarchar,U-Bhabarchar,PS- Gazaria,Munshigonj', 'Dhaka', '01713378967, 01713000000', NULL, 'Dhaka', 'gazaria@nblbd.com', NULL, 'Md. Shahidul Islam', NULL, '1', NULL, NULL),
(154, 'Netrokona Branch', 'Branch', '212,Chotobazar East', 'Dhaka', NULL, NULL, 'Dhaka', 'netrokona@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(155, 'Jurain Branch', 'Branch', 'Amir Tower (1st & 2 nd Floor) old dhaka- Narayangonj Raod , 169/1/A/2 Dholaipar,West jurain, Shyampur,Dhaka-1204.', 'Dhaka', '01713190724, 01730000000', NULL, 'Dhaka', 'jurain@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(153, 'Muktagacha Branch', 'Branch', 'Holding No.593, Muktagacha, Pourashava-Muktagacha, P.S. Muktagacha', 'Dhaka', NULL, NULL, 'Dhaka', 'muktagacha@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(152, 'Lauhajong Branch', 'Branch', 'U-Lauhajong, PO- Lauhagonj, Dist- Munshigonj', 'Dhaka', '01755546442, 01755546443', NULL, 'Dhaka', 'lauhajong@nblbd.com', NULL, '', NULL, '1', NULL, NULL),
(151, 'Bhagyakul Branch', 'Branch', 'Alam Plaza (1st Floor), Balashur Chowrasta, P.O. Bhagyakul, Union-Bhagyakul, P.S. Sreenagar', 'Dhaka', '01755546440, 01755546441', NULL, 'Dhaka', 'bhagyakul@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(150, 'Kholamora Branch ', 'Branch', 'Sungandha Shopping Mall, Kholamora Bazar, PO-Kholamora, P.S. Keranigonj', 'Dhaka', '01755547992, 01755000000', NULL, 'Dhaka', 'kholamora@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(148, 'Patuakhali Branch', 'Branch', '120 Natun Bazar, Sadar Road, P.S. Patuakhali', 'Barisal', '01755547994, 01755547995', NULL, 'Patuakhali', 'patuakhali@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(149, 'Madhabdi  Branch', 'Branch', 'Hazi Mobarak Plaza ( Ist & 2nd Floor) Holding No 335, Ward No 1', 'Dhaka', '01755547990, 01755547991', NULL, 'Narsingdi', 'madhabdi@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(147, 'Asadgate Branch', 'Branch', 'Heraledic Heights Plot No. 2/2 , Block-A , Mohammadpur, Housing Estate Mirpur Road P.S. Mohammadpur', 'Dhaka', '01755538437, 01755000000', NULL, 'Dhaka', 'asadgate@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(146, 'Kazirhat Branch', 'Branch', 'Babul Super Market (1st Floor), Union-Borokandi, P.O. Dubisaibor(Kazirhat), P.S.Jajira', 'Dhaka', '01755-538435', NULL, 'Shariatpur ', 'kazirhat@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(145, 'Bhedergonj Branch', 'Branch', 'P.O. Bhedargonj , P.S. Bhedargonj ,Pourashava- Bhedergonj', 'Dhaka', '01730-729172', NULL, 'Shariatput', 'bhedergonj@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(143, 'Niamatpur Branch', 'Branch', 'P.O. Niamatpur, P.S. Niamatpur', 'Rajshahi', '01730-729174', NULL, 'Naogaon', 'niamatpur@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(144, 'Pakundia Branch', 'Branch', 'P.O. Pakundia, P.S. Pakundia', 'Dhaka', '01730-729176', NULL, 'Kishorgonj', 'pakundia@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(141, 'Panchagarh Branch', 'Branch', 'Tatulia Raod,Islambagh,Holding NO.51', 'Rangpur', '01730727770, 0568-61288, 0568-61359', NULL, 'Panchagarh', 'panchagarh@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(142, 'Mirzapur Branch', 'Branch', 'P.O. Mirzapur, P.S. Mirzapur, HOlding No; 188', 'Dhaka', '01730-727774', NULL, 'Tangail', 'mirzapur@nblbd.com', NULL, NULL, '0', '1', '1', ''),
(140, 'Shakhipur Branch', 'Branch', 'Holding No: 282, P.S. Shakhipur,Pourashava: Shakhipur', 'Dhaka', '01730-738366', NULL, 'Tangail', 'shakhipur@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(138, 'Gharishar Branch', 'Branch', 'P.O. Gharishar, P.S. Naria', 'Dhaka', '01730-729170', NULL, 'Shariatpur', 'gharishar@nblbd.com', NULL, NULL, NULL, '1', NULL, NULL),
(139, 'Shariatpur Branch ', 'Branch', 'S R Plaza (1st Floor) Main Road, P.S. Palong, Upazilla- Palong, Pourashava- Shariatpur', 'Dhaka', '0601-51235,51236,01730738362', '88-0601-51235', 'Shariatpur', 'shariatpur@nblbd.com', NULL, NULL, NULL, '1', NULL, '1'),
(137, 'Halishahar Branch', 'Branch', 'Road No- 2 , Lane - 2 , Plot- 13/A, Asian Highway , Halishahar Housing Estate', 'Chittagong', '01730727772, 01715121934', NULL, 'Chittagong', 'halishahar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(135, 'Tongi Branch', 'Branch', 'Haque Asha Complex (1 st Floor), Anarkali Road, PO-Tongi Bazar, PS- Tongi, Pourashava- Tongi', 'Dhaka', '01730-706758', NULL, 'Dhaka', 'tongi@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(136, 'Isapura Branch', 'Branch', 'Abul Kashem Super Market (1st Floor), Union: Isapur, P.O. Isapur, P.S. Sirajdikhan, Munshigonj', 'Dhaka', '01730-738364', NULL, 'munshigonj', 'isapura@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(134, 'Chatak Branch', 'Branch', 'Taher Center, Chattak Bazar, P.O.  Chattak, P.S. Chattak, Dist. Sunamgonj', 'Sylhet', '01730-341388', NULL, 'Sunamgonj', 'chatak@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(133, 'Gachihata Branch', 'Branch', 'Gachihata Bazar, P.O. Duldia, Katiadi , Kishoreganj', 'Dhaka', '01730-700080', NULL, 'Kishergonj', 'gachihata@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(132, 'Shimanto  Square Branch', 'Branch', 'Shimanto  Square (4th Floor), Holding No. 80, Pilkhana, PS. Dhanmondi, Dist. Dhaka', 'Dhaka', '0171-3186987,9650870,9650872', '9560871', 'Dhaka', 'riflessquare@nblbd.com', NULL, 'Md Mahbub Anam Siddiqui', '0', '1', NULL, NULL),
(131, 'Barura Branch', 'Branch', 'Upazill:- Barura, P.S. Barura', 'Chittagong', '0173-0318564', NULL, 'Comilla', 'barura@nblbd.com', NULL, 'Md. Jahangir Hossain Bhuiyan', '0', '1', NULL, NULL),
(130, 'Singair Branch', 'Branch', 'P.O. Singair, P.S. Singair', 'Dhaka', '0173-0318853', NULL, 'Manikgionj', 'singair@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(129, 'Boalmari Branch', 'Branch', 'P.O. Boalmari, P.S. bOALMARI', 'Dhaka', '0173-0319994', NULL, 'Faridpur', 'boalmari@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(128, 'Netaiganj Branch', 'Branch', '2 Bangla Band Road , Narayangonj, Dhaka.', 'Dhaka', '0173-0318561', NULL, 'Narayangonj', 'netaigonj@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(125, 'Torkibandar Branch', 'Branch', 'P.O. & P.S. Gournadi, Dist. Barisal', 'Barisal', '0173-0318562', NULL, 'Barisal', 'torkibandar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(126, 'Kaligonj Branch', 'Branch', 'Naidanga Bhusan High School Road, Mahdhugonj Bazar, P.O. Naidanga, P.S. Kaligonj', 'Khulna', '0173-0318852', NULL, 'Jhenaidha', 'kaligonj@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(127, 'Rokeya Sharani Branch', 'Branch', '218/3/A West Kafrul , P.S. Shar-E-Bangla Nagar, Dist. Dhaka', 'Dhaka', '0173-0318563, 0181-9240679', NULL, 'Dhaka', 'rokeyasharani@nblbd.com', NULL, 'K.A.M Ahmed Hossain', '0', '1', NULL, NULL),
(124, 'Baghrabazar Branch', 'Branch', 'P.O. Baghrabazar, P.S. Sreenagar', 'Dhaka', '01730-318851', NULL, 'Munshigonj', 'baghrabazar@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(123, 'Hathazari Branch', 'Branch', 'Sattar Shopping Center, Kachari  Road, Hathazari Bazar, P.S. Hathazari, Dist. Chittagong', 'Chittagong', '0173-0318854', NULL, 'Chittagong', 'hathazari@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(121, 'Sonagazi Branch ', 'Branch', 'P.O. Sonagazi, P.S. Sonagazi, Dist. Feni', 'Chittagong', '01730-329687', NULL, 'Feni', 'sonagazi@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(122, 'CDA Avenue Branch', 'Branch', '1002 CDA Avenue, East Nasirabad, P.S. Panchlaish, Dist. Chiitagong  ', 'Chittagong', '0173-0318560', NULL, 'Chittagong', 'cda@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(119, 'Gouripur Branch', 'Branch', 'P.O. Gouripur, P.S. Daudkandi, Dist. Comilla', 'Chittagong', '0173-0329691', NULL, 'Comilla', 'gouripur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(120, 'Bhojeshwar Branch', 'Branch', 'Union: Bhojeshwar, P.O.Bhojeshwar, P.S. Naria', 'Dhaka', '0173-0319993', NULL, 'Shariatpur', 'bhojeshwar@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(118, 'Gopalpur Branch', 'Branch', 'P.O.: Gopalpur, P.S.: Gopalpur', 'Dhaka', NULL, NULL, 'Tangail', 'gopalpur@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(117, 'Belkuchi Branch', 'Branch', 'P.O.: Belkuchi,P.S.: Belkuchi', 'Rajshahi', '01713-258790, 01712-088696', NULL, 'Sirajgonj', 'belkuchi@nblbd.com', NULL, NULL, '0', '1', NULL, ''),
(115, 'Kanaipur Branch', 'Branch', 'Union- Kanaipur, PO.- Kanaipur, PS- Katawali', 'Dhaka', '0173-0326249', 'N/A', 'Faridpur', 'kanaipur@nblbd.com', 'N/A', 'Abu-Sayed Md Abdul Mannaf', '0', '1', NULL, ''),
(114, 'Sathibari Branch', 'Branch', 'Union-Durgapur, PO- Sathibari , PS- Mithapukur, Dist. Rangpur', 'Rajshahi', '0173-0326245', 'N/A', 'Rangpur', 'sathibari@nblbd.com', 'N/A', 'Mohammad Sarwar Alam', '0', '1', NULL, ''),
(113, 'Hajigonj Branch', 'Branch', 'Mirza Complex (1st Floor), Amin Road ,PO: Hajigonj. P.S. Hajigonj, Dist:Chandpur', 'Chittagong', '01730-329685', NULL, 'Chandpur', 'hajigonj@nblbd.com', NULL, 'Md Sohrab Hossain Sharif', '0', '1', NULL, NULL),
(112, 'Kartikpur Branch', 'Branch', 'Vill+Po:Kartikpur Branch Union:Ram Bhadrapur P.S: Vedergonj Dist:Shariatpur', 'Dhaka', '0 1711-302193', NULL, 'Shariatpur', 'kartikpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(111, 'New Eskaton Branch', 'Branch', 'Queen''s Garden Point, 208 Eskaton Road, Bara Magh Bazar', 'Dhaka', '02-9355957, 0173-0313008', NULL, 'Dhaka', 'eskaton@nblbd.com', NULL, 'Mr. Md. Sultan Ahammed SVP & Manager', '1', '1', NULL, NULL),
(110, 'Kulaura Branch', 'Branch', 'Haji Cherag Ali Shopping Center, 190 , Moulovibaza Road, P.O. & P.S. Kulaura, DIst. Moulovibazar', 'Sylhet', '01730-326248', NULL, 'Sylhet', 'kulaura@nblbd.com', NULL, 'Mr. Motahar Hossain AVP & Manager', '0', '1', NULL, NULL),
(109, 'Fenchugonj Branch', 'Branch', 'Fenchugonj Bazar, Unio-Fenchugonj, PO & PS-Fenchugonj', 'Sylhet', '01730-32647', NULL, 'sylhet', 'fenchugonj@nblbd.com', NULL, 'Mr. Md Ashraf Hossain , SPO & Manager', '0', '1', NULL, NULL),
(108, 'Kalihati Branch', 'Branch', 'Boga Super Market,PO + PS : Kalihati, Dist: Tangail, ', 'Dhaka', NULL, NULL, 'Tangail', 'kalihati@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(107, 'Bhatiary Branch', 'Branch', 'D.T. Road, Bhatiary Dakshin Bazar,P.S. Sitakunda', 'Chittagong', '031-2780890, 031-2780891, 031-2780892, 01730333628', NULL, 'Chittagong', 'bhatiary@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(106, 'Banani Branch', 'Branch', 'H # SW 71,R # 11,Banani, Dhaka', 'Dhaka', '8837176, 8837104', '88-02-9820911', 'Dhaka', 'banani@nblbd.com ', NULL, NULL, '1', '1', NULL, '1'),
(103, 'Modaffargonj  Branch', 'Branch', 'Sazzad Super Market,PS.-Laksham,Comilla', 'Chittagong', '01730-303588', NULL, 'Comilla', 'modaffargonj@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(104, 'Megula Branch', 'Branch', 'Megula Bazar , PS- Dohar, Dhaka', 'Dhaka', '01730-303587', NULL, 'Dhaka', 'megula@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(105, 'Maijdi Court Branch', 'Branch', '632/A/B/C Main Road,Maijdi Court,Suddaram,Noakhali', 'chittagong', '01817-125935', NULL, 'Noakhali', 'maijdicourt@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(102, 'Chawk Bazar Branch', 'Branch', 'Fortune Tower,112/113Karpashgola road Chawkbazar,Chittagong', 'chittagong', '01730-303589', NULL, 'Chittagong', 'Chawkbazar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(101, 'Anderkilla  Branch', 'Branch', 'K B Aman Ali Tower, 30, Anderkilla,chittagong', 'chittagong', '031-2854513,2854514', NULL, 'Chittagong', 'anderkilla@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(100, 'Bhaluka Branch', 'Branch', '214/8 Asad Market,Bazar Road Bhaluka,Mymensingh', 'Dhaka', '09022-56077,56244', '09022-56077', 'Mymensingh', 'bhaluka@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(99, 'Gaibandha Branch', 'Branch', 'Pran Gobinda Plaza, Par Road,Gaibandha', 'Rangpur', '0541-62531,62532', '88-0541-62531', 'Gaibandha', 'gaibandha@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(98, 'Pragati Sarani Branch', 'Branch', 'Ka-216,Hakim Plaza ,Kuril,Badda,Dhaka-1229', 'Dhaka', '8849296-7', '88-02-8849296', 'Dhaka', 'pragatisarani@nblbd.com', NULL, NULL, '1', '1', NULL, NULL),
(97, 'Jatrabari Branch', 'Branch', 'Samiullah Plaza(2nd Floor)Shahed Faruk Road,Jatrabari,Dhaka-1204', 'Dhaka', '7554761-62', '88-02-7554761-62', 'Dhaka', 'jatrabari@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(96, 'Kadamtoli Branch', 'Branch', 'Al Ferdous Shopping Complex (1st Floor),Post Office-Sylhet, P.S-Kotowali, Dist-Sylhet', 'Sylhet', '(0821) - 728604, (0821) - 728605', '(0821) - 728605', 'Sylhet', 'kadamtoli@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(95, 'Shibchar Branch', 'Branch', 'Mollah New Super Market, 1216, Sadar Road,Shibchar Bazar, P.S-Shibchar, Dist-Madaripur.', 'Khulna', '06624-56376,06624-56377', '88-06624-56376', 'Madaripur', 'shibchar@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(94, 'Tongibari Branch', 'Branch', 'Kazi Market(1st floor), P.O.&P.S.-Tongibari, District- Munshigonj, ', 'Dhaka', '06926-74048,74049', NULL, 'Munshigonj', 'tongibari@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(93, 'Kaliakoir Branch', 'Branch', 'Holding No.-39, Kaliakoir Bazar, District- Gazipur', 'Dhaka', '06822-25131, 06822-52132', NULL, 'Gazipur', 'kaliakoir@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(92, 'Shahajadpur Branch', 'Branch', '493,Solaiman Shopping Complex,BSCIC Road,Dariapur, Shahajadpur,Sirajgonj.', 'Rajshahi', '88-07527 - 64560, 01711954949', NULL, 'Sirajgonj', 'shahajadpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(91, 'Mirarsari Branch', 'Branch', 'D.T. Road Mirarssari, Chittagong', 'Chittagong', '03024-56229, 56230', NULL, 'Chittagong', 'mirersharai@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(90, 'Lake Circus Branch', 'Branch', '156,Lake Circus, Mirpur Road,Dhanmondi, Kalabagan,', 'Dhaka', '9133275, 9111524', NULL, 'Dhaka', 'lakecircus@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(89, 'Char Fashion  Branch', 'Branch', 'Jinnahgar Union Parishid, Sadar Road, P.S : Char Fassion,    Dist : Bhola,', 'barisal', '04923-74103,74104', '88-04923-74103', 'Bhola', 'charfassion@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(88, 'Bashurhat Branch', 'Branch', 'City Plaza ( 1st Floor) Main Road, P.O Bashurhat,  Companigonj, Noakhali', 'Chittagong', '01713335825,03223-56245, 56248 ', NULL, 'Nowakhali', 'bashurhat@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(87, 'Muradpur Branch', 'Branch', '95, Muradpur, Punchhlaish,Chittagong', 'Chittagong', '88-031-2551448-9', '88-03-2551448', 'Chittagong', 'muradpur@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(86, 'Sunamgonj  Branch', 'Branch', 'Khaledabad Bhaban, Station Road, P.O., P.S & Pourashava- Sunumgonj', 'Sylhet', '0871-61550, 0871-61551', '88-0871-61550', 'Sunamgonj', 'sunamgonj@nblbd.com ', NULL, NULL, '0', '1', NULL, NULL),
(85, 'Natore Branch', 'Branch', '288,Kanaikhali,Old Bus Stand, Natore - Dhaka Road, P.O & P.S : Natore, Dist : Natore.', 'Rajshahi', '0771-61108, 0771-61109', '88-0771-61108', 'Natore', 'natore@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(84, 'Chowgacha  Branch', 'Branch', 'Chowgacha Bazar, High School Road, PO & PS : Chowgacha, Dist : Jessore', 'Khulna', '04224-56466, 56566', '88-04224-56566', 'Jessore', 'chowgacha@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(83, 'Bhanga Branch', 'Branch', 'Bhanga Bazar Main Road, P.O & P.S : Bhanga, Purasava : Bhanga,  Dist : Faridpur.', 'Dhaka', '06323-56512, 06323-56513, 01713336384', NULL, 'Faridpur', 'bhanga@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(82, 'Naria Branch', 'Branch', 'New Market ( 1st Floor), Naria Bazar Main Road, P.O & P.S : Naria, Dist : Shariatpur.', 'Dhaka', '0601-59182', '88-0601-59182', 'Shariatpur', 'naria@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(81, 'Godagari Branch', 'Branch', '366,Dying Para ( Bus Stand) Sreemantapur Rajshahi Chapai Nawabgonj Highway Road, Godagari  Dist ? Rajshahi.', 'Rajshahi', '07225-56286,56287', '88-07225-56287', 'Rajshahi', 'godagari@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(80, 'Modhupur Branch', 'Branch', 'Plot No. 354, Mymensingh Road, P O : Madhupur, Dist : Tangail.', 'Dhaka', '09228-56068, 88047', NULL, 'Tangail', 'modhupur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(79, 'Sreenagor Branch', 'Branch', 'Mridah Super Market, Sreenagar Chakbazar, Sreenagar, Dist : Munshigonj.', 'Dhaka', '038942-88290, 88291', '06925-88290, 88291', 'Munshigonj', 'sreenagar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(77, 'Chouddagram Branch', 'Branch', 'Hajee Sharafat Ali Mansion,Chouddagram,Comilla.', 'Chittagong', '08020-56207-8 , 01713-388887', NULL, 'Comilla', 'chouddagram@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(78, 'Golapgonj Branch', 'Branch', ' 78/1, Ranaping Square,Golapgonj,Chowmuhani,Golapgonj, Dist- Sylhet', 'Sylhet', '08227-56220, 08227-56221,', NULL, 'Tangail', 'golapgonj@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(76, 'Sherpur Branch', 'Branch', '87, College Road, Tinani Bazar, Sherpur.', 'Dhaka', '0931-61028, 61048', '88-0931-61028', 'Sherpur', 'sherpur@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(75, 'Jamalpur Branch', 'Branch', 'Mokaddes Mansion,H # 161,Road # 1,Doyamoyee Road,Jamalpur', 'Dhaka', '0981-62718, 62719', NULL, 'Jamalpur', 'jamalpur @nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(74, 'Thakurgaon  Branch', 'Branch', 'Town Plaza, North Circular Road, Thakurgaon,', 'Rangpur', '880-561-61999, 52687', '88-0561-52217', 'Thakurgaon', 'thakurgaon@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(73, 'Z. H. Sikder Medical  College', 'Branch', 'Z. H. Sikder Womens'' Medical College Rayer Bazar, Dhaka.', 'Dhaka', '9111160, 8116005, 01713388882', NULL, 'Dhaka', 'zhswmc@nblbd.com', NULL, NULL, '1', '1', NULL, NULL),
(72, 'Gazipur  Branch', 'Branch', 'Tanvir Plaza (1st Floor), Bazar Bus  Stand, Gazipur', 'Dhaka', '9256548, 9261066, 9262559, 01713388917,', NULL, 'Gazipur', 'gazipur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(71, 'Habigonj Branch', 'Branch', 'Al-Hera Shopping City (1st floor),Kalibari Road,Habigonj. ', 'Sylhet', '0831-61411,53191, 01711922366', NULL, 'Habigonj', 'habigonj@nblbd.com ', NULL, NULL, '0', '1', NULL, '1'),
(70, 'Bishwanath Branch', 'Branch', 'Al-Hera Shopping City (1st floor) PO & PS : Bishwanath, Dist :  Sylhet.', 'Sylhet', '08224-56024,038911-82046, 01711923074', NULL, 'Sylhet', 'bishwanath@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(68, 'Uttara Branch', 'Branch', 'Plot # 103, Section # 7, Dhaka - Mymensingh Road, Uttara C/A Dhaka -1230', 'Dhaka', '8958749, 8958444, 01713388881,', NULL, 'Dhaka', 'uttara@nblbd.com', NULL, NULL, '1', '1', NULL, NULL),
(69, 'Mirpur Branch,Dhaka', 'Branch', 'Plot # 4, Block # KA, Section # 6, Mirpur Main Road No. 1 Dhaka', 'Dhaka', '9013216, 8051551, 8012091, 01713388882', '88-02-9013216', 'Dhaka', 'mirpur@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(65, 'Kishoregonj Branch', 'Branch', '1158 Hajee Akkas Market, Barabazar, Kishoregonj', 'Dhaka', '0941-62509,62060, 01713330624', NULL, 'Kishoregonj', 'kishoregonj@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(66, 'KDA Branch', 'Branch', 'KDA Commercial Area, BHBFC Bhaban (Ground Floor) 15-16, Khan A Sabur Road, Khulna.', 'Khulna', '041-731866, 731877', NULL, 'KDA', 'kda@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(67, 'Gulshan Branch ', 'Branch', '97/1, Gulshan Avenue, Dhaka-1212', 'Dhaka', '880-2-9840590, 01713388878', NULL, 'Dhaka', 'gulshan@nblbd.com', NULL, NULL, '1', '1', NULL, NULL),
(63, 'Dhanmondi  Branch', 'Branch', '1st Floor, Safura Green, 761 Satmasjid Road, Dhanmondi R/A, Dhaka- 1205', 'Dhaka', '880-02-9117072, 8143754, 9139638, 9123603', '880-02-9123596', 'Dhaka', 'dhanmondi@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(64, 'Cox''s Bazar Branch', 'Branch', 'Main Road, Cox''s Bazar.', 'Chittagong', '0341-64666, 63714', '88-04-51184', 'Cox''s Bazar ', 'coxsbazar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(62, 'Joypurhat Branch', 'Branch', 'Golam Aftab Super MarketSadar Road, Joypurhat', 'Rajshahi', ' 880-571-62647, 01713330612', ' 880-571-62647', 'Joypurhat', 'joypurhat@nblbd.com', NULL, NULL, '1', '1', NULL, NULL),
(61, 'Ishwardi Branch', 'Branch', 'Station Road, Ishwardi, Pabna.', 'Rajshahi', '880-7326-63835, 63695, 01713330610', NULL, 'Pabna', 'ishwardi@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(59, 'Subidbazar Branch', 'Branch', 'Sylhet Sunamgonj Road, Sylhet', 'Sylhet', '880-821-712955, 712448, 01711923062', '880-821-712955', 'Sylhet', 'subidbazar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(60, 'Sheikh Mujib Road Branch', 'Branch', '546, Sheikh Mujib Road, Chittagong', 'Chittagong', '031-714648, 714647, 01713388906', '88-031-714648', 'Chittagong', 'sheikhmujib@nblbd.com', 'NBLBBDDH060', NULL, '1', '1', NULL, NULL),
(58, 'Motijheel Branch', 'Branch', '3, Rajuk Avenue, Motijheel C/A , Dhaka - 1000', 'Dhaka', '9567558-9, 9553569 Ext: 102, 01713388876', '880-2-9567559', 'Dhaka', 'mtijheel@nblbd.com', 'NBLBBDDHO58', NULL, '1', '1', NULL, '1'),
(57, 'Jhalakhati Branch', 'Branch', '354, Fariapatty, Jhalakathi.', 'barisal', '0498-62795, 63464, 01713330617, 01711-230974', NULL, 'Jhalakhati', 'jhalakathi@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(56, 'Bhola Branch', 'Branch', 'K. Jahan Shopping Complex 677, Sadar Road, Bhola.', 'Barisal', '0491-61667, 61827, 01713330615, 01711-230426', NULL, 'Bhola', 'bhola@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(55, 'Pahartali Branch', 'Branch', '2153, DT Road, Pahartali,Chittagong', 'Chittagong', '031-2770826, 751120, 751800, 01713388908', NULL, 'Chittagong', 'pahartali@nblbd.com ', NULL, NULL, '0', '1', NULL, NULL),
(54, 'Islampur Branch', 'Branch', '15-16 Islampur Road ( 1st Floor), Dhaka.', 'Dhaka', '7390609, 01713388877, 01199-810811', '880-2-7390609', 'Dhaka', 'islampur@nblbd.com', 'NBLBBDDHO54', NULL, '1', '1', NULL, NULL),
(53, 'Chapai Nawabgonj Branch', 'Branch', 'Kabir Bhaban, Thana Road, Chapainawabgonj,', 'Rajshahi', '0781-61470, 56417, 01713330606,  01711136879', '(0781) 55054', 'Chapai Nawabgonj', 'chapai@nblbd.com', 'NBLBBDDHO53', NULL, '1', '1', NULL, '1'),
(52, 'Savar Bazar  Branch', 'Branch', 'Quraishi Super Market, Savar Bazar Road, Savar, Dhaka.', 'Dhaka', '7710661, 7710521, 01713-019285', NULL, 'Dhaka', 'savar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(50, 'Pagla Bazar Branch', 'Branch', 'Al-Haj Afsar Karim Bhaban, D N Road, Pagla,Narayangonj', 'Dhaka', ' 880-2-7604162, 01713388880', NULL, 'Narayangonj', 'paglabazar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(51, 'Shibgonj Branch', 'Branch', 'Shibgonj Bazar, Sylhet-3100,', 'Sylhet', '880-821-760525, 760575, 01711923073', NULL, 'Sunamgonj', 'shibgonj@nblbd.com ', NULL, NULL, '0', '1', NULL, NULL),
(49, 'N. B. Hall Road Branch', 'Branch', '20/1, North Brook Hall Road, Bangla Bazar, Dhaka - 1100', 'Dhaka', ' 7113829, 01713388879', '880-2-7113829', 'Dhaka', 'nbhr@nblbd.com', 'NBLBBDDHO49', NULL, '1', '1', NULL, '1'),
(47, 'Chaktai Branch', 'Branch', '134, New Chaktai,Kotwali, Chittagong.', 'Chittagong', '031-619035,619327, 65527, 01713388907', '88-031-619035', 'Chittagong', 'chaktai @nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(48, 'Kawranbazar branch', 'Branch', ' 7-9 B.T.M.C Bhaban  Kawran Bazar, Dhaka- 1205', 'Dhaka', 'Manager: 8127223', '880-2-8127223', 'Dhaka', 'kawranbazar@nblbd.com', 'NBLBBDDHO48', NULL, '1', '1', NULL, '1'),
(46, 'Bandura Branch', 'Branch', 'Saimon Super Market, Bandura Bazar, PO: Hasnabad, PS: Nawabgonj, Dhaka - 1321', 'Dhaka', '01819-412042', NULL, 'Dhaka', 'bandura@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(45, 'Sandwip Branch', 'Branch', 'Haramia Upazila Complex, Boktarhat, Sandwip', 'Chittagong', '01713-388885', NULL, 'Swandip', 'sandwip@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(44, 'Beanibazar  Branch', 'Branch', 'PO & PS - Beanibazar, Sylhet. ', 'Sylhet', '880-8223-88343, 01713388916', NULL, 'Sylhet', 'beanibazar@nblbd.com  ', NULL, NULL, '0', '1', NULL, NULL),
(43, 'Mohakhali Branch', 'Branch', '9, Mohakhali C/A, Dhaka - 1212', 'Dhaka', '8821059, 8812397,9898639, 9861938 Ext : 102, 01713388868', '880-2-8821390', 'Dhaka', 'mohakhali@nblbd.com', 'NBLBBDDHO43', NULL, '1', '1', NULL, NULL),
(42, 'Patiya Branch ', 'Branch', 'Samadia Super Market, ( 1st Floor),  Patiya', 'Chittagong', '03035-56509, 01713388909', NULL, 'Chittagong', 'patiya@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(41, 'Kushtia Branch', 'Branch', '18, Nowab Sirajuddoula Road,Razzak Super Market,Kustia', 'khulna', '071-61844,73614 , 01713-330620', '880-71-61109', 'Kushtia', 'kushtia@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(39, 'Naogaon Branch', 'Branch', '405 Sadar Road, Municipal Area, Naogaon.', 'Rajshahi', '880-741-61786, 52176, 52525, 01713330609', ' 880-741-61786', 'Naogaon', 'naogaon@nblbd.com', NULL, NULL, '1', '1', NULL, NULL),
(40, 'Sirajgonj Branch', 'Branch', '673-674 Sarwardi Sarak, Sirajgonj', 'Rajshahi', '880-751-62428, 62372 , 01711816771', '880-751-62428', 'Sirajgonj', 'sirajgonj@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(38, 'Saidpur Branch', 'Branch', '24 Rangpur Dinajpur Road, Saidpur.saidpur', 'Rangpur', '880-5526-2490, 88151', NULL, 'Saidpur', 'saidpur@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(37, 'Dinajpur Branch', 'Branch', 'Goneshtala Road (West of Mordern Cinema Hall)  Dinajpur', 'Rangpur', '880-531-64744, 63288, 01713330608, 01711-18731', NULL, 'Dinajpur', 'dinajpur@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(36, 'Pabna Branch', 'Branch', 'Haque Super Market (1st Floor) Abdul Hamid Road, Pabna', 'Rajshahi', '880-731-64499, 66265, 01713330604', ' 880-731-66265', 'Pabna', 'pabna@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(35, 'Zindabazar Branch', 'Branch', 'Westworld Shopping City 2nd Floor,Jallarpar, Sylhet-3100', 'Sylhet', '880-821-717157, 712227, 01711922538', NULL, 'Sylhet', 'zindabazar@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(34, 'Tajpur Branch', 'Branch', 'PO-Tajpur, PS : Balagonj,              Dist : Sylhet.', 'Sylhet', '08242-56024, 56655, 01711922951', NULL, 'Sylhet', 'tajpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(33, 'Mirpur Bazar', 'Branch', 'Chand Ali Shopping Centre Jagannathpur, Dist- Sunamgonj,', 'Sylhet', '01711-923075, 01729-074296', NULL, 'Shunamgonj', 'mirpurbazar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(32, 'Malibagh Branch', 'Branch', '474 Malibagh, DIT Road, Dhaka', 'Dhaka', '9330159, 9357075, 8350309, Mobile :01713388875', '880-29330159 ', 'Dhaka', 'malibagh@nblbd.com', 'NBLBBDDHO32', NULL, '1', '1', NULL, NULL),
(31, 'Babu Bazar Branch', 'Branch', '4, Azizullah Road, Babu Bazar,  Dhaka - 1100', 'Dhaka', '7318975, 7312017,  01713388870,', '880-2-7318975', 'Dhaka', 'babubazar@nblbd.com', 'NBLBBDDH031', NULL, '1', '1', NULL, NULL),
(29, 'Daganbhuiyan Branch', 'Branch', 'Daganbhuiyan Bazar, Daganbhuiyan', 'Chittagong', '03323-79047, 79094, 01711068738', '03323-79047', 'Feni ', 'daganbhuiyan@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(30, 'Chandpur Branch', 'Branch', '116/108, SK Mansion,Comilla Road,Natun Bazar,Chandpur.', 'Chittagong', '0841-63309,65527', '88-0841-63723', 'Chandpur', 'chandpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(27, 'Faridpur Branch ', 'Branch', '83, Chakbazar, Al-haji Abdul Hamid Building, Faridpur', 'Dhaka', '0631-62542, 62577, 01713330614, ', ' 0631-63446', 'Faridpur', 'faridpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(28, 'Jessore Branch', 'Branch', '11-12, Garikhana Main Road, Jessore.', 'Khulna', '0421-73684, 66448, 01713330618', '0421-63652', 'Jessore', 'jessore@nblbd.com', 'NBLBBDDHO29', NULL, '1', '1', NULL, '1'),
(25, 'Tangail Branch', 'Branch', '209, Victoria Road, Tangail.', 'Dhaka', '0921-51514, 54222, 53608, 01713330625', '0921-51514', 'Tangail', 'tangail@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(26, 'Mymensingh Branch', 'Branch', '29/1,Nishikanta Gosh Road(Durgabari),Mymensingh, ', 'Dhaka', ' 091-65759, 65803, 01713330626', NULL, 'Mymensingh', 'mymensingh@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(23, 'Narsingdi Branch', 'Branch', '155, Sutapatti Main Road, Narsingdi', 'Dhaka', '0628-62378, 62353, 01713388918', '880-628-62378', 'Narsingdi', 'narsingdi@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(24, 'Satkhira Branch ', 'Branch', '32-33, Old College Road Suttanpur Bazar, Satkhira.', 'Khulna', '0471-63427, 62107, 01713330619', '880-4716-3427', 'Satkhira', 'satkhira@nbdbd.com', 'NBLBBDDHO24', '&nbsp;', '1', '1', NULL, '1'),
(22, 'Brahmanbaria Branch', 'Branch', '58-60, Kalasreepara,New Cinema Hall Road,B.Baria.', 'Chittagong', '0851-52600,52010, 01713388910', '880-851-58010', 'Brahmanbaria', 'brahmanbaria@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(21, 'Foreign Exchange Branch', 'Branch', 'Taranga Complex, 19, Rajuk Avenue Dhaka- 1000.', 'Dhaka', ' 9566871, 9554733, 01713388867', '880-2-9563225', 'Dhaka', 'f.exchange@nblbd.com', 'NBLBBDDHO21', '&nbsp;', '1', '1', NULL, NULL),
(20, 'Sreemongal Branch', 'Branch', '187, Moulvibazar Road,Sreemongal,Moulvibazar', 'Sylhet', '880-8626-778, 88135, 01711922602', NULL, 'Sreemongal', 'sreemongal@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(19, 'Moulvibazar Branch', 'Branch', '95 Court Road,Moulvibazar. ', 'Sylhet', '880-861-52454, 52681, Mobile : 01711-922952', NULL, 'Moulvibazar', 'moulvibazar@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(18, 'Mohammadpur Branch', 'Branch', 'Plot no.-9,Block ? C, Tajmohal road, Mohammadpur,Dhaka.', 'Dhaka', '01713-335824', NULL, 'Dhaka', 'nblmpur@yahoo.com', NULL, NULL, '0', '1', NULL, NULL),
(17, 'Chowmuhani Branch', 'Branch', 'Dalia Super Market, 1522, Karimpur Road, Chowmuhani, Noakhali', 'Chittagong', '0321-52353, 51790, 01713330628', NULL, 'Nowakhali', 'chowmuhani@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(15, 'Elephant Road Branch', 'Branch', '3, Elephant Road, Dhaka- 1205', 'Dhaka', '8611794, 8620846, 01713388873', '880-2-8611794', 'Dhaka', 'elephantroad@nblbd.com', 'NBLBBDDHO15', NULL, '1', '1', NULL, NULL),
(16, 'Jubilee Road Branch', 'Branch', 'Niaz Manjil, 922 Jubilee Road, Chittagong', 'Chittagong', '031-61155,630925, 01713388905', '880-31-637969', 'Chittagong', 'jubileeroad@nblbd.com', 'NBLBBDDH016', NULL, '1', '1', NULL, NULL),
(14, 'Bogra Branch', 'Branch', 'Barogola Bazar, Bogra ,', 'Rajshahi', '051-72540, 72912, 61059, 67983,01713330607', ' 88-051-72540', 'Bogra', 'bogra@nblbd.com', 'NBLBBDDHO14', NULL, '1', '1', NULL, '1'),
(13, 'Barisal  Branch', 'Branch', '100, Sadar Road, Barisal -8200', 'barisal', '0431-64166 Mobile : 01713330616', '88-0431-53266 ', 'Barisal', 'barisal@nblbd.com', 'NBLBBDDHO13', NULL, '1', '1', NULL, '1'),
(12, 'Bangshal Road Branch', 'Branch', '22, Bangshal Road, Dhaka- 1100', 'Dhaka', '9565878, 01713388000', ' 880-2-9565877', 'Dhaka', 'bangshal@nblbd.com', 'NBLBBDDHO12.', NULL, '1', '1', NULL, NULL),
(11, 'Feni Branch', 'Branch', 'Jahiriya Mosque Waqf, Estate Market ( 1st Floor) S S K Road,Feni', 'Chittagong', ' 0331-74344 ,  73188, 61256, 01713103051', '88-0331-74344', 'Feni', 'feni@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(10, 'Narayangonj Branch', 'Branch', 'Rahat Plaza', 'Dhaka', '7630441, Mobile : 01713388884, 01199-815063', ' 880-2-9716641', 'Narayangonj', 'narayangonj@nblbd.com', 'NBLBBDDHO10', NULL, '1', '1', NULL, '1'),
(9, 'Comilla Branch', 'Branch', 'Rajganj,PO Box-04, Comilla', 'Chittagong', '081-65901 , 76420,01713105057', '88-081-76420', 'Comilla', 'comilla@nblbd.com', NULL, NULL, '0', '1', NULL, '1'),
(8, 'Sylhet Branch', 'Branch', 'Laldighirpar, Sylhet', 'Sylhet', '880-821-715982, 715457, 724908,01711923019', '880-821-715982', 'Sylhet', 'sylhet@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(7, 'Khulna Branch', 'Branch', '2, Sir Iqbal Road, Khulna.', 'Khulna', '041-721757,   720607', '880-041-722051', 'Khulna', 'khulna@nblbd.com', 'NBLBBDDH007', NULL, '1', '1', NULL, '1'),
(6, 'Rangpur Branch ', 'Branch', 'Chamber Bhaban(1st floor),D.L. Roy Road, Rangpur,', 'Rangpur', '880-521-65749, 62469, 01713330603,65312TLX  : 671468', '880-521-63583', 'Rangpur', 'rangpur@nblbd.com', 'NBL RG BJ', NULL, '1', '1', NULL, NULL),
(5, 'Rajshahi Branch', 'Branch', '106-109 Shaheb Bazar, Rajshahi.', 'Rajshahi', '880-721-774483, 772563, 775563,01713201051 ', '880-721-774870', 'Rajshahi', 'rajshahi@nblbd.com', NULL, NULL, '1', '1', NULL, '1'),
(3, 'Imamgonj Branch', 'Branch', '1, Moulvi Bazar, Dhaka', 'Dhaka', '7316505, 7316414, 7318948,01713190705,01713388869', '880-2-7319766,', 'Dhaka', 'imamgonj@nblbd.com', 'NBLBBDDHO3', NULL, '1', '1', NULL, NULL),
(2, 'Khatungonj Branch', 'Branch', '34, Chand Meah Lane, Khatungonj, Chittagong.', 'Chittagong', '031-611012-13,01713388904', '880-31-610806', 'Chittagong', 'khatungonj@nblbd.com', 'NBLBBDDH002', NULL, '1', '1', NULL, NULL),
(1, 'Dilkusha Branch', 'Branch', '48, Dilkusha Commercial Area, Dhaka - 1000.', 'Dhaka', '880-2-7168729-31, 9550823-5, 9563081-5, 9550897, 9560649,01945115904', '880-2-9564356', 'Dhaka', 'dilkusha@nblbd.com', 'NBLBBDDH015', NULL, '1', '1', NULL, NULL),
(4, 'Agrabad Branch', 'Branch', '67, Agrabad C/A,  Chittagong', 'Chittagong', '031-716163-4, EXT - 114, 716285,01713388903', '880-31-710472', 'Chittagong', 'agrabad@nblbd.com', 'NBLBBDDH004', NULL, '1', '1', NULL, NULL),
(116, 'Abdullahpur Branch', 'Branch', 'Minnat Plaza ( Ist Floor), Abdullahpur Bazar,  Dhaka Maowa Road, Kalakandi , P.O.: Abdullahpur Bazar ,  P.S.: Keranigonj', 'Dhaka', '01711-002297', NULL, 'Dhaka', 'abdullahpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(172, 'Joina Bazar', 'Branch', 'Noich Tower, Dhanua,PS:Sreepur', 'Dhaka', '01731-088199', NULL, 'Gazipur', 'joina@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(173, 'Kapasia Branch', 'Branch', 'Ekta Plaza,Kapasia Bazar, Union+PS:kapasia', 'Dhaka', '01743-912524', NULL, 'Gazipur', 'kapasia@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(174, 'Phulpur Branch', 'Branch', 'Holding No.28, Sherpur Road, Pourashava-Phulpur, PS-Phulpur', 'Dhaka', '01713-425996', NULL, 'Mymenshingh', 'phulpur@nblbd.com', NULL, NULL, '0', '1', NULL, NULL),
(175, 'Baluchar Branch', 'Branch', 'Moyuree Mollah Shopping Complex, Union-Baluchar(Ward No. 4),PS-Sirajdikhan', 'Dhaka', '01713-190853', NULL, 'Munshigonj', 'baluchar@nblbd.com', NULL, NULL, '0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cibta_interest`
--

DROP TABLE IF EXISTS `cibta_interest`;
CREATE TABLE IF NOT EXISTS `cibta_interest` (
  `cibta_interest_id` int(11) NOT NULL AUTO_INCREMENT,
  `cibta_interest_category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cibta_interest_limit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cibta_interest_amt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cibta_interest_effective_from` date NOT NULL,
  `cibta_interest_tenor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cibta_interest_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cibta_interest`
--

INSERT INTO `cibta_interest` (`cibta_interest_id`, `cibta_interest_category`, `cibta_interest_limit`, `cibta_interest_amt`, `cibta_interest_effective_from`, `cibta_interest_tenor`) VALUES
(1, 'SB', 'Bellow 01 Crore', '4.00%', '2014-05-01', ''),
(2, 'SB', '01 Crore to Bellow 25 Crore', '4.50%', '2014-05-01', ''),
(3, 'SB', '25 Crore to Bellow 100 Crore', '6.00%', '2014-05-01', ''),
(4, 'SB', '100 Crore & above', '7.00%', '2014-05-01', ''),
(5, 'SND', 'Bellow 01 Crore', '5.00%', '2014-05-01', ''),
(6, 'SND', '01 Crore to Bellow 25 Crore', '6.00%', '2014-05-01', ''),
(7, 'SND', '25 Crore to Bellow 50 Crore', '6.50%', '2014-05-01', ''),
(8, 'SND', '50 Crore to Bellow 100 Crore', '8.00% *', '2014-05-01', ''),
(10, 'SND', '100 Crore & above', '8.00% *', '2014-05-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

DROP TABLE IF EXISTS `committee`;
CREATE TABLE IF NOT EXISTS `committee` (
  `comm_sl` int(11) NOT NULL AUTO_INCREMENT,
  `comm_id` int(2) NOT NULL,
  `mem_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pos_index` int(3) NOT NULL,
  `com_desig` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`comm_sl`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`comm_sl`, `comm_id`, `mem_name`, `designation`, `pos_index`, `com_desig`) VALUES
(31, 1, 'Mrs. Monowara Sikder', 'Director', 2, 'Member'),
(30, 1, 'Ms. Parveen Haque Sikder', 'Director', 1, 'Chairperson'),
(29, 3, 'Mr. Ismail Hossain', 'Senior Principal Officer', 290, 'Member'),
(28, 3, 'Mr. Tariqul Islam', 'Asst. Vice President', 280, 'Member'),
(27, 3, 'Mr. Mahmud-Al-Hasan', 'Senior Asst. Vice President', 270, 'Member'),
(26, 3, 'Ms. Salima Akhtar', 'Senior Asst. Vice President', 260, 'Member'),
(25, 3, 'Ms. Laila Afroze', 'Senior Asst. Vice President', 250, 'Member'),
(24, 3, 'Mr.  Krishna Kamal Ghose', 'Vice President', 240, 'Member'),
(23, 3, 'Mr.  Munshi Abu Zakaria', 'Vice President', 230, 'Member'),
(22, 3, 'Mr. Goutam Arindam Barua', 'Vice President', 220, 'Member'),
(21, 3, 'Mr. Muhammad Mahmudul Haque', 'Senior Vice President', 210, 'Member'),
(20, 3, 'Mr. Md. Abdul Wahab', 'Senior Vice President', 200, 'Member'),
(19, 3, 'Mr. Md. Saiful Islam', 'Senior Vice President', 190, 'Member'),
(18, 3, 'Mr. Jahangir Bin Hamid', 'Senior Vice President', 180, 'Member'),
(17, 3, 'Mr.  Sk Abdul Majid', 'Senior Vice President', 170, 'Member'),
(16, 3, 'Mr. Moazzem Hussain', 'Senior Vice President', 160, 'Member Secretary	'),
(15, 3, 'Mr. Shafiq Ullah Khan', 'Senior Vice President', 150, 'Member'),
(14, 3, 'Mr. Hossain Akther Chowdhury', 'Executive Vice President', 140, 'Member'),
(13, 3, 'Mr. Kazi Kamal Uddin Ahmed', 'Executive Vice President', 130, 'Member'),
(12, 3, 'Mr.  Mohammad Salim', 'Executive Vice President', 120, 'Member'),
(11, 3, 'Mr.  Nizam Ahmed', 'Executive Vice President', 110, 'Member'),
(10, 3, 'Mr. M. A. Wadud', 'Senior Executive Vice President', 100, 'Member'),
(9, 3, 'Mr. Forhad Ahmad Chowdhury', 'Senior Executive Vice President', 90, ' Member'),
(8, 3, 'Mr. Md Abdus Sobhan Khan', 'Senior Executive Vice President', 80, 'Member'),
(7, 3, 'Mr. Mohammad Abu Jafar', 'Senior Executive Vice President', 70, 'Member'),
(6, 3, 'Mr.  Syed Mohammad Bariqullah', 'Deputy Managing Director', 60, 'Member'),
(5, 3, 'Mr. Abdul Hamid Mia', 'Deputy Managing Director', 50, 'Member'),
(4, 3, 'Mr.  Nazib Uddin Bhuiyan', 'Deputy Managing Director', 40, 'Member'),
(54, 5, 'Ms. Parveen Haque Sikder', 'Director', 1, 'Chairperson'),
(2, 3, 'Mr. Md. Badiul Alam', 'Additional Managing Director', 20, 'Member'),
(1, 3, 'Mr. Shamsul Huda Khan', 'Managing Director (CC)', 1, 'Chairman'),
(53, 1, 'Mr. A K M Enamul Hoque Shameem', 'Independent Director', 7, 'Member'),
(33, 1, 'Mr. Moazzam Hossain', 'Director', 3, 'Member'),
(34, 1, 'Mr. Zakaria Taher', 'Director', 4, 'Member'),
(35, 1, 'Mr. Rick Haque Sikder', 'Director', 5, 'Member'),
(36, 1, 'Mr. Ron Haque Sikder', 'Director', 6, 'Member'),
(38, 1, 'Mr. Shamsul Huda Khan', 'Director', 8, 'Ex-Officio Member'),
(39, 2, 'Mr. Md. Anwar Hussain', 'Director', 1, 'Chairman'),
(40, 2, 'Alhaj Khalilur Rahman', 'Director', 2, 'Member'),
(41, 2, 'Mr. Mabroor Hossain', 'Director', 3, 'Member'),
(42, 2, 'Mr. Md. Mahbubur Rahman Khan', 'Independent Director', 4, 'Member'),
(43, 4, 'Mr. Shamsul Huda Khan', 'Managing Director (CC)', 1, 'Chairman'),
(44, 4, 'Mr. Md. Badiul Alam', 'Additional Managing Director', 20, 'Member'),
(46, 4, 'Mr.  Nazib Uddin Bhuiyan', 'Deputy Managing Director', 40, 'Member'),
(47, 4, 'Mr. Abdul Hamid Mia', 'Deputy Managing Director', 50, 'Member'),
(48, 4, 'Mr.  Syed Mohammad Bariqullah', 'Deputy Managing Director', 60, 'Member'),
(49, 4, 'Mr.  Md. Abdus Sobhan Khan', 'Senior Executive Vice President', 70, 'Member'),
(50, 4, 'Mr. Krishna Kamal Ghose', 'Vice President', 80, 'Member'),
(51, 3, 'Mr. A F M Shariful Islam', 'Additional Managing Director', 31, 'Member'),
(52, 4, 'Mr. A F M Shariful Islam', 'Additional Managing Director', 31, 'Member'),
(55, 5, 'Mr. Ron Haque Sikder', 'Director', 2, 'Member'),
(56, 5, 'Mr. Md. Anwar Hussain', 'Director', 3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

DROP TABLE IF EXISTS `copyright`;
CREATE TABLE IF NOT EXISTS `copyright` (
  `copyright_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `copyright_text` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`copyright_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`copyright_id`, `copyright_text`) VALUES
(1, ' 2012 - National Bank Limited. All Rights Reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `correspondance_bank`
--

DROP TABLE IF EXISTS `correspondance_bank`;
CREATE TABLE IF NOT EXISTS `correspondance_bank` (
  `corr_id` int(11) NOT NULL AUTO_INCREMENT,
  `corr_country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `corr_curr` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `corr_bank` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `corr_city` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `corr_acc_no` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `corr_swift` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`corr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `correspondance_bank`
--

INSERT INTO `correspondance_bank` (`corr_id`, `corr_country`, `corr_curr`, `corr_bank`, `corr_city`, `corr_acc_no`, `corr_swift`) VALUES
(23, 'UK', 'GBP', 'Sonali Bank (Uk)', 'London', '01000/004256/00', 'BSONGB2L'),
(22, 'Switzerland', 'CHF', 'Habib Bank AG Zurich', 'Zurich', '20110-001-37802', 'HBZUCHZZ'),
(21, 'Switzerland', 'CHF', 'Union Bank of Switzerland AG (UBS)', 'Zurich', '0230-87574.05M', 'UBSWCHZH'),
(20, 'Sri Lanka', 'ACUD', 'Standard Chartered Bank', 'Colombo', '15-9915222-90', 'SCBLLKLX'),
(19, 'Singapore', 'SGD', 'Standard Chartered Bank', 'Singapore', '109303873', 'SCBLSGSG'),
(18, 'Pakistan', 'ACUD', 'Habib  Bank Limited, Karachi', 'Karachi', '0007-79008735-03', 'HABBPKKA007'),
(17, 'Pakistan', 'ACUD', 'United Bank Ltd', 'Karachi', '068-0008-3', 'UNILPKKA'),
(16, 'Nepal', 'ACUD', 'Nepal Arab Bank Ltd', 'Kathmandu', '010-9214050001', 'NARBNPKA'),
(15, 'Japan', 'JPY', 'The Bank of Tokyo-Mitsubishi Ltd', 'Tokyo', '653-0431079', 'BOTKJPJT'),
(14, 'Italy', 'EUR', 'Unicredito Italino SPA', 'Millano', '995-002792', 'UNCRITMM'),
(13, 'India', 'ACUD', 'HDFC Bank Limited', 'Mumbai', '50200001694262', 'HDFCINBBCAL'),
(12, 'India', 'ACUD', 'Mashreqbank', 'Mumbai', '61049797', 'MSHQINBB'),
(11, 'India', 'ACUD', 'ICICI Bank Ltd', 'Mumbai', '408000503', 'ICICINBB'),
(10, 'India', 'ACUD', 'AB Bank Ltd', 'Mumbai', '5001000024155', 'ABBLINBB'),
(9, 'India', 'ACUD', 'Standard Chartered Bank', 'Mumbai', '42705426994', 'SCBLINBB'),
(8, 'India', 'ACUD', 'State Bank of India', 'Kolkata', '11051197198', 'SBININBB106'),
(7, 'India', 'ACUD', 'Sonali Bank Ltd', 'Kolkata', 'ACUD-13', 'BSONINCC'),
(6, 'Germany', 'EUR', 'Standard Chartered Bank (Germany) GMBH', 'Frankfurt', '18117607', 'SCBLDEFX'),
(5, 'Germany', 'EUR', 'Commerzbank AG', 'Frankfurt', '400871506201', 'COBADEFF'),
(4, 'Greece', 'EUR', 'Alpha Bank AE', 'Athens', '949002005000276', 'CRBAGRAA'),
(3, 'Canada', 'CAD', 'The Bank of Nova Scotia', 'Toronto', '527120286613', 'NOSCCATT'),
(2, 'Bhutan', 'ACUD', 'Bank of Bhutan', 'Phuentsholing', '30200110000120100', 'BHUBBTBT'),
(1, 'Australia', 'AUD', 'National Australia Bank Ltd', 'Melbourne', '1803072656500', 'NATAAU33033'),
(24, 'UK', 'GBP', 'HSBC Bank UK Plc', 'London', '39273437', 'MIDLGB22'),
(25, 'USA', 'USD', 'Citibank NA', 'New York', '36877234', 'CITIUS33'),
(26, 'USA', 'USD', 'Bank of America NA', 'New York', '6550-7-89556', 'BOFAUS3N'),
(27, 'USA', 'USD', 'JPMorgan Chase Bank', 'New York', '001-1-041845', 'CHASUS33'),
(28, 'USA', 'USD', 'Standard Chartered Bank', 'New York', '3582074947001', 'SCBLUS33'),
(29, 'USA', 'USD', 'Mashreqbank Psc', 'New York', '70119153', 'MSHQUS33'),
(30, 'USA', 'USD', 'HSBC Bank USA', 'New York', '124630', 'MRMDUS33'),
(31, 'USA', 'USD', 'Wells Fargo Bank NA', 'New York', '2000193005923', 'PNBPUS3NNYC'),
(32, 'USA', 'USD', 'Habib American Bank, New York, USA', 'New York', '20729361', 'HANYUS33');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_house_other`
--

DROP TABLE IF EXISTS `exchange_house_other`;
CREATE TABLE IF NOT EXISTS `exchange_house_other` (
  `ex_code` int(11) NOT NULL AUTO_INCREMENT,
  `ex_name` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `ex_web` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ex_country` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `ex_address` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `ex_phone` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `ex_email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ex_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `exchange_house_other`
--

INSERT INTO `exchange_house_other` (`ex_code`, `ex_name`, `ex_web`, `ex_country`, `ex_address`, `ex_phone`, `ex_email`) VALUES
(1, 'Dalil Exchange', '', 'Bahrain', 'P.O. Box No.20404, PO Box No.46489, Manama ,State of Bahrain', '17223464,17225997', ''),
(2, 'Dollarco Exchange Company Ltd', '', 'Kuwait', 'Safat-13123, State of Kuwait,P.O. Box No. 26270', ' 00965-99395778, 2412767/2454713', ''),
(3, 'Security Exchange Company WLL', '', 'Kuwait', 'Safat- 13085, State of Kuwait, P.O. Box No. 22424', '965-2438230', ''),
(4, 'Al Muzaini Exchange Co. k.s.c.c', '', 'Kuwait', 'P.O Box: 2156 Safat 13022 Kuwait', '0096566710260,0096522430701', ''),
(5, 'Coinstar Money Trasnfer', '', 'U.K.', '', '', ''),
(7, 'Al Fardan Exchange Company LLC', '', 'Qatar', 'P.O.Box No.339, Doha, State of Qatar', '0097444417468', ''),
(8, 'UAE Exchange Center WLL', '', 'Kuwait', 'P.O Box: 26155 Code 13122 Kuwait', '009652459417/18, Fax :009652459415', ''),
(9, 'Al Moosa Exchange Company WLL', '', 'Kuwait', 'Safat-3135, Kuwait City, State of Kuwait, P.O. Box No.27402', '965-2472684', ''),
(10, 'Bahrain Exchange Company WLL', '', 'Kuwait', 'Safat-13152, Kuwait City, State of Kuwait, P.O. Box No. 29149', '965-2401859, 824000', ''),
(11, 'SAMBA Financial Group', '', 'K.S.A', 'Riyadh-11421, Kingdom of Saudi Arabia, P.O. Box No.-833', ' 0096614774770', ''),
(12, 'Bank Al Bilad', '', 'K.S.A', 'P.O. Box No.140, Riyadh-11411,Kingdom of Saudi, Arabia', '00966147908927,  00966055734356 ', ''),
(13, 'Al Rajhi Banking & Investment Corp.', '', 'K.S.A', 'Riyadh- 11411,Kingdom of Saudi Arabia, P.O. Box No.28', '0096612116244, 00966501291694', ''),
(14, 'Al-Amoudi Exchange Company', '', 'K.S.A', 'P.O Box- 123,Jeddah-21411, KSA,Kingdom of Saudi Arabia, P.O. Box No.123', '96626474515', ''),
(15, 'Habib Bank AG Zurich', '', 'Switzerland', 'Weinbergstr.59, P.O Box: 303, 8035 Zurich, Switzerland', '+41-44-2694500', ''),
(16, 'U A E Exchange Centre LLC', '', 'U.A.E', 'Corporate Office, Hamdan Street, Al Sayegh Building,Level 02, Opposite- Old Souk,P.O Box- 170, Abu Dhabi', '0097126105555', ''),
(17, 'Lari Exchange', '', 'U.A.E', 'Head Office- Liwa Street, Saif Bin Darwish Building, Abu Dhabi', ' 971-2-6223225, Fax: 971-2-6223 220', ''),
(18, 'Al Rostamani International Exchange', '', 'U.A.E', 'Al Rostamani Building, Mezzanine Floor, Bank Street, Bur Dubai, P.O Box No.10072', '00971501527756', ''),
(19, 'Habib Exchange Company LLC', '', 'U.A.E', 'Central Office, P.O.Box 2370 Abu Dhabi', ' 0097126272316, Fax :0097126272318', ''),
(20, 'Al Ahalia Money Exchange Bureau', '', 'U.A.E', 'P.O Box-2419, Hamdan Street , Abu Dhabi', '0097126270004, Fax:0097126268858', ''),
(21, 'Redha Al Asnari Exchange Est.', '', 'U.A.E', 'Management Office, Office No-605(6th Floor), Near Deira ETISALAT, P.O Box- 8828, Dubai', '0097142271516, Fax :0097143533664', ''),
(22, 'Al Ansari Exchange Company', '', 'U.A.E', 'Head Office, P.O. Box: 325, Amin Tower, Liwa Street, Abu Dhabi ', ' 0097126224421, 0097126108888,  0097126108845, Fax: 0097126224421', ''),
(23, 'Orient Exchange Company LLC', '', 'U.A.E', 'Al Souk Al Kabeer St, P.O. Box No.25557, Deira, Dubai', '0097142267339, 00971506404447, Fax: 0097142269281', ''),
(25, 'Wall Street Finance LLC ', '', 'U.S.A', '7232, Broadway, Jackson Heights, New York, U. S. A', '001-7185050700', ''),
(28, 'Universal Exchange Centre', '', 'U.A.E', 'P.O Box-82471, Baniyas Road(Naser Square), Deira, Dubai', '+971-4-2288810', ''),
(30, 'AN Express  Limited', '', 'U.K', '208A Whitechapel Road , London E1 1BJ, United Kingdom', '0044 377 9865, 0044791 888 1021, ', 'abdul@angroup.co.uk'),
(32, 'Arabian Exchange Company WLL', '', 'Qatar', 'P.O Box-3535, Mercure Grand Hotel, (Sofitel Shopping Complex), Gr. Floor, Mushaireb Street,Doha , State of Qatar', '0097444438300', ''),
(35, 'Doha Bank QSC', '', 'Qatar', 'Grand Hamad Avenue , P.O Box 3818, Doha, Qatar', '974-4445-6600, Fax:+974-4441-6631', 'r.seetharaman@dohabank.com.qa'),
(36, 'Habib Qatar Int''l Exchange Ltd', '', 'Qatar', 'Main Branch, Mushirib Street (opposite National Panasonic Showroom) , P.O. Box No.1188', ' 0097444425151', ''),
(37, 'United Exchange', '', 'Canada', 'COC, 3000 Danforth Avenue , Toronto, Canada', '+ 14166908252', ''),
(38, 'NEC Money Transfer Entidad De Pago S. A', '', 'Spain', '', '', ''),
(40, 'National Exchange Company s.r.l', '', 'Italy', 'Via Pincipe Amedeo Roam 271-00185', '00-39-06-44340512', ''),
(41, 'Al Samhouri Exchange Company', '', 'Jordan', 'P.O Box-851838, Amman 11185', '0096265544599', ''),
(42, 'Al Ghurair Exchange LLp', '', 'U.A.E', 'Management Office, Al Masud Bulding, 7th floor 702, P.O Box-5530, Dubai, ', ' 9714-2222955, Fax No.97142270839', ''),
(43, 'LuLu International Exchange LLC', '', 'U.A.E', 'Level 9, Madinat Zayed Office Tower, New Airport Road,P.O Box: 5379, Abu Dhabi', '0097126547002, 00971503268844, Fax: 0097126547044', ''),
(44, 'Speed Remit Worldwide Limited', '', 'U.K', 'W ? 210, Dubai Airport Free Zone Authority, P.O. Box No.54597, Dubai', ' 00971506551632', ''),
(45, 'Wall Street Exchange Centre LLC', '', 'U.A.E', 'Office No.1103 & 1104, Twin Towers, Baniyas Road, P.O Box- 3014 Dubai', '+971-4-2284889, Fax No.971-4-2286533', ''),
(46, 'Choice Money Transfer', '', 'U.S.A', '350, 5th ave (Empire State building) , New york', '212-268-9290, 877-268-1900 ,   9173487207 , Fax  : 212-268-9245', 'msaha@choicemoneytransfer.com'),
(52, 'Omnex Group', '', 'U.S.A', '140 East Ridgewood Avenue Paramas, NJ 07652', '201-568-5209, 201-914-0923 ', ''),
(47, 'Placid Express', '', 'U.S.A', '35-01 Queens Blvd , LIC, NY 11101', '718-392-3500', ''),
(48, 'Prabhu Group Inc.', '', 'U.S.A', 'Suite # 101 & 102, 37-15, 73rd Street, Jackson Heights, NY 11372,USA', '+1-71865 16060, +1-64673 72225, Fax: +1-71865 16080', ''),
(49, 'Trans-Fast Remittance LLC', '', 'U.S.A', '16 West 46th Street, New York, NY 10036', ':(212) 382-2828 Ext.2103', ''),
(51, 'Islamic Exchange Co LLC', '', 'Qatar', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_house_own`
--

DROP TABLE IF EXISTS `exchange_house_own`;
CREATE TABLE IF NOT EXISTS `exchange_house_own` (
  `ex_code` int(11) NOT NULL AUTO_INCREMENT,
  `ex_name` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `ex_web` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ex_country` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ex_address` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `ex_phone` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `ex_email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ex_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `exchange_house_own`
--

INSERT INTO `exchange_house_own` (`ex_code`, `ex_name`, `ex_web`, `ex_country`, `ex_address`, `ex_phone`, `ex_email`) VALUES
(1, 'NBL Money Transfer Pte Ltd.,Main Branch, Singapore', '', 'Singapore', '10 A Roberts Lane (Off Serangoon Road) Singapore-218289', '5-62964440,62964411', 'nblmoneytransfer@singnet.com.sg'),
(2, 'NBL Money Transfer Sdn. Bhd, KL Main Branch ', '', 'Malaysia', '12 & 14 Ground Floor, Jalan Leboh Pudu, 50050 Kuala Lumpur, Malaysia ', '+60-3-20311100,20322111', ' nblmoneytransfer@gmail.com, nblmt.my@nblbd.com'),
(3, 'NBL Money Transfer Sdn Bhd, Batu Pahat Branch', '', 'Malaysia', 'Lian Hoe Plaza, Shoplot No. G-2, Jalan Abu Bakar, 83000,Batu Pahat, Johor,Malaysia', '+6-07-432-5111, +6-07-432-9570 ', 'batupahat.my@nblbd.com'),
(4, 'NBL Money Transfer Sdn Bhd, Sri Muda Branch ', '', 'Malaysia', 'No. 2, Jalan Ria 25/62, Seksyen 25,Taman Sri Muda, 40400 Shah Alam, ', '+6-03-5122-4111, +6-03-5124-0111 ', 'srimuda.my@nblbd.com'),
(5, 'Gulf Overseas Exchange Co.LLC ', '', 'Oman', 'P.O. Box No.3931, Ruwi, Postal Code-112 ', '+968-24834182 	', 'gulfex@omantel.net.com'),
(6, 'Ruwi (Main) Branch, GOEC.LLC ', '', 'Oman', 'P.O. Box No.3931, Ruwi, Postal Code-112 ', '+968-24834182 ', 'gulfex@omantel.net.com'),
(7, 'Seeb Branch, GOEC.LLC', '', 'Oman', 'P.O. Box No.82, Seeb, Postal Code-121 ', '+968-24422333 ', 'goecseeb@omantel.net.com'),
(8, 'Salalah Branch, GOEC.LLC ', '', 'Oman', 'P.O. Box No.2319, Ruwi, Postal Code-211 ', '+968-23290894', 'goec3@omantel.net.com'),
(9, 'Jaalan Bani Bu Ali Branch, GOEC.LLC ', '', 'Oman', 'P.O. Box No.432, Ruwi, Postal Code-416 ', '+968-25554232', 'gulfxjln@omantel.net.com'),
(10, 'Sohar Branch, GOEC.LLC ', '', 'Oman', 'P.O. Box No.479, Sohar, Postal Code-311 ', '+968-26844627', '6023497@omantel.net.om'),
(11, 'Ibra Branch, GOEC.LLC ', '', 'Oman', 'P.O. Box No.617, Safalat Ibra, Postal Code-400 ', '+968-25570230', 'goecibra@omantel.net.com'),
(12, 'NBL Money Transfer Sdn Bhd, Klang Branch', '', 'Malaysia', 'No. 35 (Ground Floor), Persiaran Sultan Ibrahim, off Lintang Batu 3 ,41300 Klang Selangor.', '+6 03 33434211', 'klang.my@nblbd.com'),
(13, 'NBL Money Transfer Sdn Bhd,Rawang  Branch', '', 'Malaysia', 'No. 3-1 (1st Floor),Jalan Bandar Rawang 15 Bandar Baru Rawang,48000 Rawang ,Selangor', '+6 03 60921073', ''),
(14, 'Worldlink Money Transfers S.A.', '', 'Greece', '', '', ''),
(15, 'NBL Money Transfer Pte Ltd.,Jurong Branch, Singapore', '', 'Singapore', 'Blk 134 Jurong Gateway Road#01-311 Singapore 600134', '+65-68993539,+65-68993671,+65-82550697', 'nbl_jurong@nblbd.com'),
(16, 'NBL Money Transfer Pte Ltd.,Maldives', '', 'Maldives', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rate`
--

DROP TABLE IF EXISTS `exchange_rate`;
CREATE TABLE IF NOT EXISTS `exchange_rate` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(50) NOT NULL,
  `buy_rate` decimal(7,2) NOT NULL,
  `sell_rate` decimal(7,2) NOT NULL,
  `rate_date` date NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `exchange_rate`
--

INSERT INTO `exchange_rate` (`rate_id`, `currency_name`, `buy_rate`, `sell_rate`, `rate_date`) VALUES
(1, 'USD', '76.75', '77.75', '2014-11-10'),
(12, 'AUD', '66.10', '69.99', '2014-11-10'),
(8, 'GBP', '121.83', '125.45', '2014-11-10'),
(9, 'JPY', '0.67', '0.69', '2014-11-10'),
(6, 'EUR', '95.66', '98.59', '2014-11-10'),
(11, 'CHF', '79.05', '83.40', '2014-11-10'),
(13, 'CAD', '67.35', '71.28', '2014-11-10'),
(14, 'SGD', '59.16', '62.77', '2014-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `menu_bottom`
--

DROP TABLE IF EXISTS `menu_bottom`;
CREATE TABLE IF NOT EXISTS `menu_bottom` (
  `menu_bot_id` int(11) NOT NULL AUTO_INCREMENT,
  `menutext_bot` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`menu_bot_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `menu_bottom`
--

INSERT INTO `menu_bottom` (`menu_bot_id`, `menutext_bot`) VALUES
(1, '<p>\r\n<a href="fs_annual_report.php" class="style8">Annual Reports</a><span class="style8"> | </span> \r\n<a href="fs_financial_performance.php" class="style8">Financial Performance</a> <span class="style8"> | </span>\r\n<a href="complaincontact.php" class="style2">Complain Cell</a> <span class="style8"> | </span>\r\n<a href="usefullink.php" class="style2">Useful Link Site</a> <span class="style8"> | </span>\r\n<a href="basaldisclousre.php" class="style2">Disclouser Under Basel - II</a>\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `menu_top`
--

DROP TABLE IF EXISTS `menu_top`;
CREATE TABLE IF NOT EXISTS `menu_top` (
  ` 	menu_top_id` int(11) NOT NULL AUTO_INCREMENT,
  `menutext_top` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (` 	menu_top_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `menu_top`
--

INSERT INTO `menu_top` (` 	menu_top_id`, `menutext_top`) VALUES
(1, '<li><a href="index.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li> \r\n<li><a href="aboutus.php" class="active"><span class="l"></span><span class="r"></span><span class="t">About Us</span></a> \r\n						<ul>\r\n										<li><a href="history_heritage.php">History & Heritage</a></li>\r\n                						<li><a href="mission_vision.php">Mission & Vision</a></li>\r\n                						<li><a href="sponsor_directors.php">Sponsor Directors</a></li>\r\n                						<li><a href="board_directors.php">Board of Directors</a></li>\r\n										<li><a href="chairman_message.php">Chairman''s Message</a></li>\r\n										<li><a href="executive_committe.php">Executive Committee</a></li>\r\n										<li><a href="audit_committe.php">Audit Committee</a></li>\r\n										<li><a href="management_committe.php">Management Committee</a></li>\r\n                						<li><a href="asset_liability_committe.php">Asset Liability Committee</a></li>\r\n										<li><a href="photo_gallary.php">Photo Gallary</a></li>\r\n                				\r\n						</ul>\r\n						\r\n						</li>\r\n						\r\n<li><a href="ps_saving_deposit.php"><span class="l"></span><span class="r"></span><span class="t">Products & Services</span></a>\r\n                			<ul>\r\n                				<li><a href="#">Deposit Products</a>\r\n                					<ul>\r\n                						<li><a href="ps_saving_deposit.php">Savings Deposit</a></li>\r\n                						<li><a href="ps_current_deposit.php">Current Deposit</a></li>\r\n                						<li><a href="#">Term Deposit</a>\r\n                                                                   <ul>\r\n                                                                      <li><a href="ps_snd.php">Special Notice Deposit</a></li>\r\n                                                                      <li><a href="ps_fdr.php">Fixed Deposit</a></li>\r\n                                                                   </ul>\r\n                                                                </li>\r\n\r\n								<li><a href="#">Foreign Currency Deposit</a>\r\n                                                                 <ul>\r\n                                                                      <li><a href="ps_fc_rfcd.php">RFC Deposit</a></li>\r\n                                                                      <li><a href="ps_fc_nfcd.php">NFC Deposit</a></li>\r\n                                                                   </ul>\r\n                                                                </li>\r\n								<li><a href="ps_mss.php">Monthly Savings Scheme</a></li>\r\n								<li><a href="ps_mis.php">Monthly Income Scheme</a></li>\r\n								<li><a href="ps_dbs.php">Double Benefit Scheme</a></li>\r\n								<li><a href="ps_millionair.php">Millionaire Income Scheme</a></li>\r\n										\r\n                					</ul>\r\n                				</li>\r\n                				\r\n								<li><a href="#">Credit Products</a>\r\n                					<ul>\r\n                						<li><a href="ps_overdraft.php">Overdraft</a></li>\r\n                						<li><a href="ps_lease_financing.php">Lease Financing</a></li>\r\n                						<li><a href="ps_house_building.php">House Building</a></li>\r\n								<li><a href="ps_sme.php">Small Medium Enterprise</a></li>\r\n								<li><a href="ps_ccs.php">Consumer Credit Scheme</a></li>\r\n								<li><a href="ps_trade_finance.php">Trade Finance</a></li>\r\n										\r\n                					</ul>\r\n                				</li>\r\n								\r\n								<li><a href="#">Cards</a>\r\n                					<ul>\r\n                						<li><a href="credit_card.php">Credit Card</a></li>\r\n										<li><a href="power_card.php">Power Card</a></li>\r\n                					</ul>\r\n                				</li>\r\n								\r\n                				<li><a href="download_forms.php">Download Forms</a></li>\r\n								\r\n								\r\n                			</ul>\r\n                		</li>		\r\n                		\r\n						\r\n<li><a href="fs_financial_performance.php"><span class="l"></span><span class="r"></span><span class="t">Financial Status</span></a>\r\n						\r\n							<ul>\r\n								<li><a href="fs_annual_report.php">Annual Report</a></li>\r\n                						<li><a href="fs_financial_performance.php">Financial Performance</a></li>\r\n                                        <li><a href="#">Interest Rates</a>\r\n											<ul>\r\n												<li><a href="fs_deposit_rate.php">Deposit Rate</a></li>\r\n												<li><a href="fs_lending_rate.php">Lending Rate</a></li>\r\n											</ul>\r\n										</li>                				\r\n                						<li><a href="fs_transaction_charges.php">Transaction Charges</a></li>\r\n                						<li><a href="fs_credit_report.php">Credit Report</a></li>\r\n								\r\n										                				\r\n							</ul>\r\n						\r\n						</li>\r\n							\r\n							\r\n		<li>\r\n            <a href="#"><span class="l"></span><span class="r"></span><span class="t">Service Location</span></a>\r\n                			<ul>\r\n										<li><a href="#">Branch Location</a>\r\n											<ul>\r\n												<li><a href="branch_location.php?division=Dhaka">Dhaka</a></li>\r\n												<li><a href="branch_location.php?division=Chittagong">Chittagong</a></li>\r\n												<li><a href="branch_location.php?division=Rajshahi">Rajshahi</a></li>\r\n												<li><a href="branch_location.php?division=Rangpur">Rangpur</a></li>\r\n												<li><a href="branch_location.php?division=Sylhet">Sylhet</a></li>\r\n												<li><a href="branch_location.php?division=Khulna">Khulna</a></li>\r\n												<li><a href="branch_location.php?division=Barishal">Barishal</a></li>\r\n											</ul>\r\n										</li>\r\n                						<li><a href="sl_sme_branch.php">SME / Agri Branch</a></li>\r\n                						<li><a href="sl_ad_branch.php">Authorize Dealer Branches</a></li>\r\n                						<li><a href="sl_atm.php">ATM Location</a></li>\r\n										<li><a href="sl_e-gp.php">e-GP Service Branch</a></li>\r\n										                				\r\n							</ul>\r\n                		</li>\r\n						\r\n\r\n<li><a href="oo_contact.php"><span class="l"></span><span class="r"></span><span class="t">Overseas operation</span></a>\r\n							<ul>\r\n										<li><a href="oo_contact.php">Contact Address</a></li>\r\n                						<li><a href="oo_correspondent_banking.php">Correspondent Banking</a></li>\r\n                						<li><a href="#">Foreign Remittance</a>\r\n											<ul>\r\n												<li><a href="oo_fr_subsidiary_companies.php">Subsidiary Companies</a></li>\r\n												<li><a href="oo_fr_western_union.php">Western Union</a></li>\r\n												<li><a href="oo_fr_moneygram.php">Money Gram</a></li>\r\n												<li><a href="oo_fr_others.php">Other Ex. Companies & Banks</a></li>\r\n											</ul>\r\n										</li>\r\n                						\r\n							</ul>\r\n						\r\n						\r\n						</li>\r\n\r\n\r\n							\r\n						<li><a href="csr_employment.php"><span class="l"></span><span class="r"></span><span class="t">CSR</span></a>\r\n							<ul>\r\n										<li><a href="csr_employment.php">Employment</a></li>\r\n                						<li><a href="csr_education.php">Education</a></li>\r\n                						<li><a href="csr_sports.php">Sports & Cul. Activities</a></li>\r\n                						<li><a href="csr_disaster_relief.php">Disaster Relief</a></li>\r\n										<li><a href="csr_other.php">Other</a></li>\r\n										\r\n							</ul>					\r\n						</li>	\r\n						');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_events`
--

DROP TABLE IF EXISTS `news_and_events`;
CREATE TABLE IF NOT EXISTS `news_and_events` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_date` date NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_detail` varchar(500) NOT NULL,
  `url` varchar(300) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news_and_events`
--

INSERT INTO `news_and_events` (`news_id`, `news_date`, `news_title`, `news_detail`, `url`) VALUES
(9, '2014-10-21', 'Tender Notice', 'Tender notice for printing of calendar & diary for the year of 2015 has been published in the news paper.', 'news_events/NBL_Calendar_2015.jpg'),
(4, '2014-05-09', 'Training', 'T24 Training has been started...', '#'),
(6, '2014-05-27', 'T24 Migration of Branches', 'T24 migration has been started.', '#');

-- --------------------------------------------------------

--
-- Table structure for table `photogallary`
--

DROP TABLE IF EXISTS `photogallary`;
CREATE TABLE IF NOT EXISTS `photogallary` (
  `pgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `pgallery_heading` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `pgallery_imgurl` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `pgallery_press` text COLLATE latin1_general_ci,
  PRIMARY KEY (`pgallery_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `photogallary`
--

INSERT INTO `photogallary` (`pgallery_id`, `pgallery_heading`, `pgallery_imgurl`, `pgallery_press`) VALUES
(1, 'Branch Opening at Gazaria (Munshigonj)', '0d8d7-1-nbl_branch_opening_gazaria.jpg', '<p>\n	The 156th Branch of National Bank Limited has been inaugurated at Gazaria in Munshigonj. Neaz Ahmed, Managing Director of the bank formally inaugurated the branch as chief guest. Md. Badiul Alam, Additional Managing Director, A K M Shafiqur Rahman, Deputy Managing Director &amp; Company Secretary, A M Golam Rasul, Senior Vice President &amp; manager of Jatrabari branch and Md. Shahidul Islam, Asstt. Vice President &amp; Manager of Gazaria branch are also seen in the picture.</p>\n'),
(2, '29th AGM', 'e8c57-2-29thagm.jpg', '<p>\n	Mr. Zainul Haque Sikder, Chairman of National Bank Limited, delivering his inaugural speech in the 29th Annual General Meeting of the shareholders of National Bank Limited held on 19th March, 2012 at Bangabandhu International Conference Center, Dhaka. Mrs. Monowara Sikder, Parveen Haque Sikder, Khalilur Rahman, Moazzam Hossain, Rick Haque Sikder, Ron Haque Sikder, Prof. Mahbub Ahmed, &amp; Mabroor Hossain, Neaz Ahmed, Managing Director of the Bank &amp; A K M Shafiqur Rahman, Deputy Managing Director &amp; Secretary to the Board of Directors are also seen in the picture.</p>\n'),
(3, 'Neaz Ahmed, Managing Director and CEO of National Bank Ltd. receiving the Certificate of Merit Award', '3c600-3-nbl_icba.png', '<p>\n	Neaz Ahmed, Managing Director and CEO of National Bank Limited receiving the Certificate of Merit Award from Finance Minister Abul Maal Abdul Muhith at Hotel Sonargaon on 02-10-2012. The Bank has been awarded by ICAB for the best presented annual report-2011 in the private sector banking organizations. Commerce Minister GM Quader, ICAB President Md. Saiful Islam, among others were present on the occasion.</p>\n'),
(4, 'Ceremony of Worldlink Payment Foundation', '9a23a-4-ceremony-of-worldlink-payment.png', '<p>\n	National Bank Limited recently has taken over Worldlink Payment Foundation SA, Greece as its fully owned subsidiary exchange company to facilitate Bangladeshi expatriates to send their hard earned money to their relatives in Bangladesh in a faster, safer and secured way.<br />\n	<br />\n	Parveen Haque Sikder, Director &amp; Chairperson of Executive Committee of the Board of Directors, National Bank Limited graced the taking over ceremony of Worldlink Payment Foundation SA, Greece as the chief guest. Among others, Ms Lisa Fatema Haque, Director, Worldlink Payment Foundation SA, Greece, Neaz Ahmed, Managing Director &amp; CEO of National Bank Limited, Theudorus Venetanasos, Ex-Directior, Worldlink Payment Foundation SA, Greece, Shamsul Huda Khan, Deputy Managing Director and Divisional Head, International Division, National Bank Limited and Mir Mosharref Hossain, Senior Assistant Vice President, National Bank Limited were also present in the ceremony. The function was also attended by the leaders of Bangladeshi community in Greece.</p>\n'),
(5, 'Inauguration 7th Branch of Gulf Overseas Exchange Company LLC, at Sinaw, Sultanate of Oman', '38612-5-gulf-overseas-exchange-company.png', '<p>\n	Ms. Parveen Haque Sikder, Director &amp; Chairperson of Executive Committee of Board of Directors of National Bank Limited inaugurating 7th Branch of Gulf Overseas Exchange Company LLC, at Sinaw, Oman. Prof. Mahbub Ahmed, Director, Neaz Ahmed, Managing Director &amp; CEO, Shamsul Huda Khan, Deputy Managing Director of National Bank Limited, Mir Mosharref Hossain, SAVP of the Bank and Iftakher Ul Hasan Chowdhury, Chief Executive of Gulf Overseas Exchange Company LLC, Oman are also seen in the picture.</p>\n'),
(6, 'Inauguration Ceremony of Infolady', '18988-6-infolady.png', '<p>\n	N/A</p>\n'),
(7, 'Manager’s Conference-2012', '64f8a-7-manager’s-conference-2012.png', '<p>\n	The Annual Conference &ndash; 2012 of the Executives and the Branch Managers of National Bank Limited held at Bangabandhu International Conference Center, Dhaka. Mr. Zainul Haque Sikder, Sponsor Director &amp; Chairman of the Board of Directors of National Bank Limited inaugurated the conference as chief guest. Mrs. Monowara Sikder, Parveen Haque Sikder, Khalilur Rahman, Moazzam Hossain, Prof. Mahbub Ahmed, Mabroor Hossain, A K M Enamul Hoque Shamim &amp; Lt. Col.(Retd.) Md. Azizul Ashraf, Psc Directors, Neaz Ahmed, Managing Director, Azizur Rahman, Consultant, Md. Badiul Alam, Additional Managing Director, S M Jaffar, Shamsul Huda Khan, A K M Shafiqur Rahman, Nazib Uddin Bhuiyan, A S M Bulbul &amp; Abdul Hamid Mia Deputy Managing Directors of the bank were also present in the Conference.</p>\n'),
(8, 'Financial support for five families affected by BDR carnage of 2009', '16cc9-8-bdr-carnage-of-2009.png', '<p>\n	National Bank Limited shared responsibilities of financial support for five families affected by BDR carnage of 2009 amounting Tk.40 thousand per month for each family totaling two crore and forty lac taka for ten years. Prime Minister Sheikh Hasina handed over cheques for Tk. 24 lac for 4th year to the five army officers families held at a simple ceremony held at Gono Bhaban in the city recently. Parveen Haque Sikder, Director &amp; Chairperson of the Executive Committee of National Bank Limited and Neaz Ahmed, Managing Director &amp; CEO of the bank were present at that time.</p>\n'),
(9, 'National Bank Becomes MoneyGram Agent', '7892c-9-moneygram.png', '<p>\n	MoneyGram International a leading global money transfer company and National Bank Ltd. jointly announced the signing of an agreement in the city on Monday whereby National Bank Ltd. Bangladesh will act as MoneyGram&rsquo;s new growing agent, said a press release. Harsh Lambah, MoneyGram&rsquo;s senior regional director for South Asia, said &ldquo;We are proud of this potential affiliation with National Bank, as they are a local leader with extensive experience in the money transfer space.&rdquo; He added &ldquo;South Asia is an important region for MoneyGram and we know working with National Bank with their significant presence in major cities, will propel our expansion and help us meet the growing remittance demands for Bangladesh&rdquo;. National Bank is experienced in providing money transfer services and we are very pleased to now offer MoneyGram&rsquo;s service to our large base of customers,&rdquo; said Neaz Ahmed, Managing Director, National Bank. For many in Bangladesh, remittances meet the financial demands of daily lives and we are convinced that MoneyGram&rsquo;s vast international presence in 194 countries will allow Bangladeshis stationed abroad to find convenient locations to send home their hard earned money promptly. &ldquo;Despite the staggering global economy, the remittance sector in South Asia continues to strengthen. According to the World Bank, Bangladesh received US$11.6 billion in money transfers in 2011, placing it among the top 10 recipient&rdquo; countries in the world.</p>\n'),
(10, 'NBL Scholarship', '8f341-10-nblscholarship.png', '<p>\n	National Bank Limited arranged a function to distribute Scholarship, Certificate of Appreciation and Crest among the Children of the Employees of National Bank Limited and National Bank Public School &amp; College under &lsquo;NBL Employees Welfare Scheme&rsquo; at Marriott Convention Centre, Dhanmondi, Dhaka. 192 students who secured outstanding results in the HSC, SSC, JSC &amp; Primary Final Examinations held in 2011, have been awarded by the bank.<br />\n	<br />\n	Moazzam Hossain, Sponsor Director of National Bank Limited attended the function as Chief Guest while Neaz Ahmed, Managing Director &amp; CEO, Aziaur Rahman, Consultant, Md. Badiul Alam, Additional Managing Director, S M Jaffar, Shamsul Huda Khan, A K M Shafiqur Rahman, Nazib Uddin Bhuiyan, A S M Bulbul &amp; Abdul Hamid Mia Deputy Managing Directors of the Bank and Col. Mokarram Ali Khan (Retd.), Principal of National Bank Public School &amp; College were present in the ceremony.</p>\n'),
(11, 'NBL held a workshop on ‘Prevention of Money Laundering’ ', 'c8e7c-nbl_17-09-2014.jpg', '<h5>\n	National Bank Limited organized a workshop on &lsquo;Prevention of Money Laundering and Combating Financing of Terrorism&rsquo; at its training institute in the city recently for the second man/operational manager of the branches. Shamsul Huda Khan, Additional Managing Director of National Bank Limited inaugurated the workshop as chief guest. Md. Majibur Rahman, Principal of NBTI and Md. Abdul Wahab, Deputy CAMLCO and Senior Vice President of National Bank Limited were also present in the inaugural ceremony. A total number of 56 executives/officers from the branches of Dhaka city &amp; adjoining areas participated in the workshop.</h5>\n'),
(12, 'National Bank Ltd donated Tk.2.00 crore to the Prime Minister’s relief fund  to help the flood affected peoples.', 'ce558-nbl-donate-to-pm-21-09-2014-02.4.jpg', '<p>\n	National Bank Limited donated Tk.2.00 crore to the Prime Minister&rsquo;s relief fund to help the flood affected peoples as a part of corporate social responsibility. Rick Haque Sikder,&nbsp; Director of National Bank Limited handed over a check for Tk.2.00 crore to Honorable Prime Minister Sheikh Hasina at Gono Bhaban on 18<sup>th</sup> September 2014. Ron Haque Sikder, Director of National Bank Limited and Md. Nazrul Islam Mazumder, Chairman of Bangladesh Association of Banks were present at that time.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_deposit`
--

DROP TABLE IF EXISTS `product_deposit`;
CREATE TABLE IF NOT EXISTS `product_deposit` (
  `product_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `min_balance` int(11) NOT NULL,
  `interest_rate` float NOT NULL,
  `tenor` text COLLATE latin1_general_ci NOT NULL,
  `maintenance_charge` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product_deposit`
--

INSERT INTO `product_deposit` (`product_id`, `product_name`, `min_balance`, `interest_rate`, `tenor`, `maintenance_charge`) VALUES
(1, 'CD', 2000, 0, 'N/A', 'Half Yearly Tk.400/-'),
(2, 'Savings Deposit', 1000, 4, '', 'Yearly Tk. 600/-'),
(3, 'snd', 0, 0, '', 'Half Yearly Tk.500/-');

-- --------------------------------------------------------

--
-- Table structure for table `product_interest`
--

DROP TABLE IF EXISTS `product_interest`;
CREATE TABLE IF NOT EXISTS `product_interest` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category` varchar(200) NOT NULL,
  `product_type` smallint(6) NOT NULL,
  `interset_rate` varchar(20) NOT NULL,
  `last_change_date` date NOT NULL,
  `product_desc` varchar(300) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `product_interest`
--

INSERT INTO `product_interest` (`product_id`, `product_category`, `product_type`, `interset_rate`, `last_change_date`, `product_desc`) VALUES
(1, 'Savings', 1, '4.00', '2014-09-01', 'Below 01 Crore'),
(2, 'Savings', 1, '4.50%', '2014-09-01', '1 Crore to below 25 Crore'),
(3, 'Savings', 1, '6.00%', '2014-09-01', '25 Crore to below 100 Crore'),
(4, 'Savings', 1, '7.00%', '2014-09-01', '100 Crore & above'),
(5, 'Special Notice Deposit', 1, '5.00', '2014-09-01', 'Below 01 Crore '),
(6, 'Special Notice Deposit', 1, '6.00%', '2014-09-01', '1 Crore to below 25 Crore'),
(7, 'Special Notice Deposit', 1, '6.50%', '2014-09-01', '25 Crore to below 50 Crore'),
(8, 'Special Notice Deposit', 1, '8.00%', '2014-09-01', '50 Crore to below 100 Crore'),
(9, 'Special Notice Deposit', 1, '8.00%', '2014-09-01', '100 Crore & above'),
(10, 'FDR for 3 months & above but less than 6 months', 1, '8.75', '2014-10-01', 'Below 10 Crore'),
(11, 'FDR for 3 months & above but less than 6 months', 1, '9.00%', '2014-10-01', '10 Crore & Above'),
(44, 'FDR for 6 months & above but less than 1 year', 1, '9.00', '2014-10-01', 'Any Amount'),
(45, 'FDR for 1 year and above but less than 2 years', 1, '9.25', '2014-10-01', 'Any Amount'),
(46, 'FDR for 2 years and above', 1, '9.25', '2014-10-01', 'Any Amount'),
(47, 'Agriculture Loan', 2, '13.00% (Maximum)', '2014-05-01', ''),
(48, 'Term Loan for Large & Medium Industries', 2, '15.50% (Maximum)', '2014-05-01', ''),
(50, 'Term Loan for Small & Cottage Industries non PPG Loan', 2, '15.50% (Maximum)', '2014-05-01', ''),
(51, 'Working Capital for Industries', 2, '15.50% (Maximum)', '2014-05-01', 'Large & Medium Loan'),
(52, 'Working Capital for Industries', 2, '15.50%     (Maximum)', '2014-05-01', 'Small & Cottage Industries Non-PPG Loan '),
(53, 'Export Credit', 2, '7.00% (Fixed)', '2014-05-01', ''),
(54, 'Trade Finance- Import (Foreign & Local)', 2, '15.50% (Maximum)', '2014-05-01', 'Essential Items; i.e.; Rice, Wheat, Dates, Edible Oil (crude & refined), Pulse, Chick-peas, Onion, Sugar, Medicine & Industrial Raw Materials. [LIM, LTR, PAD]'),
(55, 'Trade Finance- Import (Foreign & Local)', 2, '17.00% (Maximum)', '2014-05-01', 'Items Other than those Enumerated Above (LIM, LTR, PAD)'),
(56, 'Trade Finance- Import (Foreign & Local)', 2, '17.50% (Maximum)', '2014-05-01', 'Loan against Forced Import Payment'),
(57, 'Trade Finance-CC (Hypo & Pledge), SOD (General) [Commercial]', 2, '15.50% (Maximum) ', '2014-05-01', 'Essential Items; i.e.; Rice, Wheat, Dates, Edible Oil (Crude & Refined), Pulse, Chick-Peas, Onion, Sugar, Medicine & Industrial Raw Materials. [LIM, LTR, PAD]'),
(58, 'Trade Finance-CC (Hypo & Pledge), SOD (General) [Commercial]', 2, '17.00% (Maximum)', '2014-05-01', 'Items other than those enumerated above'),
(59, 'Trade Finance-SOD (General) against Work Order/ Bid Bond/ Performance Bond', 2, '17.50% (Maximum)', '2014-05-01', ''),
(60, 'Small & Medium Enterprise (SME)- Non-PPG Based', 2, '17.00% (Maximum)', '2014-05-01', 'LIM, LTR, CC (Hypo & Pledge), SOD General, PAD irrespective of the items and nature of the business '),
(61, 'House Building Loan', 2, '17.50 (Maximum)', '2014-05-01', 'Commercial'),
(62, 'House Building Loan', 2, '17.50% (Maximum)', '2014-05-01', 'General'),
(63, 'Consumer Credit', 2, '18.00% (Maximum)', '2014-05-01', ''),
(64, 'Credit Card', 2, '2.25% (Per Month)', '2014-05-01', ''),
(65, 'Credit to NBFI', 2, '16.00% (Maximum)', '2014-11-01', ''),
(66, 'Others', 2, '17.00% (Maximum)', '2014-05-01', 'SOD (Exp)- Forced Loan'),
(67, 'Others', 2, '16.00% (Maximum)', '2014-05-01', 'SOD/Loan against FDR of other Banks, ICB Unit, WEDB, Any other allowable instrument etc.'),
(68, 'Others', 2, '2.50% above FDR Rate', '2014-05-01', 'SOD/Loan against lien on FDR of our Bank'),
(71, 'Others', 2, '16.00', '2014-05-01', 'Loan Against NBL Scheme Deposit'),
(72, 'Others', 2, '15.50%-17.50', '2014-05-01', 'Not covered above'),
(73, 'All other loans and advances created on forced circumstances', 2, '18.00% Maximum', '2014-05-01', ''),
(74, 'For Products-PPG Based', 2, '16.00%-17.00%(Range)', '2014-05-01', 'Festival, Small Business Loan (General)'),
(75, 'For Products-PPG Based', 2, '16.00% Maximum', '2014-05-01', 'Small House Loan Scheme'),
(76, 'For Products-PPG Based', 2, '16.00%-17.00%(Range)', '2014-05-01', 'NBL Small Business Loan'),
(77, 'For Products-PPG Based', 2, '17.50% (Maximum)', '2014-05-01', 'NBL Housing Loan'),
(78, 'For Products-PPG Based', 2, '16.00%-17.50%(Range)', '2014-05-01', 'Lease Finance'),
(79, 'For Products-PPG Based', 2, '15.00% Fixed', '2014-05-01', 'NBL Weaver Loan'),
(80, 'For Products-PPG Based', 2, '15.00% Fixed', '2014-05-01', 'Micro Loan');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `module` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `user_name`, `password`, `module`) VALUES
(1, 'admin', 'admin@5827', 'admin'),
(2, 'currency', 'Currency#786', 'currency'),
(3, 'prd', 'Prd#786', 'newsevents'),
(4, 'interest', 'Interest#786', 'interest'),
(5, 'photo', 'Photo#786', 'photo'),
(6, 'Branch', 'Branch#786', 'branch'),
(7, 'exchange', 'Exchange#786', 'exchange'),
(8, 'committee', 'Committee#786', 'committee'),
(9, 'board', 'Board#786', 'board'),
(10, 'nostro', 'Nostro#786', 'nostro'),
(12, 'bcommittee', 'committee#786', 'bcommittee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
