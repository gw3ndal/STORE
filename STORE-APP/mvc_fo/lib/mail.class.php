<?php

class phpMail{


	private $_nom_expediteur; // NOM VISIBLE de l'expéditeur

	private $_mail_expediteur; //Mail de l'expéditeur
	private $_mail_replyto; //Mail utilisé lors de la réponse
	private $_mails_destinataires; //LISTE des mails des destinataires (séparés par;)
	private $_mails_bcc; // LISTE des mails des bcc (séparés par;)

	private $_objet; // Objet du mail
	private $_texte; // Message en texte BRUT
	private $_html; // Message formaté en HTML
	private $_message;
	private $_fichiers; //LISTE des pièces jointes (séparés par;)

	private $_frontiere; // Frontière de séparation des contenus
	private $_headers; // HEADER de mail

	// CONSTRUCTEUR
	public function __construct ($mail_expediteur, $nom_expediteur, $mail_replyto)
	{
		//TEST des PARAMETRES
			//self signifie la classe en cours
		if(!self:: _validateEmail($mail_expediteur))
		{
			throw new Exception("Mail Expediteur INVALIDE",1);
		}
		if(!self:: _validateEmail($mail_replyto))
		{
			throw new Exception("Mail replyto INVALIDE",2);
		}

		//INITIALISER LES PARAMETRES
		$this->_nom_expediteur=$nom_expediteur;

		$this->_mail_expediteur=$mail_expediteur;
		$this->_mail_replyto=$mail_replyto;
		$this->_mails_destinataires=""; 
		$this->_mails_bcc=""; 

		$this->_objet="";
		$this->_texte=""; 
		$this->_html=""; 
		$this->_fichiers=""; 
		$this->_message="";

		$this->_frontiere=md5(uniqid(mt_rand())); // valeur determinée aléatoirement 
		$this->_headers="";
	}

	// VALIDATION EMAIL
	public static function _validateEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			return false;
		}else{
			return true;
		}
	}

	public function add_destinataire($mail)
	{
		if (!self::_validateEmail($mail))
		{
			throw new Exception("Mail Destinataire INVALIDE", 3);
		}
		if ($this->_mails_destinataires =='')
		{
			$this->_mails_destinataires = $mail;
		}else{
			$this->_mails_destinataires .=', '.$mail;
		}
	}

	public function add_bcc($mail)
	{
		if (!self::_validateEmail($mail))
		{
			throw new Exception("Mail bcc INVALIDE", 4);
		}
		if ($this->_mails_bcc =='')
		{
			$this->_mails_bcc = $mail;
		}else{
			$this->_mails_bcc .=', '.$mail;
		}
	}

	public function add_pj($fichier)
	{
		if (!file_exists($fichier))
		{
			throw new Exception("Fichier INTROUVABLE", 5);
		}
		if ($this->_fichiers =='')
		{
			$this->_fichiers = $fichier;
		}else{
			$this->_fichiers .=','.$fichier;
		}
	}

	public function contenu($objet, $texte, $html)
	{		
		$this->_objet = $objet;
		$this->_texte = $texte;
		$this->_html = $html;		
	}
	public function envoyer ()
	{
		$this->_headers = 'From: "'.$this->_nom_expediteur.'"<'.$this->_mail_expediteur.'>'."\n";
		$this->_headers .='Return-Path :<'.$this->_mail_replyto.'>'."\n";
		$this->_headers .= 'MIME-Version: 1.0'."\n";

		if ($this->_mails_bcc !='')
		{
			$this->_headers .= "Bcc: ".$this->_mails_bcc. "\n";
		}
		$this->_headers .= 'Content-Type: multipart/mixed; boundary="'.$this->_frontiere.'"';

		// partie texte BRUT
		if($this->_texte !="")
		{
			$this->_message .= '--'.$this->_frontiere."\n";
			$this->_message .='Content-Type: text/plain; charset="utf-8"'."\n";
			$this->_message .='Content-Transfer-Encoding: 8bit'."\n\n";
			$this->_message .= $this->_texte."\n\n";
		}

		// partie texte HTML
		if($this->_html !="")
		{
			$this->_message .= '--'.$this->_frontiere."\n";
			$this->_message .='Content-Type: text/html; charset="utf-8"'."\n";
			$this->_message .='Content-Transfer-Encoding: 8bit'."\n\n";
			$this->_message .= $this->_html."\n\n";
		}

		// pièces-jointes
		if ($this->_fichiers != "")
		{
			var_dump($this->_fichiers);
			$tab_fichiers = explode (",", $this->_fichiers);		
			var_dump($tab_fichiers);
			$nb_fichiers = count ($tab_fichiers);
			
			$extensions = array(".jpg", ".jpeg", ".gif", ".png", ".pdf", ".doc", ".docx");

			for ($i=0; $i < $nb_fichiers; $i++)
			{
				$mime= mime_content_type($tab_fichiers[$i]);
				$point=strrpos($tab_fichiers[$i], ".");
				$ext=substr($tab_fichiers[$i], $point);
				var_dump($ext);
				if($mime && in_array($ext, $extensions)){
					$this->_message .= "--" . $this->_frontiere ."\n";
					$this->_message .= "Content-Type: ' . mime_content_type($tab_fichiers[$i]) . '; name=" . $tab_fichiers[$i] . "\n";
					$this->_message .= "Content-Transfer-Encoding: base64\n";
					$this->_message .= "Content-Disposition:attachement; filename=" . $tab_fichiers[$i] . "\n\n";
					$this->_message .= chunk_split(base64_encode(file_get_contents($tab_fichiers[$i]))) . "\n\n";
				}
			}
      	}
		if (!mail($this->_mails_destinataires, $this->_objet, $this->_message, $this->_headers))
		{
			throw new Exception("Echec de l'envoi",6);
		}
	}
}
