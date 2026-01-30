<?php

namespace App\Actions\Leaderboard;

use App\Actions\Leaderboard\GetAssistsLeaderboard;
use App\Actions\Leaderboard\GetGoalsLeaderboard;
use App\Actions\Leaderboard\GetGoalInvolvementsLeaderboard;
use App\Actions\Leaderboard\GetGoalDifferenceLeaderboard;
use App\Actions\Leaderboard\GetPlayerOfMatchLeaderboard;
use App\Actions\Leaderboard\GetTeamGoalsForLeaderboard;

class GetLeaderboardStat
{
    /**
     * Dispatches to the correct leaderboard action for the given stat key.
     */
    public function __invoke($stat, $seasonId = 'all', $limit = null)
    {
        // Keep this as a simple router so each stat query stays isolated.
        switch ($stat) {
            case 'goals':
                return (new GetGoalsLeaderboard())($seasonId, $limit);
            case 'assists':
                return (new GetAssistsLeaderboard())($seasonId, $limit);
            case 'goal_involvements':
                return (new GetGoalInvolvementsLeaderboard())($seasonId, $limit);
            case 'goal_difference':
                return (new GetGoalDifferenceLeaderboard())($seasonId, $limit);
            case 'player_of_match':
                return (new GetPlayerOfMatchLeaderboard())($seasonId, $limit);
            case 'team_goals_for':
                return (new GetTeamGoalsForLeaderboard())($seasonId, $limit);
            case 'matches_played':
                return (new GetMatchesPlayedLeaderboard())($seasonId, $limit);
            default:
                throw new \InvalidArgumentException("Unknown leaderboard stat: $stat");
        }
    }
}
