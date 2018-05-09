<?php

namespace App\Exports;

use App\Submission;
use App\Verification;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class AplikasiExport implements FromView
{
    use Exportable;

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        $submission = Submission::findOrFail($this->id);
//        dd($submission->verification);
//        dd( Verification::firstOrFail('submissions_id', $this->id)->get());
        return view('admin.credit.excel.aplikasi', [
            'verification' => $submission->verification
        ]);
    }
}
