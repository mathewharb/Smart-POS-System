Smart-POS-System is a Multi-Purpose Point of Sale software built using Laravel framework.
The software is crafted for small, medium and large businessess; packed with features like Point Of Sale, Invoicing, Quotations, Purchase Orders, Inventory Management, Customer Management,
Supplier management, Accounts, Data & Reports, Employee Management with distinct user roles.
Its intuitive UI makes it easy to keep an eye on your stock and incomes and monitor your cashier’s activities along with the cash-in and cash-out operations.
 
                      ## DEPLOYMENT ##

REQUIREMENTS:
-You need to have php version 7.4 and above running in your server
-You need to install composer to be able to update the project dependencies
-You will also need to create a Virtual Host if you are deploying the software on your local machine.
NOTE: You do not need to setup a virtual host if you are deploying it on an online web server.


STEP 1    PREPARE THE PROJECT
1. Download or clone the repo
2. Download and install composer
3. Open your command prompt editor and navigate to the project's root directory
4. run this command to update the dependencies "composer update" 

STEP 2    CREATE A VIRTUAL HOST(I you are deploying the software on your local machine)
          ##  TO SETUP A VIRTUAL HOST, FOLLOW THESE STEPS BELOW:  ##

5. Add a Windows host
            To Add a Windows Host, follow these steps:
          - Open the file named "hosts" located in "C:\Windows\System32\Drivers\etc"
          - Then add the following two lines to the "hosts" file:

		               127.0.0.1	smartpos.local
		               ::1	smartpos.local

(where "smartpos.local" is the name of your Virtual Host: it can be given any name)

6. Create a Virtual Host and make sure it points to your project directory
        To Add a Virtual Host, follow these steps:

         IF YOU ARE USING WAMP SERVER:
       - Open the file named "httpd-vhosts.conf" located in c:/wamp64/bin/apache/apache2.4.37/conf/extra
       - add the following lines at the end of "#" 
                        
                        <VirtualHost *:80>
	                        ServerName smartpos.local
	                        DocumentRoot "c:/wamp64/www/smartpos"
	                       <Directory  "c:/wamp64/www/smartpos/">
		                       Options +Indexes +Includes +FollowSymLinks +MultiViews
		                       AllowOverride All
		                       Require local
	                      </Directory>
                       </VirtualHost>
                       #

              (NOTE: make sure it ends with "#" as shown above)

("ServerName smartpos.local" is the name of your virtual host, "c:/wamp64/www/smartpos" and "c:/wamp64/www/smartpos/" points to the absolute path of the project folder)

           IF YOU ARE USING XAMPP:
             - Open the file named "httpd-vhosts.conf" located in C:\xampp\apache\conf\extra
             - add the following lines at the end of "#" 

						 ##<VirtualHost *:80>

						     ##DocumentRoot "c:/xampp/htdocs/smartpos"
						     ##ServerName smartpos.local
						     ##ServerAlias *.smartpos.local
						    

						 ##</VirtualHost>
						#

                 (NOTE: make sure it ends with "#" as shown above)

7. Save the files and restart your server -  make sure you restart your server after adding virtual host


STEP 3    DATABASE SETUP

8. Open phpmyadmin and create your database

9. Import the "SQL" file into your database

10. Open the file named ".env" located at the root of your project folder, and edit the following lines:

NOTE: if you can't find the ".env" file, just rename the ".env.example" file to ".env"

				DB_CONNECTION=mysql
				DB_HOST=127.0.0.1
				DB_PORT=3306
				DB_DATABASE=smartposdb
				DB_USERNAME=root
				DB_PASSWORD=pass123

 -Replace "smartposdb"  with the name of your database
 
 -Replace "root"  with your Mysql server user name
 
 -Replace  "pass123"  with with your Mysql server password
 

STEP 4      RUN THE APPLICATION

11.  Open your web browser and type the name of your virtual host to run the application:

                E.g. "smartpos.local"

12. Use the following credentials to login:

				Email Address:  admin@admin.com
				Password:       password




Do Not Hesitate To Contact Me Via Email or Whatsapp, if You have any Question or Suggestions regarding the Software.

EMail:     harbmathew@yahoo.com

WhatsApp:  +2207425159

Please Feel Free To Buy Me  Coffee If You Find  This software Useful to your Cause.


                            FOR DEVELOPERS
			    
-The "Models" are located in the "app" folder

-The "Controllers" are in the "app/Http/Controllers" directory

-The "Views" are in the "resources/views" directory

-The "migrations" are in the "database/migrations" folder

-To migrate your database tables, open your command line editor and navigate to the root of the project directory

-Then run this command "php artisan migrate" to migrate the database tables

-Finally run this command to seed the database tables "php artisan db:seed"		

