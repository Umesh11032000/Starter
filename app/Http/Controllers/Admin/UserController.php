<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        $pageTitle = 'Users';
        return $dataTable->render('admin.users.index', compact('pageTitle'));
    }
}
