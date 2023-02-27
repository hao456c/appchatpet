<?php 
    namespace App\Services;
    use App\Repositories\MessageRepository;

    class MessageService {
        protected $repository;
        public function __construct(MessageRepository $repository)
        {
            $this->repository = $repository;
        }
    }
?>