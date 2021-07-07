<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $email = '';
    public $title = '';
    public $message = '';
    public $name = '';

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.contact');
    }

    public function save()
    {
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL) and $this->title!='' and $this->message!='' and $this->name !=''){
            Mail::send('mail', array('name'=>$this->name,'email'=>$this->email,'mess'=>$this->message), function($message){
                $message->to($this->email, 'Visitor')->subject($this->title);
            });
            $this->email = '';
            $this->title = '';
            $this->message = '';
            $this->name = '';
        }
    }
}
