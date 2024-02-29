CREATE TABLE `wadudb`.`usuarios` 
(`id` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(250) NOT NULL , 
`nickname` VARCHAR(250) NOT NULL , 
`email` VARCHAR(250) NOT NULL , 
`password` VARCHAR(250) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;


/* La base de datos se llama "login_register_db" */