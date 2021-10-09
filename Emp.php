#!/bin/bash
sudo su
yum install httpd -y
sudo -I
sudo systemctl start httpd
sudo yum install mysql -y
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
sudo chmod a+w /var/www/html
Echo "<html><body><h1>Employee page</h1></body></html><?php
  /* Connect to MySQL and select the database. */
 $connection=mysqli_connect("database-1.cnmnillb4pd8.us-east-1.rds.amazonaws.com","admin","Born2win");

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$sql123  = "CREATE DATABASE database123";
if ($connection->query($sql123) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $connection->error;
}
?>" > /var/www/html/EmployeePage.php 
