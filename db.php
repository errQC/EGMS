<?php
	class Database
	{
		private static $HOST = "127.0.0.1";
		private static $USERNAME = "root";
		private static $PASSWORD = "";
		private static $DATABASE = "mobileshop";
		private static $CONNECT;
		
		private static function Connect()
		{
			Database::$CONNECT = mysql_connect(Database::$HOST, Database::$USERNAME, Database::$PASSWORD);
			mysql_select_db(Database::$DATABASE, Database::$CONNECT);
			
			mysql_set_charset('utf8', Database::$CONNECT);
			mysql_query("SET NAMES 'UTF8'");
		}
		
		private static function Disconnect()
		{
			mysql_close(Database::$CONNECT);
		}
		
		public static function Get10NewProducts()
		{
			Database::Connect();
			
			$cmd = "SELECT * FROM SANPHAM ORDER BY NGAYNHAP DESC LIMIT 10";
			$result = mysql_query($cmd);
			
			Database::Disconnect();
			
			return $result;
		}
		
		public static function Get10BestSellingProducts()
		{
			Database::Connect();
			
			$cmd = "SELECT * FROM SANPHAM ORDER BY SOLUONGBAN DESC LIMIT 10";
			$result = mysql_query($cmd);
			
			Database::Disconnect();
			
			return $result;
		}
	}
?>