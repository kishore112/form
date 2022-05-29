<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Auth;

class FormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
     $form = Form::all();
     return view('form.index', compact('form'));
     }
    public function create()
    {
        $form = new Form();
        return view('form.create');
    }
    public function store(Request $request)
    {
      $form = new Form();     
        $form->name = $request->input('name');
        $form->mobile = $request->input('mobile');
        $form->email = $request->input('email');
        $form->address = $request->input('address');
        $form->degree = $request->input('degree');
        $form->gender = $request->input('gender') == 'true' ? 'Male' : 'Female';
        $form->state = $request->input('state');
        $form->city = $request->input('city');
       $hobbies = implode(',',$request->input('hobbies'));
      
        $form->hobbies =$hobbies;
       
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/form'), $filename);
            $form->image = $request->file('image')->getClientOriginalName();
        }
        $form->save();
        
         return redirect()->route('form.index')->with('success','Form Created Successfully');

    }
    public function edit($id)
    {
        $form = Form::findorfail($id);
        return view('form.edit', [
            'form' => $form,
            'hobbies' => explode(',', $form->hobbies),
            'state'   =>['Tamil Nadu','Kerela','Gujarat','Delhi'],
            ]);
    }
   
    public function update(Request $request,$id)
    {
       // echo 1; exit;

            $form=Form::find($id);
        $form->name = $request->input('name');
        $form->mobile = $request->input('mobile');
        $form->email = $request->input('email');
        $form->address = $request->input('address');
        $form->degree = $request->input('degree');
        $form->gender = $request->input('gender') == 'true' ? 'Male' : 'Female';
        $form->state = $request->input('state');
        $form->city = $request->input('city');
         $hobby = $request->has('hobbies');
     
        $form->hobbies = $hobby;
       
 
        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/form'), $filename);
            $form->image = $request->file('image')->getClientOriginalName();
        }

        $form->update();
      
        return redirect()->route('form.index')->with('success','Form Updated Successfully');
    }
   
        public function destroy($id)
        {
          //  echo 1; exit;
           Form::find($id)->delete();
        return redirect()->route('form.index')
            ->with('success','Form deleted successfully');
         }
    }
