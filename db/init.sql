CREATE TABLE `task` (
  `task_id` int NOT NULL AUTO_INCREMENT,
  `task` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`task_id`)
);

INSERT INTO `task` (`task`, `status`) VALUES (1,'Test', 'En attente');

ALTER TABLE `task`
  MODIFY `task_id` int(10) AUTO_INCREMENT, AUTO_INCREMENT=3;