<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illmuninate\Http\Request;
use Illuminate\Support\Facades\File;

class LogController extends Controller
{
    public function index()
    {
        $logFilePath = storage_path('logs/laravel.log');
        $logContents = File::get($logFilePath);

        return view('logs.index', ['logContents' => $logContents]);
        
    } 
        
        
        // {
            // Ambil pesan log dari file log tertentu (misalnya, daily.log)
            // $logs = file(storage_path('logs/laravel.log'));
        
            // return view('logs.index', ['logs' => $logs]);
        // }
    
}
