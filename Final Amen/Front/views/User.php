<?php 
include 'dbconfig.php';
class User{
	private $mail;
    private $nom;
	private $role;
    public $conn;	

	public function __construct($mail,$nom,$conn)
	{
		$this->mail=$mail;
		$this->nom=$nom;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->mail;
	}
    function getnom()
	{
		return $this->nom;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$mail,$nom)
	{
		$req="select * from client where mail='$mail' && nom='$nom'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>