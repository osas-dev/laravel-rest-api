<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function add_contacts() {
        return view('pages.create');
    }
    public function show_contacts() {
        $contact=contact::paginate(5);

        return view('dashboard', compact('contact'));

    }
    public function view_contact($id) {
        $contact=contact::find($id);

        return view('pages.view', compact('contact'));

    }
    public function create_contact(Request $request) {
        $contact = new contact;

        $contact->firstName=$request->firstName;
        $contact->lastName=$request->lastName;
        $contact->email=$request->email;
        $contact->phone=$request->phone;

        $image=$request->image;

        $image_name=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('contact', $image_name);

        $contact->image=$image_name;

        $contact->save();

        Alert::success('Contact Created Successfully');

        return redirect()->back();

    }

    public function delete_contact($id)
    {
        $contact=contact::find($id);

        $contact->delete();

        Alert::success('Contact Deleted Successfully');

        return redirect()->back();
    }

    public function edit_contact($id)
    {
        $contact=contact::find($id);

        return view('pages.edit', compact('contact'));
    }

    public function update_contact(Request $request, $id)
    {
        $contact=contact::find($id);

        $contact->firstName=$request->firstName;

        $contact->lastName=$request->lastName;

        $contact->phone=$request->phone;

        $contact->email=$request->email;

        $contact->save();

        Alert::success('Updated', 'Contact Updated successfully');

        return redirect()->back();


    }
}
