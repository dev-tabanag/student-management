<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Component;

class StudentForm extends Component
{
    #[Validate]
    public $name;

    #[Validate]
    public $email;

    #[Validate]
    public $class_id;

    #[Validate]
    public $section_id;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'class_id' => 'required',
            'section_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'class_id.required' => 'The class field is required',
            'section_id.required' => 'A section field is required',
        ];
    }

    public function render()
    {
        return view('livewire.forms.student-form');
    }
}
