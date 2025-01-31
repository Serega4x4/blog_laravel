<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Service\PostService as ServicePostService;
use PostService;

class BaseController extends Controller
{
    public $service;

    public function __construct(ServicePostService $service)
    {
        $this->service = $service;
    }
}