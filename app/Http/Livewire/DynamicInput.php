<?php
namespace App\Http\Livewire;
use Livewire\Component;
class DynamicInput extends Component
{
    public $formFields = [
        ['label' => 'Name', 'type' => 'text', 'name' => 'name', 'value' => ''],
        ['label' => 'Email', 'type' => 'email', 'name' => 'email', 'value' => ''],
        ['label' => 'Password', 'type' => 'password', 'name' => 'password', 'value' => ''],
    ];

    public function render()
    {
        return view('livewire.dynamic-input');
    }    
    public function addField()
{
    $this->formFields[] = ['label' => '', 'type' => 'text', 'name' => '', 'value' => ''];
}

public function removeField($index)
{
    unset($this->formFields[$index]);
    $this->formFields = array_values($this->formFields);
}

}
