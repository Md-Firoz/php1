<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact=Contact::all();
        return view('index')->with('contacts', $contact);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'contact Addedd!');
    }

    public function show($id)
    {
        $contact=Contact::find($id);
        return view('show')->with('contact', $contact);
    }


    public function edit($id)
    {
        $contact=Contact::find($id);
        return view('edit')->with('contact', $contact);
    }

    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $input=$request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'contact Update!');
    }

    public function destory($id)
    {
        Contact::destory($id);
        return redirect('contact')->with('flash_message', 'contact deleted!');
    }
}