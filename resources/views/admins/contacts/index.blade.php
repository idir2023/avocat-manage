@extends('admins.layouts.master')
@section('title', __('messages.contacts_message'))
@section('title_2', __('messages.manage_contacts'))

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('messages.contacts_message') }}</h4>

                        <!-- Success Alert -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center"
                                role="alert"
                                style="border-left: 5px solid #28a745; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <i class="mdi mdi-check-circle-outline me-2" style="font-size: 1.5rem;"></i>
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="close ms-auto" data-dismiss="alert" aria-label="Close"
                                    style="border: none; background: transparent;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> {{ __('messages.name') }} </th>
                                        <th> {{ __('messages.prenom') }} </th>
                                        <th> {{ __('messages.telephone') }} </th>
                                        <th> {{ __('messages.email') }} </th>
                                        <th> {{ __('messages.message') }} </th>
                                        <th> {{ __('messages.actions') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($contacts as $contact)
                                        <tr>
                                            <td> {{ $contact->nom }} </td>
                                            <td> {{ $contact->prenom }} </td>
                                            <td> {{ $contact->telephone }} </td>

                                            <td>
                                                <a href="mailto:{{ $contact->email }}" class="btn btn-info btn-sm" >
                                                    {{ $contact->email }}
                                                </a>
                                            </td>                                            

                                            <td> {{ $contact->message }} </td>
                                            <td>
                                                <!-- Edit Button -->
                                                <button type="button" class="btn btn-warning btn-icon-text"
                                                    data-toggle="modal" data-target="#editModal{{ $contact->id }}">
                                                    <i class="mdi mdi-pencil-outline btn-icon-prepend"></i> {{ __('messages.edit') }}
                                                </button>

                                                <!-- Delete Button with SweetAlert2 -->
                                                <button type="button" class="btn btn-danger btn-icon-text"
                                                    onclick="confirmDelete({{ $contact->id }})">
                                                    <i class="mdi mdi-delete-outline btn-icon-prepend"></i> {{ __('messages.delete') }}
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
                                                        <h5 class="modal-title" id="editModalLabel{{ $contact->id }}">{{ __('messages.edit') }}
                                                            {{ __('messages.contact') }}</h5>
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
                                                                <label for="name">{{ __('messages.name') }}</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" value="{{ $contact->nom }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="prenom">{{ __('messages.prenom') }}</label>
                                                                <input type="text" class="form-control" id="prenom"
                                                                    name="prenom" value="{{ $contact->prenom }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="telephone">{{ __('messages.telephone') }}</label>
                                                                <input type="text" class="form-control" id="telephone"
                                                                    name="telephone" value="{{ $contact->telephone }}"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">{{ __('messages.email') }}</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" value="{{ $contact->email }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message">{{ __('messages.message') }}</label>
                                                                <textarea class="form-control" id="message" name="message" rows="4" required>{{ $contact->message }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm"
                                                                data-dismiss="modal">{{ __('messages.close') }}</button>
                                                            <button type="submit" class="btn btn-info btn-sm">{{ __('messages.save_changes') }}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">{{ __('messages.no_messages') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <!-- Pagination Links -->
                            <div class="d-flex justify-content-center">
                                {!! $contacts->links('pagination::bootstrap-5')  !!} <!-- Pagination links -->
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
                title: '{{ __('messages.are_you_sure') }}',
                text: '{{ __('messages.delete_warning') }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{ __('messages.confirm_delete') }}',
                cancelButtonText: '{{ __('messages.cancel') }}',
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
