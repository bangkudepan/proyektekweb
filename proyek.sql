-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 03:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `username` varchar(40) NOT NULL,
  `total` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(6) NOT NULL,
  `nama_item` varchar(30) NOT NULL,
  `jumlah_item` int(2) NOT NULL,
  `harga_item` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `total` int(15) NOT NULL,
  `stock` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `id_console` int(11) NOT NULL,
  `merk` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `stock` int(2) NOT NULL,
  `description` varchar(700) NOT NULL,
  `harga` int(15) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`id_console`, `merk`, `nama`, `stock`, `description`, `harga`, `image`) VALUES
(400401, 'PlayStation', 'PlayStation 4 500GB', 88, '\"Suspend mode\" eliminates the load time on your saved game and allows you to immediately return to where you left off by pressing the power button.\r\nEnables the greatest game developers in the world to unlock their creativity and push the boundaries of play through a platform that is tuned specifically to their needs.\r\nEngage in endless personal challenges between you and your community, and share your epic moments for the world to see.\r\nGamers can share their epic triumphs by hitting the \"SHARE button\" on the controller, scan through the last few minutes of gameplay, tag it and return to the game.', 3600000, 'image/consoleps4500.png'),
(400402, 'Xbox', 'Xbox One 1TB', 99, 'This bundle includes: 1TB hard drive console, full-game physical discs of Gears of War: Ultimate Edition and Rare Replay, digital download of Ori and the Blind Forest, newly updated Xbox One black wireless controller with a 3.5mm headset jack so you can plug in any headset, AC Power Cable, and an HDMI Cable.\r\nExperience the first Gears rebuilt from the ground up in 1080p in Gears of War: Ultimate Edition.\r\nEnjoy 30 iconic games from Rare in Rare Replay, including Battletoads, Banjo-Kazooie, Perfect Dark, and more.\r\nPlay select Xbox 360 games on your Xbox One with backwards compatibility.', 4200000, 'image/consolexboxone1tb.png'),
(400403, 'Bethesda', 'Fallout 4 PlayStation 4', 99, 'Next generation of open world gaming\r\nDeveloped by Bethesda Game Studios under the direction of Todd Howard\r\nFallout 4 is the follow up to the 2008 Game of the Year Fallout 3\r\nFirst title from the world renowned studio since the release of Elder Scrolls V  Skyrim', 240000, 'image/consolefallout4.png'),
(400404, 'Bethesda', 'Skyrim PlayStation 4', 99, 'Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail.\r\nThe Special Edition includes the critically acclaimed game and add-ons with all-new features.\r\nAll-new features include remastered art and effects, volumetric god rays, dynamic depth of field, screen-space reflections, and more.', 380000, 'image/consoleskyrim.png'),
(400405, 'Ubisoft', 'Assassins Creed PlayStation 4', 99, 'Experience the Assassins Creed universe from the perspective of a Templar. Play as Shay, who, in addition to the skills of a Master Assassin, also possesses new abilities, like enhanced eagle vision, and weapons, such as the air rifle and grenade launcher.\r\nWitness Shay transformation from an adventurous Assassin to a grim Templar willing to hunt down his former brothers. Experience the events that lead Shay down a dark path and set him on a course that will forever change the fate of the Brotherhood.', 350000, 'image/consoleacrogue.png'),
(400406, 'Tom Clancys', 'The Division Xbox One', 91, 'Seamless Multiplayer: The Dark Zone - Collaborate with other players, or attack and steal their loot.\r\nA Living, Breathing World - Use the environment for strategic advantages to dominate fights and ambush your enemies.\r\nUrban Jungle - Fight the Cleaners who wield flamethrowers, take on thugs who roam the city, and encounter enemy factions.\r\nGear Up and Customize Your Agent - Customize your agent and your backpack. Level up your weapons, gear, and skills.\r\nCutting-Edge Tech - Choose and upgrade your skills, and synergize with teammates to increase your chances of winning in combat.', 230000, 'image/consoledivision.png');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id_feature` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id_feature`) VALUES
(100101),
(100104),
(200202),
(300302);

-- --------------------------------------------------------

--
-- Table structure for table `headset`
--

CREATE TABLE `headset` (
  `id_headset` int(11) NOT NULL,
  `merk` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `stock` int(2) NOT NULL,
  `description` varchar(700) NOT NULL,
  `harga` int(15) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headset`
--

INSERT INTO `headset` (`id_headset`, `merk`, `nama`, `stock`, `description`, `harga`, `image`) VALUES
(100101, 'Logitech', 'Logitech G213 Prodigy Gaming Headset', 91, 'Logitech says the G231 Prodigy Gaming Headset sports a lightweight, well-balanced design, and lay-flat earpieces that can swivel up to 90-degrees for comfort and portability. Finally, the headset also bears a folding, unidirectional mic apart from on-cable controls for muting audio and controlling volume. It bears a 2-metre cable, with two 3.5mm jacks for headphone and microphone.\r\n\r\nThe Logitech G231 Prodigy Gaming Headset has a frequency response of 20Hz-20KHz, an impedance of 32 Ohms, and a weight of 255 grams without cables.', 1250000, 'image/headsetg231.png'),
(100102, 'Razer', 'Razer Man O War Limited Edition', 92, 'Latency-free wireless performance audio on PC and works with PS4.\r\nWireless 7.1 virtual surround sound for pinpoint precision.\r\n7 days of wireless gaming on a single charge.\r\nRetractable digital mic for uncompromised vocal clarity.\r\nQuick Action Controls on the ear cups for on-the-fly audio adjustments.', 1900000, 'image/headsetmanowar.png'),
(100103, 'Logitech', 'Logitech G633 Artemis Spectrum', 97, 'EXCEPTIONAL AUDIO PERFORMANCE: The G633 Artemis Spectrumâ„¢ produces crisp 7.1 Dolby and DTS headphone surround sound. The advanced Pro-G drivers and On-Board Equalizers allow customizable audio for serious gamers.\r\nCOMPATABLE ON MULTIPLE PLATFORMS: This gaming headphone is compatible with PCs, mobile devices, PS4s, the Xbox One, and more.\r\nMULTIPLE SOURCE AUDIO MIXING: Plug in two devices (1 USB and a 3.5-millimeter connection) to answer calls and play music without interrupting your gaming session.\r\nFULLY CUSTOMIZABLE: Utilize Logitech Gaming Software to choose from millions of lighting colors, set customized audio EQ, and program three G-keys with your favorite game macros.', 1900000, 'image/headsetg633.png'),
(100104, 'HyperX', 'HyperX Cloud Gaming Headset', 94, 'Extremely comfortable light weight headset with leatherette memory foam ear cups and extra set of velour ear cups\r\nOver-the Ear headphone with noise isolating ear cups and detachable microphone\r\n53mm hifi capable drivers with 15-25khz frequency response\r\nCompatibility with PCs, notebooks, tablets, mobile phones, airplane adapters, and PS4 consoles', 1060000, 'image/headsethxcloud.png'),
(100105, 'Logitech', 'Logitech Wireless Headset G930', 95, 'Headphone Driver: 1.6-Inch (40 mm), Frequency response: 20Hz-20KHz, Impedance: 32 Ohms, Sensitivity: 90dB SPL/mW.\r\nMicrophone Pickup pattern: Cardioid (Unidirectional), Type: Pressure Gradient Electret Condenser, Frequency response: 50-20KHz, Sensitivity: -40dBV/Pa re: 0dB = 1 Pa, 1KHz.\r\nDolby 7.1 Surround Sound, Seven discrete audio channels, SYSTEM REQUIREMENTS:Windows Vista, Windows 7, or Windows 8USB port.\r\nLow-frequency effects (LFE) channel, Rapid-burst transmission.\r\nAgile frequency, Noise-cancelling mic.\r\nRotate-to-mute mic, Battery: Up to 10 hours per charge.', 1150000, 'image/headsetg930.png'),
(100106, 'Corsair', 'Corsair Raptor HS30 Dark Red Edition', 95, '40mm neodymium drivers for better sound quality and greater sensitivity.\r\nCircumaural, closed-back design keeps sound in and background noise out.\r\nNoise cancelling microphone so you can be heard loud and clear.\r\nPadded ear cups and headband for extra comfort.\r\nCompatible with PC, Mac, PlayStation 4 and most mobile devices.', 660000, 'image/headsetcorsairHS30.png');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(6) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `jumlah_item` int(2) NOT NULL,
  `harga_item` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `total` int(15) NOT NULL,
  `stoc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `id_cart`, `nama_item`, `jumlah_item`, `harga_item`, `username`, `image`, `total`, `stoc`) VALUES
(10, 200201, 'Logitech G213 Prodigy RGB Gami', 3, 950000, 'user@user.com', 'image/keyboardg213.png', 2850000, 95),
(11, 100101, 'Logitech G213 Prodigy Gaming H', 4, 1250000, 'user@user.com', 'image/headsetg231.png', 5000000, 95),
(12, 400401, 'PlayStation 4 500GB', 4, 3600000, 'user@user.com', 'image/consoleps4500.png', 14400000, 95),
(13, 100102, 'Razer Man O War Limited Editio', 2, 1900000, 'user@user.com', 'image/headsetmanowar.png', 3800000, 94),
(14, 200202, 'Logitech G413 Carbon', 4, 900000, 'user@user.com', 'image/keyboardg413.png', 3600000, 15),
(15, 200201, 'Logitech G213 Prodigy RGB Gami', 3, 950000, 'user@user.com', 'image/keyboardg213.png', 2850000, 92),
(16, 200204, 'Logitech G Pro gaming keyboard', 4, 1850000, 'user@user.com', 'image/keyboardgpro.png', 7400000, 5),
(17, 100103, 'Logitech G633 Artemis Spectrum', 2, 1900000, 'user@user.com', 'image/headsetg633.png', 3800000, 99),
(18, 300303, 'Razer Mamba Wireless Gaming', 3, 1700000, 'user1@user.com', 'image/mousemamba.png', 5100000, 12),
(19, 400406, 'The Division Xbox One', 4, 230000, 'user1@user.com', 'image/consoledivision.png', 920000, 95),
(20, 200202, 'Logitech G413 Carbon', 4, 900000, 'user@user.com', 'image/keyboardg413.png', 3600000, 80),
(21, 400401, 'PlayStation 4 500GB', 3, 3600000, 'user@user.com', 'image/consoleps4500.png', 10800000, 91),
(22, 200201, 'Logitech G213 Prodigy RGB Gami', 4, 950000, 'user@user.com', 'image/keyboardg213.png', 3800000, 89);

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `id_keyboard` int(6) NOT NULL,
  `merk` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `stock` int(2) NOT NULL,
  `description` varchar(700) NOT NULL,
  `harga` int(15) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyboard`
--

INSERT INTO `keyboard` (`id_keyboard`, `merk`, `nama`, `stock`, `description`, `harga`, `image`) VALUES
(200201, 'Logitech', 'Logitech G213 Prodigy RGB Gaming', 85, 'G213 Prodigy RGB Gaming Keyboard, Logitech says its Mech-Dome keys combine the best of both membrane and mechanical keyboards. They provide a 4mm travel distance, and a 50g actuation force (45g tactile bump force, 55g maximum force - the same as the G810). Alongside side an anti-ghosting matrix, the G213 is said to have a report rate that is 4 times faster than the 8ms rate of standard keyboards. As for the spill-resistance, Logitech says it is rated for 60ml liquid spillage. It sports a 1.8-metre long wire.', 950000, 'image/keyboardg213.png'),
(200202, 'Logitech', 'Logitech G413 Carbon', 76, 'The Romer-Gâ„¢mechanical switch is purpose-built for pro-grade performance, responsiveness and durability.Romer-G is also purpose-designed for precise and clean lighting through the keycap. Keys are always visible and never distracting, especially during late night gaming sessions. Additional USB cable connects the USB pass-through port to its own input for 100% power throughout and data speed. Plug in a device to charge or plug in a mouse to charge your adversaries. FULL FUNCTION KEYS: Function (FN) keys let you control volume, play and pause, skip track, mute, toggle lighting, enter game mode, etc. The brushed aluminum-magnesium alloy top case serves as the keyboardâ€™s backbone.', 900000, 'image/keyboardg413.png'),
(200203, 'Logitech', 'Logitech G710 Plus Brown', 80, 'Tactile, high-speed keys: Quiet mechanical keys deliver gaming-grade responsiveness and superior tactile feedback without noise distractions.\r\nAdjustable dual-zone backlighting: Adjust the brightness of WASD/arrow keys independently from the rest of the keyboard so you can easily find any key?even in low light.\r\n6 programmable G-keys: Configure up to 18 unique functions per game, including single keypresses, complex macros or intricate Lua scripts.\r\nHigh-performance gaming keys: 110 anti-ghosting keys and 26-key rollover help you make the right moves with flawless precision; one-touch media keys let you instantly control volume, mute and media playback.', 1800000, 'image/keyboardg710.png'),
(200204, 'Logitech', 'Logitech G Pro gaming keyboard', 80, 'Pro grade Logitech G mechanical keyboard built to the exacting specifications of eSports athletes for a competition level blend of speed, precision and quiet performance.\r\nDurable Romer G switches deliver 25 percent faster actuation than standard mechanical switches so every keypress is nearly instantaneous from fingers to screen.\r\nDetachable Micro USB cables features a three pronged design for an easy, secure connection and safe transport in your travel bag.\r\nBrilliant RGB Illumination with 16.8 million color options lets you easily customize any or every key for individual games.', 1850000, 'image/keyboardgpro.png'),
(200205, 'Razer', 'Razer Blackwidow Ultimate 2016', 80, 'Multi-Award winning Razer Mechanical Switches - Razer Green Switch with tactile bump and audible click for the best overall gaming performance.\r\nExtreme Durability- Razer mechanical switches are rated up to 80 million keystrokes and come with a 2-year warranty.\r\nIndividually programmable Razer Green backlit key with dynamic lighting effects.\r\nUSB 2.0 and Audio pass through for easy cable routing.', 1500000, 'image/keyboardblackwidow.png'),
(200206, 'Razer', 'Overwatch Razer Blackwidow Chroma', 80, 'Multi-Award winning Razer Mechanical Switches - Razer Green Switch with tactile bump and audible click for the best overall gaming performance.\r\nExtreme Durability- Razer mechanical switches are rated up to 80 million keystrokes and come with a 2-year warranty.\r\nOverwatch Razer Chroma Integration â€“ Experience real time immersive lighting effects unique to each Overwatch character available on all Razer Chroma devices.\r\nPowered by Razer Chroma â€“ Individually programmable backlit keys with 16.8 million color options.', 2400000, 'image/keyboardoverwatch.png');

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `id_mouse` int(6) NOT NULL,
  `merk` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `stock` int(2) NOT NULL,
  `description` varchar(700) NOT NULL,
  `harga` int(15) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`id_mouse`, `merk`, `nama`, `stock`, `description`, `harga`, `image`) VALUES
(300301, 'Logitech', 'Logitech G102 Prodigy Black', 95, '6000DPI OPTICAL SENSOR\r\nCOMFORTABLE, CLASSIC DESIGN\r\nPROGRAMMABLE RGB LIGHTING & BUTTONS', 250000, 'image/mouseg102.png'),
(300302, 'Logitech', 'Logitech G302 Daedalus Prime', 80, '6 programmable buttons.\r\nOn the fly DPI switching.\r\nMetal spring left/right button tensioning system.\r\n1 millisecond report.\r\nHigh Speed Clicking.\r\nFull Speed USB.\r\nTuned to Pro Gamers Specifications: Features and playability developed with the help of Pro MOBA players.', 660000, 'image/mouseg302.png'),
(300303, 'Razer', 'Razer Mamba Wireless Gaming', 9, 'It has up to 200 inches per second/ 50g acceleration.\r\nIt has multi-color lighting.\r\nIt has 4G Dual Sensor System.\r\nIt has Gaming-Grade wireless technology.\r\nIt has improved battery life and charging dock.\r\nGaming-Grade Wireless Technology.\r\n4G Dual Sensor System.', 1700000, 'image/mousemamba.png'),
(300304, 'SteelSeries', 'SteelSeries Rival 500', 80, 'Fastest, most ergonomic button layout available â€“ built around your thumb.\r\n16,000 CPI custom PixArt sensor for extreme precision.\r\nSteelSeries exclusive tactile alerts let you feel in-game events.\r\nReinforced left and right mouse buttons with industry-leading 30 million click switches.\r\nFully-customizable with 15-programmable fast-click buttons.', 1060000, 'image/mouserival.png'),
(300305, 'Razer', 'Razer Ouroboros Elite', 80, 'Customizable Ambidextrous Ergonomics.\r\n8200dpi 4G Laser Sensor.\r\n1ms Gaming Grade Wireless Connectivity.', 1990000, 'image/mouseouroboros.png'),
(300306, 'Redragon', 'Redragon M902 SAMSARA', 80, 'Package contents: Samsara High-Precision Laser Gaming Mouse, 8-piece weight tuning set, weight carrying case, extra TEFLON feet, user manual, and drivers CD.\r\nBuilt for FPS gamers: Up to 16400 DPI (1000/2000/4000/8200/16400 DPI), 12000 FPS, 1000 Hz polling rate, 30G acceleration, Avago sensor, and Omron micro switches.\r\n13 programmable buttons, 5 memory profiles each with distinct light color for quick identification, an 8-piece weight tuning set (2.4g x 8).\r\nDurable smooth TEFLON feet pads and contoured body for ultimate gaming control. High-end features including 15 buttons, and 5 color modes.', 450000, 'image/mousem902.png');

-- --------------------------------------------------------

--
-- Table structure for table `poll_system`
--

CREATE TABLE `poll_system` (
  `pollrate` int(5) NOT NULL,
  `countrate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll_system`
--

INSERT INTO `poll_system` (`pollrate`, `countrate`) VALUES
(1, 18),
(2, 37),
(3, 424),
(4, 582),
(5, 1821);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pemesanan`
--

CREATE TABLE `tabel_pemesanan` (
  `id_pemesanan` int(6) NOT NULL,
  `username` varchar(40) NOT NULL,
  `norekening` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pemesanan`
--

INSERT INTO `tabel_pemesanan` (`id_pemesanan`, `username`, `norekening`, `nama`, `alamat`, `rekening`, `total`) VALUES
(4, 'user@user.com', 1222239591, 'user', 'Kalisari V 12', 'bca', 0),
(5, 'user@user.com', 1241414, 'user', 'Kertajaya', 'bca', 24200000),
(6, 'user@user.com', 11551551, 'user', 'Kalisari', 'bca', 1900000),
(7, 'user@user.com', 141414, 'user', 'kalisari', 'mandiri', 2850000),
(8, 'user@user.com', 12313141, 'test', 'test', 'bca', 23200000),
(9, 'user@user.com', 15151515, 'user', 'user', 'BCA', 3600000),
(10, 'user@user.com', 124141, 'user', 'user', 'BCA', 14050000),
(11, 'user1@user.com', 15151, 'user1', 'test', 'BCA', 6020000),
(12, 'user@user.com', 142141, 'aasga', 'asdgdsa', 'bca', 18200000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `fullname`, `rate`) VALUES
('admin@admin.com', 'admin', 'Admin', 0),
('handoko@lala.com', 'handoko', 'ndokohh', 1),
('test@user.com', 'test', 'test', 1),
('user1@user.com', 'user', 'User 1', 1),
('user3@user.com', 'user', 'user3', 1),
('user4@user.com', 'user', 'user4', 1),
('user5@user.com', 'user', 'user5', 1),
('user@user.com', 'user', 'User', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id_console`);

--
-- Indexes for table `headset`
--
ALTER TABLE `headset`
  ADD PRIMARY KEY (`id_headset`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`id_keyboard`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id_mouse`);

--
-- Indexes for table `poll_system`
--
ALTER TABLE `poll_system`
  ADD PRIMARY KEY (`pollrate`);

--
-- Indexes for table `tabel_pemesanan`
--
ALTER TABLE `tabel_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `id_console` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400407;
--
-- AUTO_INCREMENT for table `headset`
--
ALTER TABLE `headset`
  MODIFY `id_headset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100107;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `id_keyboard` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200207;
--
-- AUTO_INCREMENT for table `mouse`
--
ALTER TABLE `mouse`
  MODIFY `id_mouse` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300307;
--
-- AUTO_INCREMENT for table `tabel_pemesanan`
--
ALTER TABLE `tabel_pemesanan`
  MODIFY `id_pemesanan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
