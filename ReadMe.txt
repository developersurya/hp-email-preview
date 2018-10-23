******************************************
Follow instruction for smooth flow of apps
******************************************

1.Go to classes folder and open Config.php . Add your project or app folder name(i.e APP_NAME = 'hp-email-folder'). Chnage it if you want to change the name of folder. You need to add you site or app url as APP_URL = 'http://localhost/'. 

2.Database configuration can be done in core folder init.php
sample
-------------------
'mysql' =>array(
        'host'=> 'localhost', 
        'username'=> 'root', 
        'password'=> 'root',
        'db'=> 'customdb',
    ),
-------------------

2.We do not have register functionality. So register user from database in users table. Please use username with password with username+password .(For example username = tom and you want to add password jerry, then use type "tomjerry" in password field. In app login your username will be "tom" and password will be "jerry".)

3. Use default username ="admin" and password = "password";
