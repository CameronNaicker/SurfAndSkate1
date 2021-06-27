--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'AquaSurf Black', 'AQRED', 'product/aquablack.jpg', 10000.00),
(2, 'AquaSurf Blue', 'AQBLU', 'product/aquablue.jpg', 10000.00),
(3, 'AquaSurf Red', 'AQBLK', 'product/aquared.jpg', 10000.00),
(4, 'Hydrofoil', 'HFOIL', 'product/hydrofoil.jpg', 15000.00),
(5, 'JetSTSX', 'STSX', 'product/jetSTSX.jpeg.png', 16000.00),
(6, 'Quadtron', 'QTRON', 'product/quadtron.jpg', 1000.00),
(7, 'Stealth E Board', 'SEB', 'product/stealthEBoard.jpg', 11000.00),
(8, 'Street Carver', 'SCARV', 'product/streetcarver.jpg', 700.00),
(9, 'Jet Flower', 'JFL', 'product/Jetproduct.png', 17000.00);



--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producy`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;