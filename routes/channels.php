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
use App\Models\Receiver;
Broadcast::channel('messages.{id}', function ($user, $id) {
    $res = Receiver::where('message_id', '=', $id)-get();
    return $res;
    foreach($res as $r){
        if( $user->id == $r->recipient_id){
            return true;
        }
    }
    return false;
});

// Broadcast::channel('messages', function ($user) {
//     return $user;
// });