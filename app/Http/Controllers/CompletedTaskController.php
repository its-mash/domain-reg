<?php

namespace App\Http\Controllers;

use App\CompletedTask;
use Illuminate\Http\Request;

class CompletedTaskController extends Controller
{
    public function index()
    {
        //
    }
    public function destroy($id)
    {
        return CompletedTask::find($id)->delete();
    }
}
