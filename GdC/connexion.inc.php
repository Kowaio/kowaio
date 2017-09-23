<?php
error_reporting(E_ALL);

Class Connexion
{
	private static $connexion	= null;
	private static $base		= null;
	private static $debug		= true;
	
	function __construct()
	{
		self::msg("Construction Connexion...");
		
		if (! ($tmp = mysql_connect("localhost", "root", "")))
			throw new Exception("connexion Impossible : ".mysql_error(Connexion::$base));
		
		Connexion::$base = &$tmp;
		
		if (!mysql_select_db("gdc_bd", Connexion::$base))
			throw new Exception("Selection de la base impossible : ".mysql_error(Connexion::$base));
	}
	
	public function __destruct()
	{
		self::msg("Destruction Connexion...");
		
		if (!is_null(Connexion::$base))
		{
			self::msg("Déconnexion...");
			mysql_close(Connexion::$base);
			Connexion::$connexion 	= null;
			Connexion::$base		= null;
		}
	}
	
	public static function requete($req)
	{
		self::msg("Requete : $req");
		
		if (is_null(Connexion::$connexion))
			Connexion::$connexion = new Connexion();

		$res = mysql_query($req, Connexion::$base);
		if (!$res)
			throw new Exception("Erreur pour la requete <i>$req</i> : <br/>".mysql_error(Connexion::$base));
			
		return $res;
	}
	
	public function __clone()
	{
		throw new Exception("Clonage de __CLASS__ interdit !");
	}
	
	static function msg($m)
	{
		if (self::$debug) echo "<!--$m -->\n";
	}
	
	static function debug_on()
	{
		self::$debug = true;
	}

	static function debug_off()
	{
		self::$debug = false;
	}
};
?>