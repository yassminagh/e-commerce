<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use PDF;
use Mail;
use App\Mail\DemoMail;

use App\Models\Catagory;



class AdminController extends Controller
{
    public function product()
    {
        $catagory=catagory::all(

        );
        return view('admin.product',compact('catagory'));
    }

    public function uploadproduct(Request $request)
    {
        $data=new product;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->catagory=$request->catagory;

        $data->save();

        return redirect()->back()->with('message','Product added Successfully');
    }

    public function showproduct()
    {
        $data = product::all();

        return view('admin.showproduct',compact('data'));
    } 

    public function deleteproduct($id)
    {
        $data=product::find($id);

        $data->delete();

        return redirect()->back()->with('message','Product Deleted');
        ;
    }


    public function updateview($id)
    {
        $data=product::find($id);

        $catagory=catagory::all();

        return view('admin.updateview',compact('data','catagory'));
    }


    public function updateproduct(Request $request, $id)
    {

        $data=product::find($id);

        $image=$request->file;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage',$imagename);

        $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;
        $data->catagory=$request->catagory;
        
        

        $data->save();

        return redirect()->back()->with('message','Product updated Successfully');
 
    }


    public function showorder()
    {

        $order=order::all();

        return view('admin.showorder',compact('order'));
    }

    public function updatestatus($id)
    {
        $order=order::find($id);

        $order->atatus='delivered';

        $order->save();

        return redirect()->back();
    }

    public function view_catagory()
    {

        $data=catagory::all();

        return view('admin.catagory',compact('data'));
    }


    public function add_catagory(Request $request)
    {
        $data=new catagory;

        $data->catagory_name=$request->catagory;

        $data->save();

        return redirect()->back()->with('message','Catagory Added Successfully');

    }


    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message','Catagory Deleted Successfully');

    }

    public function print_pdf($id)
    {

        $order=order::find($id);

        $pdf=PDF::loadView('admin.pdf',compact('order'));

        return $pdf->download('order_details.pdf');
    }

    public function send_email()
    {
        $mailData = [
            'title' => 'Mail from STORE',
            'body' => 'your order delivered',
        ];
        Mail::to('zouhair1995a@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfully.');
    }
    

    public function export()
    {

    }
    public function import()
    {
        
    }
}

