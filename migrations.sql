
DROP DATABASE IF EXISTS blog_ipb23;

CREATE DATABASE blog_ipb23;



USE blog_ipb23;

CREATE TABLE posts (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
content VARCHAR(5200)
);

INSERT INTO posts
(content)
VALUES 
("bababoye soon k jk m s aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"),
("skibbidy toilets are coming"),
("DIDDY party");




CREATE TABLE categories (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
category_name VARCHAR(25)

);

INSERT INTO categories
(category_name)
VALUES 
("Svetki"),
("Muzika"),
("Sports");



