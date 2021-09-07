-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 04:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belrecipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `process_1_id` int(11) NOT NULL,
  `process_1` varchar(100) NOT NULL,
  `process_1-2` varchar(100) NOT NULL,
  `process_1-3` varchar(100) NOT NULL,
  `process_1-4` varchar(100) NOT NULL,
  `process_1-5` varchar(100) NOT NULL,
  `process_1-6` varchar(100) NOT NULL,
  `process_1-7` varchar(100) NOT NULL,
  `process_2-1` varchar(100) NOT NULL,
  `process_2-2` varchar(100) NOT NULL,
  `process_2-3` varchar(100) NOT NULL,
  `process_2-4` varchar(100) NOT NULL,
  `process_2-5` varchar(100) NOT NULL,
  `process_2-6` varchar(100) NOT NULL,
  `process_2-7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `name`, `process_1_id`, `process_1`, `process_1-2`, `process_1-3`, `process_1-4`, `process_1-5`, `process_1-6`, `process_1-7`, `process_2-1`, `process_2-2`, `process_2-3`, `process_2-4`, `process_2-5`, `process_2-6`, `process_2-7`) VALUES
(1, 'ひとくちチキン南蛮　ブルサンタルタルソースかけ\r\n', 712, 'ゆで卵は粗みじん切りにする。\r\n\r\n\r\n\r\n', '赤玉ねぎはみじん切りにする。', 'つけだれの材料を混ぜ合わせて砂糖を溶かす。', '', '', '', '', 'ボウルにナゲットの材料を入れて練るように混ぜ合わせる。', 'ボウルにブルサンを入れ、タルタルソースの材料を加えて混ぜ合わせる。', 'フライパンに1cmほどサラダ油を入れて約180℃で温め、1をスプーンで掬って入れ、こんがり揚げ焼きをする。', '器に揚げたての3を盛り付け、タルタルソースや甘酢だれをつけていただく。', '', '', ''),
(2, 'ブルサンのエビロールサムギョプサル\r\n', 710, 'エビは殻を剥き、あれば背わたを除く。\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '', '', '', '', '', '', 'エビに塩、こしょうを振り、豚バラ肉を巻きつける。', '熱したフライパンにバターを入れ、1を並べて両面を焼く。', 'ブルサンを器へほぐし入れ、薬味ねぎ、サンチュ、大葉を添える。', 'サンチュにエビロール、ブルサン、薬味ねぎをのせて巻いていただく。', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `serves` varchar(11) NOT NULL,
  `ingredients` text NOT NULL,
  `process_1-1` varchar(255) NOT NULL,
  `process_1-2` varchar(255) NOT NULL,
  `process_1-3` varchar(255) NOT NULL,
  `process_1-4` varchar(255) NOT NULL,
  `process_1-5` varchar(255) NOT NULL,
  `process_1-6` varchar(255) NOT NULL,
  `process_2-1` varchar(255) NOT NULL,
  `process_2-2` varchar(255) NOT NULL,
  `process_2-3` varchar(255) NOT NULL,
  `process_2-4` varchar(255) NOT NULL,
  `process_2-5` varchar(255) NOT NULL,
  `process_2-6` varchar(255) NOT NULL,
  `category` varchar(11) NOT NULL,
  `image_ref` varchar(11) NOT NULL,
  `image_ref_lrg` varchar(11) NOT NULL,
  `recipe_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `serves`, `ingredients`, `process_1-1`, `process_1-2`, `process_1-3`, `process_1-4`, `process_1-5`, `process_1-6`, `process_2-1`, `process_2-2`, `process_2-3`, `process_2-4`, `process_2-5`, `process_2-6`, `category`, `image_ref`, `image_ref_lrg`, `recipe_id`) VALUES
(2, 'ひとくちチキン南蛮　ブルサンタルタルソースかけ\r\n', '', '【タルタルソース】<br/>\r\nブルサン ガーリック＆ハーブ　1/2個<br/>\r\n牛乳　大さじ1と1/2<br/>\r\nゆで卵　1/2個<br/>\r\n赤玉ねぎ　大さじ1<br/>\r\n<br/>\r\n【ナゲット】<br/>\r\n鶏ひき肉　300g<br/>\r\n塩、こしょう　各少々<br/>\r\n薄力粉　大さじ3<br/>\r\n卵　1/2個<br/>\r\nマヨネーズ　小さじ2<br/>\r\n<br/>\r\n【つけだれ】<br/>\r\n醤油　小さじ2<br/>\r\n酢　大さじ1<br/>\r\n砂糖　大さじ1<br/>\r\n<br/>\r\n\r\nサラダ油　適量<br/>\r\nリーフ類、ミニトマト、すだち　適量', '＜下ごしらえ＞\r\nゆで卵は粗みじん切りにする。\r\n赤玉ねぎはみじん切りにする。\r\nつけだれの材料を混ぜ合わせて砂糖を溶かす。\r\n\r\n＜手順＞\r\nボウルにナゲットの材料を入れて練るように混ぜ合わせる。\r\nボウルにブルサンを入れ、タルタルソースの材料を加えて混ぜ合わせる。\r\nフライパンに1cmほどサラダ油を入れて約180℃で温め、1をスプーンで掬って入れ、こんがり揚げ焼きをする。\r\n器に揚げたての3を盛り付け、タルタルソースや甘酢だれをつけていただく。', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0712_s.jpg', '0712.jpg', '0712'),
(3, 'ブルサンのエビロールサムギョプサル\r\n', '2人分', 'ブルサン ペッパー　1個<br>\r\n無頭エビ　8尾<br>\r\n豚バラ肉（しゃぶしゃぶ用）　8枚<br>\r\n塩、こしょう　各少々<br>\r\nバター　10g<br>\r\nサンチュ、大葉　各適量<br><br>\r\n\r\n【薬味ねぎ】<br>\r\n白髪ねぎ　1/4本分<br>\r\nコチュジャン　小さじ1<br>\r\nごま油　小さじ2<br>', 'エビは殻を剥き、あれば背わたを除く。\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '', '', '', '', '', 'エビに塩、こしょうを振り、豚バラ肉を巻きつける。', '熱したフライパンにバターを入れ、1を並べて両面を焼く。', 'ブルサンを器へほぐし入れ、薬味ねぎ、サンチュ、大葉を添える。', 'サンチュにエビロール、ブルサン、薬味ねぎをのせて巻いていただく。', '', '', 'brsn', '0710_s.jpg', '0710.jpg', '0710'),
(4, 'ブルサン ペッパーのショコラカヌレサンド\r\n', '', 'ブルサン ペッパー　100g<br/>\r\nはちみつ　大さじ1<br/>\r\nパールチョコ　適量<br/>\r\nブルーベリー　6個<br/>\r\nカヌレ(市販品)　6個<br/>\r\nエディブルフラワー(パープル系ビオラなど)　適宜', '＜下ごしらえ＞\r\nカヌレは横半分に切る。\r\n\r\n＜手順＞\r\nボールにブルサン、はちみつを入れて、混ぜ合わせる。\r\nカヌレに1を厚めにサンドし、側面にパールチョコを並べて埋め込む。\r\n2の上に残しておいた1とブルーベリーを一粒のせて、あればエディブルフラワーを飾る。', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0707_s.jpg', '0707.jpg', '0707'),
(5, 'まぐろのブルサンタルタル\r\n', '', 'ブルサン ガーリック＆ハーブ　50g<br/>\r\n刺身用マグロ　1柵(約150g)<br/>\r\nローズマリー　適宜<br/>\r\nピンクペッパー　適宜<br/>\r\nクラッカー　適量<br/>\r\n<br/>\r\n【A】<br/>\r\nケイパー　小さじ1<br/>\r\nブラックオリーブ　3個<br/>\r\n塩　ひとつまみ<br/>\r\nこしょう　少々<br/>\r\nオリーブオイル　小さじ2<br/>\r\nレモン汁　小さじ1/2<br/>', '＜下ごしらえ＞\r\nケイパー、ブラックオリーブは粗みじん切りにする。\r\n\r\n＜手順＞\r\nケイパー、ブラックオリーブは粗みじん切りにする。マグロは包丁で細かくたたいてボウルに入れ、【A】を加えて混ぜ合わせる。\r\n器にセルクル(直径7cm)を置き、1を詰めた上にブルサンを箸などでほぐしながらふんわりと重ね入れる。\r\n2のセルクルを静かに外し、ピンクペッパーとローズマリーを飾る。添えたクラッカーにのせていただく。', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0696_s.jpg', '0696.jpg', '0696'),
(6, 'ブルサンの秋色ベジピザ\r\n', '', 'ブルサン ペッパー　1/2個<br/>\r\nかぼちゃ　50g<br/>\r\nなす　1/2本<br/>\r\n紫たまねぎ　1/8個<br/>\r\nれんこん　10枚<br/>\r\n赤パプリカ　1/8個<br/>\r\nにんにく　1片<br/>\r\nベーコン　1枚<br/>\r\nバジル　適量<br/>\r\nオリーブオイル　適量<br/>\r\nピザシート(直径19cm)　1枚<br/>\r\nトマトソース(市販品)　大さじ5', '＜下ごしらえ＞\r\nかぼちゃ、紫たまねぎはくし切りにする。\r\nなす、れんこんは薄く輪切りにする。\r\n赤パプリカは2cm角、ベーコンは1cm幅に切る。\r\nにんにくは薄切りにする。\r\n\r\n＜手順＞\r\n野菜はあらかじめレンジで柔らかくなるまで加熱しておく。\r\nピザシート全体にトマトソースを塗り、1とベーコンを彩りよく盛り付けたらオリーブオイル、塩、こしょうをし、トースター等で4～5分焼く。\r\n2が焼けたらブルサンを盛り付け、バジルを飾る。', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0690_s.jpg', '0690.jpg', '0690'),
(7, 'ブルサンのブレッドサラダ\r\n', '', 'ブルサン ガーリック&ハーブ　1/2個<br/>\r\n食パン(厚切り)　1/4斤<br/>\r\nバター　10g<br/>\r\nミニトマト　2個<br/>\r\nアボカド　薄切り3枚<br/>\r\nスモークサーモン　1枚<br/>\r\nグリーンアスパラガス　1本<br/>\r\nディル　適量<br/>\r\nリーフ類(ベビーリーフなど)　適量<br/>\r\nオリーブオイル、塩、こしょう　各適量', '＜下ごしらえ＞\r\nミニトマトは縦4等分に切る。\r\nアボカドはレモン汁で色止めする。\r\nスモークサーモンは一口大に切る。\r\nグリーンアスパラガスは茹でて一口大に切る。\r\n\r\n＜手順＞\r\n食パンの端を2cm程残してナイフで四角に切り込みを入れたら、ナイフで四角に切り込みを入れたら中心の部分が底になるよう手で押しつぶしてケース状にする。内側にバターを塗ってトースターで色よく焼く。\r\n1に具材を彩りよくのせ、ブルサンを盛り付ける。あればディルを飾る。お好みでオリーブオイル、塩、こしょうをかけていただく。', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0683_s.jpg', '0683.jpg', '0683'),
(8, 'ネギ塩牛タン　ブルサン添え\r\n', '', 'ブルサン ペッパー　50g<br/>\r\n牛タン　150g<br/>\r\n塩　適量<br/>\r\nこしょう　適量<br/>\r\nごま油　大さじ1/2<br/>\r\n長ネギ　1/2本<br/>\r\n<br/>\r\n【A】<br/>\r\nごま油　大さじ1<br/>\r\n塩　小さじ1/4<br/>\r\nレモン汁　小さじ1<br/>\r\n鶏がらスープの素　小さじ1', '＜手順＞\r\n長ネギはみじん切りにし、Aを混ぜてなじませる。\r\n牛タンに塩、こしょうで下味をつける。\r\nフライパンにごま油を引き、2の牛タンを入れ、強火で両面焼く。\r\n3の牛タンに、1のネギ塩をのせ、ブルサンを添える。', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0675_s.jpg', '0675.jpg', '0675'),
(9, 'ブルサン ガーリック＆ハーブと厚切りベーコンのクロスティーニ\r\n', '', 'ブルサン ガーリック＆ハーブ　約50g<br/>\r\n厚切りベーコン　80g<br/>\r\nミニトマト　4個<br/>\r\n黄パプリカ　1/4個<br/>\r\nズッキーニ　1/4本<br/>\r\nオリーブ油　大さじ2<br/>\r\n塩・こしょう　少々<br/>\r\nバゲット　長めの斜めスライス4枚<br/>\r\nブルサン ガーリック＆ハーブ　お好みで', '＜下ごしらえ＞\r\nベーコンは2cmの角切り、ミニトマトは半分に、パプリカはくし形、ズッキーニは半月切りにする。\r\nバゲットはトーストする。\r\n\r\n＜手順＞\r\nベーコン、ミニトマト、パプリカ、ズッキーニをオリーブ油を入れたフライパンでソテーし、塩・こしょうを振る。\r\nバゲットにブルサンを塗り、1の具材をのせる。\r\nお好みでブルサンを散らす。\r\n', '', '', '', '', '', '', '', '', '', '', '', 'brsn', '0671_s.jpg', '0671.jpg', '0671'),
(10, 'test', '', 'store only the image name or id in the database table and using your app you can combine name + path and get the full image path', 'As noted above, Japanese letters are UNICODE(2 bytes) therefore require special consideration.', '', '', '', '', '', '', '', '', '', '', '', 'kiri', '0683_s.jpg', '0683.jpg', '0683'),
(11, 'test2', '', 'Yes, you can store images in the database.', 'General practice is to store images in directories on the file system and store references to the images in the database. test.', '', '', '', '', '', '', '', '', '', '', '', 'bel', '0664_s.jpg', '0664.jpg', '0664'),
(12, 'test 123', '', 'Best practice is not save full path to image like abc.com/src/apple.png but saving specific domain path to image.', 'The 2 answers already covered it pretty well. It is indeed best practice to save the directory path instead of saving the entire URL path. Some of the reasons were already covered, such as making it easy to move your folders to another server without havi', '', '', '', '', '', '', '', '', '', '', '', 'kiri', '0658_s.jpg', '0658.jpg', '0658');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
