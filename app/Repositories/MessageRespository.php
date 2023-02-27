<?php
    namespace App\Repositories;
    use App\Models\message;

    class MessageRepository {
        protected $model;
        public function __construct(message $model)
        {
            $this->model = $model;            
        }
    }
?>