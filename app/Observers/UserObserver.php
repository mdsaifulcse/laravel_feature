<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Post;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */

    public $afterCommit = true;

    public function created(User $user)
    {

        // $post=new Post();
        // $post->title='New Post by '.$user->name;
        // $post->description='New Post by'.$user->name.' at '.$user->created_at;
        // $post->user_id=$user->id;
        // $post->category_id=1;
        // $post->status=1;
        // $post->save();

        Post::create(
            [
                'title'=>'New Post by '.$user->name,
                'description'=>'New Post by'.$user->name.' at '.$user->created_at,
                'user_id'=>$user->id,
                'category_id'=>1,
                'status'=>1
            ]);


    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
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
