@extends('admins.layouts.master')
@section('title', __('messages.actualites'))
@section('title_2', __('messages.manage_actualites'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('messages.actualites') }}</h4>

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
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createModal">
                            {{ __('messages.add_new_actualite') }}
                        </button>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.name') }}</th>
                                        <th>{{ __('messages.logo') }}</th>
                                        <th>{{ __('messages.description') }}</th>
                                        <th>{{ __('messages.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actualites as $actualite)
                                        <tr>
                                            <td>{{ $actualite->nom }}</td>
                                            <td>
                                                @if ($actualite->logo)
                                                <img src="{{ Storage::url($actualite->logo) }}" alt="Logo" width="100">
                                                @else
                                                    {{ __('messages.no_logo') }}
                                                @endif
                                            </td>
                                            <td>{{ Str::limit($actualite->description, 50) }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-icon-text"
                                                    data-toggle="modal" data-target="#editModal{{ $actualite->id }}">
                                                    <i class="mdi mdi-pencil-outline btn-icon-prepend"></i> {{ __('messages.edit') }}
                                                </button>

                                                <div class="modal fade" id="editModal{{ $actualite->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="editModalLabel{{ $actualite->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{ __('messages.edit_actualite') }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('actualites.update', $actualite->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="nom">{{ __('messages.name') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="nom" value="{{ $actualite->nom }}"
                                                                            required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="logo">{{ __('messages.logo') }}</label>
                                                                        <input type="file" class="form-control"
                                                                            name="logo">
                                                                        @if ($actualite->logo)
                                                                            <small class="text-muted">{{ __('messages.current_logo') }} :</small><br>
                                                                            <img src="{{ asset('storage/' . $actualite->logo) }}"
                                                                                alt="Logo" width="80">
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="description">{{ __('messages.description') }}</label>
                                                                        <textarea class="form-control" name="description" rows="4" required>{{ $actualite->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                                        data-dismiss="modal">{{ __('messages.close') }}</button>
                                                                    <button type="submit"
                                                                        class="btn btn-info btn-sm">{{ __('messages.update') }}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-danger btn-icon-text"
                                                    onclick="confirmDelete({{ $actualite->id }})">
                                                    <i class="mdi mdi-delete-outline btn-icon-prepend"></i> {{ __('messages.delete') }}
                                                </button>
                                                <form id="deleteForm{{ $actualite->id }}"
                                                    action="{{ route('actualites.destroy', $actualite->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $actualites->links('pagination::bootstrap-5') !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('messages.add_new_actualite') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('actualites.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nom">{{ __('messages.name') }}</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">{{ __('messages.logo') }}</label>
                            <input type="file" class="form-control" name="logo">
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('messages.description') }}</label>
                            <textarea class="form-control" name="description" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">{{ __('messages.close') }}</button>
                        <button type="submit" class="btn btn-info btn-sm">{{ __('messages.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function confirmDelete(actualiteId) {
            Swal.fire({
                title: '{{ __('messages.are_you_sure') }}',
                text: "{{ __('messages.this_action_is_irreversible') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{ __('messages.yes_delete') }}',
                cancelButtonText: '{{ __('messages.no_cancel') }}',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + actualiteId).submit();
                }
            });
        }
    </script>
@endsection
