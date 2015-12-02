<?php

namespace App\Model;

use Nette;

class ProposalImprove
{
	/** @var Nette\Database\Context */
	private $database;


	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}


	public function getProposals($type)
	{
		$query = '
			SELECT p.*, a.name
			FROM proposal_improve p JOIN articles a ON p.article_id = a.id
			WHERE
				p.type = ?
			  	AND a.name NOT LIKE \'%Diskuse%\'
			  	AND a.name NOT LIKE \'%Kategorie:%\'
			  	AND a.name NOT LIKE \'%Wikipedie:%\'
			  	AND a.name NOT LIKE \'%Wikipedista:%\'
			ORDER BY a.name';
		return $this->database->query($query, $type)->fetchAll();
	}
}
