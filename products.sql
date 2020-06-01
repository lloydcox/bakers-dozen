/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `id-name` varchar(255) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Flavor1` varchar(255) DEFAULT NULL,
  `Flavor2` varchar(255) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `Image_url` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `Name`, `id-name`, `Price`, `Category`, `Flavor1`, `Flavor2`, `Description`, `Image_url`) VALUES
(1, 'Chocolate Sponge Cake', 'Choc-Cake', 10.00, 'Cakes', 'Chocolate', NULL, 'Cupcake ipsum dolor sit. Amet apple pie tart pudding brownie sesame snaps muffin. Caramels pudding topping wafer.', 'IMG/Products/kristiana-pinne-ner3QLDgoOE-unsplash.jpg');
INSERT INTO `products` (`id`, `Name`, `id-name`, `Price`, `Category`, `Flavor1`, `Flavor2`, `Description`, `Image_url`) VALUES
(2, 'Strawberry Cake', 'Strawb-Cake', 8.00, 'Cakes', 'Strawberry', 'Cream', '\r\nCupcake ipsum dolor sit amet candy tiramisu sugar plum powder. Ice cream sweet fruitcake jujubes gummies.', 'IMG/Products/dilyara-garifullina-I48gnI1Qs5o-unsplash.jpg');
INSERT INTO `products` (`id`, `Name`, `id-name`, `Price`, `Category`, `Flavor1`, `Flavor2`, `Description`, `Image_url`) VALUES
(3, 'Coffee Cake', 'Coff-Cake', 9.00, 'Cakes', 'Coffee', NULL, 'Cupcake ipsum dolor. Sit amet brownie toffee cake halvah soufflé. Bear claw donut pie jujubes marshmallow powder.', 'IMG/Products/anthony-espinosa-6iqpLKqeaE0-unsplash.jpg');
INSERT INTO `products` (`id`, `Name`, `id-name`, `Price`, `Category`, `Flavor1`, `Flavor2`, `Description`, `Image_url`) VALUES
(4, 'Custom Cake', 'Cust-Cake', 15.00, 'Cakes', 'You Choose', NULL, 'Cupcake ipsum dolor sit amet jelly toffee tiramisu gummies. Sesame snaps powder tart soufflé oat cake cheesecake brownie tart. Cheesecake soufflé cheesecake.', 'IMG/Products/charlota-blunarova-qGIMAzoe4kw-unsplash.jpg'),
(5, 'Soft Pretzel', 'Soft-Pret', 5.00, 'Pretzels', 'Salted', 'Seeded', 'Cupcake ipsum dolor sit amet cake tootsie roll candy. Caramels sugar plum liquorice. Candy canes sweet roll biscuit liquorice jelly beans macaroon sesame snaps gummi bears. Chupa chups bonbon liquorice.', 'IMG/Products/daniel-schludi-l5lCxvZfwcQ-unsplash.jpg'),
(6, 'Croissant', 'Croissant', 3.00, 'Pastries', NULL, NULL, '\r\nCupcake ipsum dolor sit amet gingerbread sweet. Donut soufflé icing bonbon. Cupcake oat cake croissant dragée. Croissant candy jelly bear claw halvah.', 'IMG/Products/mae-mu-m9pzwmxm2rk-unsplash.jpg'),
(7, 'Donut Selection Box', 'Donut', 10.00, 'Pastries', 'Variety', NULL, 'Cupcake ipsum dolor sit amet cotton candy donut cheesecake chocolate bar. Sweet topping caramels icing wafer.', 'IMG/Products/jessica-henderson-mKz8CVKeC2E-unsplash.jpg'),
(8, 'Fruit Danish', 'Danish', 4.00, 'Pastries', 'Variety', 'Fruit', 'Cupcake ipsum dolor sit amet. Candy canes gummies pudding tiramisu ice cream. Cake liquorice jelly cotton candy. Danish wafer tiramisu cheesecake chupa chups brownie toffee sweet roll.', 'IMG/Products/meelika-marzzarella-K_fOJoip_KI-unsplash.jpg'),
(9, 'Crunchy Pretzels', 'Crunch-Pret', 3.00, 'Pretzels', 'Salty', 'Sweet', 'Cupcake ipsum dolor sit amet sugar plum bear claw. Icing soufflé tootsie roll. Bonbon sweet tiramisu macaroon chocolate cotton candy brownie bear claw topping.', 'IMG/Products/sara-cervera-cWuqdgKBGBI-unsplash.jpg'),
(10, 'Soft Pretzel Roll', 'Pret-Roll', 3.00, 'Pretzels', 'Salty', 'Sweet', 'Cupcake ipsum dolor sit amet tiramisu toffee. Cupcake ice cream cookie sesame snaps jelly wafer soufflé chocolate tart. Jujubes donut bonbon toffee croissant apple pie macaroon danish sesame snaps.', 'IMG/Products/thomas-mauch-b6VvpJUE85g-unsplash.jpg'),
(11, 'Churro', 'Churro', 3.00, 'Pretzels', 'Sweet', NULL, 'Cupcake ipsum dolor sit amet pastry candy. Apple pie jelly beans lollipop cookie chupa chups jujubes danish icing. Powder jujubes cheesecake marzipan.', 'IMG/Products/rolande-pg-Ywp3TJdCSDQ-unsplash.jpg'),
(12, 'Cheese Pizza', 'Cheese-Piz', 5.00, 'Pizza', 'Chedder', 'Tomato', 'Cupcake ipsum dolor sit amet. Danish caramels candy chupa chups cotton candy candy canes oat cake sesame snaps. Cheesecake cookie apple pie lemon drops muffin.', 'IMG/Products/humphrey-muleba-_hM6B5ApADU-unsplash.jpg'),
(13, 'Stiltion, Onion and Mushroom Pizza', 'Stilton-Piz', 8.00, 'Pizza', 'Stilton', 'Onion', 'Cupcake ipsum dolor. Sit amet fruitcake danish halvah. Pastry cake pie carrot cake fruitcake. Jelly-o topping icing macaroon tart jelly beans lemon drops.', 'IMG/Products/pinar-kucuk-VRLJ-KdXY3o-unsplash.jpg'),
(14, 'Spinnach and Fetta Pizza', 'Fetta-Piz', 7.00, 'Pizza', 'Fetta', 'Tomato', 'Cupcake ipsum dolor sit amet soufflé. Chocolate tootsie roll pie chupa chups oat cake. Oat cake cupcake pastry. Biscuit ice cream jelly carrot cake candy canes halvah dragée.', 'IMG/Products/hanna-balan-7tLoRTCvUjE-unsplash.jpg'),
(15, 'Spicy Meat Pizza', 'Spicy-Piz', 8.00, 'Pizza', 'Salty', 'Spicy', 'Cupcake ipsum dolor. Sit amet cheesecake macaroon jujubes. Marzipan bonbon gingerbread muffin oat cake.', 'IMG/Products/wesual-click-jkC1ul95ujQ-unsplash.jpg'),
(16, 'Giant Cinnamon Bun', 'Cin-Bun', 8.00, 'Pastries', 'Cinnamon', NULL, 'Cupcake ipsum dolor sit. Amet tiramisu jujubes sweet roll. Brownie gingerbread jelly sweet pastry dragée toffee oat cake. Gingerbread cheesecake chocolate bar gummies.', 'IMG/Products/scott-gummerson-pBSfYjplzBY-unsplash.jpg'),
(17, 'Begal', 'Begal', 2.00, 'Bread', 'Glazed', 'Variety', 'Cupcake ipsum dolor sit amet jelly chocolate cake. Sugar plum apple pie dessert. Fruitcake sweet tiramisu.', 'IMG/Products/mae-mu-8GzmzEyLNyc-unsplash.jpg'),
(18, 'Country Bloomer', 'Bloomer', 4.00, 'Bread', NULL, NULL, 'Cupcake ipsum dolor. Sit amet lollipop soufflé pudding lollipop bonbon. Pudding bear claw toffee sweet ice cream oat cake chupa chups jujubes ice cream.', 'IMG/Products/ddp-QnQSxrXFgnw-unsplash.jpg'),
(19, 'Brioche Loaf', 'Brioche', 5.00, 'Bread', 'Sweet', NULL, 'Cupcake ipsum dolor sit amet. Danish pudding chocolate apple pie. Wafer cookie muffin topping pastry tiramisu tootsie roll.', 'IMG/Products/youjeen-cho-QpwNft_7ICg-unsplash.jpg'),
(20, 'Baguette', 'Baguette', 3.00, 'Bread', NULL, NULL, 'Cupcake ipsum dolor. Sit amet gingerbread. Ice cream fruitcake marshmallow.', 'IMG/Products/rodolfo-marques-GzBO_o0RvEg-unsplash.jpg'),
(21, 'Blueberry Pie', 'Blue-Pie', 6.00, 'Pie', 'Blueberry', 'Tart', 'Cupcake ipsum dolor sit amet macaroon caramels marzipan bonbon. Fruitcake wafer tart. Gummi bears lemon drops chocolate cake apple pie soufflé.', 'IMG/Products/alexander-mils-aiIANaSK9DQ-unsplash.jpg'),
(22, 'Apple Pie', 'App-Pie', 6.00, 'Pie', 'Apple', NULL, 'Cupcake ipsum dolor sit amet sugar plum. Jelly beans pie fruitcake bear claw chupa chups dessert. Chocolate chocolate bar jelly-o.', 'IMG/Products/ally-p-J5QovDGYK8s-unsplash.jpg'),
(23, 'Salted Caramel Apple Pie', 'Caramel-Pie', 10.00, 'Pie', 'Salty', 'Sweet', 'Cupcake ipsum dolor sit amet. Cake muffin powder icing. Bear claw macaroon candy canes liquorice jelly muffin candy canes brownie soufflé.', 'IMG/Products/dilyara-garifullina-SHBhxhVnLkY-unsplash.jpg'),
(24, 'Cherry Pie', 'Cherry-Pie', 6.00, 'Pie', 'Cherry', NULL, 'Cupcake ipsum dolor sit. Amet jujubes tootsie roll marshmallow bonbon cotton candy soufflé lollipop. Jujubes gummi bears wafer powder sweet soufflé.', 'IMG/Products/dilyara-garifullina-A2JYED-VlxA-unsplash.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;