<?php

namespace App\Http\Controllers;
use App\Models\Applicant;
use App\Models\administration;
use App\Models\Written_test;
use App\Models\Practice_test;
use App\Models\interview;
use App\Models\Selection_result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SelectionResultController extends Controller
{
    public function index()
    {
        return view('dashboard.selection.index',[
            'selectionresults' => Selection_result::where('result', '1')
                                                    ->orWhere('result', '0')->latest()->get()
        ]);
    }

    public function destroy(Selection_result $selectionresult)
    {
        Selection_result::destroy($selectionresult->id);
        Applicant::destroy('id', $selectionresult->applicant_id);
        administration::destroy('id', $selectionresult->administration_id);
        written_test::destroy('id', $selectionresult->writtentest_id);
        practice_test::destroy('id', $selectionresult->practicetest_id);
        interview::destroy('id', $selectionresult->interview_id);

        return redirect('/selectionresults')->with('success', 'Data berhasil dihapus!');
    }
}
