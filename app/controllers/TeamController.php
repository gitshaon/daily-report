<?php

class TeamController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    public function getTeam(Team $team)
    {
            $data = array();
            $data['team'] = $team;
            $data['error'] = null;
            return View::make('team.dashboard')->with($data);
    }

}