<?php

/**
 * Export datsys to excel
 */

namespace App\Exports;

use App\Submission;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DatsysExport implements FromView
{
    use Exportable;

    private $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        // $submissions = Submission::where('approved', $this->post['approved'])->get();
        $submissions = Submission::whereHas('card', function ($query) {
            $query->where('id_bank', $this->post['bank_id']);
        })->where('approved', $this->post['approved'])->get();
        // dd($submissions);
        return view('admin.credit.excel.allSubmissions', [
            'submissions' => $submissions
        ]);
    }
}
