<?php

namespace App\Http\Controllers;

use DB;
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
        return view('user.admin.chat');
    }
    public function user()
    {
        return view('user.communicate');
    }
    public function liveSearch(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('users')
                ->where('idnumber', 'like', '%'.$query.'%')
                ->orWhere('firstName', 'like', '%'.$query.'%')
                ->orWhere('middleName', 'like', '%'.$query.'%')
                ->orWhere('lastName', 'like', '%'.$query.'%')
                ->orWhere('userType', 'like', '%'.$query.'%')
                ->orderBy('id', 'desc')
                ->get();
            }
            else{
                $data = DB::table('users')
                ->orderBy('id', 'desc')
                ->get();
            }
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row){
                    $output .= "
                    <tr>
                        <td>$row->idnumber</td>
                        <td>$row->firstName $row->middleName $row->lastName</td>
                        <td>$row->userType</td>
                        <td><center>
                        <button type='submit' class='btn btn-xs' name='recipient_id' value='$row->id' data-toggle='tooltip' data-original-title='Add'>   
                            <i class='ti-check'></i>                              
                        </button>
                        </center></td>
                    </tr>
                    ";
                }
            }
            else{
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
    public function add(Request $request)
    {
        // $is_duplicate = Receiver::where('message_id', '=', $request->message_id)->where('recipient_id', '=', $request->recipient_id)->first();
        // if($is_duplicate == ''){
            Receiver::create($request->all());
            return redirect()->back()->with('success', 'Added Recipient: Successfull!');
        // }
        // else{
        //     return redirect()->back()->with('warning', 'Recipient already in this Chat...');
        // }       
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

        return redirect()->back()->with('success', 'Created New Chat');
    }
    // public function show(Request $request)
    // {
    //     $recipients = Receiver::where('message_id', '=', $request->message_id)->get();
    //     return view('user.admin.chat')->with('recipients', $recipients);
    // }
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
        // $unreadIds = Receiver::select(\DB::raw('`message_id`, count(`message_id`) as messages_count'))
        //     ->where('recipient_id', Auth::user()->id)
        //     ->where('is_seen', false)
        //     ->groupBy('message_id')
        //     ->get();

        // $collection = collect($contacts);

        // add an unread key and other receivers array
        // $contacts = $collection->map(function($contact) use ($unreadIds) {

        //     $contact->recipients = Receiver::select('recipient_id')->where('message_id', '=', $contact->id)->get();

        //     $contactUnread = $unreadIds->where('message_id', $contact->id)->first();

        //     $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

        //     return $contact;
        // });
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

        broadcast(new NewMessage($message))->toOthers();

        $name = User::select('firstName','middleName', 'lastName')->where('id', '=', Auth::user()->id)->first();
        $message['name'] = $name->full_name;
        $message['myID'] = Auth::user()->id;

        return response()->json($message);
    }
}
