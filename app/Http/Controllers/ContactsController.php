<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Receiver;
use App\Events\NewMessage;
use Illuminate\Http\Request;
use App\Models\Message_Thread;
use Illuminate\Support\Facades\Auth;


class ContactsController extends Controller
{
    public function index()
    {
        $students = User::where('userType', '=', 'Student')->get();
        $teachers = User::where('userType', '=', 'Teacher')->get();
        $alumni = User::where('userType', '=', 'Alumnus')->get();
        $admins = User::where('userType', '=', 'Admins')->get();

        return view('user.admin.chat')
        ->with('students', $students)
        ->with('teachers', $teachers)
        ->with('alumni', $alumni)
        ->with('admins', $admins);
    }
    public function store(Request $request)
    {
        $request = $request->all();
        $message['title'] = $request['title'];
        $message['sender'] = $request['sender'];
        Message::create($message);
        $message_id = Message::select('id')->orderBy('created_at', 'desc')->first();
        $r['message_id'] = $message_id['id'];
        $r['recipient_id'] = Auth::user()->id;
        Receiver::create($r);
        if(isset($request['rID1'])){
            $r['message_id'] = $message_id['id'];
            $r['recipient_id'] = $request['rID1'];
            Receiver::create($r);
        }
        if(isset($request['rID2'])){
            $r['message_id'] = $message_id['id'];
            $r['recipient_id'] = $request['rID2'];
            Receiver::create($r);
        }
        if(isset($request['rID3'])){
            $r['message_id'] = $message_id['id'];
            $r['recipient_id'] = $request['rID3'];
            Receiver::create($r);
        }
        if(isset($request['rID4'])){
            $r['message_id'] = $message_id['id'];
            $r['recipient_id'] = $request['rID4'];
            Receiver::create($r);
        }
        return redirect()->back()->with('success', 'Created New Chat');
    }
    public function update(Request $request)
    {
        return $request;
    }
    public function get()
    {
        $message = Receiver::where('recipient_id', '=', Auth::user()->id)->get();
        for($i = 0; $i < count($message); $i++)
            $contacts[] = Message::where('id', '=', $message[$i]->message_id)->first();

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        $unreadIds = Receiver::select(\DB::raw('`message_id`, count(`message_id`) as messages_count'))
            ->where('recipient_id', Auth::user()->id)
            ->where('is_seen', false)
            ->groupBy('message_id')
            ->get();

        $collection = collect($contacts);

        // add an unread key to each contact with the count of unread messages
        $contacts = $collection->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('message_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });

        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Receiver::where('message_id', $id)->where('recipient_id', Auth::user()->id)->update(['is_seen' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message_Thread::where(function($q) use ($id) {
            $q->where('message_id', $id);
        })->get();
        for($i = 0; $i < count($messages); $i++){
            $name = User::select('firstName','middleName', 'lastName')->where('id', '=', $messages[$i]['from_id'])->first();
            $messages[$i]['name'] = $name->full_name;
            $messages[$i]['myID'] =  Auth::user()->id;
        }
        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = Message_Thread::create([
            'from_id' => Auth::user()->id,
            'message_id' => $request->contact_id,
            'message' => $request->text
        ]);

        broadcast(new NewMessage($message));
        
        $name = User::select('firstName','middleName', 'lastName')->where('id', '=', Auth::user()->id)->first();
        $message['name'] = $name->full_name;
        $message['myID'] = Auth::user()->id;

        return response()->json($message);
    }
}
