<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\Booking;
use App\RoomTenant;
class RoomController extends Controller
{
    //image upload
    
    //view image

 

    public function index()
    {
        $rooms=Room::all();
        return view('admin.room.room-index',compact('rooms'));
    }
    public function create()
    {
        return view ('admin.room.create');
    }

   //display room details


   public function display($id)
   {
           $rooms = Room::findOrFail($id);
           // dd($rooms);
           return view('admin.room.view')->with('rooms',$rooms);
   }

    public function store(Request $request)
    {
         $this->validate($request, [
            'room_type'=> 'required',// room type
            'room_name'=> 'required',// room type
             'price'=> 'required',
             'description'=> 'required',
             'capacity'=> 'required',
           

         ]);
         $rooms=new Room();
        //  dd($request->all());
    
         
         $rooms->room_type = $request->input('room_type');//room type
         $rooms->room_name = $request->input('room_name');//room type
         $rooms->price = $request->input('price');
         $rooms->description = $request->input('description');
         $rooms->capacity = $request->input('capacity');
        
         if($request->hasfile('image')){
             $file=$request->file('image');
             $extension=$file->getClientOriginalExtension();
             $filename=time() . '.' . $extension;
             $file->move('uploads/rooms/',$filename);
             $rooms->image=$filename;
         }else{
             return $request;
             $rooms->image='';
         }
         
         
         $rooms->status = 'vacant';
         $rooms->save();
         return redirect('/room')->with('success', 'Room Successfully Added!');
    }

    public function edit($id)
    {
            $rooms = Room::findOrFail($id);
            // dd($rooms);
            return view('admin.room.edit')->with('rooms',$rooms);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'room_type'=> 'required',//room type
            // 'room_name'=> 'required|unique:rooms',//room type
            // 'price'=> 'required',
            // 'active'=> 'required',
 

        ]);

        $rooms = Room::find($id);
        $rooms->room_type = $request->input('room_type');//room type
        $rooms->room_name = $request->input('room_name');//room type
        $rooms->price = $request->input('price');
        $rooms->description = $request->input('description');
        $rooms->capacity = $request->input('capacity');
        
        // $rooms->active = $request->input('active');
     
        $rooms->save();
        return redirect('/room')->withInfo('Room Successfully Updated!');
    }




    // api part
        public function room_api($id){

            if($id == 1){
                $room = Room::where('room_type','=','Single Room')
                ->where('status','=','vacant')->get();
            }elseif($id == 2){
                $room = Room::where('room_type','=','Apartment Room')
                ->where('status','=','vacant')->get();
            }
            return response()->json([
                'room' => $room
            ]);
        }

        public function room_id($id){

            return response()->json([
                'room' => Room::find($id)
            ]);
        }

        public function save_booking(Request $request){
            //  dd($new);
           
            if($request->payment_type == 1){
                $request->payment_type == 'first payment';
            }else{
                $request->payment_type == 'second payment';
            }
   
            $new = new RoomTenant;
            $new->tenant_id = $request->tenant_id;
            $new->room_id = $request->room_id;
            $new->price = $request->price;
            $new->amount = $request->amount;
            $new->payment_type = $request->payment_type;
            $new->save();

            $room = Room::find($request->room_id);
            $room->status = 'occupied';
            $room->save();
            
            return response('true');
          
         
        }
    
}
