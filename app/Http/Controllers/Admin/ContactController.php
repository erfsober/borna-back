<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(Request $request): View
    {
        $search = trim((string) $request->query('q', ''));
        $checkedFilter = $request->query('checked');

        $contacts = Contact::query()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%")
                        ->orWhere('phone', 'like', "%$search%")
                        ->orWhere('message', 'like', "%$search%");
                });
            })
            ->when($checkedFilter !== null, function ($query) use ($checkedFilter) {
                $query->where('checked', $checkedFilter === '1');
            })
            ->orderByDesc('id')
            ->paginate(15);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact): View
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function update(Request $request, Contact $contact): RedirectResponse
    {
        $contact->update([
            'checked' => $request->boolean('checked'),
        ]);

        return redirect()->back()
            ->with('success', 'وضعیت درخواست به‌روزرسانی شد');
    }
}
