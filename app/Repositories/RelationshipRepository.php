<?php
    namespace App\Repositories;
    use App\Models\relationship;

    class RelationshipRepository {
        protected $model;

        public function __construct(relationship $model)
        {
            $this->model = $model;
        }
    }
?>