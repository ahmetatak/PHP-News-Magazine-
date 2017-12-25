News & Magazine script helps you publish news on the website.
it is a basic example script and it will grow up with your supports.

# # Setup
1-)Download the script and unzip it after the proccess upload the project to the web-server locate the file to your localhost root directory.

2-)Create a Mysql database and then import databaseSQL.sql file (I hope you will not get any problem :) ) 

3-)open Database.php it is located at ../inc/Database.php

4-)write your Mysql Connection information and save it

```
class Database{

    private $host ="127.0.0.1"; #hostname

    private $datebase ="vukuat"; #your database name

    private $user ="root"; #user

    private $password =""; #password
 ```
5-) open localhost or yourwebsite and type the address

# # # Admin panel
| enter address: | http://yourprojectaddress.com/cpanel |
| ------ | ------ |
| UserEmail | info@aljazarisoft.com |
| userPassword | admin |
 
# # ISSUES

1-) if you have any problem when you import the databaseSQL.sql  you may delete this comman from the file.
```
/*!40101 SET NAMES utf8mb4 */
 ```

