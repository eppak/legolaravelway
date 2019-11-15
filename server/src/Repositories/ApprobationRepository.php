<?php namespace Agronomist\Repositories;

use Agronomist\Models\Approbation;
use Agronomist\Models\User;
use Agronomist\Notifications\RequestApprobationNotification;
use Prettus\Repository\Eloquent\BaseRepository;

class ApprobationRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Approbation::class;
    }

    function requestApprobationTo($from, $to) {
        static::create([ 'user_id' => $from->id, 'approver_id' => $to->id ]);
    }

    function requestsOf(User $user) {
        return Approbation::where('user_id', $user->id);
    }
}
