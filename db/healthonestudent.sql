-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 11:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthonestudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `picture`) VALUES
(1, 'loopband', 'public/img/categories/loopband.jpg'),
(2, 'hometrainer', 'public/img/categories/hometrainer.jpg'),
(3, 'crosstrainer', 'public/img/categories/crosstrainer.jpg'),
(4, 'roeitrainer', 'public/img/categories/roeitrainer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `category_id`, `description`) VALUES
(1, 'NordicTrack FreeStride FS10i ', 'cr1.jpg', 3, 'Met de NordicTrack FreeStride FS10i Crosstrainer train je in je eigen tijd en in je eigen ruimte. Gewoon vanuit huis! Dankzij de iFit koppeling beschikt deze crosstrainer over duizenden studio workouts, waarbij de coaches jouw helling en weerstand instellen. Train je gehele lichaam op een zeer effectieve manier en bereik je fitness doelen binnen no time.'),
(2, 'Crosstrainer - NordicTrack SE7i', 'cr2.jpg', 3, 'De Se7i crosstrainer van het merk NordicTrack is een compacte crosstrainer. De crosstrainer is inklapbaar en neemt hierdoor weinig plaats in beslag. Ondanks de minimale plaats die deze crosstrainer in beslag neemt, zorg je met deze crosstrainer wel voor maximale prestaties.'),
(3, 'Interactieve crosstrainer EL 500', 'cr3.jpg', 3, 'Je wil in vorm blijven, gewicht verliezen of een strakker lichaam krijgen? De EL500, voor soepele en grote bewegingen, is compatibel met de e-Connected app: volg je vorderingen op!'),
(4, 'Hammer CT3 Ellyptech Crosstrainer', 'cr4.jpg', 3, 'De vernieuwde Hammer CT3 Ellyptech Crosstrainer wordt aangedreven door een onderhoudsarme V-snaar waardoor deze fluisterstil is. Voor een nauwkeurige regeling van de weerstand wordt er gebruik gemaakt van permanent magneetremsysteem. Het remsysteem werkt tegen de aandrijving in en regelt zo de trainingsintensiteit. De belastingregeling is snelheidsafhankelijk en vindt plaats in verschillende gradaties.'),
(5, 'Schwinn 430i Crosstrainer', 'cr5.jpg', 3, 'Artikelomschrijving Schwinn 430i Crosstrainer - Gratis montage\r\nDe Schwinn 430i crosstrainer is de ideale crosstrainer om thuis snel je trainingsdoelen te behalen. Deze crosstrainer helpt je om af te vallen en conditie op te bouwen. De crosstrainer voelt comfortabel aan door de ergonomische handvaten en de extra grote voetpedalen.'),
(6, 'VirtuFit FDR 2.0i Crosstrainer', 'cr6.jpg', 3, 'De VirtuFit FDR2.0i Ergometer Crosstrainer is de ideale crosstrainer voor iedere thuissporter. Deze crosstrainer is stil in gebruik en biedt je een stabiele training. Hij beschikt namelijk over een stille V-snaar zodat je apparaat op elk moment gebruikt kan worden zonder dat je bang hoeft te zijn voor geluidsoverlast tegenover je buren of huisgenoten. Verstel de helling in één van de 5 posities, kies uit 21 programma\'s of schakel tussen de 16 weerstandsniveaus en daag jezelf uit!'),
(9, 'Senz Sports M1000', 'loopband1.jpg', 1, 'De M1000 is één van de nieuwe loopbanden van Senz Sports. Met een ruime variatie aan trainingsprogramma\'s, een modern LED-display en een groot loopoppervlak is de M1000 een uitstekende loopband voor thuissporters.'),
(10, 'Loopband Cecotec RunnerFit Sprint', 'loopband2.jpg', 1, 'Blijf in vorm en ontdek de laatste nieuwtjes in de sector om met de beste garanties te kunnen sporten! Koop Loopband Cecotec RunnerFit Sprint 14 km/h 120 Kg voor de beste prijs en genieten van een gezond leven!'),
(13, 'The Vikingchoice', 'loopband3.jpg', 1, 'De Vikingchoice hardloopband biedt alle voordelen om thuis te kunnen sporten in een compacte ruimte. Wil jij graag vitaal en fit blijven, of jouw conditie weer op peil krijgen? Dan is een compacte inklapbare loopband de oplossing.'),
(14, 'RS Sports Loopband', 'loopband4.jpg', 1, 'De Loopband RS Sports Run 10 is een zeer complete loopband voor gemiddeld gebruik. Denk hierbij aan 2 tot 3 keer per week lopen of rennen op je loopband, Met een elektrische motor met een piekvermogen 3 PK en een continu vermogen van 1,8 PK geeft de Loopband RS Sports Run 10 een gedegen training'),
(15, 'React Loopband', 'loopband5.jpg', 1, 'React loopband is ontworpen voor thuisgebruik om te wandelen of licht te joggen. De React loopband is een uitstekende keuze als je je eigen beweging wilt gebruiken om de mat een impuls te geven. Hoe sneller je beweegt, hoe sneller de mat beweegt. De loopband heeft een trainingscomputer die tijd, snelheid, afstand en energieverbruik bijhoudt.'),
(16, 'Toorx BRX-R65 Comfort Ligfiets', 'hometrainer1.jpg', 2, 'De Toorx BRX-R65 Comfort Ligfiets is een comfortabele ligfiets met maar liefst 8 weerstandsniveaus. Deze ligfiets heeft een extra lage instap voor een goede toegankelijkheid en de console is zeer gebruiksvriendelijk.'),
(17, 'tunturi cardio fit bike b30 hometrainer', 'hometrainer2.jpg', 2, 'De Tunturi Cardio Fit B30 Bike hometrainer is uitgerust met een magnetisch remsysteem, met een vliegwielgewicht van 9 kilogram. Deze Tunturi is voorzien van een handmatige verstelling van de weerstand in 8 stappen. De gebruiksvriendelijke computer met digitale LCD display (batterij voeding) heeft de volgende functies; controle snelheid, tijd, afstand, calorieën en hartslag.'),
(18, 'Ergometer Fitness Bike', 'hometrainer3.jpg', 2, 'Get in shape met deze handige fitnessbike. De fitnessbike is klein van formaat en kan je overal kwijt. Ideaal voor in de slaapkamer, de garage, op zolder of misschien zelfs wel in je eigen mini gym.'),
(19, 'VirtuFit Foldable Water Resistance Row 900 Roeitrainer', 'roeitrainer1.jpg', 4, 'Wanneer het te koud is om buiten te roeien zorg je dat binnen roeien hetzelfde gevoel oplevert. De VirtuFit Foldable Water Resistance Row 900 Roeitrainer reageert op je roeislagen alsof je in een roeiboot over het water vaart. Dat ligt aan de waterweerstand van deze roeitrainer. Het rad dat door de watertank draait geeft je dezelfde soort tegenkracht als een roeispaan die door het water beweegt.'),
(20, 'TUNTURI ROEITRAINER CARDIO FIT R60W', 'roeitrainer2.jpg', 4, 'Een ander voordeel van een water roeitrainer is dat de weerstand over de gehele beweging gelijk is. Dit traint comfortabel en het is goed voor je lichaam.\r\nEr zijn weinig oefeningen waarbij je meer spieren in je lichaam gebruikt dan bij het roeien. De roeioefeningen kunnen nu heel eenvoudig thuis uitgevoerd worden op de Tunturi Cardio Fit R60W Roeier.'),
(23, 'CAPITAL SPORTS The Skyf', 'roeitrainer3.jpg', 4, 'Training voor het hele lichaam! Met de CAPITAL SPORTS The Skyf roeitrainer wordt je roeitraining naar een hoger niveau gebracht. Dankzij de gepatenteerde SculSimulation zijn beide roeiarmen volledig onafhankelijk van elkaar te bewegen en maken zo hele nieuwe oefeningen.'),
(24, 'Infiniti R-100 IR Roeitrainer', 'roeitrainer4.jpg', 4, 'Wie het trainen op een roeitrainer in de sportschool gewend is kan zich vaak maar moeilijk tevreden stellen met de vaak mindere kwaliteit van de goedkopere thuistoestellen. De oplossing hiervoor is de Infiniti R-100 IR (InfraRed). Deze lucht/magnetische roeitrainer biedt namelijk absolute topkwaliteit, een ongeëvenaarde roeibeleving en ongekende mogelijkheden tegen een zeer gunstige prijs.'),
(25, 'Tunturi Cardio Fit R30', 'roeitrainer5.jpg', 4, 'Op de Tunturi Cardio Fit R30 volg je tijdens het trainen de belangrijkste parameters: snelheid, afstand, calorieën, tijd en slagen per minuut. Ook de 500 m tijd lees je af op de monitor met duidelijke display (80 x 42 mm). Je weet welk effect je work-out heeft: je leert de doeltreffendheid ervan beoordelen en verbeteren.'),
(26, 'C2-2712 Concept2 RowErg with PM5', 'roeitrainer6.jpg', 4, 'De betrouwbare prestaties van de Model D indoor rower heeft deze roeier tot de best verkochte roeier ter wereld gemaakt. Wedstrijdroeiers beschouwen de Concept2 model D roeier als dé standaard voor indoor trainingen.\r\nDe Model D roeier levert een zorgt voor een effectieve cardiovasculaire training waardoor conditie en ‘toning’ verbeterd zullen worden.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `reviewer_name` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `reviewer_name`, `rating`, `description`, `date`, `product_id`, `user_id`) VALUES
(14, 'Allan', 5, 'Super', '2021-11-21', 17, NULL),
(15, 'Allan', 5, 'goed', '2021-11-21', 17, NULL),
(16, 'Allo Missh', 4, 'hbb', '2021-11-21', 17, NULL),
(17, 'Allan Hassan', 1, 'eathnban', '2021-11-21', 17, NULL),
(18, 'Allan', 5, '6', '2021-11-21', 18, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','admin') NOT NULL,
  `gender` enum('male','female','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
