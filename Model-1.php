<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model{
/*---------------------------------------------------------------------------
 *	Constructeur et Deconstructeur
 *---------------------------------------------------------------------------*/
	/*
	 * Je vais m'occuper de cette partie 
	 */
	function __construct() {
		parent::__construct();
		$this->load->database(); // Connecter la base donnée
	}
	function __destruct(){
		// deconnecter la base 
	}
/*---------------------------------------------------------------------------
 *	Table User
 *---------------------------------------------------------------------------*/
	public function verifUser($tab){ // return bool 
		
	}
	public function addUser($tab){ // return int 1 = true 0 false
		
	}
	public function affecteUserGroupe(){ // return int  
		
	}
/*---------------------------------------------------------------------------
 *	Table Commentaire
 *---------------------------------------------------------------------------*/
	public function addComment($tab){ // return int 1 = true 0 false
		
	}
	/*
	 * Extraire les commentaires mais a condition de recupérer 10dernier ajout avec un ordre décroissant
	 * return tableau des lignes de la table commentaire Chaque ligne de la table est stocké dans le tableau 
	 */
	public function extraireCommentaire(){ 
		
	}
/*---------------------------------------------------------------------------
 *	Table Groupe
 *---------------------------------------------------------------------------*/
	public function addGroupe(){
		
	}
	public function extraireGroupe(){
		
	}
/*---------------------------------------------------------------------------
 *	Table Photo
 *---------------------------------------------------------------------------*/
	public function addPhoto(){
		
	}
	public function updatePhoto($tab){
		
	}
	/*
	 * Extraire les photos mais a condition de recupérer 10dernier ajout avec un ordre décroissant
	 */
	public function extrairePhoto(){
		
	}
	/*
	 * Extraire les photos d'une person precis mais a condition de recupérer 5 dernier ajout avec un ordre décroissant
	 */
	public function extrairePhotoUser($user){
		
	}
	/*
	 *Affecter une photo à une catégorie
	 */
	public function affecterPhotoCat(){
		
	}
/*---------------------------------------------------------------------------
 *	Table Categorie
 *---------------------------------------------------------------------------*/
	public function extraireCategorie(){
		
	}
/*---------------------------------------------------------------------------
 *	Table Note 
 *---------------------------------------------------------------------------*/
	/*
	 * Calcule de la moyen de la note d'une image 
	 */
	public function calculMoyenNotePhoto(){
		
	}
	/*
	 * Ajouter une note d'une photo precis d'un user
	 */
	public function ajoutNotePhoto($tab){// tab = la note , iduser , idphoto
		
	}
}
?> 
 


	