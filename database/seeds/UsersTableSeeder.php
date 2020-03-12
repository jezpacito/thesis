<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Type;
use App\Room;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $staff = User::create([
            'fname'=> 'Admin',
            'mname'=> 'Admin',
            'lname'=> 'Admin',
            'email'=> 'admin@admin.com',
            'type_id' => 2,
            'country' => 'Region XII',
            'state' => 'General Santos City',
            'city'=>'San Isidro',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);

        $staff = User::create([
            'fname'=> 'Staff',
            'mname'=> 'Staff',
            'lname'=> 'Staff',
            'email'=> 'staff@staff.com',
            'type_id' => 2,
            'country' => 'Region XII',
            'state' => 'General Santos City',
            'city'=>'Bula',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin',
            'mname'=> 'Admin',
            'lname'=> 'Admin',
            'email'=> 'admin2@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'General Santos City',
            'city'=>'City Heights',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin3',
            'mname'=> 'Admin3',
            'lname'=> 'Admin3',
            'email'=> 'admin3@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Sultan Kudarat Province',
            'city'=>'Isulan',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);

        $admin = User::create([
            'fname'=> 'Admin4',
            'mname'=> 'Admin4',
            'lname'=> 'Admin4',
            'email'=> 'admin4@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Sultan Kudarat Province',
            'city'=>'Isulan',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);


        $admin = User::create([
            'fname'=> 'Admin5',
            'mname'=> 'Admin5',
            'lname'=> 'Admin5',
            'email'=> 'admin5@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Sultan Kudarat Province',
            'city'=>'Tacurong',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin6',
            'mname'=> 'Admin6',
            'lname'=> 'Admin6',
            'email'=> 'admin6@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Sultan Kudarat Province',
            'city'=>'Esperanza',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin7',
            'mname'=> 'Admin7',
            'lname'=> 'Admin7',
            'email'=> 'admin7@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'South Cotabato Province',
            'city'=>'Korondal',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin8',
            'mname'=> 'Admin8',
            'lname'=> 'Admin8',
            'email'=> 'admin8@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'South Cotabato Province',
            'city'=>'T-boli',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin9',
            'mname'=> 'Admin9',
            'lname'=> 'Admin9',
            'email'=> 'admin9@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'South Cotabato Province',
            'city'=>'T-boli',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin10',
            'mname'=> 'Admin10',
            'lname'=> 'Admin10',
            'email'=> 'admin10@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'South Cotabato Province',
            'city'=>'Polomolok',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin11',
            'mname'=> 'Admin11',
            'lname'=> 'Admin11',
            'email'=> 'admin11@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'South Cotabato Province',
            'city'=>'Banga',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin12',
            'mname'=> 'Admin12',
            'lname'=> 'Admin12',
            'email'=> 'admin12@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'North Cotabato Province',
            'city'=>'Midsayap',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);

        $admin = User::create([
            'fname'=> 'Admin13',
            'mname'=> 'Admin13',
            'lname'=> 'Admin13',
            'email'=> 'admin13@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'North Cotabato Province',
            'city'=>'Kabacan',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin14',
            'mname'=> 'Admin14',
            'lname'=> 'Admin14',
            'email'=> 'admin14@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'North Cotabato Province',
            'city'=>'Pikit',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin15',
            'mname'=> 'Admin15',
            'lname'=> 'Admin15',
            'email'=> 'admin15@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Maguindanao Province',
            'city'=>'Shariff Aguak',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin16',
            'mname'=> 'Admin16',
            'lname'=> 'Admin16',
            'email'=> 'admin16@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Maguindanao Province',
            'city'=>'Saliao',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);
        $admin = User::create([
            'fname'=> 'Admin17',
            'mname'=> 'Admin17',
            'lname'=> 'Admin17',
            'email'=> 'admin17@admin.com',
            'type_id' => 3,
            'country' => 'Region XII',
            'state' => 'Maguindanao Province',
            'city'=>'Ampatuan',
            'street'=>'VSM',
            'password'=> Hash::make('password')
        ]);



        



        // $staff = User::create([
        //     'fname'=> 'Staff',
        //     'mname'=> 'Staff',
        //     'lname'=> 'Staff',
        //     'email'=> 'staff@staff.com',
        //     'type_id' => 2,
        //     'password'=> Hash::make('password')
        // ]);


        Room::create([
            'room_name'=> 'Saging',
            'room_type'=> 'Single Room',
            'price'=> "3000",
            'description'=> "without aircon",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);

        Room::create([
            'room_name'=> 'Suha',
            'room_type'=> 'Single Room',
            'price'=> "3000",
            'description'=> "without aircon",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);

        Room::create([
            'room_name'=> 'Rambotan',
            'room_type'=> 'Single Room',
            'price'=> "3000",
            'description'=> "without aircon",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);

        Room::create([
            'room_name'=> 'Pinya',
            'room_type'=> 'Single Room',
            'price'=> "3000",
            'description'=> "without aircon",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
        Room::create([
            'room_name'=> 'Papaya',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);

        Room::create([
            'room_name'=> 'Pakwan',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);

        Room::create([
            'room_name'=> 'Mangga',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);

        Room::create([
            'room_name'=> 'Lanzones',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
        Room::create([
            'room_name'=> 'Langka',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
        Room::create([
            'room_name'=> 'Bayabas',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
        Room::create([
            'room_name'=> 'Durian',
            'room_type'=> 'Single Room',
            'description'=> "without aircon",
            'price'=> "3000",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
        
        Room::create([
            'room_name'=> 'Atis',
            'room_type'=> 'Apartment Room',
            'description'=> "with aircon",
            'price'=> "3500",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
         
        Room::create([
            'room_name'=> 'Chico',
            'room_type'=> 'Apartment Room',
            'description'=> "without aircon",
            'price'=> "3500",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);     
        
        Room::create([
            'room_name'=> 'Santol',
            'room_type'=> 'Apartment Room',
            'description'=> "with aircon",
            'price'=> "3500",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
        
        Room::create([
            'room_name'=> 'Mansanas',
            'room_type'=> 'Apartment Room',
            'description'=> "with aircon",
            'price'=> "3500",
            'status'=> "vacant",
            'capacity'=> "3",
        ]);
      
      

   
        // $admin->roles()->attach($adminRole);
        // $staff->roles()->attach($staffRole);
       
        Type::insert([
            [
             'type'=> 'Select User',
            ],
            [
             'type'=> 'staff',
            ],
           [
            'type'=> 'admin',
           ]
         ]);

       
 
    }
}
