<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function printArray(){
        $cars = ['Audi', 'BMW' , 'Ferrari' , 'Ford', 'Honda' , 'Mercedes' , 'Nissan' , 'Porsche' , 'Toyota',
    'Volkswagen' , 'Fiat' , 'Lanser' , 'Mazda ' , 'Tesla' , 'Jeep' , 'Honda' ,'Hyundai' ,'Nissan','Chevrolet',
    'Volvo' ,'Kia','Peugeot' ,'Mini' , 'Daio'];
    return view ('Cars',compact('cars'));
    }
}
