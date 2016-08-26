/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  kamina
 * Created: 23 août 2016
 */

CREATE DATABASE IF NOT EXISTS `stickman` DEFAULT CHARACTER SET utf8 ;
CREATE USER IF NOT EXISTS 'stick'@'localhost' IDENTIFIED BY '123456';
GRANT SELECT,INSERT,UPDATE,DELETE, CREATE ON stickman.* TO 'stick'@'localhost';