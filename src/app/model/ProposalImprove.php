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
			WHERE p.type = ?
			ORDER BY a.name';
		return $this->database->query($query, $type)->fetchAll();
	}
}
