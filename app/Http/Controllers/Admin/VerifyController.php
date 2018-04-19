<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\Submission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyController extends Controller
{
    public function index($id)
    {
        $data['submission'] = Submission::find($id);
        return view('admin.credit.verify', $data);
    }
}
