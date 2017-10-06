<?php
declare(strict_types=1);

namespace Exinit\BundesligaSimulator\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Daniel Ablass <d.ablass@exinit.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use Exinit\BundesligaSimulator\Domain\Repository\ClubRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class LeagueController extends ActionController
{
    protected $clubRepository;

    public function __construct(ClubRepository $clubRepository)
    {
        parent::__construct();
        $this->clubRepository = $clubRepository;
    }

    public function listAction()
    {
        $clubs = $this->clubRepository->findAll();
        $noobs = $this->clubRepository->findClubsWithoutFans();
        $this->view->assignMultiple([
            'clubs' => $clubs,
            'noobs' => $noobs
        ]);
    }

    public function showAction($clubID)
    {
        $singleClub = $this->clubRepository->findSingleClub($clubID);
        $this->view->assignMultiple([
            'club' => $singleClub,
        ]);
    }
}
