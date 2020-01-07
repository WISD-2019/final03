SET NAMES utf8mb4;

INSERT INTO `reservations` (`id`, `user_id`, `checkin`, `checkout`, `book_start`, `book_end`, `cancel`, `discount`, `total`, `need`, `created_at`, `updated_at`, `address`, `closed`) VALUES
(50,	10,	'2020-01-10',	'2020-01-12',	NULL,	NULL,	NULL,	NULL,	7000,	'有帶寵物',	'2020-01-07 02:24:05',	'2020-01-07 02:24:06',	'花蓮縣富裕七街',	1),
(52,	10,	'2020-01-09',	'2020-01-10',	NULL,	NULL,	NULL,	NULL,	2000,	NULL,	'2020-01-07 23:54:57',	'2020-01-07 23:54:59',	'花蓮縣富裕七街',	0);
