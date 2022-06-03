-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:59 AM
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
-- Database: `miublog`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `BuyerID` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone number` int(11) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`BuyerID`, `name`, `email`, `phone number`, `address`) VALUES
(1, 'nada', 'nada@gmail.com', 124, 'mohandseen'),
(2, 'zeina', 'zeina@gmail.com', 1234567890, 'sheraton ');

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE `chatbox` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`name`, `email`, `message`) VALUES
('natalie', 'natalysherif@gmail.com', ''),
('natalie', 'natalysherif@gmail.com', ''),
('nat', 'natalysherif@gmail.com', 'hi'),
('nat', 'natalysherif@gmail.com', 'hi'),
('hazem', 'mohamed@gmail.com', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `date ordered` date NOT NULL,
  `date received` date NOT NULL,
  `Total price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `buyer_id`, `date ordered`, `date received`, `Total price`) VALUES
(20, 1, '2022-06-02', '0000-00-00', 450),
(21, 2, '2022-06-02', '0000-00-00', 450);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 20, 3, 1),
(2, 21, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `picture` text NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `productname`, `picture`, `description`, `quantity`, `price`) VALUES
(3, 'D50', '3-D50..jpg', 'Composition:strong Homogenous disinfectant contains peracetic acid +acetic acid + Hydrogen peroxide.Dosage & Administration:Against viruses, powerful general & fast disinfectant Bacteria & fungi for farms, hatcheries & water.Dilute: 0.25% : 0.5%Package: 5 L - 10 L', 1, 450),
(4, 'Amoxy active 80%', '4-Amoxy-Active-697.jpg', 'Composition: Each 1gm contains: Amoxicillin trihydrate 800 mg.Dosage & Administration:                                                                            For treatment of Respiratory and GIT infections caused by Clostridium, E-Coli, Cholera and coryza.Dosage: 20 mg per Kg of body weight daily for 3-5 days.                                      Package: 1 kg', 1, 450),
(5, 'Doxylin 50%', '5-Doxylin-50.jpg', 'Composition:Each 1gm contains: Doxycycline hyclate 500mg + Citric acid.		Administration:Broad spectrum antibiotic for treatment of Gm +ve, Gm -ve and mycoplasma infections.Dose: 300g per 1000 L of drinking water daily for 3-5 days. (20mg / 1 kg B.w).Package: 500g – 1Kg – 5Kg', 1, 500),
(6, 'Mix colistin', 'colistin.jpg', 'Composition:Each 1 gm contains: Colistin sulphate 5.000.000 IU.Administration:Narrow spectrum antibiotic against gm -ve bacteria.Dose: 100-200 g per 1000 L of drinking water daily. For 3-5 days.package: 500 gm – 1 Kg.', 1, 535),
(7, 'Citroxyl', '7-Citroxyl.jpg', 'Composition:Oxytetracycline HCL 50% in citric acid base.Dosage & Administration:Broad spectrum antibiotic for treatment of gram -ve and gram +ve bacteria.0.4 - 0.5g of Citroxyl per 1 liter of drinking water for 3 -7 daypackage: 1 Kg', 1, 540),
(8, 'Ecocid S', '8-Ecocid S.jpg', 'CompositionPotassium peroxymonosulphate 50%.Dosage & Administration:Strong general disinfectant, safe and suitable to all types of disinfection in the farms, hatcheries, etc., Used at the rate of 0.5%: 1%.Package: 1 kg – 5 kg.', 1, 500),
(9, 'Econolyte', '9-Econolyte label.jpg', 'Composition:Minerals, electrolyte and vitamin C.Dosage & Administration:Compensate deficiency during heat stress and diarrhea.Dissolve one 453.6 gm package into 969 L of drinking water for 3-5 days.Package: 453.6 gm.', 1, 250),
(10, 'Kenovit E', '10-Kenovit E.png', 'Composition:Immunostimulant Bronchodilator especially during respiratory infections.Natural antiviral, antibacterial and antifungalAntioxidant: preventing tissue oxidationAnti-inflammatoryRelieve heat stressDose and administration:50:100 ml / 1000 liter of drinking water for 3 – 5 days or twice weekly / 12 hr. /day.Package: 250 ml', 1, 550),
(11, 'Phenoxypen', '11-Phenoxypen.jpg', 'CompositionEach 1 gm contains:Phenoxy methyl penicillin potassium 325 mg.Administrationprevention & treatment of necrotic enteritis, Streptococcusstaphylococcus, Spirochaeta infections in chickensDosage:first 2 days [ 20mg / kg b.w.t.]following 3 days [10mg /kg b.wt]package: 500 gm, 1 Kg', 1, 600),
(13, 'T.S.  SOL', '13-TS-sol-5L.jpg', 'Composition:Sulfamethoxazole + Trimethoprim.Dosage & AdministrationTreatment of respiratory tract and GIT infections[1-2 cm/1 L of drinking water, for 3-7 days]Package: 1 L - 5 L', 1, 350),
(14, 'Tylogran', 'Tylogran-new.png', 'Composition:Tylosin tatrate 100%  [Micronized Granules]Dosage & Administration:Treatment of CRD caused by M.G & M.S.& necrotic enteritis caused by CL perfringens.0.5 gm /L of water.Package: 550 gm – 110 gm', 1, 650),
(15, 'Vitalyte plus', 'Vitalyte 150.jpg', 'Composition:A unique formula of multi–Vitamins,Electrolytes, minerals, Amino acidsAnd Probiotics in acid base.Dosage & Administration:Prevention of Vitamin & mineral deficiency, growth promoter and immune stimulant.Dose: 0.3: 0.6 gm / 1 L drinking waterPackage: 1 kg', 1, 500),
(16, 'Vac – Pac plus', '16-Vac-Pac-Plus-.jpg', 'Composition:Vaccine, second generation stabilizer designed to eliminate the negative effect of chlorine, oxidizers % PH swings in vaccination water.Dosage & Administration:100 gm pack stabilizes 1000 L drinking water.Package: 100 gm', 1, 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'mariam', 'mariamgalal681@gmail.com', '$2y$10$9HD6J5sTmm8t19HmL/up0.ASZ/vn8spFoAUwtCFHfEazz5RKMr.2a'),
(2, 'natalie', 'natalysherif@gmail.com', '$2y$10$sdnTPCgZe5nULuGDETFsk.P5p3liGVJFmfWjyxDJxglxf39P10HmK'),
(3, 'natalie', 'nataly@gmail.com', '$2y$10$ouxfQ5NPFueFwZiitubVN.dDICC1GN/KCE7DsC6y2J9CSENWzO5MS'),
(5, 'mohamed', 'mohamed@gmail.com', '$2y$10$PTRSySBZ55kRmfHa6xj3l.qzqlnpEvbhxPz8E1aa0NwoMkvpVw2Wq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`BuyerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `BuyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`BuyerID`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
