<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FriendRequestService;
class FriendRequestController extends Controller
{
    protected $service;
    public function __construct(FriendRequestService $service)
    {
        $this->service = $service;
    }
}
