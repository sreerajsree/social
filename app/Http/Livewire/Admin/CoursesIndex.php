<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Course;

use Livewire\WithPagination;

class CoursesIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function render()
    {
        $courses = Course::where('title', 'LIKE', '%' . $this->search . '%')
                ->paginate(10);

        return view('livewire.admin.courses-index', compact('courses'));
    }

    public function clear(){
        $this->reset('page');
    }
}
