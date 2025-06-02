<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->middleware('auth:sanctum'); // Auth middleware (ganti sesuai setup JWT)
        $this->notificationService = $notificationService;
    }

    // Get all notifications for authenticated user
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $notifications = $this->notificationService->getAll($userId);
        return response()->json($notifications);
    }

    // Get unread notifications
    public function unread(Request $request)
    {
        $userId = $request->user()->id;
        $notifications = $this->notificationService->getUnread($userId);
        return response()->json($notifications);
    }

    // Mark notification as read
    public function markAsRead($id)
    {
        $notification = $this->notificationService->markAsRead($id);
        return response()->json($notification);
    }
}


?>