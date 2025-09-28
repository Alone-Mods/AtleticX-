### Installation <br>
### Installation <br>
STEP :1<br>

UPDATE SYSTEM<br>
```sudo apt update && sudo apt upgrade -y```

Step 2: Install Apache<br>
```
sudo apt install apache2 -y
sudo systemctl start apache2
sudo systemctl enable apache2
```
Step 3:INSTALL MYSQL<br>

```
sudo apt install mysql-server -y
sudo systemctl start mysql
sudo systemctl enable mysql
```

Step 4: Secure MySQL<br>

```sudo mysql_secure_installation```

Answer the prompts:

Set root password:``` yes```<br>
Remove anonymous users: ```yes```<br>
Disallow root login remotely: ```yes```<br>
Remove test database: ```yes```<br>
Reload privileges:``` yes```<br>
Step 5: Install PHP<br>

```sudo apt install php php-mysql php-mbstring php-gd php-xml php-curl libapache2-mod-php -y```

Step 6: Enable Apache Modules <br>
```
sudo a2enmod rewrite
sudo systemctl restart apache2
```

Step 7: Download AtleticX<br>
```
cd /var/www/html
sudo wget https://github.com/Alone-Mods/AtleticX/AtleticX.zip
sudo apt install unzip -y
sudo unzip AtleticX.zip -d atleticx
sudo rm AtleticX.zip
```

Step 8:Set permission<br>
```
sudo chown -R www-data:www-data /var/www/html/atleticx
sudo chmod -R 755 /var/www/html/atleticx
sudo chmod -R 775 /var/www/html/atleticx/uploads
```
<br>

Step 9: create database 

sudo mysql -u root -p

in MySQL prompt:

CREATE DATABASE atleticx;
CREATE USER 'atleticx_user'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON atleticx.* TO 'atleticx_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;

<br>

Step 10: Configure Database Connection;
```
sudo nano /var/www/html/atleticx/config/database.php
```
update credentials :
```
$host = 'localhost';
$db = 'atleticx';
$user = 'atleticx_user';
$pass = 'your_password';
```
Step 11: Run setup 
```
http://localhost/atleticx/setup.php
```

then delete setup 
```
sudo rm /var/www/html/atleticx/setup.php
```
