<?php

namespace App\Http\Controllers\Admin;

use App\Verification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class InvoicesExport implements FromView
{
    /**
     * @return View
     */
    public function view($id): View
    {
        return view('admin.credit.aplikasi', [
            'invoices' => Verification::find($id)
        ]);
    }
}
