CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
 `description` text COLLATE utf8_unicode_ci NOT NULL,
 `price` INT NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
 `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `type` TINYINT NOT NULL COMMENT '1=Food | 0=Drinks',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `customers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `address` text COLLATE utf8_unicode_ci NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `orders` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `customer_id` int(11) NOT NULL,
 `grand_total` float(10,2) NOT NULL,
 `created` datetime NOT NULL,
 `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
 PRIMARY KEY (`id`),
 KEY `customer_id` (`customer_id`),
 CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `order_items` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `order_id` int(11) NOT NULL,
 `product_id` int(11) NOT NULL,
 `quantity` int(5) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `order_id` (`order_id`),
 CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- INSERT PRODUCTS

INSERT INTO `products` (`id`, `name`, `description`, `price`, `status`, `image`, `type`) VALUES (NULL, 'Phô mai que', 'Siêu ngon', '10000', '1', '/restaurant2/images/pmq.jpg', '1'), (NULL, 'Taco', 'Món ăn xuất xứ từ Mexico', '50000', '1', '/restaurant2/images/taco.jpg', '1'), (NULL, 'Xúc xích rán', 'Siêu ngon', '10000', '1', '/restaurant2/images/xuc-xich.jpg', '1'), (NULL, 'Nem chua rán', 'Siêu ngon luôn', '20000', '1', '/restaurant2/images/nem-chua.jpg', '1'), (NULL, 'Trà đào', 'Trà đào mát lạnh', '30000', '1', '/restaurant2/images/tra-dao.jpg', '2'), (NULL, 'Trà tắc khổng lồ', 'Trà tắc mát lạnh cho ngày hè', '20000', '1', '/restaurant2/images/tra-tac.jpg', '2'), (NULL, 'Trà xanh kem cheese', 'Trà xanh kem cheese siêu hot ', '40000', '1', '/restaurant2/images/tra-xanh.jpg', '2'), (NULL, 'Trà sữa trân châu đường đen', 'Quá ngon', '40000', '1', '/restaurant2/images/tra-sua.jpg', '2');

