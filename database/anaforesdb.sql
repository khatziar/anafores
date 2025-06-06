-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Ιουν 2025 στις 09:48:27
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `anaforesdb`
--
CREATE DATABASE IF NOT EXISTS `anaforesdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `anaforesdb`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `anafores`
--

DROP TABLE IF EXISTS `anafores`;
CREATE TABLE IF NOT EXISTS `anafores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `meso` varchar(255) NOT NULL,
  `dimosieusi` date NOT NULL,
  `link` varchar(2048) NOT NULL,
  `llink` varchar(2048) NOT NULL,
  `pdf` longblob DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `anafores`
--

INSERT INTO `anafores` (`id`, `event_id`, `meso`, `dimosieusi`, `link`, `llink`, `pdf`, `title`) VALUES
(1, 1, 'voria.gr', '2021-09-10', 'https://www.voria.gr/article/thessaloniki-sto-trapezi-prooptiki-dimiourgias-nosokomiou-agrias-panidas', 'C:\\drasi\\anafores\\2021_09_09_Amiras\\2021_09_09_Amiras.pdf', NULL, 'Θεσσαλονίκη: Στο τραπέζι προοπτική δημιουργίας νοσοκομείου άγριας πανίδας'),
(2, 2, 'voria.gr', '2021-04-07', 'https://www.voria.gr/article/anazitite-choros-perithalpsis-gia-travmartismenous-skatzochirous', 'file:///C:/drasi/anafores/2021_04_07_klovos/2021_04_07_klovos.pdf', NULL, 'Αναζητείται χώρος περίθαλψης για τραυματισμένους σκαντζόχοιρους'),
(3, 3, 'https://au.news.yahoo.com', '2021-03-06', 'https://au.news.yahoo.com/flamingos-poisoned-illegal-lead-pellets-025200768.html?guccounter=1', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\flamigos.pdf', NULL, 'Flamingos poisoned by illegal lead pellets in Greek lagoon'),
(4, 3, 'https://www.parismatch.com', '2021-03-08', 'https://www.parismatch.com/Actu/Environnement/Grece-des-flamants-roses-meurent-empoisonnes-par-les-plombs-des-chasseurs-1728074', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\flamants.pdf', NULL, 'Grèce: des flamants roses meurent empoisonnés par les plombs des chasseurs'),
(5, 4, 'https://parallaximag.gr', '2021-04-21', 'https://parallaximag.gr/thermaikos-kolpos-to-megalytero-thalassopouli-tis-evropis-entopistike-travmatismeno-108833', 'C:\\drasi\\anafores\\2021_04_19_SoulaStiDrasi\\SoulastiDrasi.pdf', NULL, 'Θερμαϊκός Κόλπος: Το μεγαλύτερο θαλασσοπούλι της Ευρώπης εντοπίστηκε τραυματισμένο Και παρελήφθη από την ομάδα της “Δράσης για την Άγρια Ζωή”.'),
(22, 11, 'parallaximag.gr', '2022-02-21', 'https://parallaximag.gr/epikairotita/thessaloniki-tsakali-vrethike-entos-vivliopoleiou', 'C:\\drasi\\anafores\\2022_02_21_tsakali\\parallaximag-tsakali.pdf', NULL, 'Τσακάλι βρέθηκε εντός βιβλιοπωλείου.'),
(23, 3, 'dasarxeio.com', '2021-02-02', 'https://dasarxeio.com/2021/02/02/93067/', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\dasarxeio.com-skagia-flamigo.pdf', NULL, 'Με μολύβδινα σκάγια στο στομάχι βρέθηκαν τέσσερα φοινικόπτερα'),
(24, 3, 'greenagenda.gr', '2021-02-04', 'https://greenagenda.gr/%cf%84%ce%ad%cf%83%cf%83%ce%b5%cf%81%ce%b1-%cf%86%ce%bb%ce%b1%ce%bc%ce%af%ce%bd%ce%b3%ce%ba%ce%bf-%cf%83%cf%84%ce%b7-%ce%b2%cf%8c%cf%81%ce%b5%ce%b9%ce%b1-%ce%b5%ce%bb%ce%bb%ce%ac%ce%b4%ce%b1-%ce%bc/', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\greenagenda.gr-flamigo.pdf', NULL, 'Τέσσερα φλαμίνγκο στη Β. Ελλάδα με μολύβδινα σκάγια στο στομάχι-Δύο πέθαναν, δύο δίνουν μάχη'),
(25, 3, 'kathimerini.gr', '2021-02-11', 'https://www.kathimerini.gr/society/561260242/thessaloniki-pethane-to-flamingko-poy-eiche-dilitiriastei-apo-molyvdo/', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\kathimerini-flamigo.pdf', NULL, 'Θεσσαλονίκη: Πέθανε το φλαμίνγκο που είχε δηλητηριαστεί από μόλυβδο'),
(28, 14, 'voria.gr', '2022-10-17', 'https://www.voria.gr/article/thessaloniki-i-ethelontes-pou-dinoun-defteri-efkeria-stin-agria-zoi-tis-choras-fotovid?fbclid=IwAR27zF_jsGwBDFncliQE451uSs5sott2rod2rV8obw7u-5aMRaM32A-j9Rg', 'C:\\drasi\\anafores\\2022_10_17_ethelontes\\voria.gr-ethelontes.pdf', NULL, 'Θεσσαλονίκη: Οι εθελοντές που δίνουν δεύτερη ευκαιρία στην άγρια ζωή της χώρας'),
(29, 2, 'Αθηναϊκό - Μακεδονικό Πρακτορείο Ειδήσεων', '2021-04-07', 'https://www.amna.gr/macedonia/article/543082/Anaziteitai-spiti-gia-traumatismena-skantzochoirakia-?fbclid=IwAR3miuGrYdc4taYRiikiaOzRWdl0N-J0_4QWX1QaCBQOoiWTxvl1hZBS0WU', '', NULL, 'Αναζητείται «σπίτι» για τραυματισμένα σκαντζοχοιράκια'),
(30, 2, 'iefimerida.gr', '2021-04-07', 'https://www.iefimerida.gr/ellada/anaziteitai-spiti-traymatismena-skantzohoirakia?amp', 'C:\\drasi\\anafores\\2021_04_07_klovos\\iefimerida.gr-skantzoxoirakia.pdf', NULL, 'Θεσσαλονίκη: Αναζητείται «σπίτι» για τραυματισμένα σκαντζοχοιράκια'),
(31, 2, 'popaganda.gr', '2021-04-07', 'https://m.popaganda.gr/newstrack/thessaloniki-anazitite-spiti-gia-travmatismena-skantzochirakia/', 'C:\\drasi\\anafores\\2021_04_07_klovos\\m.popaganda.gr-skantzoxoirakia.pdf', NULL, 'Θεσσαλονίκη: Αναζητείται «σπίτι» για τραυματισμένα σκαντζοχοιράκια'),
(32, 2, 'Μακεδονία', '2021-04-07', 'https://www.emakedonia.gr/skatzochoiroi-374896', 'C:\\drasi\\anafores\\2021_04_07_klovos\\emakedonia.gr-skantzoxoirakia.pdf', NULL, 'Θεσσαλονίκη: Αναζητείται «σπίτι» για τραυματισμένα σκαντζοχοιράκια'),
(33, 2, 'athensvoice.gr', '2021-04-07', 'https://www.athensvoice.gr/life/perivallon/709084/traymatismena-skantzohoirakia-psahnoyn-spiti-sti-thessaloniki/', 'C:\\drasi\\anafores\\2021_04_07_klovos\\athensvoice.gr-skantzoxoirakia.pdf', NULL, 'Τραυματισμένα σκαντζοχοιράκια ψάχνουν «σπίτι» στη Θεσσαλονίκη'),
(34, 2, 'newsit.gr', '2021-04-07', 'https://www.newsit.gr/topikes-eidhseis/thessaloniki-mia-agkalia-gia-ta-traymatismena-skantzoxoirakia-agonas-gia-na-ftiaxtei-to-spiti-tous/3257924/', 'C:\\drasi\\anafores\\2021_04_07_klovos\\newsit.gr-skantzoxoirakia.pdf', NULL, 'Θεσσαλονίκη: Μια αγκαλιά για τα τραυματισμένα σκαντζοχοιράκια – Αγώνας για να φτιαχτεί το σπίτι τους'),
(35, 2, 'alterthess.gr', '2021-04-07', 'https://alterthess.gr/drasi-gia-tin-agria-zoi-ena-spiti-gia-ta-skantzochoirakia-dimioyrgeitai/', 'C:\\drasi\\anafores\\2021_04_07_klovos\\alterthess.gr-skantzoxoirakia.pdf', NULL, 'Δράση για την Άγρια Ζωή: Ένα σπίτι για τα σκαντζοχοιράκια δημιουργείται'),
(36, 3, 'ouest-france.fr', '2021-03-06', 'https://www.ouest-france.fr/europe/grece/grece-des-flamants-roses-meurent-empoisonnes-par-les-plombs-des-chasseurs-7177601', '', NULL, 'Grèce. Des flamants roses meurent empoisonnés par les plombs des chasseurs'),
(37, 3, 'Ελβετική τηλεόραση - 20min.ch', '2021-03-07', 'https://www.20min.ch/video/flamingos-fressen-bleimunition-und-verenden-qualvoll-538069603066', '', NULL, 'Griechenland: Flamingos fressen Bleimunition und verenden qualvoll - 20 Minuten'),
(38, 3, 'ΣΚΑΙ', '2021-02-24', 'https://www.skai.gr/news/environment/xalkidiki-dekades-flamingko-katapinoun-skagia-kai-pethainoun-sti-limnothalassa', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\skai.gr-flamigo.pdf', NULL, 'Χαλκιδική: Δεκάδες φλαμίνγκο καταπίνουν σκάγια και πεθαίνουν στη λιμνοθάλασσα του Αγίου Μάμα'),
(39, 3, 'in.gr', '2021-02-24', 'https://www.in.gr/2021/02/24/greece/xalkidiki-dekades-flamingko-katapinoun-skagia-kai-pethainoun-apo-dilitiriasi/', 'C:\\drasi\\anafores\\2021_03_06_flamigoAgiosMamas\\in.gr-flamigo.pdf', NULL, 'Χαλκιδική: Δεκάδες φλαμίνγκο καταπίνουν σκάγια και πεθαίνουν από δηλητηρίαση'),
(40, 15, 'Αθηναϊκό - Μακεδονικό Πρακτορείο Ειδήσεων', '2021-02-11', 'https://www.amna.gr/macedonia/article/527914/Tesseris-mpoufoi-nosileuontai-sti-Drasi-gia-tin-agria-zoi-', 'C:\\drasi\\anafores\\2021_02_11_mpoufoi\\amna.gr-mpoufoi.pdf', NULL, 'https://www.amna.gr/macedonia/article/527914/Tesseris-mpoufoi-nosileuontai-sti-Drasi-gia-tin-agria-zoi-'),
(41, 12, 'blog.moudaniwn.gr', '2020-04-13', 'https://blog.moudaniwn.gr/2020/04/13/traymatismenos-mayrokefalos-glaros-vrethike-sti-chalkidiki/', 'C:\\drasi\\anafores\\2020_04_13_MavrokefalosChalkidiki\\blog.moudaniwn.gr-mavrokefalosChalkidiki.pdf', NULL, 'Τραυματισμένος Μαυροκέφαλος Γλάρος βρέθηκε στη Χαλκιδική'),
(42, 13, 'tetartopress.gr', '2022-12-06', 'https://tetartopress.gr/open-day-stis-egkatastaseis-tis-drasis-gia-tin-agria-zoi/', 'C:\\drasi\\anafores\\2022_12_11_OpenDay', NULL, 'Open day στις εγκαταστάσεις της Δράσης για την Άγρια Ζωή');

-- --------------------------------------------------------

--
-- Στημένη δομή για προβολή `dimosieuseis`
-- (Δείτε παρακάτω για την πραγματική προβολή)
--
DROP VIEW IF EXISTS `dimosieuseis`;
CREATE TABLE IF NOT EXISTS `dimosieuseis` (
`perigrafiEvent` text
,`titleAnaforas` varchar(255)
,`meso` varchar(255)
,`dateDimosieusis` date
,`link` varchar(2048)
);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `place` varchar(255) NOT NULL,
  `perigrafi` text NOT NULL,
  `simeioseis` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `events`
--

INSERT INTO `events` (`id`, `date`, `place`, `perigrafi`, `simeioseis`) VALUES
(1, '2021-09-09', 'Καλοχώρι - Δράση για την Άγρια Ζωή', 'Επίσκεψη υπουργού Αμυρά στη Δράση', NULL),
(2, '2021-04-07', 'Καλοχώρι', 'Καμπάνια για κατασκευή κλωβών', NULL),
(3, '2021-03-06', 'Άγιος Μάμας', 'Δηλητηρίαση φλαμίγκο στον \'Αγιο Μάμα - Μολυβδίαση από σκάγια', 'Άπειρες αναφορές που δεν μπήκαν ξεχωριστά...\r\nhttps://www.geo.fr/environnement/grece-des-flamants-roses-perissent-apres-avoir-ingurgite-des-plombs-de-chasseurs-203852?amp&fbclid=IwAR3_6TOOVHp_EOaWj8DDt2wl8s9A4pqz3xvynltR_HzHPi_l-WJzD7uQc5M\r\nhttps://www.letribunaldunet.fr/actualites/grece-dizaines-flamants-roses-morts-poison-plombs-chasseurs-chasse.html/amp?fbclid=IwAR37eNH--aElazUBokm4zzMJoiAK4FncCB7EE6LkeeNN2cFfZ52JRd3gu00\r\nhttps://www.rtbf.be/info/monde/detail_grece-des-flamants-roses-perissent-apres-avoir-ingurgite-des-plombs-de-chasseurs?id=10704905&fbclid=IwAR0P6oFcfuIg_0efujxLrJO3mr-qu6KrH8QPCEbCqJeBUGfyBJFfyJQmdRc\r\nhttps://speedynews.gr/ellada/agios-mamas-chalkidikis-skotomena-flamingko/\r\nhttps://www.iefimerida.gr/ellada/halkidiki-flamingko-katapinoyn-skagia-pethainoyn\r\nhttps://www.ethnos.gr/ellada/147289_halkidiki-flamingko-pethainoyn-katapinontas-skagia\r\nhttps://www.typosthes.gr/thessaloniki/halkidiki/242510_flamingko-katapinoyn-skagia-kai-pethainoyn-sti-limnothalassa-agioy\r\nhttps://www.huffingtonpost.gr/entry/chalkidike-dekades-nekra-flaminyko-apo-skayia-poe-katapinoen_gr_603617e0c5b6dfb6a73546c8\r\nhttps://www.newsbeast.gr/environment/arthro/7132921/sos-gia-ta-flamingko-tis-chalkidikis-katapinoun-skagia-kai-pethainoun-sti-limnothalassa-tou-agiou-mama\r\nhttps://e-thessalia.gr/chalkidiki-flamingko-pethainoyn-katapinontas-skagia/\r\nhttps://left.gr/news/halkidiki-dekades-flamingko-katapinoyn-skagia-kai-pethainoyn-sti-limnothalassa-toy-agioy-mama\r\nhttps://www.news247.gr/perivallon/chalkidiki-flamingko-katapinoyn-skagia-kai-pethainoyn-sti-limnothalassa-toy-agioy-mama.9152840.html\r\nhttps://www.argolikeseidhseis.gr/2021/02/blog-post_151.html\r\nhttps://www.gargalianoionline.gr/%cf%84%ce%b9-%cf%83%cf%85%ce%bc%ce%b2%ce%b1%ce%af%ce%bd%ce%b5%ce%b9-%ce%bc%ce%b5-%cf%84%ce%b1-%cf%86%ce%bb%ce%b1%ce%bc%ce%af%ce%bd%ce%b3%ce%ba%ce%bf-%cf%83%cf%84%ce%b7-%cf%87%ce%b1%ce%bb%ce%ba%ce%b9/\r\nhttps://www.portnet.gr/themata/32653-dekades-flamingko-pethainoun-sti-limnothalassa-tou-agiou-mama.html\r\nhttps://hellasjournal.com/2021/02/dekades-flamingko-katapinoun-skagia-ke-pethenoun-sti-limnothalassa-tou-agiou-mama/\r\nhttps://www.athina984.gr/2021/02/24/chalkidiki-dekades-flamingko-katapinoyn-skagia-kai-pethainoyn-sti-limnothalassa-toy-agioy-mama/\r\nhttps://www.lawandorder.gr/Article/113861/ellada/dekades-flamingko-katapinoun-skagia-kai-pethainoun-sti-limnothalassa-tou-agiou-mama\r\nhttps://energyin.gr/2021/02/24/flamingo-skagia-xalkidiki/\r\nhttps://www.vradini.gr/dekades-flamingko-kai-pethainoun-sti-limnothalassa-tou-agiou-mama-apo-skagia/\r\nhttps://www.protothema.gr/greece/article/1096271/ti-sumvainei-me-ta-flamingo-sti-halkidiki/?fbclid=IwAR2y13RONAXSyxTy4sNBrkpxNjhOV-lO8y8SKvd75iVAF3jYviQtjJd45mA#.YC3GsjklYxM.facebook\r\nhttps://www.grtimes.gr/ellada/ti-symvainei-me-ta-flamingko-stin-chalkidiki-foto?_route_=ellada/ti-symvainei-me-ta-flamingko-stin-chalkidiki-foto\r\nhttps://tvxs.gr/news/animals/thessaloniki-me-molybdina-skagia-sto-stomaxi-brethikan-tessera-flamingko\r\nhttps://www.typosthes.gr/thessaloniki/240588_nekra-flamingko-se-thessaloniki-kai-halkidiki-eihan-skagia-molybdoy-sto-stomahi\r\nhttps://m.lifo.gr/now/perivallon/312178/thessaloniki-tessera-flamingko-me-molyvdina-skagia-sto-stomaxi-dyo-pethanan-kai-dyo-dinoyn-maxi\r\nhttps://www.rthess.gr/article/117306/nekra-flamingko-me-molybdo-sta-stomachia-tous-se-thessaloniki-kai-chalkidiki-foto\r\nhttps://www.trikalaola.gr/chalkidiki-dilitiriasan-flamingko-me-molyvdo/\r\nhttps://www.tovima.gr/2021/02/02/inbox/flamingko-sti-v-ellada-dilitiriastikan-apo-molyvdina-skagia/\r\nhttps://www.zougla.gr/perivallon/article/xalkidiki-dilitiriasan-flamingo-me-molivdo\r\n'),
(4, '2021-04-16', 'Θερμαϊκός', 'Σούλα στη Δράση', NULL),
(11, '2022-02-21', 'Θεσσαλονίκη', 'Τσακάλι βρέθηκε εντός βιβλιοπωλείου.', NULL),
(12, '2020-04-13', 'Χαλκιδική', 'Tραυματισμένος Μαυροκέφαλος Γλάρος βρέθηκε στη Χαλκιδική', NULL),
(13, '2022-12-11', 'Καλοχώρι', 'Open day στις εγκαταστάσεις της Δράσης για την Άγρια Ζωή', NULL),
(14, '2022-10-17', 'Καλοχώρι', 'Θεσσαλονίκη: Οι εθελοντές που δίνουν δεύτερη ευκαιρία στην άγρια ζωή της χώρας', NULL),
(15, '2021-02-11', 'Καλοχώρι', 'Τέσσερις μπούφοι νοσηλεύονται στη «Δράση για την άγρια ζωή»', NULL);

-- --------------------------------------------------------

--
-- Δομή για προβολή `dimosieuseis`
--
DROP TABLE IF EXISTS `dimosieuseis`;

DROP VIEW IF EXISTS `dimosieuseis`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dimosieuseis`  AS   (select `events`.`perigrafi` AS `perigrafiEvent`,`anafores`.`title` AS `titleAnaforas`,`anafores`.`meso` AS `meso`,`anafores`.`dimosieusi` AS `dateDimosieusis`,`anafores`.`link` AS `link` from (`anafores` left join `events` on(`anafores`.`event_id` = `events`.`id`)) order by `events`.`date`)  ;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `anafores`
--
ALTER TABLE `anafores`
  ADD CONSTRAINT `eventid_fk` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
