<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

class FilesController extends Controller
{

    public $files;

    public function __construct()
    {
        $this->files = new Files;
    }

    public function showLoadPage(){
        return view('load_file_page');
    }

    public function saveFile(Request $request){
        $uploadedFile = file($request->inputFile);
        $this->files->saveCSVFile($uploadedFile);
        return redirect()->back()->with('success', 'Данные сохранены!');   
    }

    public function showData(){
        $tableData = $this->files->getParsedData();
        return view('table', ['data' => $tableData]);
    }

    public function clearTable(){
        $this->files->deleteData();
        return redirect()->back()->with('success', 'Данные удалены!');
    }
}
