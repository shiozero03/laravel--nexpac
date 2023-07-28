<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Certification;
use App\Models\InstagramContent;
use App\Models\ContactUs;
use App\Models\Application;
use Session;

class AdminController extends Controller
{
    public function __construct(){
    }
    public function dashboard(){
        $product = Product::all();
        $application = Application::all();
        $certificate = Certification::all();
        $contact = ContactUs::all();
        $data = [
            'product' => $product,
            'application' => $application,
            'certificate' => $certificate,
            'contact' => $contact
        ];
        return view('pages.admin.dashboard.index')->with($data);
    }
}
