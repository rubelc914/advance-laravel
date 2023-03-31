<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
//        $user->name = "Mr. " .$user->name;
//        $user->save();

        // $title = 'New User ' . $user->name ." Created successfully";
        // $description = "New User ".$user->name .' Created. created- ' .$user->created_at->diffForHumans();
        // Post::create([
        //     'title' => $title,
        //     'description' => $description,
        //     'category_id' => 1,
        //     'user_id' => $user->id

        // ]);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        // $title = "User " .$user->name . ' updated successfully';
        // $description = "User " .$user->name . ' updated. updated- '.$user->updated_at->diffForHumans();

        // Post::update([
        //     'title'=> $title,
        //     'description'=> $description,
        //     'category_id'=>1,
        //     'user_id'=> $user->id

        // ]);

    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
