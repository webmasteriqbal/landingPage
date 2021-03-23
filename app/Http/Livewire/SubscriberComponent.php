<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SubscribeConfirmNotify;

class SubscriberComponent extends Component
{
    public $email;
    public $confirmModel = false;

    protected $rules = [
        'email' => 'required|email|unique:subscribers,email|max:255',
    ];

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => 'This email is already on our subscribe list.',
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function hideModel()
    {
        $this->confirmModel = false;
    }

    public function subscribe()
    {
        $validatedData = $this->validate();

        Subscriber::create($validatedData);
        Notification::route('mail', $this->email)
            ->notify(new SubscribeConfirmNotify());
        $this->email = "";
        $this->confirmModel = true;
    }
    public function render()
    {
        return view('livewire.subscriber');
    }
}
