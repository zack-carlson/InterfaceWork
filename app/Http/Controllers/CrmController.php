<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Crm;
use App\Models\User;

class CrmController extends Controller
{
    private $crm;

    public function __construct(Crm $crm)
    {
        // $this->crm = $crm;
    }
    public function index(User $user)
    {
        dd($user->crm);
    }
}
