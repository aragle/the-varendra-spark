CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `token` varchar(32) NOT NULL,
  `status` varchar(1) DEFAULT NULL,
  `picture` varchar(35) DEFAULT NULL,
  `permission` varchar(1) NOT NULL
);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;