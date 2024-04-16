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

    public function confirm()
    {
        return view("confirm");
    }

    public function thanks()
    {
        return view("thanks");
    }
}
