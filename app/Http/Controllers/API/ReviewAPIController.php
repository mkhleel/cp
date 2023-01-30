<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateReviewAPIRequest;
use App\Http\Requests\API\UpdateReviewAPIRequest;
use App\Models\Review;
use App\Repositories\ReviewRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class ReviewAPIController
 */
class ReviewAPIController extends ApiController
{
    private ReviewRepository $reviewRepository;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepository = $reviewRepo;
    }

    /**
     * Display a listing of the Reviews.
     * GET|HEAD /reviews
     */
    public function index(Request $request): JsonResponse
    {
        $reviews = $this->reviewRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($reviews->toArray(), 'Reviews retrieved successfully');
    }

    /**
     * Store a newly created Review in storage.
     * POST /reviews
     */
    public function store(CreateReviewAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $review = $this->reviewRepository->create($input);

        return $this->sendResponse($review->toArray(), 'Review saved successfully');
    }

    /**
     * Display the specified Review.
     * GET|HEAD /reviews/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Review $review */
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            return $this->sendError('Review not found');
        }

        return $this->sendResponse($review->toArray(), 'Review retrieved successfully');
    }

    /**
     * Update the specified Review in storage.
     * PUT/PATCH /reviews/{id}
     */
    public function update($id, UpdateReviewAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Review $review */
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            return $this->sendError('Review not found');
        }

        $review = $this->reviewRepository->update($input, $id);

        return $this->sendResponse($review->toArray(), 'Review updated successfully');
    }

    /**
     * Remove the specified Review from storage.
     * DELETE /reviews/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Review $review */
        $review = $this->reviewRepository->find($id);

        if (empty($review)) {
            return $this->sendError('Review not found');
        }

        $review->delete();

        return $this->sendSuccess('Review deleted successfully');
    }
}
