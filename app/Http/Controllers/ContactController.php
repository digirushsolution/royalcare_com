<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Newsletter;

class ContactController extends Controller
{
    public function contact(){

        $settings = setting::all()->keyBy('type'); 
        $metaDescription = $settings['description_contact']->value ?? '';
        $metatitle = $settings['title_contact']->value ?? '';
        $metakeyword = $settings['keyword_contact']->value ?? '';

        return view('frontend.contact',compact('metaDescription', 'metatitle' , 'metakeyword'));
    }

    public function submitcontactForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'message' => 'required|string',
        ]);
    
        // Concatenate the country code with the phone number
        $fullPhoneNumber = $request->phone;
    
        // Store the data in the database
        Contact::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone_number' => $fullPhoneNumber,
            'message' => $request->message,
        ]);
    
        // Return a JSON response with a success message
        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully!'
        ]);
    }
    

    public function contactadmin(){
        $contacts = Contact::all();
        return view('admin.enquiry.index',compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.enquiry.edit', compact('contact'));
    }

    // Update the contact
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::find($id);
        $contact->update($request->all());

        return redirect()->route('contact.admin')->with('success', 'Contact updated successfully.');
    }

    // Delete the contact
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contact.admin')->with('success', 'Contact deleted successfully.');
    }

    public function newsletteradmin(){
        $newsletters = Newsletter::all();
        return view('admin.newsletter.index',compact('newsletters'));
    }

    public function editnewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('admin.newsletter.edit', compact('newsletter'));
    }

    public function updatenewsletter(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email,' . $id,
        ]);

        $newsletter = Newsletter::findOrFail($id);
        $newsletter->update(['email' => $request->email]);

        return redirect()->route('newsletter.admin')->with('success', 'Email updated successfully.');
    }

    public function destroynewsletter($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();

        return redirect()->route('newsletter.admin')->with('success', 'Email deleted successfully.');
    }

}
