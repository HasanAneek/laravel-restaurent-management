<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        $data = User::all();
        return view('admin.users',compact('data'));
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu(){
        $data = Food::all();
        return view('admin.food-menu',compact('data'));
    }
    public function upload(Request $request){
        $data = new Food();

        $image = $request->image;
        $imageName = time() .'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imageName);
        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function deletemenu($id){
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editmenu($id){
        $data = Food::find($id);
        return view('admin.editmenu',compact('data'));
    }

    public function reservation(Request $request){
        $data = new Reservation();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();

        return redirect()->back();
    }

    public function viewreservation(){
        $data = Reservation::all();
        return view('admin.admin-reservation',compact('data'));
    }

    public function viewchef(){
        return view('admin.admin-chef');
    }

    public function uploadchef(Request $request){

        $data = new Chef();
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imageName);
            $data->image = $imageName;

            $data->name = $request->name;
            $data->speciality = $request->speciality;
            $data->save();

            return redirect()->back();
    }

}
