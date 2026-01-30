CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(32) UNIQUE,
  password VARCHAR(255),
  warns INT DEFAULT 0,
  banned TINYINT DEFAULT 0
);

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user VARCHAR(32),
  text TEXT,
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE bots (
  id INT AUTO_INCREMENT PRIMARY KEY,
  owner VARCHAR(32),
  name VARCHAR(32),
  command VARCHAR(32),
  reply TEXT,
  status ENUM('active','deleted') DEFAULT 'active'
);
