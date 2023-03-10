<?php

namespace App\Policies;

use App\Models\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Task $task
     * @return bool
     */
    public function destroy(User $user, Task $task){
        return $user->id === $task->user_id;
    }
}
