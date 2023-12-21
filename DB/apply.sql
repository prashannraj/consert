-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 01:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apply`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_data`
--

CREATE TABLE `class_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `admission_from` datetime DEFAULT NULL,
  `admission_to` datetime DEFAULT NULL,
  `admission_fee` longtext DEFAULT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra`)),
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_data`
--

INSERT INTO `class_data` (`id`, `name`, `order`, `year`, `admission_from`, `admission_to`, `admission_fee`, `extra`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'अ.हे.ब., स्वास्थ्य सेवा, हेल्थ इन्सपेक्सन समूह', 1, '२०८०', '2023-07-07 00:00:00', '2023-07-31 00:00:00', '<p>प्रदेश निजामती सेवाका निम्न सेवा, समूह, उपसमूह तथा तहका रिक्त पदहरुको खुला, समावेशी तथा अन्तर सेवा प्रतियोगितात्मक परीक्षाद्वारा पदपूर्ति गर्नुपर्ने भएकोले देहाय बमोजिम योग्यता पुगेका उम्मेदवारहरुबाट दरखास्त आह्वान गरिन्छ । तोकिएको न्यूनतम योग्यता पुगेका उम्मेदवारहरुले आयोगको अनलाइन दरखास्त प्रणाली apply.kshireshwornathmun.gov.np मार्फत आवेदन दिनुपर्नेछ । &nbsp;</p><p><br></p><p>पद संख्या : १० वटा</p><p>परीक्षाको किसिम ः– लिखित, प्रयोगात्मक र अन्तर्वार्ता ।<br>परीक्षा मिति ः– पछि प्रकाशन गरिनेछ ।&nbsp;<br>परीक्षा केन्द्र ः–&nbsp; जनकपुरधाम ।&nbsp;<br>दरखास्त दस्तुर ः– &nbsp; सहायक पाँचौं तहको लागि रु. ४००।– (चार सय) बुझाउनु पर्नेछ र त्यस पछिका थप प्रत्येक (खुला, समावेशी र अन्तर सेवा) का लागि रु.२००।– (दुई सय)&nbsp; थप दस्तुर बुझाउनु पर्नेछ ।&nbsp;<br>सहायक चौथो तहको लागि रु.३०० (तीन सय) बुझाउनु पर्नेछ र त्यस पछिका थप प्रत्येक (खुला, समावेशी र अन्तर सेवा) का लागि रु.१५०।– (एक सय पचास) थप दस्तुर बुझाउनु पर्नेछ ।&nbsp;<br>दरखास्त दिने अन्तिम मिति ः–&nbsp; २०७८÷५÷१६ र दोब्बर दस्तुर तिरी २०७८÷५÷२३ सम्म ।&nbsp;<br>&nbsp;<br>उम्मेदवारको उमेरको हद ः–&nbsp;  २०७८÷५÷१६ सम्म १८ वर्ष उमेर पुरा भै पुरुष उम्मेदवारको हकमा ३५ वर्ष ननाघेको र महिला उम्मेदवारको हकमा ४० वर्ष ननाघेको ।&nbsp;<br>&nbsp;  इञ्जिनियरिङ्ग सेवा, कृषि सेवा, वन सेवा र स्वास्थ्य सेवाको हकमा ४० वर्ष ननाघेको ।<br>&nbsp;  वहालवाला निजामती कर्मचारीलाई उमेरको हद लाग्ने छैन । &nbsp;<br>दरखास्त दस्तुर बुझाउने विधि र स्थान ः&nbsp; प्रदेश लोक सेवा आयोग, प्रदेश नं.२, जनकपुरधामको कार्यालय कोडः २१००११७०१२ तथा राजश्व शीर्षक नं.ः १४२२४ (परीक्षा शुल्क) राखी राष्ट्रिय वाणिज्य बैंक लिमिटेड, खाता नं.ः १०००१००२०००१०००० वा नेपाल बैंक लिमिटेड, खाता नं.ः २७१०२०००००१००१०००००१ मध्ये आपूmलाई पायक पर्ने कुनै एक बैंकमा उम्मेदवारले आफ्नो नामवाट दरखास्त दस्तुर बुझाएको सक्कल बैंक भौचरमा ःबकतभच क्ष्म् लेखी क्अबल गरी इलष्लिभ ब्उउष्अिबतष्यल भर्दा तोकिएको स्थानमा ग्उयिबम गर्नुपर्नेछ ।<br>अपलोड गर्नुपर्ने कागजातहरु ः– उम्मेदवारले शैक्षिक योग्यता, तालिम, अनुभव (आयोगले तोकेको फारममा), व्यवसाय अनुमति प्रमाणपत्र, समावेशी समूह खुल्ने कागजात लगायत सम्बन्धित विज्ञापनमा तोकिएका कागजपत्र अनलाईन दरखास्त प्रणालीको तोकिएको स्थानमा एम्ँ ँयचmबत मा अपलोड गर्नु पर्नेछ । सबै उम्मेदवारले आफ्नो नागरिकताको प्रमाणपत्रको अगाडिको भाग स्क्यान गरी व्एन् ँयचmबत मा अपलोड गर्नु पर्नेछ । दरखास्तमा उल्लेख गरेको विवरणका सम्बन्धमा उम्मेदवार स्वयं पूर्ण जवाफदेही हुनुपर्नेछ । &nbsp;<br>अन्तर्वार्ता अघिका परीक्षा कार्यक्रम र अन्तर्वार्ता हुने मिति ः– लिखित परीक्षाको नतिजा प्रकाशित हुँदा सूचना गरिनेछ ।&nbsp;<br>पदमा रही गर्नुपर्ने कामको विवरण ः– सेवा, समूह सम्बन्धी &nbsp;<br>तलब ः– प्रदेश नं.२ कानून बमोजिम ।&nbsp;</p><p>शैक्षि</p><p>स्वास्थ्य, हे.ई., हेल्थ असिष्टेण्ट÷कोल्डचेन सुपरभाइजर पदका लागि ः मान्यता प्राप्त शिक्षण संस्थाबाट सामान्य चिकित्सामा प्रमाणपत्र तह उत्तीर्ण ।</p><p><br></p>', NULL, 'active', NULL, '2023-07-06 22:03:24', '2023-07-06 22:08:25'),
(2, 'अ.न.मि., स्वास्थ्य सेवा, नर्सीङ्ग समूह', 2, '२०८०', '2023-07-07 00:00:00', '2023-07-31 00:00:00', '<p>प्रदेश निजामती सेवाका निम्न सेवा, समूह, उपसमूह तथा तहका रिक्त पदहरुको खुला, समावेशी तथा अन्तर सेवा प्रतियोगितात्मक परीक्षाद्वारा पदपूर्ति गर्नुपर्ने भएकोले देहाय बमोजिम योग्यता पुगेका उम्मेदवारहरुबाट दरखास्त आह्वान गरिन्छ । तोकिएको न्यूनतम योग्यता पुगेका उम्मेदवारहरुले आयोगको अनलाइन दरखास्त प्रणाली apply.kshireshwornathmun.gov.np मार्फत आवेदन दिनुपर्नेछ । &nbsp;</p><p><br></p><p>पद संख्या : १० वटा</p><p>परीक्षाको किसिम ः– लिखित, प्रयोगात्मक र अन्तर्वार्ता ।<br>परीक्षा मिति ः– पछि प्रकाशन गरिनेछ ।&nbsp;<br>परीक्षा केन्द्र ः–&nbsp; जनकपुरधाम ।&nbsp;<br>दरखास्त दस्तुर ः– &nbsp; सहायक पाँचौं तहको लागि रु. ४००।– (चार सय) बुझाउनु पर्नेछ र त्यस पछिका थप प्रत्येक (खुला, समावेशी र अन्तर सेवा) का लागि रु.२००।– (दुई सय)&nbsp; थप दस्तुर बुझाउनु पर्नेछ ।&nbsp;<br>सहायक चौथो तहको लागि रु.३०० (तीन सय) बुझाउनु पर्नेछ र त्यस पछिका थप प्रत्येक (खुला, समावेशी र अन्तर सेवा) का लागि रु.१५०।– (एक सय पचास) थप दस्तुर बुझाउनु पर्नेछ ।&nbsp;<br>दरखास्त दिने अन्तिम मिति ः–&nbsp; २०७८÷५÷१६ र दोब्बर दस्तुर तिरी २०७८÷५÷२३ सम्म ।&nbsp;<br>&nbsp;<br>उम्मेदवारको उमेरको हद ः–&nbsp;  २०७८÷५÷१६ सम्म १८ वर्ष उमेर पुरा भै पुरुष उम्मेदवारको हकमा ३५ वर्ष ननाघेको र महिला उम्मेदवारको हकमा ४० वर्ष ननाघेको ।&nbsp;<br>&nbsp;  इञ्जिनियरिङ्ग सेवा, कृषि सेवा, वन सेवा र स्वास्थ्य सेवाको हकमा ४० वर्ष ननाघेको ।<br>&nbsp;  वहालवाला निजामती कर्मचारीलाई उमेरको हद लाग्ने छैन । &nbsp;<br>दरखास्त दस्तुर बुझाउने विधि र स्थान ः&nbsp; प्रदेश लोक सेवा आयोग, प्रदेश नं.२, जनकपुरधामको कार्यालय कोडः २१००११७०१२ तथा राजश्व शीर्षक नं.ः १४२२४ (परीक्षा शुल्क) राखी राष्ट्रिय वाणिज्य बैंक लिमिटेड, खाता नं.ः १०००१००२०००१०००० वा नेपाल बैंक लिमिटेड, खाता नं.ः २७१०२०००००१००१०००००१ मध्ये आपूmलाई पायक पर्ने कुनै एक बैंकमा उम्मेदवारले आफ्नो नामवाट दरखास्त दस्तुर बुझाएको सक्कल बैंक भौचरमा ःबकतभच क्ष्म् लेखी क्अबल गरी इलष्लिभ ब्उउष्अिबतष्यल भर्दा तोकिएको स्थानमा ग्उयिबम गर्नुपर्नेछ ।<br>अपलोड गर्नुपर्ने कागजातहरु ः– उम्मेदवारले शैक्षिक योग्यता, तालिम, अनुभव (आयोगले तोकेको फारममा), व्यवसाय अनुमति प्रमाणपत्र, समावेशी समूह खुल्ने कागजात लगायत सम्बन्धित विज्ञापनमा तोकिएका कागजपत्र अनलाईन दरखास्त प्रणालीको तोकिएको स्थानमा एम्ँ ँयचmबत मा अपलोड गर्नु पर्नेछ । सबै उम्मेदवारले आफ्नो नागरिकताको प्रमाणपत्रको अगाडिको भाग स्क्यान गरी व्एन् ँयचmबत मा अपलोड गर्नु पर्नेछ । दरखास्तमा उल्लेख गरेको विवरणका सम्बन्धमा उम्मेदवार स्वयं पूर्ण जवाफदेही हुनुपर्नेछ । &nbsp;<br>अन्तर्वार्ता अघिका परीक्षा कार्यक्रम र अन्तर्वार्ता हुने मिति ः– लिखित परीक्षाको नतिजा प्रकाशित हुँदा सूचना गरिनेछ ।&nbsp;<br>पदमा रही गर्नुपर्ने कामको विवरण ः– सेवा, समूह सम्बन्धी &nbsp;<br>तलब ः– प्रदेश नं.२ कानून बमोजिम ।&nbsp;</p><p>शैक्षि</p><p>स्वास्थ्य, हे.ई., हेल्थ असिष्टेण्ट÷कोल्डचेन सुपरभाइजर पदका लागि ः मान्यता प्राप्त शिक्षण संस्थाबाट सामान्य चिकित्सामा प्रमाणपत्र तह उत्तीर्ण ।</p><p><br><br></p>', NULL, 'active', NULL, '2023-07-06 22:10:05', '2023-07-06 22:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`config`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `config`, `created_at`, `updated_at`) VALUES
(1, '{\"logo\":\"SKu3kE9yjC0YHSaQucsniidgUjM6Y2-metaY2hoaXJlc2hvdXJfb25saW5lLXJlbW92ZWJnLXByZXZpZXcucG5n-.png\",\"thumbnail\":\"RlVkhnKr4sSbFRuOesZ5l1iZVhdos7-metaZmF2aWNvbi5wbmc=-.png\",\"favicon\":\"Memoo1gake0sDD6uKxeTLWfN75NKa1-metaZmF2aWNvbi5wbmc=-.png\",\"result_url\":\"https:\\/\\/kshireshwornathmun.gov.np\\/ne\",\"principal_signature\":\"w29TXbHa6ZrYszjzqNTJ75gxY8QoGj-metab2ZmaWNlciBzaWduLndlYnA=-.webp\",\"contact\":\"9844644087\",\"copyright\":\"&copy; 2023 All right reserved\",\"landing_description\":\"<h2><strong>ONLINE VACANCY PUBLICATION SYSTEM<\\/strong><\\/h2><p><br><\\/p><h2>Vacancy&nbsp; Open<\\/h2><p>&nbsp;We are looking for motivated and dedicated candidates who are eager to challenge themselves and reach their full potential.<\\/p><p>At <strong>Government Sector<\\/strong>, we offer a rigorous and dynamic education that prepares candidates for success in Municipality and beyond. Our faculty is committed to providing a supportive and nurturing environment that fosters student growth and development.<\\/p>\"}', '2023-02-09 11:53:40', '2023-07-06 21:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_09_163523_add_two_factor_columns_to_table', 1),
(6, '2023_02_09_173828_create_class_data_table', 1),
(7, '2023_02_09_173829_create_configurations_table', 1),
(8, '2023_02_09_173830_create_register_forms_table', 1),
(9, '2023_02_11_053146_add_student_id_columns_to_register_forms_table', 2),
(10, '2023_02_12_050010_create_students_table', 3),
(11, '2023_02_12_053434_add_student_db_id_columns_to_register_forms', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_forms`
--

CREATE TABLE `register_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_data_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `grand_father_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `full_address` varchar(255) DEFAULT NULL,
  `parents_phone_number` varchar(255) DEFAULT NULL,
  `student_photo` varchar(255) DEFAULT NULL,
  `students_sign_photo` varchar(255) DEFAULT NULL,
  `citizenship_front_photo` varchar(255) DEFAULT NULL,
  `citizenship_back_photo` varchar(255) DEFAULT NULL,
  `transcript_photo` varchar(255) DEFAULT NULL,
  `character_photo` varchar(255) DEFAULT NULL,
  `school_fee_vouchers_photo` varchar(255) DEFAULT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra`)),
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `student_db_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register_forms`
--

INSERT INTO `register_forms` (`id`, `class_data_id`, `student_name`, `email`, `father_name`, `mother_name`, `grand_father_name`, `gender`, `full_address`, `parents_phone_number`, `student_photo`, `students_sign_photo`, `citizenship_front_photo`, `citizenship_back_photo`, `transcript_photo`, `character_photo`, `school_fee_vouchers_photo`, `extra`, `status`, `deleted_at`, `created_at`, `updated_at`, `student_id`, `student_db_id`) VALUES
(1, 1, 'shayam kumar yadav', 'shayam@yahoo.com', 'hari yadav', 'sita yadav', 'ram yadav', 'male', 'janakpurdham, nepal', '9812365478', 'IuLGZg7zbcOiEbNI9rYRkdvUHlQAFU-metacGhvdG8uanBn-.jpg', 'Bs9j8VwVhyWkLxvk1CUJ8vPQ3knDoY-metac2lnbi5wbmc=-.png', 'V6dwoRxjmvT3nNhWs1HpUSVmSvOoHn-metaY2l0aXplbnNoaXAuanBn-.jpg', 'ZHsiGPWkkFxpGEtzsbWU9SHXUyY4VZ-metaY2l0aXplbnNoaXAuanBn-.jpg', 'QOgXHDfTJ32DliIE9mjH0chCkj9Wer-metadHJhbnNjcmlwdC5qcGc=-.jpg', 'He9tklPWLQuRC87zBUzWjcDSxBue9y-metaY29tcHV0ZXIuanBn-.jpg', 'Oy4UNXISikVY787uD4jdEtgm5SoONY-metaYmFuayB2b3VjaGVyLnBuZw==-.png', NULL, 'approved', NULL, '2023-07-06 22:14:37', '2023-07-06 22:15:55', '1913096056', 10);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `extra` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`extra`)),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `password`, `token`, `status`, `extra`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'shayam@yahoo.com', '$2y$10$QsOToC1CEmE4v7zlNFgnMuW4c0VEPTxZz4iRzPIs.hzzmVxOlq71W', 'UETmWNvEJxm47mgXBy8Z', 'active', NULL, NULL, '2023-07-06 22:12:16', '2023-07-06 22:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '2023-02-09 11:53:40', '$2y$10$X9uTF8YlyY8/IumauRSGe.o1/w2obA5v19GW8wMgZpALmVNLAD92O', NULL, NULL, NULL, NULL, 'OUUiplIRvupql6lVbLPaP5YRKdVE50D8P8Jdzl3sjcqg0GBm1ludwG7z6H3Y', '2023-02-09 11:53:40', '2023-07-06 08:29:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_data`
--
ALTER TABLE `class_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `register_forms`
--
ALTER TABLE `register_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_token_unique` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_data`
--
ALTER TABLE `class_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_forms`
--
ALTER TABLE `register_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
