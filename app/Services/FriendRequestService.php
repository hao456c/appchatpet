<?php
    namespace App\Services;
    use App\Repositories\FriendRequestRepository;

    class FriendRequestService {
        protected $repository;
        public function __construct(FriendRequestRepository $repository)
        {
            $this->repository = $repository;
        }
    }
?>