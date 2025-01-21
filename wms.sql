SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

create table `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB default CHARSET=latin1;

create table `food` (
`food_id` int primary key,
`food_name` varchar(50) unique,
`carbs` varchar(20),
`proteins` varchar(20),
`fats` varchar(20),
`vitamins` varchar(20),
`fibres` varchar(20)
) ENGINE=InnoDB default CHARSET=latin1;

create table `trainer` (
`trainer_id` int primary key,
`trainer_emailid` varchar(50) unique,
`trainer_name` varchar(50),
`trainer_phoneno` varchar(50)
) ENGINE=InnoDB default CHARSET=latin1;

create table `package1` (
`package_id` int primary key,
`package_name` varchar(50) unique,
`package_amount` varchar(50)
) ENGINE=InnoDB default CHARSET=latin1;

create table `payment` (
`payment_id` varchar(50) primary key,
`payment_name` varchar(50) unique,
`payment_amount` varchar(50)
) ENGINE=InnoDB default CHARSET=latin1;

create table `customer` (
`customer_id` int primary key,
`customer_emailid` varchar(50) unique,
`customer_name` varchar(50),
`customer_phoneno` varchar(50),
`food_assigned` varchar(100),
`trainer_id` int references trainer(trainer_id),
`package_id` int references package1(package_id),
`payment_id` int references payment(payment_id)
) ENGINE=InnoDB default CHARSET=latin1;


COMMIT;