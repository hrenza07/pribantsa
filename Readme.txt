Readme - http://phpdao.com/

(Updated) Robbie Grigg (updated for MySQLi and PHP5) in the generated files. 

This is a version updated from what seems to be a no longer supported website phpdao.com.

IMPROVEMENTS
- Now works with MySQLi Driver
- Now works with Views as well - (assumes the first column is the primary key)
- Now allows NULL values during insert or update commands - To insert NULL do not set the value or set it to NULL. Example:
	require_once('include_dao.php');
	//Get the player DAO (Database Access Object)
	$playerDAO = DAOFactory::getPlayerDAO();
	//INSERT A PLAYER - WITH A null VALUE
	$player = new Player;
	$player->playerID = 5;
	$player->playerName = null;
	$player->playerPassword = 'Test33';
	$playerDAO->insert($player);


USAGE
To use the tool follow these steps:
- Unzip files and copy them into a folder under you web server (using XAMPP it might be c:\XAMPP\htdocs for example).
- You will then need to set the connection properties for the server address, username, password and database name:
 [C:\XAMPP\htdocs]..\templates\class\dao\sql\ConnectionProperty.class.php
- Then set:
	private static $host = 'localhost'; 
	private static $user = 'yourusername';
	private static $password = 'yourpassword';
	private static $database = 'databasename';
- Save this.
- Open the 'generate.php' in your web-browser ensuring your web-server and mysql database-server are both running.
- If successful look under the 'generated' folder for the output
 [C:\XAMPP\htdocs]..\generated\...


TODO
- For views it could smartly work out whether the view is updateable and then generate (or not) the insert/update commands.
- For views it might be able to inspect underlying tables to work out the primary key.

TEST DATABASE AND PHP FILE
There is a test.php to show how to use the generated output (place this under your 'generated' folder where the 'include_dao.php' sits.
This test.php assumes there is a PLAYER and a GAME table and you can load the database using test.sql (this file has the export of the database).

The files include:
- cardchallenge.php (shows how to use the DAO in your own php)
- cardchallenge.sql (the database script you can install to create a test database called cardchallenge that cardchallenge.php uses)


