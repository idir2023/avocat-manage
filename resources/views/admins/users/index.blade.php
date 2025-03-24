@extends('admins.layouts.master')
@section('title', 'Users')
@section('title_2', 'Manage Users')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('messages.user_management') }}</h4>

                    <!-- Add User Button -->
                    <button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#addUserModal">
                        <i class="mdi mdi-plus-circle"></i> {{ __('messages.add_user') }}
                    </button>

                    <!-- Success Alert -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                            <i class="mdi mdi-check-circle-outline me-2" style="font-size: 1.5rem;"></i>
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close ms-auto" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.name') }}</th>
                                    <th>{{ __('messages.email') }}</th>
                                    <th>{{ __('messages.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <a href="mailto:{{ $user->email }}" class="btn btn-info btn-sm">
                                                {{ $user->email }}
                                            </a>
                                        </td>
                                        <td>
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{ $user->id }}">
                                                <i class="mdi mdi-pencil-outline"></i> {{ __('messages.edit_user') }}
                                            </button>

                                            <!-- Delete Button -->
                                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $user->id }})">
                                                <i class="mdi mdi-delete-outline"></i> {{ __('messages.delete_user') }}
                                            </button>

                                            <!-- Hidden Delete Form -->
                                            <form id="deleteForm{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('messages.edit_user') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('users.update', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH') <!-- This overrides the form's method to PATCH -->
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('messages.name') }}</label>
                                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="email">{{ __('messages.email') }}</label>
                                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">{{ __('messages.close') }}</button>
                                                        <button type="submit" class="btn btn-info btn-sm">{{ __('messages.save_changes') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">{{ __('messages.no_users_found') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center">
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.add_new_user') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">{{ __('messages.name') }}</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('messages.email') }}</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('messages.password') }}</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">{{ __('messages.close') }}</button>
                    <button type="submit" class="btn btn-success btn-sm">{{ __('messages.add_user') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function confirmDelete(userId) {
        Swal.fire({
            title: '{{ __("messages.are_you_sure") }}',
            text: '{{ __("messages.you_wont_be_able_to_revert") }}',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '{{ __("messages.yes_delete_it") }}',
            cancelButtonText: '{{ __("messages.no_cancel") }}',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + userId).submit();
            }
        });
    }
</script>
@endsection
