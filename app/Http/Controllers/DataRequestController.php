<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DataRequestController extends Controller
{
    public function create(): View
    {
        return view('dataRequest.create');
    }

    public function store(Request $request)
    {
        $id = uniqid();
        $data = "{$request->input('name')}, {$request->input('phone')}, {$request->input('email')}, {$request->input('description')}";
        $requestsDirPath = database_path() . '/requests';

        if (!file_exists("$requestsDirPath/")) {
            mkdir($requestsDirPath);
        }

        file_put_contents("$requestsDirPath/$id.txt", $data);

        return redirect('/request/create');
    }
}
