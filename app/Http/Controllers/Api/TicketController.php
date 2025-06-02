<?php 
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest;
use App\Services\TicketService;

class TicketController extends Controller
{
    protected $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    public function index()
    {
        return response()->json($this->ticketService->getAll());
    }

    public function store(StoreTicketRequest $request)
    {
        $ticket = $this->ticketService->create($request->validated());
        return response()->json($ticket, 201);
    }

    public function show($id)
    {
        return response()->json($this->ticketService->getById($id));
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->ticketService->update($id, $request->all()));
    }

    public function destroy($id)
    {
        $this->ticketService->delete($id);
        return response()->json(['message' => 'Deleted'], 204);
    }
}


?>