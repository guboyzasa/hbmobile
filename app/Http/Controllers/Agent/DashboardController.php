<?php


namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Order;
use App\Models\WarrantyRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // Artisan::call('storage:link');
    }

    public function index()
    {

        $userId = Auth::user()->id;
        $agent = Agent::where('user_id', $userId)->first();
        $agentId = $agent->id;

        $countRegisterWarranty = WarrantyRegistration::where('agent_id', $agentId)->count();
        $countCustomer = Customer::where('agent_id', $agentId)->count();
        $countUserCustomer = Customer::where('agent_id', $agentId)->where('user_id', '!=', null)->count();

        return view('agent.dashboard-saas', compact('countRegisterWarranty', 'countCustomer', 'countUserCustomer'));
    }

}
