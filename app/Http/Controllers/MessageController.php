<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Messages = Message::all()->sortByDesc('id');
        $MSG=[];
        $count=0;
        foreach ($Messages as $key=>$message){
            $MSG[$key]['id']=$message->id;
            $MSG[$key]['row']=++$count;
            $MSG[$key]['sender_name']=$message->name;
            $MSG[$key]['sender_email']=$message->email;
            $MSG[$key]['message_subject']=$message->subject;
            $MSG[$key]['message_text']=$message->message;
        }
        return view('PageElements.Dashboard.Setting.Messages',compact('MSG'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($message)
    {
        $SelectedMSG=Message::find($message);
        return $SelectedMSG;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($message)
    {
        $SelectedMSG = Message::find($message);
        $SelectedMSG->delete();
    }
}
