<?php namespace Agronomist\Services;

use Log;
use Illuminate\Support\Collection;

use Agronomist\Models\User;
use Agronomist\Models\Seed;
use Agronomist\Models\Approbation;
use Agronomist\Services\Bus\RequestSeed;
use Agronomist\Services\Bus\Handlers\RequestSeedHandler;
use Agronomist\Services\Bus\Validators\RequestSeedValidator;

use Agronomist\Services\Bus\RequestApprobation;
use Agronomist\Services\Bus\Handlers\RequestApprobationHandler;

use Agronomist\Services\Bus\ApproveUser;
use Agronomist\Services\Bus\Handlers\ApproveUserHandler;

/**
 * Class UserService
 * @package Agronomist\Services
 */
class UserService extends BaseService
{
    /**
     * @var array
     */
    private $handlers = [
        RequestSeed::class => RequestSeedHandler::class,
        RequestApprobation::class => RequestApprobationHandler::class,
        ApproveUser::class => ApproveUserHandler::class
    ];

    /**
     * UserService constructor.
     */
    public function __construct()
    {
        $this->addHandlers($this->handlers);
    }

    /**
     * @param User $user
     * @param Seed $seed
     * @param integer $qty
     * @return mixed
     */
    public function requestSeed(User $user, Seed $seed, $qty)
    {
        Log::info("(requestSeed) User {$user->email} requested {$qty} of {$seed->name}");
        return $this->dispatch(RequestSeed::class, ['user' => $user, 'seed' => $seed, 'qty' => $qty],
            [RequestSeedValidator::class]);
    }

    /**
     * @param User $user
     * @param Collection $users
     * @return mixed
     */
    public function requestApprobation(User $user, $users)
    {
        Log::info("(requestApprobation) User {$user->email} requested approbation");
        return $this->dispatch(RequestApprobation::class, [ 'user' => $user, 'users' => $users ]);
    }

    /**
     * @param Approbation $approbation
     * @return mixed
     */
    public function approveUser(Approbation $approbation)
    {
        Log::info("(approveUser) User {$approbation->user()->first()->email} approved {$approbation->approver()->first()->email}}");
        return $this->dispatch(ApproveUser::class, [ 'approbation' => $approbation]);
    }
}
