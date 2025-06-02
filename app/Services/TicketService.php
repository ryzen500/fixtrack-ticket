<?php 
namespace App\Services;

use App\Models\Ticket;

class TicketService
{
    public function getAll()
    {
        return Ticket::with(['user', 'category', 'assignedUser'])->latest()->get();
    }

    public function getById($id)
    {
        return Ticket::with(['comments.user', 'attachments'])->findOrFail($id);
    }

    public function create(array $data)
    {
        return Ticket::create($data);
    }

    public function update($id, array $data)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->update($data);
        return $ticket;
    }

    public function delete($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
    }
}


?>