CREATE DATABASE `sistema_login__cadastro`;/*!40100 COLLATE 'utf8mb4_general_ci' */
USE `sistema_login__cadastro`;

CREATE TABLE `tb_usuarios__cadastro` (
	`id` INT NOT NULL,
	`name` VARCHAR(255) NOT NULL DEFAULT '',
	`email` VARCHAR(255) NOT NULL DEFAULT '',
	`password` VARCHAR(255) NOT NULL DEFAULT ''
) COLLATE='utf8mb4_general_ci';

ALTER TABLE `tb_usuarios__cadastro`
	CHANGE COLUMN `id`
ADD PRIMARY KEY(`ID`);