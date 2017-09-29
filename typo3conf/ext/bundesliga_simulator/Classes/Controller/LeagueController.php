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
use Exinit\BundesligaSimulator\Domain\Repository\PlayerRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class LeagueController extends ActionController
{
    protected $clubRepository;
    protected $playerRepository;

    public function __construct(ClubRepository $clubRepository, PlayerRepository $playerRepository)
    {
        parent::__construct();
        $this->clubRepository = $clubRepository;
        $this->playerRepository = $playerRepository;
    }

    public function listAction()
    {
        $clubs = $this->clubRepository->findAll();
        $players = $this->playerRepository->findAll();
        $this->view->assignMultiple([
            'clubs' => $clubs,
            'players' => $players
        ]);
    }

}
