<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class DeletedMessages extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['destroy']; // Listeners to add SweetAlert event,

    private $pagination = 10;

    public $search, $selected_id, $componentName, $pageTitle;
    public $name, $email, $phone, $message, $updated_at;

    public function mount()
    {
        $this->pageTitle = 'Deleted Messages';
        $this->componentName = 'Messages';
    }

    public function render()
    {
        if (strlen($this->search > 0)) {
            $deleted_messages = Contact::where('status', '=', 0)
                ->orWhere('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('phone', 'like', '%' . $this->search . '%')
                ->orderBy('updated_at', 'desc')
                ->paginate($this->pagination);
        } else {
            $deleted_messages = Contact::where('status', '=', 0)
                ->orderBy('updated_at', 'desc')
                ->paginate($this->pagination);
        }


        return view('livewire.admin.deleted-messages', compact('deleted_messages'));
    }

    public function clear()
    {
        $this->reset('page');
    }

    public function Show($id)
    {
        $contact = Contact::find($id, ['id', 'name', 'email', 'phone', 'message', 'updated_at']);

        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->message = $contact->message;
        $this->updated_at = $contact->updated_at;

        $this->emit('show-modal', 'show modal!');
    }

    public function Restore($id)
    {
        $contact = Contact::find($id);

        $contact->status = 2;
        $contact->save();
    }

    public function resetUI()
    {
    }

    /**
     * Return delete confirm
     */
    public function deleteMessageConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:deletemessageconfirm', [
            'type' => 'warning',
            'title' => 'Are you sure you want to delete this message permanently?',
            'text' => 'Keep in mind that the message will be deleted from the system, but this will not affect the mailbox test@care.training',
            'id' => $id,
        ]);
    }

    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
    }
}
