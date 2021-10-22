/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `my_table` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '',
  `title` varchar(100) DEFAULT '',
  `email` varchar(50) DEFAULT '',
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `my_table` DISABLE KEYS */;
INSERT INTO `my_table` (`idx`, `name`, `title`, `email`) VALUES
	(1, 'test1', 'title-test1', 'test1@test.com'),
	(2, 'test2', 'title-test2', 'test2@test.com'),
	(3, 'test3', 'title-test3', 'test3@test.com');
/*!40000 ALTER TABLE `my_table` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_insert` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `my_table_insert` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_table_insert` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_pagination` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_pagination` DISABLE KEYS */;
INSERT INTO `my_table_pagination` (`idx`, `name`, `title`, `email`) VALUES
	(1, 'test_name_608.3573730954504', 'test_title_933.0739842318687', 'test_email_839.2978326066377@test.com'),
	(2, 'test_name_396.26724107122726', 'test_title_462.442738269868', 'test_email_122.4119988693036@test.com'),
	(3, 'test_name_223.73181027055887', 'test_title_750.4230854785284', 'test_email_79.9200273146108@test.com'),
	(4, 'test_name_147.3309108711136', 'test_title_495.89450314538044', 'test_email_36.47981384720636@test.com'),
	(5, 'test_name_693.7155905335356', 'test_title_358.1385418597036', 'test_email_708.5459684315566@test.com'),
	(6, 'test_name_467.3142473123169', 'test_title_209.93336200055978', 'test_email_646.7240987994932@test.com'),
	(7, 'test_name_602.8204387294319', 'test_title_72.92992798232467', 'test_email_555.1883544569727@test.com'),
	(8, 'test_name_556.1520190715344', 'test_title_114.19506272039848', 'test_email_901.5192871210345@test.com'),
	(9, 'test_name_164.01127817762205', 'test_title_114.49856025865166', 'test_email_79.45899749403726@test.com'),
	(10, 'test_name_52.79933742787627', 'test_title_24.619725390914574', 'test_email_963.700645404589@test.com'),
	(11, 'test_name_743.6440815838464', 'test_title_826.1185024391101', 'test_email_898.660298177656@test.com'),
	(12, 'test_name_13.946014304595082', 'test_title_372.7492077236522', 'test_email_820.9080264381208@test.com'),
	(13, 'test_name_985.2925397532922', 'test_title_462.73865018574395', 'test_email_356.815662402488@test.com'),
	(14, 'test_name_394.862392188853', 'test_title_902.8650044704461', 'test_email_328.73787651931667@test.com'),
	(15, 'test_name_934.09439991889', 'test_title_683.2584007701449', 'test_email_613.0088348276995@test.com'),
	(16, 'test_name_14.269002561707984', 'test_title_231.31853905908628', 'test_email_112.78571834395241@test.com'),
	(17, 'test_name_868.9730052761482', 'test_title_5.507902082528828', 'test_email_419.6205253178445@test.com'),
	(18, 'test_name_80.57895107528097', 'test_title_143.0332101565164', 'test_email_472.4292282903839@test.com'),
	(19, 'test_name_932.0465417160154', 'test_title_241.94505444257058', 'test_email_412.58567779845157@test.com'),
	(20, 'test_name_336.093256398191', 'test_title_441.70927932924525', 'test_email_199.26665818529824@test.com'),
	(21, 'test_name_670.2054836724004', 'test_title_752.2274745397526', 'test_email_749.5209524152065@test.com'),
	(22, 'test_name_489.92236919041943', 'test_title_200.0490194401229', 'test_email_529.4780203630012@test.com'),
	(23, 'test_name_46.24307422828216', 'test_title_641.7813407860522', 'test_email_69.17751197905979@test.com'),
	(24, 'test_name_419.5435682707872', 'test_title_889.1853361504017', 'test_email_186.29600667329132@test.com'),
	(25, 'test_name_262.92405564889685', 'test_title_754.7322889582555', 'test_email_983.8893085782316@test.com'),
	(26, 'test_name_654.2497067500369', 'test_title_318.5806387491344', 'test_email_629.1541042292064@test.com'),
	(27, 'test_name_189.0286356322734', 'test_title_56.68089620739305', 'test_email_715.31860487379@test.com'),
	(28, 'test_name_405.550366480416', 'test_title_880.796048514355', 'test_email_186.329173864172@test.com'),
	(29, 'test_name_288.25775451143994', 'test_title_881.3012816983287', 'test_email_540.7331756909687@test.com'),
	(30, 'test_name_58.762064093502296', 'test_title_670.6108241282504', 'test_email_175.76795909439025@test.com'),
	(31, 'test_name_866.007353820845', 'test_title_801.7329225546987', 'test_email_409.64258204460384@test.com'),
	(32, 'test_name_642.0141732925681', 'test_title_980.1431510626741', 'test_email_973.6732661693109@test.com'),
	(33, 'test_name_926.9369083921769', 'test_title_712.664774186597', 'test_email_781.5131764900993@test.com'),
	(34, 'test_name_768.5715906243506', 'test_title_497.3184543851004', 'test_email_179.87753078609475@test.com'),
	(35, 'test_name_406.4323215088177', 'test_title_491.5290459194491', 'test_email_237.34829580443753@test.com'),
	(36, 'test_name_711.1543719974853', 'test_title_842.7270033077589', 'test_email_79.17193127998331@test.com'),
	(37, 'test_name_866.6786772102851', 'test_title_94.87762294512021', 'test_email_873.352113828391@test.com'),
	(38, 'test_name_81.12773104023908', 'test_title_784.5823444496675', 'test_email_678.5285598612655@test.com'),
	(39, 'test_name_37.89579669097047', 'test_title_152.8933346047004', 'test_email_649.7793136842356@test.com'),
	(40, 'test_name_789.2165953407218', 'test_title_995.7450663845474', 'test_email_610.0755766342166@test.com'),
	(41, 'test_name_62.14271475108593', 'test_title_479.4868745864247', 'test_email_210.00625941251056@test.com'),
	(42, 'test_name_610.5707040369239', 'test_title_421.8347726807322', 'test_email_276.4617820265347@test.com'),
	(43, 'test_name_115.80462282412185', 'test_title_748.63779877465', 'test_email_394.7751561345301@test.com'),
	(44, 'test_name_726.9624150823452', 'test_title_449.4866377417805', 'test_email_65.54597419551199@test.com'),
	(45, 'test_name_978.2699884858635', 'test_title_693.7120505764261', 'test_email_532.7503181581855@test.com'),
	(46, 'test_name_581.6154697952936', 'test_title_308.8264252355568', 'test_email_798.2857475255483@test.com'),
	(47, 'test_name_63.949492654716124', 'test_title_923.8902514305806', 'test_email_426.60280992239973@test.com'),
	(48, 'test_name_360.3433260539019', 'test_title_520.9082312359551', 'test_email_522.511208751715@test.com'),
	(49, 'test_name_48.83138078435452', 'test_title_675.6233084002727', 'test_email_230.6224303819448@test.com'),
	(50, 'test_name_125.24225744255098', 'test_title_933.3440268005655', 'test_email_289.9933924088193@test.com'),
	(51, 'test_name_648.9349123760452', 'test_title_373.69441538741296', 'test_email_920.6673705425741@test.com'),
	(52, 'test_name_481.2536372842767', 'test_title_643.2661055273061', 'test_email_771.5696465173454@test.com'),
	(53, 'test_name_927.0499467384535', 'test_title_319.5408248738766', 'test_email_815.5543148876674@test.com'),
	(54, 'test_name_118.14913055035204', 'test_title_143.08273882240314', 'test_email_359.9663331946045@test.com'),
	(55, 'test_name_369.5834802394579', 'test_title_767.0184323471211', 'test_email_725.3417517508769@test.com'),
	(56, 'test_name_324.6534924466661', 'test_title_446.24223771434487', 'test_email_256.25074196537093@test.com'),
	(57, 'test_name_941.5270274174652', 'test_title_937.8829419248578', 'test_email_863.8336581055388@test.com'),
	(58, 'test_name_504.51949548676566', 'test_title_930.0965338508566', 'test_email_135.9242135276312@test.com'),
	(59, 'test_name_888.3314968192312', 'test_title_32.8848742469073', 'test_email_498.42991151048795@test.com'),
	(60, 'test_name_392.4949655453628', 'test_title_466.185123928995', 'test_email_152.44075374253163@test.com'),
	(61, 'test_name_362.64842765931826', 'test_title_354.9199078026413', 'test_email_685.6542867688968@test.com'),
	(62, 'test_name_362.51174117020497', 'test_title_754.5958762779793', 'test_email_684.4441886129268@test.com'),
	(63, 'test_name_157.4333449643416', 'test_title_732.8341897165722', 'test_email_190.87094442348084@test.com'),
	(64, 'test_name_754.8521837013328', 'test_title_200.6481159698666', 'test_email_737.6840594789796@test.com'),
	(65, 'test_name_85.47598021894319', 'test_title_213.3277533914221', 'test_email_809.2108570339259@test.com'),
	(66, 'test_name_405.0710557290083', 'test_title_596.7227382769089', 'test_email_767.4005549311644@test.com'),
	(67, 'test_name_45.83459055873993', 'test_title_925.9713187338517', 'test_email_491.3528527266838@test.com'),
	(68, 'test_name_677.8503381655089', 'test_title_914.193163381138', 'test_email_536.4148331428084@test.com'),
	(69, 'test_name_938.4947063042733', 'test_title_82.22906282658602', 'test_email_594.6612259537551@test.com'),
	(70, 'test_name_725.6189720226629', 'test_title_843.1112129856937', 'test_email_37.699179594124836@test.com'),
	(71, 'test_name_658.1622897471882', 'test_title_176.71394068721116', 'test_email_908.0828649281365@test.com'),
	(72, 'test_name_9.272533312693735', 'test_title_321.1141025127043', 'test_email_576.7529433590853@test.com'),
	(73, 'test_name_919.4224399909587', 'test_title_865.8534006111821', 'test_email_569.9997138166798@test.com'),
	(74, 'test_name_251.43839798349737', 'test_title_546.1928792010926', 'test_email_975.649232788616@test.com'),
	(75, 'test_name_238.66755707344745', 'test_title_265.390117735034', 'test_email_609.9479481884725@test.com'),
	(76, 'test_name_252.56941847090553', 'test_title_432.0032785227553', 'test_email_401.3081679347047@test.com'),
	(77, 'test_name_709.5310348389028', 'test_title_342.7307011240448', 'test_email_584.0604318371605@test.com'),
	(78, 'test_name_891.1100865473134', 'test_title_702.36916795873', 'test_email_837.5156108853553@test.com'),
	(79, 'test_name_79.47058128423112', 'test_title_883.8061044987347', 'test_email_179.6188093746256@test.com'),
	(80, 'test_name_245.67576411056868', 'test_title_688.5224231626116', 'test_email_704.584854214997@test.com'),
	(81, 'test_name_456.35703232079464', 'test_title_167.03062969262768', 'test_email_465.0820822343995@test.com'),
	(82, 'test_name_823.3185528277593', 'test_title_720.3465481692427', 'test_email_130.77711309658093@test.com'),
	(83, 'test_name_491.8459517088216', 'test_title_65.89844998800983', 'test_email_852.9544255472296@test.com'),
	(84, 'test_name_66.07680850576313', 'test_title_770.520796620772', 'test_email_653.3735883202157@test.com'),
	(85, 'test_name_954.3055824724078', 'test_title_810.4071781350367', 'test_email_188.11917399160487@test.com'),
	(86, 'test_name_508.3743662865594', 'test_title_976.5143401916272', 'test_email_356.44863283210304@test.com'),
	(87, 'test_name_851.7001743192786', 'test_title_188.15500383372884', 'test_email_384.67452694445336@test.com'),
	(88, 'test_name_357.9076539547254', 'test_title_634.5147196739118', 'test_email_97.85066723902771@test.com'),
	(89, 'test_name_584.7092079070483', 'test_title_628.994068551803', 'test_email_389.8427497715156@test.com'),
	(90, 'test_name_61.231573935813806', 'test_title_135.6296510981672', 'test_email_493.45356441703956@test.com'),
	(91, 'test_name_59.37889952434124', 'test_title_815.5338351042325', 'test_email_898.5325076817837@test.com'),
	(92, 'test_name_45.0610638298663', 'test_title_528.7078268376251', 'test_email_507.3559734321721@test.com'),
	(93, 'test_name_949.6564173816298', 'test_title_225.21419734527748', 'test_email_276.1017653151432@test.com'),
	(94, 'test_name_703.8662652735285', 'test_title_690.0260611558576', 'test_email_337.53154069234756@test.com'),
	(95, 'test_name_616.5795507278103', 'test_title_69.30316229565364', 'test_email_495.7771900284823@test.com'),
	(96, 'test_name_269.97649398909556', 'test_title_861.5509305936758', 'test_email_496.82520173473773@test.com'),
	(97, 'test_name_898.4732476263058', 'test_title_1000.8906636609609', 'test_email_308.03360615953204@test.com'),
	(98, 'test_name_536.4960705484227', 'test_title_757.3795649971623', 'test_email_176.4096440741882@test.com'),
	(99, 'test_name_608.9095561130993', 'test_title_514.3188790765766', 'test_email_743.8657577772307@test.com'),
	(100, 'test_name_175.3721823900679', 'test_title_644.2636693522927', 'test_email_694.2018303249048@test.com'),
	(101, 'test_name_537.218174301291', 'test_title_602.4854112653857', 'test_email_399.7725641567004@test.com'),
	(102, 'test_name_190.40661772099008', 'test_title_751.715426868494', 'test_email_186.35731191314505@test.com'),
	(103, 'test_name_675.6403096938881', 'test_title_818.1296434636504', 'test_email_62.727318970232574@test.com'),
	(104, 'test_name_858.2476951938567', 'test_title_102.05654979223064', 'test_email_934.5396941132283@test.com'),
	(105, 'test_name_365.52885192309395', 'test_title_23.0252080094304', 'test_email_17.539515011515014@test.com'),
	(106, 'test_name_17.621981762928872', 'test_title_34.4913945137443', 'test_email_118.59105801357985@test.com'),
	(107, 'test_name_488.4811372603114', 'test_title_85.63254299446247', 'test_email_961.7193339250231@test.com'),
	(108, 'test_name_550.6990713753729', 'test_title_867.3373858354403', 'test_email_683.5897457847276@test.com'),
	(109, 'test_name_814.9366021509624', 'test_title_22.913804134273718', 'test_email_668.7592449521267@test.com'),
	(110, 'test_name_274.054843091457', 'test_title_362.9965113345501', 'test_email_991.8180581320245@test.com'),
	(111, 'test_name_869.1007873901173', 'test_title_369.04979328815807', 'test_email_236.94663500408328@test.com'),
	(112, 'test_name_76.58382588958725', 'test_title_671.0792551693313', 'test_email_124.64482891153995@test.com'),
	(113, 'test_name_608.9864097833507', 'test_title_669.9975929157787', 'test_email_522.028765962486@test.com'),
	(114, 'test_name_599.1510817987389', 'test_title_428.6691418398816', 'test_email_344.8924945368362@test.com'),
	(115, 'test_name_437.4550778981811', 'test_title_151.59793661404208', 'test_email_444.6244801093121@test.com'),
	(116, 'test_name_767.3286214380792', 'test_title_501.76969759610455', 'test_email_205.86265439993016@test.com'),
	(117, 'test_name_523.0042099449823', 'test_title_996.4331172587658', 'test_email_412.15298719252735@test.com'),
	(118, 'test_name_70.46561491998436', 'test_title_114.86914375598462', 'test_email_361.94890475361507@test.com'),
	(119, 'test_name_464.13712323376643', 'test_title_233.83893264163186', 'test_email_775.7833242405051@test.com'),
	(120, 'test_name_176.39985401127473', 'test_title_553.6493280685036', 'test_email_238.0471090423382@test.com');
/*!40000 ALTER TABLE `my_table_pagination` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_0` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `my_table_tmp_0` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_table_tmp_0` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_1` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_1` DISABLE KEYS */;
INSERT INTO `my_table_tmp_1` (`idx`, `name`, `title`, `email`, `deleted_at`) VALUES
	(1, 'name-1634641957-1', 'title-1634641957-1', 'email-1634641957-1', NULL),
	(3, 'name-1634641957-3', 'title-1634641957-3', 'email-1634641957-3', NULL);
/*!40000 ALTER TABLE `my_table_tmp_1` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_2` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_2` DISABLE KEYS */;
INSERT INTO `my_table_tmp_2` (`idx`, `name`, `title`, `email`, `deleted_at`) VALUES
	(1, 'My Name', 'My title', 'My email', NULL);
/*!40000 ALTER TABLE `my_table_tmp_2` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_3` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_3` DISABLE KEYS */;
INSERT INTO `my_table_tmp_3` (`idx`, `name`, `title`, `email`, `deleted_at`) VALUES
	(1, 'My Name', 'My title', 'My email', NULL),
	(2, 'My Name', 'My title', 'My email', NULL),
	(3, 'My Name', 'My title', 'My email', NULL),
	(4, '100', NULL, NULL, NULL),
	(5, 'ABS(100)', NULL, NULL, NULL),
	(6, 'My Name', 'My title', 'My email', NULL),
	(7, 'My Name', 'My title', 'My email', NULL);
/*!40000 ALTER TABLE `my_table_tmp_3` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_4` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_4` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_table_tmp_4` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_5` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_5` DISABLE KEYS */;
INSERT INTO `my_table_tmp_5` (`idx`, `name`, `title`, `email`, `deleted_at`) VALUES
	(1, 'darth', 'my title', 'd.vader@theempire.com', NULL),
	(2, NULL, NULL, 'd.vader@theempire.com', NULL);
/*!40000 ALTER TABLE `my_table_tmp_5` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_6` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_6` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_table_tmp_6` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_7` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_7` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_table_tmp_7` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_8` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_8` DISABLE KEYS */;
INSERT INTO `my_table_tmp_8` (`idx`, `name`, `title`, `email`, `deleted_at`) VALUES
	(1, 'name-1634627401-1', 'title-1634627401-1', 'email-1634627401-1', NULL),
	(3, 'name-1634627401-3', 'title-1634627401-3', 'email-1634627401-3', NULL);
/*!40000 ALTER TABLE `my_table_tmp_8` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `my_table_tmp_9` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`idx`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*!40000 ALTER TABLE `my_table_tmp_9` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_table_tmp_9` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
	(1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
	(2, 'Say it isnt so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
	(3, 'Caffeination, Yes!', 'caffeination-yes', 'Worlds largest coffee shop open onsite nested coffee shop for staff only.');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `user` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
