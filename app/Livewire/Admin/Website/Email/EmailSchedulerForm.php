<?php

namespace App\Livewire\Admin\Website\Email;

use App\Actions\Admin\Website\Email\UpdateEmailScheduler;
use App\Models\EmailScheduler;
use App\Models\TimeInSeconds;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Time;

class EmailSchedulerForm extends Component
{
    use LivewireAlert;

    public Collection $emailSchedulers;
    public Collection $timeInSeconds;

    // Scheduler Datas
    public array $schedulersData = [];

    // Form
    public bool $isFormValid = true;

    public function mount()
    {
        $this->emailSchedulers = EmailScheduler::all();
        $this->timeInSeconds = TimeInSeconds::all();

        // Copies des données pour pouvoir model live sur à l'intérieur d'une boucle
        foreach ($this->emailSchedulers as $scheduler) {
            $this->schedulersData[$scheduler->id] = [
                'pageName' => $scheduler->page_name,
                'queueJobName' => 'email_' . Str::snake($scheduler->page_name) . '_page',
                'sendingFrequency' => $scheduler->sending_frequency_id,
                'nbEmailsFrequency' => $scheduler->nb_emails_freq,
            ];
        }
    }

    public function rules()
    {
        return [
            'schedulersData.*.nbEmailsFrequency' => 'required|numeric',
            'schedulersData.*.sendingFrequency' => 'required|numeric',
        ];
    }

    public function updated($property, $value)
    {
        $this->isFormValid = false;
        $this->validate();
        $this->isFormValid = true;
    }

    public function submit($schedulerId)
    {
        if (UpdateEmailScheduler::run($this->schedulersData[$schedulerId], $schedulerId)) {
            $this->alert('success', 'Your Email Settings has been updated !');
            $this->mount();
        } else {
            $this->alert('error', 'Whoops, looks like something went wrong !');
        }
    }

    public function render()
    {
        return view('livewire.admin.website.email.email-scheduler-form');
    }
}
