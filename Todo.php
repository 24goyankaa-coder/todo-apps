<?php
class Todo {
    public $id;
    public $description;
    public $due_date;
    public $is_completed;

    public function __construct($description, $due_date, $is_completed = false) {
        $this->description = $description;
        $this->due_date = $due_date;
        $this->is_completed = $is_completed;
    }
}
