<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Certification;
use App\Models\InstagramContent;
use App\Models\ContactUs;
use App\Models\Application;
use App\Mail\ContactMaile;
use App\Mail\FoodMailer;
use App\Mail\SplytMailer;
use Session;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::limit(6)->get();
        $certification = Certification::all();
        $instagram = InstagramContent::all();
        $data = [
            'product' => $product,
            'certification' => $certification,
            'instagram' => $instagram
        ];

        return view('pages.home.index')->with($data);
    }
    public function aboutus()
    {
        $certification = Certification::all();
        $data = [
            'certification' => $certification
        ];

        return view('pages.about.index')->with($data);   
    }
    public function manufacturing()
    {
        $data = [
            
        ];

        return view('pages.manufacturing.index')->with($data);   
    }
    public function aseptic()
    {
        $aseptic = Application::where('application_category', 'Aseptic Packaging')->get();

        $data = [
            'aseptic' => $aseptic
        ];

        return view('pages.application.aseptic')->with($data);   
    }
    public function paper()
    {
        $paper = Application::where('application_category', 'Paper Packaging')->get();
        
        $data = [
            'paper' => $paper
        ];

        return view('pages.application.paper')->with($data);   
    }
    public function product()
    {
        $productSplyt = Product::where('product_category', 'Splyt-pak')->get();
        $productFood = Product::where('product_category', 'Food & Beverage')->get();
        $data = [
            'productSplyt' => $productSplyt,
            'productFood' => $productFood,
        ];

        return view('pages.product.index')->with($data);   
    }
    public function productJson(Request $request){
        $id = $request->id;
        $data = Product::where('product_id', $id)->first();
        return response()->json(['data' => $data]);
    }
    public function productFootmail(Request $request){
        $product_name = $request->product_name;
        $size = $request->size;
        $color = $request->color;
        $amount = $request->amount;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $company = $request->company;
        
        $mail = Mail::to($request->email)->send(new FoodMailer($product_name, $size, $color, $amount, $name, $email, $phone, $company));
        if($mail){
            return back()->with('success', 'success');
        } else {
            return back()->with('error', 'error');
        }
    }
    public function productSplytmail(Request $request){
        $product_name = $request->product_name;
        $size = $request->product_size;
        $amount = $request->amount;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $company = $request->company;

        $mail = Mail::to($request->email)->send(new SplytMailer($product_name, $size, $amount, $name, $email, $phone, $company));
        if($mail){
            return back()->with('success', 'success');
        } else {
            return back()->with('error', 'error');
        }
    }
    public function contact()
    {
        $data = [

        ];

        return view('pages.contact.index')->with($data);   
    }
    public function contact_store(Request $request)
    {
        $contact = ContactUs::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->telephone,
            'company' => $request->company,
            'position' => $request->position
        ]);

        $mail = Mail::to($request->email)->send(new ContactMaile($request->firstname, $request->lastname, $request->email, $request->telephone, $request->company, $request->position));
        if($mail){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Disimpan!',
                'data'    => $contact  
            ]);
        }
    }
    public function login(Request $request){
        if(Session::has('loginid')){
            return redirect('/account');
        }
        return view('pages.auth.login');
    }
}
