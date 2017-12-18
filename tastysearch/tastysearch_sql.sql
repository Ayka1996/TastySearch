-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 01:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastysearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_feedback`
--

CREATE TABLE `b_feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `b_feedback`
--

INSERT INTO `b_feedback` (`id`, `fname`, `lname`, `feedback`) VALUES
(1, 'Mardan', 'Safarov', 'OHHHHHHHHHHHHHyEAHHHHHHHHHHHH');

-- --------------------------------------------------------

--
-- Table structure for table `b_orderlist`
--

CREATE TABLE `b_orderlist` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_time` time NOT NULL,
  `p_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `b_orderlist`
--

INSERT INTO `b_orderlist` (`id`, `p_name`, `u_name`, `p_time`, `p_price`) VALUES
('Vasif', 'Emil - 75;', 'OHHH', '17:05:00', '375.00'),
('123', 'CHICHKEN LEVENGI  - 1;CHICKEN NUGGETS  - 1;DOLMA - 1;', 'Vaska', '11:11:00', '10.20'),
('2667', 'MANGAL SALAD  - 2;CEASAR SALAD - 1;', 'ulvu', '11:11:00', '12.80');

-- --------------------------------------------------------

--
-- Table structure for table `b_products`
--

CREATE TABLE `b_products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tabs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8_unicode_ci NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '0',
  `portion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `b_products`
--

INSERT INTO `b_products` (`id`, `p_name`, `price`, `tabs`, `image`, `ingredients`, `available`, `portion`) VALUES
(2, 'LENTIL SOUP', '2.50', 'SOUPS', 'images/red lentil soup.jpg', '<b><i>Ingredients:</i></b> <br>olive oil, carrot,<br> salt, red lentils, <br>lemon juice', 1, '(1 porsion)'),
(3, 'TOMATO SOUP ', '2.50', 'SOUPS', 'images/tomato soup.jpg', '<b><i>Ingredients:</i></b> <br>diced tomatoes, onion,<br> garlic, heavy <br>cream, flour', 1, '(1 porsion)'),
(4, 'MUSHROOM SOUP ', '3.00', 'SOUPS', 'images/mushroom soup.jpg', '<b><i>Ingredients:</i></b> <br>fresh mushrooms, garlic,<br> butter, flour, <br>milk, chicken broth', 1, '(1 porsion)'),
(5, 'BORSHCH ', '2.00', 'SOUPS', 'images/borshch.jpg', '<b><i>Ingredients:</i></b> <br>carrot, onion, <br>beef broth, tomatoes,<br> cabbage, salt', 1, '(1 porsion)'),
(6, 'CEASAR SALAD', '4.80', 'SALADS', 'images/chicken caesar salad.jpg', '<b><i>Ingredients:</i></b> <br>chicken breast, oil, <br>lettuce, tomatoes, bread,<br> salt, lemon <br>juice, mayonnaise  ', 1, '(1 porsion)'),
(7, 'MANGAL SALAD ', '4.00', 'SALADS', 'images/mangal salad.jpg', '<b><i>Ingredients:</i></b> <br>grilled eggplant, peppers<br> and tomatoes, vinegar, salt,<br> garlic, cilantro ', 1, '(1 porsion)'),
(8, 'MUSHROOM SALAD ', '3.50', 'SALADS', 'images/mushroom salad.jpg', '<b><i>Ingredients:</i></b> <br>mushrooms, lemon juice,<br> olive oil,<br> salt, pepper', 1, '(1 porsion)'),
(9, 'CHICKEN SALAD ', '4.80', 'SALADS', 'images/chicken.jpg', '<b><i>Ingredients:</i></b> <br\r\nchicken, pepper, corn,<br> lemon juice, salt,<br> mayonnaise  ', 1, '(1 porsion)'),
(10, 'BEEF FAJITAS ', '6.20', 'MAIN COURSE', 'images/beef fajitas.jpg', '<b><i>Ingredients:</i></b> <br>steak, olive oil, lime <br>juice, garlic, hot pepper,<br> onion, small sweet peppers  ', 1, '(1 porsion)'),
(11, 'CHICHKEN LEVENGI ', '4.00', 'MAIN COURSE', 'images/chicken lavangi.jpg', '<b><i>Ingredients:</i></b> <br>chicken, onion, walnut,<br> plum jam, salt,<br> pepper  ', 1, '(1 porsion)'),
(12, 'CHICKEN NUGGETS ', '2.20', 'MAIN COURSE', 'images/chicken nuggets.jpg', '<b><i>Ingredients:</i></b> <br>\r\nchicken, water, salt,<br> pepper, wheat starch,<br> oil ', 1, '(1 porsion)'),
(13, 'DOLMA', '4.00', 'MAIN COURSE', 'images/dolma of vine leaves.jpg', '<b><i>Ingredients:</i></b> <br>grape leaves, meat, <br>rice, onion, oil, <br> salt, pepper', 1, '(1 porsion)'),
(14, 'MARGARITHA PIZZA ', '2.50', 'PIZZAS', 'images/margherita pizza.jpg', '<b><i>Ingredients:</i></b> <br>crust, oil, garlic,<br> tomato sauce, mozzarella<br> cheese, pepper, salt ', 1, '(1 porsion)'),
(15, 'SALAMI PIZZA ', '3.00', 'PIZZAS', 'images/salami pizza.jpg', '<b><i>Ingredients:</i></b> <br>crust, pizza sauce, <br>mushrooms, salt, <br>pepper ', 1, '(1 porsion)'),
(16, 'MIX PIZZA ', '8.80', 'PIZZAS', 'images/mix pizza.jpg', '<b><i>Ingredients:</i></b> <br>crust, pizza sauce, <br>chicken, mushrooms, pepper,<br> mozzarella cheese, <br>tomatoes, sliced pepperoni   ', 1, '(1 porsion)'),
(17, 'BULGUR', '1.30', 'SIDE DISHES', 'images/bulgur.jpg', '<b><i>Ingredients:</i></b> <br>bulgur, tomatoes,<br> pepper, oil, salt', 1, '(1 porsion)'),
(18, 'SPAGHETTI ', '2.00', 'SIDE DISHES', 'images/spaghetti.jpg', '<b><i>Ingredients:</i></b> <br>spaghetti pasta,<br> oil, salt, <br>pepper ', 1, '(1 porsion)'),
(19, 'MASHED POTATO ', '2.00', 'SIDE DISHES', 'images/mashed potato.jpg', '<b><i>Ingredients:</i></b> <br>potatoes, oil,<br> salt, pepper ', 1, '(1 porsion)'),
(20, 'PLOV ', '2.00', 'SIDE DISHES', 'images/plov.jpg', '<b><i>Ingredients:</i></b> <br>rice, green,<br> lentils ', 1, '(1 porsion)'),
(21, 'SHAKARBURA', '1.00', 'PASTERY', 'images/shakarbura.jpg', '<b><i>Ingredients:</i></b> <br>almond, sugar, <br>flour, egg, <br>butter, cardamon   ', 1, '(1 porsion)'),
(22, 'PAKHLAVA ', '1.00', 'PASTERY', 'images/pakhlava.jpg', '<b><i>Ingredients:</i></b> <br>dry yeast, sugar,<br> flour, egg, sour <br>cream, butter, milk,<br> nut, cardamon   ', 1, '(1 porsion)'),
(23, 'ECLAIR ', '1.50', 'PASTERY', 'images/eclair.jpg', '<b><i>Ingredients:</i></b> <br> butter, salt, eggs,<br> flour, sugar, vanilla', 1, '(1 porsion)'),
(24, 'NAPOLEON ', '3.00', 'PASTERY', 'images/napoleon cake.jpg', '<b><i>Ingredients:</i></b> <br> flour, butter,<br> sugar, milk, <br>vanilla, extract,<br> milk', 1, '(1 porsion)'),
(25, 'MEDOVIY ', '2.50', 'PASTERY', 'images/medoviy.jpg', '<b><i>Ingredients:</i></b> <br>eggs, sugar, baking <br>soda, honey, <br>flour, vinegar', 1, '(1 porsion)');

-- --------------------------------------------------------

--
-- Table structure for table `c_feedback`
--

CREATE TABLE `c_feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_feedback`
--

INSERT INTO `c_feedback` (`id`, `fname`, `lname`, `feedback`) VALUES
(1, 'Cinnabon', 'OOHHH', 'OHHHHH'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `c_orderlist`
--

CREATE TABLE `c_orderlist` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_time` time NOT NULL,
  `p_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_orderlist`
--

INSERT INTO `c_orderlist` (`id`, `p_name`, `u_name`, `p_time`, `p_price`) VALUES
('009', 'Vasif - 10;', 'Vahidov', '17:05:00', '50.00'),
('341234', 'TUNA SALAD  - 3;GREEN SALAD  - 12;BBQ CHICKEN PIZZA  - 1;VEGGIE SANDWICH  - 1;ESPRESSO  - 1;', 'Vasif', '09:00:00', '61.70'),
('56767', 'BBQ CHICKEN PIZZA  - 1;CAFE LATTE - 1;', 'EMILABBAS', '11:11:00', '10.30'),
('1', 'VEGGIE SANDWICH  - 1;', 'bir', '11:11:00', '4.70');

-- --------------------------------------------------------

--
-- Table structure for table `c_products`
--

CREATE TABLE `c_products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tabs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8_unicode_ci NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '0',
  `portion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_products`
--

INSERT INTO `c_products` (`id`, `p_name`, `price`, `tabs`, `image`, `ingredients`, `available`, `portion`) VALUES
(2, 'PEPPORONI PIZZA', '6.80', 'PIZZAS', 'images/pepperonipizza.jpg', '<b><i>Ingredients:</i></b> <br>double cheese, pepperoni,<br> mozzarella, parmesan <br>cheese,<br> tomato pasta, crust', 1, '(1 porsion)'),
(3, 'CHICKEN PIZZA ', '10.20', 'PIZZAS', 'images/grilled chicken pizza.jpg', '<b><i>Ingredients:</i></b> <br>grilled chicken breast,<br> mozzarella, <br>parmesan cheese,<br> black olives,<br> tomato, crust', 1, '(1 porsion)'),
(4, 'BBQ CHICKEN PIZZA ', '7.60', 'PIZZAS', 'images/bbq chicken pizza.jpg', '<b><i>Ingredients:</i></b> <br>grilled chicken breast, <br>mozzarella cheese, <br>BBQ sauce, <br>onion, crust ', 1, '(1 porsion)'),
(5, 'FRESH VEGGIE PIZZA ', '6.80', 'PIZZAS', 'images/fresh veggie pizza.jpg', '<b><i>Ingredients:</i></b> <br>mozzarella, mushrooms, <br>pepper, black olives, <br>tomato, crust', 1, '(1 porsion)'),
(6, 'GREEN SALAD ', '2.50', 'SALADS', 'images/green salad.jpg', '<b><i>Ingredients:</i></b> <br>tomato, cucumber,<br> red onion, olives,<br> cheese, olive oil', 1, '(1 porsion)'),
(7, 'TUNA SALAD ', '5.90', 'SALADS', 'images/tuna salad.jpg', '<b><i>Ingredients:</i></b> <br>white meat tuna, red onion,<br> mayonnaise, pepper, <br>lemon juice, mustard', 1, '(1 porsion)'),
(8, 'CEASAR SALAD ', '6.80', 'SALADS', 'images/chicken caesar salad.png', '<b><i>Ingredients:</i></b> <br>lettuce, grilled chicken <br> breast, parmesan cheese<br>, garlic, dressing', 1, '(1 porsion)'),
(9, 'TURKEY SANDWICH ', '4.80', 'SANDWICHES', 'images/smoked turkey sandwich.png', '<b><i>Ingredients:</i></b> <br>smoked turkey breast, <br>lettuce, tomato', 1, '(1 porsion)'),
(10, 'VEGGIE SANDWICH ', '4.70', 'SANDWICHES', 'images/fresh veggie sandwich.png', '<b><i>Ingredients:</i></b> <br>cheddar cheese, black olives,<br> tomatoes,<br> lettuce beans, cucumber', 1, '(1 porsion)'),
(11, 'ROAST BEEF', '7.20', 'SANDWICHES', 'images/roast beef sandwich.png', '<b><i>Ingredients:</i></b> <br>angus roast beef,<br> mozzarella, lettuce, <br>tomato, mayonnaise', 1, '(1 porsion)'),
(12, 'AMERIKANO', '1.90', 'BEVERAGES', 'images/amerikano.jpg', '<b><i>Ingredients:</i></b> <br>espresso coffee,<br> boiling water', 1, '(1 cup)'),
(13, 'CAPPUCHINO ', '2.70', 'BEVERAGES', 'images/cappuchino.jpg', '<b><i>Ingredients:</i></b> <br>milk, <br>espresso coffee', 1, '(1 cup)'),
(14, 'ESPRESSO ', '1.70', 'BEVERAGES', 'images/espresso.png', '<b><i>Ingredients:</i></b> <br>coffee beans, <br>boiling water', 1, '(1 cup)'),
(15, 'CAFE LATTE', '2.70', 'BEVERAGES', 'images/cafe latte.jpg', '<b><i>Ingredients:</i></b> <br>milk, <br>brewed espresso', 1, '(1 cup)'),
(16, 'ICED MOCHA', '5.30', 'BEVERAGES', 'images/iced mocha.jpg', '<b><i>Ingredients:</i></b> <br>brewed coffee, milk, <br>ice, chocolate syrup, <br>vanilla extract, sugar', 1, '(1 cup)'),
(17, 'ICED VANILLA LATTE ', '5.10', 'BEVERAGES', 'images/iced vanilla coffee.jpg', '<b><i>Ingredients:</i></b> <br>ice, milk, brewed <br> espresso, vanilla syrup', 1, '(1 cup)'),
(18, 'OREO CHILLATTA', '4.90', 'BEVERAGES', 'images/oreo chillatta.jpg', '<b><i>Ingredients:</i></b> <br>milk, oreo cookies,<br> vanilla ice, whipped cream', 1, '(1 cup)'),
(19, 'STRAWBERRIES', '4.90', 'BEVERAGES', 'images/Strawberries Chillatta.png', '<b><i>Ingredients:</i></b> <br>milk, ice,<br> pureed strawberry', 1, '(1 cup)');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `feedback`) VALUES
(1, '', '', 'xaxaxaxax'),
(5, 'Vasif', 'Vahidov', 'Hello World!'),
(6, 'Mardan', 'Safarov', 'good times'),
(7, 'Ulvi', 'Mammadli', 'Salam! chox bahasiz'),
(8, 'mardan', 'adasda', 'sdfdasfdsfad'),
(9, 'mardan', 'adasda', 'sdfdasfdsfad'),
(10, 'test', 'test', 'ette'),
(11, 'test', 'test', 'ette'),
(12, 'vdfbghj', 'dfghnjm', 'fucj'),
(13, 'fffvfbgh', 'sss', 'rtyu'),
(14, 'fffvfbgh', 'sss', 'rtyu'),
(15, 'fffvfbgh', 'sss', 'rtyu'),
(16, 'aa', 'aa', 'aaaa'),
(18, 'Heyan', 'qoyuh', 'asdwq');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_time` time NOT NULL,
  `p_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `p_name`, `u_name`, `p_time`, `p_price`) VALUES
('43324', 'SOUPE A LA TOMATE - 1;SOUPE A LA HARICOTS - 1;SOUPE DEPINARDS - 1;', 'Test', '17:06:00', '18.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tabs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8_unicode_ci NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '0',
  `portion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `price`, `tabs`, `image`, `ingredients`, `available`, `portion`) VALUES
(1, 'SOUPE AU FROMAGE', '7.00', 'SOUPS', 'images/fromage.jpg', '<b><i>Ingredients:</i></b> <br>French cheese,<br> cheddar cheese, broccoli, <br> cream, garlic', 1, '(1 porsion)'),
(2, 'SOUPE A LA TOMATE', '6.00', 'SOUPS', 'images/tomatesoup.jpg', '<b><i>Ingredients:</i></b> <br>Tomato soup,<br> carrot, celery, <br> parmezan, greens', 1, '(1 porsion)'),
(3, 'SANDWICH CLUB', '13.00', 'TARTINS', 'images/sandwichclub.jpg', '<b><i>Ingredients:</i></b> <br>Chicken, mayonnaise<br> lettuce, tomato,<br> toast bread, <br> egg, veal ham', 1, '(0.5 porsion)'),
(4, 'TARTINE DE POULET', '13.00', 'TARTINS', 'images/tartinepoulet.jpg', '<b><i>Ingredients:</i></b> <br>Chicken, onion<br> mushroom, pepper, <br> fused cheese', 1, '(0.5 porsion)'),
(5, 'ESPRESSO', '3.00', 'HOT BEVERAGES', 'images/espresso.jpg', '<b><i>Ingredients:</i></b> <br>Coffee beans', 1, '(1 cup)'),
(6, 'PAUL HOT CHOCOLATE', '5.00', 'HOT BEVERAGES', 'images/hotchocolate.jpg', '<b><i>Ingredients:</i></b> <br>Cocoa powder,<br> milk, white sugar', 1, '(1 cup)'),
(7, 'BONAQUA', '1.70', 'DRINKS', 'images/bonaqua.jpg', '<b><i>Ingredients:</i></b> <br>STILL WATER', 1, '(0.5 L.)'),
(8, 'LIPTON-ICE TEA', '3.00', 'DRINKS', 'images/lipton.jpg', '<b><i>Ingredients:</i></b> <br>Ice tea', 1, '(0.5 L.)'),
(9, 'SOUPE A LA HARICOTS', '6.00', 'SOUPS', 'images/haricots.jpg', '<b><i>Ingredients:</i></b> <br>boiled eggs,<br> green bean, onion, <br> celery, sour cream <br>and pickle', 1, '(1 porsion)'),
(10, 'SOUPE DEPINARDS', '6.00', 'SOUPS', 'images/carotte.jpg', '<b><i>Ingredients:</i></b> <br>carrot,<br> orange, leeks, <br> onion, garlic, limon', 1, '(1 porsion)'),
(11, 'SOUPE AU POULET', '6.00', 'SOUPS', 'images/poulet.jpg', '<b><i>Ingredients:</i></b> <br>Chicken slices,<br> and greens', 1, '(1 porsion)'),
(12, 'CROQUE-MONSIEUR ', '13.00', 'TARTINS', 'images/croque.jpg', '<b><i>Ingredients:</i></b> <br>Tartin bread, <br> cheddar chicken, <br> tomato, beshamel sauce <br> and melted cheese', 1, '(1 porsion)'),
(13, 'TARTINE DE BOEUF', '14.00', 'TARTINS', 'images/boeuf.jpg', '<b><i>Ingredients:</i></b> <br>Cheese, beef, onion,<br> barbeque sauce,<br> mushroom and pepper', 1, '(1 porsion)'),
(14, 'MACCHIATO', '4.00', 'HOT BEVERAGES', 'images/macchiato.jpg', '<b><i>Ingredients:</i></b> <br>coffee beans,<br> vanilla syrup,<br> steamed milk \r\n\r\n ', 1, '(1 cup)'),
(15, 'TEA', '4.00', 'HOT BEVERAGES', 'images/tea.jpg', '<b><i>Ingredients:</i></b> <br>Early gray tea', 1, '(1 cup)'),
(16, 'COFFEE GOURMAND', '6.00', 'HOT BEVERAGES', 'images/gourmand.jpg', '<b><i>Ingredients:</i></b> <br>Coffee with <br>3 macarons', 1, '(1 cup)'),
(17, 'TEA GOURMAND', '6.00', 'HOT BEVERAGES', 'images/gourmandtea.jpg', '<b><i>Ingredients:</i></b> <br> tea with <br>3 macarons', 1, '(1 cup)'),
(18, 'TURKISH COFFEE', '3.50', 'HOT BEVERAGES', 'images/turkishco.jpg', '<b><i>Ingredients:</i></b> <br>coffee beans <br>and sugar', 1, '(1 cup)'),
(19, 'BANANA BERRIES', '9.00', 'DRINKS', 'images/berries.jpg', '<b><i>Ingredients:</i></b> <br>Strawberries, <br>currants, grapes,<br> banana, apple', 1, '(1 glass)'),
(20, 'ORANGE SUNRISE', '8.00', 'DRINKS', 'images/sunrise.jpg', '<b><i>Ingredients:</i></b> <br>Pineapple, pineapple juice, <br>lemon, ginger, apple,<br> currant syrup', 1, '(1 glass)'),
(21, 'BANANA SHAKE', '12.00', 'DRINKS', 'images/bananashake.jpg', '<b><i>Ingredients:</i></b> <br>banana, lemon, orange,<br> honey, orange peel,<br> carbonated water', 1, '(1 glass)'),
(22, 'SIRAB', '2.50', 'DRINKS', 'images/sirab.jpg', '<b><i>Ingredients:</i></b> <br>Sparkling water, mineral', 1, '(0.5 L)'),
(23, 'REDBULL', '5.00', 'DRINKS', 'images/redbull.jpg', '<b><i>Ingredients:</i></b> <br>Taurine. B-group vitamins. <br>Sugars, Caffeine', 1, '(250 ml)'),
(24, 'COCA-COLA', '3.00', 'DRINKS', 'images/cola.jpg', '<b><i>Ingredients:</i></b> <br>light, zero, <br> sugar-carbohydrates', 1, '(355 ml)'),
(25, 'SPRITE', '3.00', 'DRINKS', 'images/sprite.jpg', '<b><i>Ingredients:</i></b> <br>sugar-carbohydrates', 1, '(355 ml)'),
(26, 'Fanta', '3.00', 'DRINKS', 'images/fanta.jpg', '<b><i>Ingredients:</i></b> <br>sugar-carbohydrates', 1, '(355 ml)');

-- --------------------------------------------------------

--
-- Table structure for table `r_feedback`
--

CREATE TABLE `r_feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r_feedback`
--

INSERT INTO `r_feedback` (`id`, `fname`, `lname`, `feedback`) VALUES
(1, 'Mardan', 'Mardan', 'OHHHHHHHHHHHHHHHHHHHHHHHH'),
(2, 'VASIF', 'VAHID', 'MARDAN'),
(3, 'remtest', 'remtest', 'remmmmmm'),
(4, 'ayshs', 'ayshs', 'ayshsh'),
(5, 'vaska', 'vaska', 'vasif');

-- --------------------------------------------------------

--
-- Table structure for table `r_orderlist`
--

CREATE TABLE `r_orderlist` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_time` time NOT NULL,
  `p_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r_orderlist`
--

INSERT INTO `r_orderlist` (`id`, `p_name`, `u_name`, `p_time`, `p_price`) VALUES
('111', 'SEBZI QOVURMA  - 1;POTATO FRIES  - 1;', 'HOTTT', '11:11:00', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `r_products`
--

CREATE TABLE `r_products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tabs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8_unicode_ci NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '0',
  `portion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r_products`
--

INSERT INTO `r_products` (`id`, `p_name`, `price`, `tabs`, `image`, `ingredients`, `available`, `portion`) VALUES
(2, 'CHICKEN CHIGIRTMA', '3.50', 'MAIN COURSE', 'images/chicken cigirtma.jpg', '<b><i>Ingredients:</i></b> <br>chicken, egg,<br> butter, onion, <br>salt, pepper, tomatoes ', 1, '(0.5 porsion)'),
(3, 'CHICKEN SCHNITZEL ', '1.60', 'MAIN COURSE', 'images/chicken schnitzel.jpg', '<b><i>Ingredients:</i></b> <br>bread crumbs, garlic,<br> flour, chicken breast, <br>egg, salt', 1, '(0.5 porsion)'),
(4, 'SEBZI QOVURMA ', '2.00', 'MAIN COURSE', 'images/sebzi qovurma.jpg', '<b><i>Ingredients:</i></b> <br>meat, onion, <br>greens, butter,<br> pepper, salt', 1, '(0.5 porsion)'),
(5, 'GRILLED SOSUAGE ', '1.50', 'MAIN COURSE', 'images/grilled sausage.jpg', '<b><i>Ingredients:</i></b> <br>sausage, salt,<br> pepper, oil', 1, '(0.5 porsion)'),
(6, 'PLOV', '1.20', 'SIDE DISHES', 'images/plov.jpg', '<b><i>Ingredients:</i></b> <br>rice, butter,<br> green beans, salt, <br>pepper', 1, '(0.5 porsion)'),
(7, 'POTATO FRIES ', '2.00', 'SIDE DISHES', 'images/potato fries.jpg', '<b><i>Ingredients:</i></b> <br>potato, oil,<br> salt, pepper', 1, '(0.5 porsion)'),
(8, 'BULGUR', '2.00', 'SIDE DISHES', 'images/bulgur.jpg', '<b><i>Ingredients:</i></b> <br>bulgur, tomato sauce,<br> butter, salt, pepper', 1, '(0.5 porsion)'),
(9, 'PUMPKIN SOUP ', '2.00', 'SOUPS', 'images/pumpkin soup.jpg', '<b><i>Ingredients:</i></b> <br>oil, onions,<br> pumpkin, salt,<br> pepper', 1, '(0.5 porsion)'),
(10, 'MUSHROOM SOUP', '2.50', 'SOUPS', 'images/mushroom soup.jpg', '<b><i>Ingredients:</i></b> <br>mushrooms, oil onion,<br> salt, pepper,<br> chicken broth', 1, '(0.5 porsion)'),
(11, 'CHICKEN SOUP ', '2.50', 'SOUPS', 'images/chicken soup.jpg', '<b><i>Ingredients:</i></b> <br>oil, chicken, onion,<br> garlic, carrots, chicken<br> broth, salt, pepper', 1, '(0.5 porsion)'),
(12, 'CARROT SOUP ', '2.00', 'SOUPS', 'images/carrot soup.jpg', '<b><i>Ingredients:</i></b> <br>oil, onion, <br>garlic, carrots,<br> chicken broth,<br> salt, pepper', 1, '(0.5 porsion)'),
(13, 'RUSSIAN SALAD', '1.60', 'SALADS', 'images/Russian Salad.jpg', 'green beans, egg, potato, carrot, pickle, cucumber, greens, mayonnaise, salt, pepper ', 1, '(0.5 porsion)'),
(14, 'MIMOZA SALAD ', '3.00', 'SALADS', 'images/mimoza salad.jpg', '<b><i>Ingredients:</i></b> <br>eggs, potato, cheese, <br>carrot, mayonnaise,<br> pepper', 1, '(0.5 porsion)'),
(15, 'CHOBAN SALAD ', '2.00', 'SALADS', 'images/choban salad.jpg', '<b><i>Ingredients:</i></b> <br>oil, lemon juice,<br> cucumber, tomato, <br>pepper, cheese,<br> salt, pepper', 1, '(0.5 porsion)'),
(16, 'PEARL SALAD ', '2.50', 'SALADS', 'images/pearl salad.jpg', '<b><i>Ingredients:</i></b> <br>chicken breast, potato,<br> nuts, grape, greens', 1, '(0.5 porsion)'),
(17, 'TOMATO SOUP ', '3.00', 'SOUPS', 'images/tomato soup.jpg', '<b><i>Ingredients:</i></b> <br> oil, onion, garlic,<br> tomato, salt, <br>pepper', 1, '(0.5 porsion)'),
(18, 'CHICKEN BBQ ', '4.00', 'MAIN COURSE', 'images/chicken bbq.jpg', '<b><i>Ingredients:</i></b> <br>oil, onion, ketchup,<br> garlic, sugar, sauce,<br> chicken, salt,<br> pepper ', 1, '(0.5 porsion)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_feedback`
--
ALTER TABLE `b_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_products`
--
ALTER TABLE `b_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_feedback`
--
ALTER TABLE `c_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_products`
--
ALTER TABLE `c_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_feedback`
--
ALTER TABLE `r_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_products`
--
ALTER TABLE `r_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_feedback`
--
ALTER TABLE `b_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `b_products`
--
ALTER TABLE `b_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `c_feedback`
--
ALTER TABLE `c_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_products`
--
ALTER TABLE `c_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `r_feedback`
--
ALTER TABLE `r_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `r_products`
--
ALTER TABLE `r_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
