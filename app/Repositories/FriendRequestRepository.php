<?php
    namespace App\Repositories;
    use App\Models\friendRequest;

    class FriendRequestRepository {
        protected $model;
        public function __construct(friendRequest $model)
        {
            $this->model = $model;
        }
    }
?>