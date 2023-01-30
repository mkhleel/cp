<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMessageAPIRequest;
use App\Http\Requests\API\UpdateMessageAPIRequest;
use App\Models\Message;
use App\Repositories\MessageRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class MessageController
 */
class MessageController extends ApiController
{
    private MessageRepository $messageRepository;

    public function __construct(MessageRepository $messageRepo)
    {
        $this->messageRepository = $messageRepo;
    }

    /**
     * Display a listing of the Messages.
     * GET|HEAD /messages
     */
    public function index(Request $request): JsonResponse
    {
        $messages = $this->messageRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($messages->toArray(), 'Messages retrieved successfully');
    }

    /**
     * Store a newly created Message in storage.
     * POST /messages
     */
    public function store(CreateMessageAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $message = $this->messageRepository->create($input);

        return $this->sendResponse($message->toArray(), 'Message saved successfully');
    }

    /**
     * Display the specified Message.
     * GET|HEAD /messages/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Message $message */
        $message = $this->messageRepository->find($id);

        if (empty($message)) {
            return $this->sendError('Message not found');
        }

        return $this->sendResponse($message->toArray(), 'Message retrieved successfully');
    }

    /**
     * Update the specified Message in storage.
     * PUT/PATCH /messages/{id}
     */
    public function update($id, UpdateMessageAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Message $message */
        $message = $this->messageRepository->find($id);

        if (empty($message)) {
            return $this->sendError('Message not found');
        }

        $message = $this->messageRepository->update($input, $id);

        return $this->sendResponse($message->toArray(), 'Message updated successfully');
    }

    /**
     * Remove the specified Message from storage.
     * DELETE /messages/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Message $message */
        $message = $this->messageRepository->find($id);

        if (empty($message)) {
            return $this->sendError('Message not found');
        }

        $message->delete();

        return $this->sendSuccess('Message deleted successfully');
    }
}
