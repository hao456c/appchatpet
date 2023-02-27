<?php
    namespace App\Services;
    use App\Repositories\RelationshipRepository;
    
    class RelationshipService {
        protected $repository;
        public function __construct(RelationshipRepository $repository)
        {
            $this->repository = $repository;
        }

    }
?>