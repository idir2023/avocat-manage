@extends('admins.layouts.master')
@section('title', 'Contacts')
@section('title_2', 'Manage Contacts')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contacts Message</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Subject </th>
                                    <th> Message </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contacts as $contact)
                                    <tr>
                                        <td> {{ $contact->name }} </td>
                                        <td> {{ $contact->email }} </td>
                                        <td> {{ $contact->subject }} </td>
                                        <td> {{ $contact->message }} </td>
                                        <td>
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-warning btn-icon-text"
                                                data-toggle="modal" data-target="#editModal{{ $contact->id }}">
                                                <i class="mdi mdi-pencil-outline btn-icon-prepend"></i> Edit
                                            </button>

                                            <!-- Delete Button with SweetAlert2 -->
                                            <button type="button" class="btn btn-danger btn-icon-text"
                                                onclick="confirmDelete({{ $contact->id }})">
                                                <i class="mdi mdi-delete-outline btn-icon-prepend"></i> Delete
                                            </button>

                                            <!-- Delete Form (hidden) -->
                                            <form id="deleteForm{{ $contact->id }}"
                                                action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $contact->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editModalLabel{{ $contact->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $contact->id }}">Edit
                                                        Contact</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('contacts.update', $contact->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name"
                                                                name="name" value="{{ $contact->name }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" value="{{ $contact->email }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Subject</label>
                                                            <input type="text" class="form-control" id="subject"
                                                                name="subject" value="{{ $contact->subject }}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message">Message</label>
                                                            <textarea class="form-control" id="message" name="message" rows="4" required>{{ $contact->message }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No messages found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {!! $contacts->links() !!} <!-- Pagination links -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    // Delete confirmation using SweetAlert2
    function confirmDelete(contactId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the hidden form to delete the contact
                document.getElementById('deleteForm' + contactId).submit();
            }
        });
    }
</script>
@endsection
