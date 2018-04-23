<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\Submission;
use App\Verification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyController extends Controller
{
    public function index($id)
    {
        $data['submission'] = Submission::find($id);
        return view('admin.credit.verify', $data);
    }

    public function verify(Request $request, $id)
    {
//        $request['submission_id'] = $id;
//        dd($request->all());

        Verification::create($request->all());

        $submission = Submission::findOrFail($id);

        $submission->approved = TRUE;

        $submission->save();

        return redirect('admin/requests');

    }
}
