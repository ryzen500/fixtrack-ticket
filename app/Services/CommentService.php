<?php 

namespace App\Services;

use App\Models\TicketComment;

class CommentService
{
    public function create(array $data)
    {
        return TicketComment::create($data);
    }

    public function update($id, array $data)
    {
        $comment = TicketComment::findOrFail($id);
        $comment->update($data);
        return $comment;
    }

    public function delete($id)
    {
        $comment = TicketComment::findOrFail($id);
        $comment->delete();
    }
}

?>