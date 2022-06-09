<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Response;

class Script extends Controller
{
  function submit(Request $request)
  {
    Storage::disk('local')->put('code.py', $request->input('code'));
    exec("cd .. && cd storage && cd app && python3 code.py", $output);    
    return Response::json(['output' => $output]);
  }
}