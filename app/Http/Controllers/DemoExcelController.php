<?php

namespace App\Http\Controllers;

use App\Excel\ExcelReport;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel;

class DemoExcelController extends Controller
{
    public $downloadExcelPage = 'excel-with-title';
    public $title = 'demo';
    public function index(Request $request){
        // if ($request->type == 'excel'){
        //  return Excel::download(new ExcelReport($this->viewData(), $this->downloadExcelPage, $this->title, range('A', 'Q'), [1, 2, 3, 5]), 'demo_' . today()->format('dmY') . '.xlsx');
        // }
        return view('excel-test');
    }

    public function viewData(){

        return [1, 'cat1', 'code2'];
    }
}
