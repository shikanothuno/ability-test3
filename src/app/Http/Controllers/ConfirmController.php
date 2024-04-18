<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("index",compact("categories"));
    }

    public function admin()
    {
        $contacts = Contact::paginate(7);
        $categories = Category::all();

        return view("admin",compact("contacts","categories"));
    }

    public function confirm(Request $request)
    {
        $categories = Category::all();
        $data =[
            "name" => $request->first_name . $request->last_name,
            "gender" => $request->gender,
            "email" => $request->email,
            "tell" => $request->tel_up . $request->tel_middle . $request->tel_down,
            "address" => $request->address,
            "building" => $request->building,
            "category_id" => $request->category_id,
            "content" => $request->content,
        ];
        return view("confirm",compact("data","categories"));
    }

    public function thanks()
    {
        return view("thanks");
    }
}
