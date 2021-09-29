<?php

namespace App\Http\Controllers;

use App\Models\DTS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\Testimonials;
use App\Models\BookingList;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\PDF;
// use PDF;

class DTSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = DB::table('hotels')->get();
        $testimonials = DB::table('testimonials')->get();

        return view('pages.homepage', compact('hotels', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DTS  $dTS
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $hotel = Hotel::where('id', $id)->first();
        return view('pages.hotel-info', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTS  $dTS
     * @return \Illuminate\Http\Response
     */
    public function edit(DTS $dTS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTS  $dTS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTS $dTS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTS  $dTS
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTS $dTS)
    {
        //
    }

    public function profile($id){
        $profile = User::where('id',$id)->first();
        return view('pages.profile', compact('profile'));
    }

    public function admin_homepage(){

        $users = DB::table('users')->get();
        $hotels = DB::table('hotels')->get();
        $testimonials = DB::table('testimonials')->get();

        return view('pages.admin-page', compact('hotels','users','testimonials')); 
    }

    // public function print_report(){

    //     $users = DB::table('users')->get();
    //     $hotels = DB::table('hotels')->get();
    //     $testimonials = DB::table('testimonials')->get();

    //     // return view('pages.admin-page', compact('hotels','users','testimonials')); 

    //     $pdf = PDF::loadview('pages.admin-page',['users'=>$users,'hotels'=>$hotels,'testimonials'=>$testimonials]);
    // 	return $pdf->download('laporan-pegawai-pdf');
    // }

    public function show_hotel($id){
        $hotel = Hotel::where('id', $id)->first();
        return view('pages.hotel-edit', compact('hotel'));
    }

    public function edit_hotel($id, Request $request){

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'images' => ['required'],            
            'rating' => ['required', 'numeric'],
            'address' => ['required'],
            'coordinate' => ['required'],
            'facilities' => ['required'],
            'rooms' => ['required', 'numeric'],
            'category' => ['required'],            
        ]);

        $user_id = $request->id;

        $file = $request->file('images');     
        $nama_file = $user_id."_".time()."_".$file->getClientOriginalName();        
        $tujuan_upload = 'img/hotels';
        $file->move($tujuan_upload,$nama_file);

        $current_time = Carbon::now();        
        
        $hotel = Hotel::find($id);
        $hotel->name = $request->input('name');
        $hotel->price = $request->input('price');
        $hotel->images = $nama_file;
        $hotel->rating = $request->input('rating');
        $hotel->address = $request->input('address');
        $hotel->coordinate = $request->input('coordinate');
        $hotel->facilities = $request->input('facilities');
        $hotel->rooms = $request->input('rooms');
        $hotel->category = $request->input('category');
        $hotel->updated_at = $current_time->toDateTimeString();
        $hotel->save();         

        return view('pages.hotel-edit', compact('hotel'));
    }

    public function delete_hotel($id){
        $hotel = Hotel::find($id);

        $hotel->delete();

        return redirect()->route('admin_homepage');     

    }

    public function delete_user($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin_homepage');
    }

    public function delete_testimonial($id){
        $testimonial = Testimonials::find($id);

        $testimonial->delete();

        return redirect()->route('admin_homepage');
    }

    public function remove_booking($id){
        $booking_list = BookingList::find($id);

        $booking_list->delete();

        return redirect()->route('booking_history', ['id' => Auth::user()->id]);
    }

    public function edit_profile($id, Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required'],
            'photo' => ['required'],            
            'phone' => ['required', 'numeric'],          
        ]);

        $user_id = $request->id;

        $file = $request->file('photo');     
        $nama_file = $user_id."_".time()."_".$file->getClientOriginalName();        
        $tujuan_upload = 'img/users';
        $file->move($tujuan_upload,$nama_file);

        $current_time = Carbon::now();        
        
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->photo = $nama_file;
        $user->phone = $request->input('phone');
        $user->updated_at = $current_time->toDateTimeString();
        $user->save();  
        
        return redirect()->route('profile', ['id' => $id]);
    }

    public function booking_history($id){
        $id_user = $id;
        
        $booking_list = DB::table('booking_list')->get();        
        $hotels = [];
        $booking_list_id = [];
        
        foreach($booking_list as $bl){
            if($bl->id_user == $id_user){
                $hotel = DB::table('hotels')->where('id', $bl->id_hotel)->first();
                array_push($hotels,$hotel);
                array_push($booking_list_id, $bl->id);
            }
        }        

        return view('pages.booking-history', compact('hotels','booking_list_id'));        
    }

    public function booking(Request $request){
        $this->validate($request, [
            'id_user' => ['required'],
            'id_hotel' => ['required'],
        ]);

        BookingList::create([
            'id_user' => $request->input('id_user'),
            'id_hotel' => $request->input('id_hotel'),
        ]);

        return redirect()->route('booking_history', ['id' => Auth::user()->id]);
    }
}
