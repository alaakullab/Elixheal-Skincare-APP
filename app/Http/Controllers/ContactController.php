<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactResource;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContactResource::collection(contact::latest()->get());
    }

    public function indexView(Request $request)
    {        $items = contact::latest();

        if ($request->filled('search'))
            $items->where('name', 'like', "$request->search");
        $items = $items->get();
        return view('admin.contact.home')->with(['items'=>$items]);
    }
    public function editView($local,$id)
    {
        $item = contact::where('id',$id)->first();
        return view('admin.contact.edit')->with(['item'=>$item]);
    }
    public function createView()
    {
        return view('admin.contact.create');
    }
    public function storeView(Request $request)
{
    $contact = new contact;
    $contact->full_name = $request->full_name;
    $contact->email_contacts = $request->email_contacts;
    $contact->message = $request->message;
    $contact->language_id = getLangId();
    $contact->save();
    return back();
}
    public function updateView(Request $request,$local,$id  )
    {
        $contact = contact::find($id);
        $contact->update(
            [
                'full_name' => $request->full_name,
                'email_contacts' => $request->email_contacts,
                'message' => $request->message,
            ]
        );
        return back();
    }
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
        $contact = new contact;
        $contact->full_name = $request->full_name;
        $contact->email_contacts = $request->email_contacts;
        $contact->message = $request->message;
        $contact->language_id = $request->language_id;
        $contact->save();
        return response('Created', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update(
            [
                'full_name' => $request->full_name,
                'email_contacts' => $request->email_contacts,
                'message' => $request->message,
            ]
            );

            return response('Updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response(null, 204);
    }
}
