<?php

/**
 * Export all submissions to excel
 */

namespace App\Exports;

use App\Submission;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class SubmissionExport implements FromView
{
    use Exportable;

    private $approved;

    public function __construct($approved)
    {
        $this->approved = $approved;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        $submissions = Submission::where('approved', $this->approved)->get();
        return view('admin.credit.excel.allSubmissions', [
            'submissions' => $submissions
        ]);
    }
}
