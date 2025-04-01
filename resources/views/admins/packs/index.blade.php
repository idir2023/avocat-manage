@extends('admins.layouts.master')
@section('title', __('messages.packs'))
@section('title_2', __('messages.manage_packs'))

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('messages.packs') }}</h4>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Bouton Ajouter -->
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createModal">
                        {{ __('messages.add_new_pack') }}
                    </button>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.name') }}</th>
                                    <th>{{ __('messages.slug') }}</th>
                                    <th>{{ __('messages.description') }}</th>
                                    <th>{{ __('messages.price') }}</th>
                                    <th>{{ __('messages.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packs as $pack)
                                    <tr>
                                        <td>{{ $pack->name }}</td>
                                        <td>{{ $pack->slug }}</td>
                                        <td>{{ Str::limit($pack->description, 50) }}</td>
                                        <td>{{ $pack->price }} MAD</td>
                                        <td>
                                            <!-- Bouton Modifier -->
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $pack->id }}">
                                                {{ __('messages.edit') }}
                                            </button>

                                            <!-- Bouton Supprimer -->
                                            <form action="{{ route('packs.destroy', $pack->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('messages.are_you_sure') }}');">
                                                    {{ __('messages.delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Modal Modifier Pack -->
                                    <div class="modal fade" id="editModal{{ $pack->id }}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('messages.edit_pack') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <form action="{{ route('packs.update', $pack->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>{{ __('messages.name') }}</label>
                                                            <input type="text" class="form-control name-input" name="name" value="{{ $pack->name }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>{{ __('messages.slug') }}</label>
                                                            <input type="text" class="form-control slug-input" name="slug" value="{{ $pack->slug }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>{{ __('messages.description') }}</label>
                                                            <textarea class="form-control" name="description" rows="3">{{ $pack->description }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>{{ __('messages.price') }}</label>
                                                            <input type="number" class="form-control" name="price" step="0.01" value="{{ $pack->price }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.close') }}</button>
                                                        <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ajouter Pack -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.add_new_pack') }}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="{{ route('packs.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>{{ __('messages.name') }}</label>
                        <input type="text" class="form-control name-input" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.slug') }}</label>
                        <input type="text" class="form-control slug-input" name="slug" readonly>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.description') }}</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.price') }}</label>
                        <input type="number" class="form-control" name="price" step="0.01" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('messages.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script pour générer le slug automatiquement -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function generateSlug(str) {
            return str.toLowerCase()
                .replace(/\s+/g, '-') // Remplace les espaces par des tirets
                .replace(/[^\w\-]+/g, '') // Supprime les caractères spéciaux
                .replace(/\-\-+/g, '-') // Évite les doubles tirets
                .replace(/^-+|-+$/g, ''); // Supprime les tirets en début/fin
        }

        document.querySelectorAll('.name-input').forEach(input => {
            input.addEventListener('input', function () {
                let slugField = this.closest('form').querySelector('.slug-input');
                slugField.value = generateSlug(this.value);
            });
        });
    });
</script>

@endsection
