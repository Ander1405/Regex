<?php

namespace App\Http\Controllers;

use App\Actions\StoreRegAction;
use App\Http\Requests\RegestValidationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegExController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function store(RegestValidationRequest $request, StoreRegAction $regAction)
    {
        $regAction->execute($request->validated(), new User());
        return view('welcome');
    }
}
