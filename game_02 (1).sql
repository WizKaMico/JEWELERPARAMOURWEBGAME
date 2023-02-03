-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 06:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_02`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `chap_id` int(11) NOT NULL,
  `chapter_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chap_id`, `chapter_name`) VALUES
(1, 'CHAPTER 1'),
(2, 'CHAPTER 2'),
(3, 'CHAPTER 3'),
(4, 'CHAPTER 4'),
(5, 'CHAPTER 5'),
(6, 'CHAPTER 6'),
(7, 'CHAPTER 7');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `cid` int(11) NOT NULL,
  `character_name` varchar(250) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`cid`, `character_name`, `photo`) VALUES
(2, 'Basilio', 'upload/1667933996.png'),
(3, 'Benzayb_c_mouth', 'upload/1667934700.png'),
(4, 'Benzayb_o_mouth', 'upload/1667934845.png'),
(5, 'don_custodio_c_mouth', 'upload/1667934893.png'),
(6, 'don_custodio_o_mouth', 'upload/1667934934.png'),
(7, 'don_tiburcio', 'upload/1667934964.jpg'),
(8, 'donya_victorina_c_mouth', 'upload/1667935004.png'),
(9, 'donya_victorina_o_mouth', 'upload/1667935030.png'),
(10, 'isagani', 'upload/1667935077.png'),
(11, 'padre_camora_c_mouth', 'upload/1667935106.png'),
(12, 'padre_camora_o_mouth', 'upload/1667935131.png'),
(13, 'padre_irene_c_mouth', 'upload/1667935170.png'),
(14, 'padre_irene_o_mouth', 'upload/1667935200.png'),
(15, 'padre_salvi_c_mouth', 'upload/1667935243.png'),
(16, 'padre_salvi_o_mouth', 'upload/1667935257.png'),
(17, 'padre_sibyla_c_mouth', 'upload/1667935298.png'),
(18, 'padre_sibyla_o_mouth', 'upload/1667935319.png'),
(19, 'simoun_c_mouth.php', 'upload/1667935350.png'),
(20, 'simoun_o_mouth', 'upload/1667935374.png'),
(21, 'Temporary_Character', 'upload/1668543817.png');

-- --------------------------------------------------------

--
-- Table structure for table `flow`
--

CREATE TABLE `flow` (
  `flow_id` int(11) NOT NULL,
  `chap_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flow`
--

INSERT INTO `flow` (`flow_id`, `chap_id`, `title`, `description`, `photo`) VALUES
(1, 1, 'INTRODUCTION', 'THIS IS AN INTRODUCTION OF THE INTRODUCTION THAT SHOULD BE AN INTRODUCTION BUT THEREFORE AN INTRODUCTION', 'upload/1667926523.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flow_option`
--

CREATE TABLE `flow_option` (
  `option_id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flow_option`
--

INSERT INTO `flow_option` (`option_id`, `qid`, `option`) VALUES
(1, 1, ' “Here you have in the province a bridge, constructed by a brother of ours\r\n'),
(2, 1, 'Here you have in the province a canal, constructed by a brother of ours\r\n'),
(3, 1, '“Here you have in the province a mercenary, constructed by a brother of ours'),
(4, 1, '“Here you have in the province a transportation, constructed by a brother of ours'),
(5, 2, '“That’s it, puñales, that very thing, that was exactly what I was going to say!'),
(6, 2, '“That’s it, wawa, that very thing, that was exactly what I was going to say!” '),
(7, 2, '“That’s it, magsaysay, that very thing, that was exactly what I was going to say!”'),
(8, 2, '“That’s it, cawayan, that very thing, that was exactly what I was going to say!”'),
(9, 3, 'The jeweler was an American man, who has an accent of British.'),
(10, 3, 'The jeweler was a European man, a short, white man, dressed in American fashion.\r\n'),
(11, 3, 'The jeweler was a tall, meager, nervous man, very dark,<br> dressed in the English fashion and wearing a pith helmet.<br> Remarkable about him was his long white hair<br> contrasted with a sparse black beard, indicating a mestizo origin. '),
(12, 3, 'The jeweler is a Chinese man, a black hair and blue eyes.\r\n'),
(13, 4, 'Dig a canal straight from the source to the mouth of the river,<br> passing through Manila; that is, make <br>a new river-channel and fill up the old Pasig.'),
(14, 4, 'Dig a canal straight from the source to the mouth of the river,<br> passing through Manila; that is,<br> make a new river-channel and fill up the new Pasig.'),
(15, 4, 'Create a new canal path from the mouth of the river passing through Bulacan.'),
(16, 4, 'Create a new canal path from the mouth of the river passing through Cavite.'),
(17, 5, ' “Then rebuild them!”'),
(18, 5, '“Then remove them!” '),
(19, 5, '“Then destroy them!”'),
(20, 5, '“Then pay them!”'),
(21, 6, '“kill them all!”'),
(22, 6, '“torture them all!”'),
(23, 6, '“Don’t pay them!”'),
(24, 6, '“Then pay them!”'),
(25, 7, '“Belive in it, Don Custodio,” '),
(26, 7, '“Don’t fool yourself, Don Custodio,”'),
(27, 7, '“Be a fool, Don Custodio,”'),
(28, 7, '“Are you one of them, Don Custodio,”'),
(29, 8, 'Did the Jewish prisoners rebel against the pious Titus? '),
(30, 8, '“Did the Jewish prisoners join the pious Titus?” '),
(31, 9, '“Those times are far away,” '),
(32, 9, '“Yes indeed, it was” '),
(33, 10, 'Upper Deck'),
(34, 10, 'Lower  Deck'),
(35, 10, 'Middle  Deck'),
(36, 10, 'Jump in the river  '),
(37, 11, 'We have them, sir. Each student has contributed a real.'),
(38, 11, 'We Do not have them it, sir. Each student has not contributed a real yet'),
(39, 11, 'Do we need to have funds for it, sir?'),
(40, 11, 'No need for it they will give us permit for free.'),
(41, 12, 'She said that I have to listed to his sermon all day. '),
(42, 12, 'Nothing at all, sir. '),
(43, 12, 'He preached me a sermon about the choosing of a wife.<br> I answered him that there wasn’t in Manila another<br> like her—beautiful, well-bred, an orphan'),
(44, 12, 'He preached me a sermon about the choosing a life, where I want to be.'),
(45, 13, 'Maybe, but I forgotten it, its long time ago.'),
(46, 13, 'How the devil am I to know it when I’ve never set foot in it'),
(47, 13, 'I just want to ask about it, But I know it.'),
(48, 13, 'Not quite sure familiar on that province.'),
(49, 14, 'Maybe, but I forgotten it, its long time ago'),
(50, 14, 'How the devil am I to know it when I’ve never set foot in it'),
(51, 14, 'I heard Padre Camorra is full of energy in this morning, I just notice it early.'),
(52, 14, 'heard Padre Camorra say this morning that the lack of energy noticeable in this country'),
(53, 15, 'Maybe, but I forgotten it, its long time ago'),
(54, 15, 'How the devil am I to know it when I’ve never set foot in it '),
(55, 15, 'I heard Padre Camorra is full of energy in this morning, I just notice it early.'),
(56, 15, 'I heard Padre Camorra say this morning that the lack of energy noticeable in this country '),
(57, 16, 'Maybe, but I forgotten it, its long time ago.'),
(58, 16, 'How the devil am I to know it when I’ve never set foot in it'),
(59, 16, 'I heard Padre Camorra is full of energy in this morning, I just notice it early.'),
(60, 16, 'I heard Padre Camorra say this morning that the lack of energy noticeable in this country '),
(61, 17, 'Maybe, but I forgotten it, its long time ago.'),
(62, 17, 'How the devil am I to know it when I’ve never set foot in it '),
(63, 17, 'I heard Padre Camorra is full of energy in this morning, I just notice it early.'),
(64, 17, 'I heard Padre Camorra say this morning that the lack of energy noticeable in this country'),
(65, 18, 'I’m only interested in those that call up legends.'),
(66, 18, 'I’m only interested in those that call up Mythical Creatures.'),
(67, 18, 'I’m only interested in myself than the call up legends.'),
(68, 19, 'Your  right about that, why did you not give her a cave?'),
(69, 19, 'Because it’s not a very gallant act.'),
(70, 19, 'That’s not how it works here'),
(71, 20, 'First did he became a guardian upon seeing himself and <br>second animals that was petrified have been revive.'),
(72, 20, 'First, what may have become of the devil on seeing himself <br>suddenly confined within a stone and second,<br> if the petrified animals that I have seen<br> in various European museums may not have been<br> the victims of some antediluvian saint?'),
(73, 20, 'First article is about what you see,<br> second is about the monster that terror chinamen.');

-- --------------------------------------------------------

--
-- Table structure for table `flow_question`
--

CREATE TABLE `flow_question` (
  `qid` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `chap_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flow_question`
--

INSERT INTO `flow_question` (`qid`, `flow_id`, `chap_id`, `question`, `answer`) VALUES
(1, 1, 1, 'Question: What was in the province?\r\n', 1),
(2, 1, 1, 'Name of the bridge that was constructed by their brothers.', 5),
(3, 1, 1, 'Simoun was a….', 11),
(4, 1, 1, 'Simoun was Suggesting in their discussion about.,', 14),
(5, 1, 1, 'Simoun', 19),
(6, 1, 1, 'Simoun', 23),
(7, 1, 1, 'Simoun', 26),
(8, 1, 1, 'Simoun to Don Custodio', 29),
(9, 1, 1, 'Simoun to Don Custodio', 31),
(10, 1, 1, 'Simoun going to…', 33),
(11, 2, 2, 'Isagani to Basilio', 37),
(12, 2, 2, 'Isagani to Basilio', 43),
(13, 2, 2, 'Simoun to Isagani', 46),
(14, 2, 2, 'Simoun to Isagani', 52),
(15, 2, 2, 'Isagani to Basilio', 56),
(16, 2, 2, 'Isagani to Basilio', 60),
(17, 2, 2, 'Isagani to Basilio', 64),
(18, 3, 3, 'Simoun in upper deck', 65),
(19, 3, 3, 'Simoun in upper deck', 69),
(20, 3, 3, 'Simoun in upper deck', 72);

-- --------------------------------------------------------

--
-- Table structure for table `main_character`
--

CREATE TABLE `main_character` (
  `cid` int(11) NOT NULL,
  `character_name` varchar(250) NOT NULL,
  `speech` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_character`
--

INSERT INTO `main_character` (`cid`, `character_name`, `speech`, `photo`) VALUES
(1, 'Basilio', ' son of Sisa and another character from Noli Me Tángere. In the events of El fili, he is an aspiring and so far successful physician on his last year at university and was waiting for his license to be released upon his graduation. After his mother\'s death in the Noli, he applied as a servant in Capitán Tiago\'s household in exchange for food, lodging, and being allowed to study. Eventually he took up medicine, and with Tiago having retired from society, he also became the manager of Tiago\'s vast estate. He is a quiet, contemplative man who is more aware of his immediate duties as a servant, doctor, and member of the student association than he is of politics or patriotic endeavors. His sweetheart is Juli, the daughter of Kabesang Tales whose family took him in when he was a young boy fleeing the Guardia Civil and his deranged mother.\r\n', 'upload/1667933933.png'),
(2, 'Benzayb', 'A columnist for the Manila Spanish newspaper El Grito de la Integridad. Ben-Zayb is his pen name and is an anagram of Ybáñez, an alternate spelling of his last name Ibáñez. His first name is not mentioned. Ben-Zayb is said to have the looks of a friar, and believes that in Manila they think because he thinks. He is deeply patriotic, sometimes to the point of jingoism. As a journalist, he had no qualms embellishing a story, conflating and butchering details, turning phrases over and over, making a mundane story sound better than it actually was. Father Camorra derisively calls him an ink-slinger.\r\n', 'upload/1667993687.png'),
(3, 'Don Custodio', ' Custodio de Salazar y Sánchez de Monteredondo, a famous \"contractor\" who was tasked by the Captain-General to develop the students association\'s proposal for an academy for the teaching of Spanish, but was then also under pressure from the priests not to compromise their prerogatives as monopolizers of instruction. Some of the novel\'s most scathing criticism is reserved for Custodio, who is portrayed as an opportunist who married his way into high society, who regularly criticized favored ideas that did not come from him, but was ultimately, laughably incompetent in spite of his scruples.\r\n', 'upload/1667993716.png'),
(4, 'Don Tiburcio', 'My name is Don Tiburcio', 'upload/1667993742.jpg'),
(5, 'Donya Victorina', 'My name is Donya Victorina', 'upload/1667993774.png'),
(6, 'Isagani', 'Basilio\'s friend. He is described as a poet, taller and more robust than Basilio although younger. He is the nephew of Padre Florentino, but is also rumored to be Florentino\'s son with his old sweetheart before he was ordained as a priest. During the events of the novel, Isagani is finishing his studies at the Ateneo Municipal and is planning to take medicine. A member of the student association, Isagani is proud and naive, and tends to put himself on the spot when his ideals are affronted. His unrestrained idealism and poeticism clash with the more practical and mundane concerns of his girlfriend, Paulita Gómez. When Isagani allows himself to be arrested after their association is outlawed, Paulita leaves him for Juanito Peláez. In his final mention in the novel, he was bidding goodbye to his landlords, the Orenda family, to stay with Florentino permanently.', 'upload/1667993798.png'),
(7, 'Padre Camorra', 'the parish priest of Tiani. Ben-Zayb\'s regular foil, he is said to look like an artilleryman in counterpoint to Ben-Zayb\'s friar looks. He stops at nothing to mock and humiliate Ben-Zayb\'s liberal pretensions. In his own parish, Camorra has a reputation for unrestrained lustfulness. He drives Juli into suicide after attempting to rape her inside the convent. For his misbehavior he was \"detained\" in a luxurious riverside villa just outside Manila.\r\n', 'upload/1667993849.png'),
(8, 'Padre Irene', 'Capitán Tiago\'s spiritual adviser. Along with Don Custodio, Írene is severely criticized as a representative of priests who allied themselves with temporal authority for the sake of power and monetary gain. Known to many as the final authority who Custodio consults, the student association sought his support and gifted him with ', 'upload/1667993876.png'),
(9, 'Padre Salvi', 'a Franciscan friar who served as the former parish priest of San Diego in Noli Me Tángere, and now the director and chaplain of the Santa Clara convent. The epilogue of the Noli implies that Salví regularly rapes María Clara when he is present at the convent. In El fili, he is described as her confessor. In spite of reports of Ibarra\'s death, Salví believes that he is still alive and lives in constant fear of his revenge.\r\n', 'upload/1667993921.png'),
(10, 'Padre Sibyla', 'a Dominican introduced in Noli Me Tángere who now serves as the director and chaplain of the University of Santo Tomas.', 'upload/1667993942.png'),
(11, 'Simoun', 'Crisóstomo Ibarra in disguise, presumed dead at the end of Noli Me Tángere. Ibarra has returned as the wealthy jeweler Simoun. His appearance is described as being tanned, having a sparse beard, long white hair, and large blue-tinted glasses. He was sometimes crude and confrontational. He was derisively described by Custodio and Ben-Zayb as an American mulatto or a British Indian. While presenting as the arrogant elitist on the outside, he secretly plans a violent revolution in order to avenge himself for his misfortunes as Crisóstomo Ibarra, as well as hasten Elías\' reformist goals.\r\n', 'upload/1667993970.png'),
(12, 'Temporary Character', 'This is a temporary Character', 'upload/1668539903.png');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`user_id`, `fullname`, `password`, `email`, `code`, `status`, `date_created`) VALUES
(1, 'Gerald Mico', '21232f297a57a5a743894a0e4a801fc3', 'tricore012@gmail.com', 92972, 'VALID', '2022-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `player_chapter`
--

CREATE TABLE `player_chapter` (
  `id` int(11) NOT NULL,
  `chap_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_chapter`
--

INSERT INTO `player_chapter` (`id`, `chap_id`, `email`, `status`) VALUES
(1, 1, 'tricore012@gmail.com', 'COMPLETED'),
(2, 2, 'tricore012@gmail.com', 'COMPLETED'),
(3, 3, 'tricore012@gmail.com', 'COMPLETED'),
(4, 4, 'tricore012@gmail.com', 'NEXT'),
(5, 1, 'tricore012@gmail.com', 'COMPLETED'),
(6, 2, 'tricore012@gmail.com', 'COMPLETED'),
(7, 3, 'tricore012@gmail.com', 'COMPLETED'),
(8, 4, 'tricore012@gmail.com', 'NEXT');

-- --------------------------------------------------------

--
-- Table structure for table `player_completed_chapter`
--

CREATE TABLE `player_completed_chapter` (
  `id` int(11) NOT NULL,
  `chapter` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_completed_chapter`
--

INSERT INTO `player_completed_chapter` (`id`, `chapter`, `qid`, `email`) VALUES
(1, 1, 1, 'tricore012@gmail.com'),
(2, 1, 2, 'tricore012@gmail.com'),
(3, 1, 3, 'tricore012@gmail.com'),
(4, 1, 4, 'tricore012@gmail.com'),
(5, 1, 5, 'tricore012@gmail.com'),
(6, 1, 6, 'tricore012@gmail.com'),
(7, 1, 7, 'tricore012@gmail.com'),
(8, 1, 8, 'tricore012@gmail.com'),
(9, 1, 9, 'tricore012@gmail.com'),
(10, 1, 10, 'tricore012@gmail.com'),
(11, 2, 11, 'tricore012@gmail.com'),
(12, 2, 12, 'tricore012@gmail.com'),
(13, 2, 13, 'tricore012@gmail.com'),
(14, 2, 14, 'tricore012@gmail.com'),
(15, 2, 15, 'tricore012@gmail.com'),
(16, 2, 16, 'tricore012@gmail.com'),
(17, 2, 17, 'tricore012@gmail.com'),
(18, 3, 18, 'tricore012@gmail.com'),
(19, 3, 19, 'tricore012@gmail.com'),
(20, 2, 20, 'tricore012@gmail.com'),
(21, 1, 1, 'tricore012@gmail.com'),
(22, 1, 2, 'tricore012@gmail.com'),
(23, 1, 3, 'tricore012@gmail.com'),
(24, 1, 4, 'tricore012@gmail.com'),
(25, 1, 5, 'tricore012@gmail.com'),
(26, 1, 6, 'tricore012@gmail.com'),
(27, 1, 7, 'tricore012@gmail.com'),
(28, 1, 8, 'tricore012@gmail.com'),
(29, 1, 9, 'tricore012@gmail.com'),
(30, 1, 10, 'tricore012@gmail.com'),
(31, 2, 11, 'tricore012@gmail.com'),
(32, 2, 12, 'tricore012@gmail.com'),
(33, 2, 13, 'tricore012@gmail.com'),
(34, 2, 14, 'tricore012@gmail.com'),
(35, 2, 15, 'tricore012@gmail.com'),
(36, 2, 16, 'tricore012@gmail.com'),
(37, 2, 17, 'tricore012@gmail.com'),
(38, 3, 18, 'tricore012@gmail.com'),
(39, 3, 19, 'tricore012@gmail.com'),
(40, 2, 20, 'tricore012@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chap_id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `flow`
--
ALTER TABLE `flow`
  ADD PRIMARY KEY (`flow_id`);

--
-- Indexes for table `flow_option`
--
ALTER TABLE `flow_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `flow_question`
--
ALTER TABLE `flow_question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `main_character`
--
ALTER TABLE `main_character`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `player_chapter`
--
ALTER TABLE `player_chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_completed_chapter`
--
ALTER TABLE `player_completed_chapter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `chap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `flow`
--
ALTER TABLE `flow`
  MODIFY `flow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flow_option`
--
ALTER TABLE `flow_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `flow_question`
--
ALTER TABLE `flow_question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `main_character`
--
ALTER TABLE `main_character`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player_chapter`
--
ALTER TABLE `player_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `player_completed_chapter`
--
ALTER TABLE `player_completed_chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
