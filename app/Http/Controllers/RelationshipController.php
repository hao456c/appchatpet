<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RelationshipService;
class RelationshipController extends Controller
{
    protected $service;
    public function __construct(RelationshipService $service)
    {
        $this->service = $service;
    }
}
