CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER IF NOT EXISTS 'mait-aad'@'%' IDENTIFIED BY 'Mmedddaaa';
GRANT ALL PRIVILEGES ON wordpress.* TO 'mait-aad'@'%';
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'Mmedddaaa';