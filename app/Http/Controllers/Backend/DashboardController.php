<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
 public function index(){
      return view($this->pagePath.('dashboard.dashboard'), $this->data);

 }
    public function users(){
        return view($this->pagePath.('dashboard.users'), $this->data);

    }
}
