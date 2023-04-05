<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

       return view('admin.home');

    }
    /**
     * Create New Project
     */
    public function createproject()
    {

       return view('admin.createproject');

    }

    /**
     * Beneficiary profile create
     */
    public function bp_create()
    {

       return view('admin.bp_create');

    }

    /**
     * Beneficiary profile list
     */
    public function bp_list()
    {

       return view('admin.bp_list');

    }

    /**
     * Procurement Plan
     */
    public function procurement_plan()
    {

       return view('admin.procurement_plan');

    }

    /**
     * Procurement Plan
     */
    public function cram()
    {

       return view('admin.cram');

    }

    /**
     * Procurement Plan
     */
    public function dip()
    {

       return view('admin.dip');

    }

    /**
     * report
     */
    public function report()
    {

       return view('admin.report');

    }

    /**
     * report
     */
    public function library()
    {

       return view('admin.library');

    }

    /**
     * report
     */
    public function help()
    {

       return view('admin.help');

    }

    
    
}
