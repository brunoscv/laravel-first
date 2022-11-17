<?php

namespace App\Exports;

use App\Models\Newsletter;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NewsletterExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */


    public function view(): View
    {
        return view('spreadsheet.newsletters', [
            'data' => Newsletter::select('email', 'id')
                ->orderBy('id')
                ->get()
        ]);
    }
}
