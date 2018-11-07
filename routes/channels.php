<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('messages.{id}', function ($user, $id) {
//     return true;
// });

Broadcast::channel('messages.{id}', function ($user, $id) {
    return \App\Models\Receiver::where('recipient_id', '=', $user->id)->where('message_id', '=', $id)->exists();
});