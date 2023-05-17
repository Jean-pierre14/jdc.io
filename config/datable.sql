CREATE TABLE `bisimwa_db`.`semaine_tb` ( 
    `semaine_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Semaine id qui est auto increment' , 
    `jour` VARCHAR(50) NOT NULL COMMENT 'Les jours de la semaine' , 
    `date` DATE NOT NULL COMMENT 'Date ' , 
    `Enseignant` VARCHAR(255) NOT NULL COMMENT 'La personne qui a completer.' , 
    `created_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`semaine_id`)) ENGINE = InnoDB;


CREATE TABLE `bisimwa_db`.`lecon_tb` ( 
    `lecon_id` INT(255) NOT NULL AUTO_INCREMENT COMMENT 'Id' , 
    `cours` VARCHAR(255) NOT NULL COMMENT 'Cours' , 
    `lecon` VARCHAR(255) NOT NULL COMMENT 'Matiere' , 
    `semaine_id` INT(255) NOT NULL , 
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    FOREIGN KEY (semaine_id) REFERENCES semaine_tb(semaine_id),
    PRIMARY KEY (`lecon_id`)) ENGINE = InnoDB;