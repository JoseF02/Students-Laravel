<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
    public function index()
    {
        return Teachers::all();
    }

    public function add()
    {
        $item=new Teachers();
        $item->name='Test Name';
        $item->save();

        return 'Added Successfully';
    }

    public function show($id)
    {
        $item=Teachers::findOrFail($id);

        return $item;
    }

    public function update($id)
    {
        $item=Teachers::findOrFail($id);
        $item->name='Updated Teacher';
        $item->update();

        return 'Update Successfully';
    }

    public function delete($id)
    {
        $item=Teachers::findOrFail($id);
        $item->delete();

        return 'Deleted Successfully';
    }
}
