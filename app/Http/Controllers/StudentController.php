<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function addData()
   {
        $item = new Student();
        $item->name='tester';
        $item->email='tester@gmail.com';
        $item->age=25;
        $item->date_of_birth='2010-01-01';
        $item->gender='f';
        $item->user_id=1;
        $item->save();
        /*DB::table('students')->insert([
            [
                'name' => 'ssdss',
                'email' => 'ssdss@gmail.com',
                'age' => 15,
                'date_of_birth' => '2010-01-01',
                'gender' => 'm',
                'user_id' => 1
            ],
            [
                'name' => 'adhdh',
                'email' => 'adhdh@gmail.com',
                'age' => 15,
                'date_of_birth' => '2010-01-01',
                'gender' => 'm',
                'user_id' => 1
            ],
            [
                'name' => 'eryy4etw',
                'email' => 'eryy4etw@gmail.com',
                'age' => 15,
                'date_of_birth' => '2010-01-01',
                'gender' => 'm',
                'user_id' => 1
            ],
        ]);*/

        return 'Added Successfully';
   }

   public function getData()
   {
        /*$items=DB::table('students')
            ->avg('age');*/
        $items = Student::find(53);
        return $items;
   }

   public function updateData()
   {
        /*DB::table('students')->where('id',51)->update([
            'name' => 'Update Name',
            'age' => 20,
            'email' => 'test@com'
        ]);*/

        $item = Student::find(46);
        $item->name='Updated Student';
        $item->age=13;
        $item->update();
        return 'Updated Successfully';
   }

   public function deleteData()
   {
        //DB::table('students')->where('id',51)->delete();
        Student::findOrFail(48)->delete();

        return 'Deleted Successfully';
   }

   public function whereConditions()
   {
        //$items=Student::where('age','>',18)
        //    ->orWhere('gender','f')
        //    ->get(); 
        //$items=Student::where('score','>=',50)
        //->where(function($query){
        //    $query->where('age','<',20)
        //        ->orWhere('age','>',20);
        //})
        //->get();
        //$items = Student::whereNoBetween('age',[18,25])->get();
        //$items = Student::whereIn('id',[47,48,49,50,51])->get();
        //$items = Student::whereAny(['age','score'],'=',25)->get();
        
        $items = Student::whereAll(['age','score','id'],'=',25)->get();
        
        return $items;
   }

   public function queryScope()
   {
        $items = Student::male()->get();

        return $items;
   }

   public function secondQuery()
   {
        $items = Student::male()->get();

        return $items;
   }
}
