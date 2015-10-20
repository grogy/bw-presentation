<?php

namespace App\Presenters;

use App\Model\ProposalImprove;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
	/**
	 * @var ProposalImprove
	 */
	private $proposalImprove;


	public function __construct(ProposalImprove $proposalImprove)
	{
		$this->proposalImprove = $proposalImprove;
	}


	public function renderCsfd()
	{
		$this->template->proposals = $this->proposalImprove->getProposals(1);
	}


	public function renderInfoBoxes()
	{
		$this->template->proposals = $this->proposalImprove->getProposals(2);
	}
}
