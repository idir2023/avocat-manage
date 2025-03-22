@extends('admins.layouts.master')

@section('title', 'Consultations')
@section('title_2', 'Gérer les consultations')

@section('content')
    <div class="content-wrapper">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4>Liste des consultations</h4>
                </div>

                <!-- Success Alert -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-2"
                        role="alert"
                        style="border-left: 5px solid #28a745; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                        <i class="fas fa-check-circle me-2" style="font-size: 1.5rem;"></i>
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close ms-auto" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Problème</th>
                                    <th>Fichier</th>
                                    <th>Paiement</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($consultations as $consultation)
                                    <tr>
                                        <td>{{ $consultation->id }}</td>
                                        <td>{{ ucfirst($consultation->nom) }} {{ ucfirst($consultation->prenom) }}</td>
                                        <td>{{ $consultation->email }}</td>
                                        <td>{{ $consultation->telephone ?? 'N/A' }}</td>
                                        <td>{{ Str::limit($consultation->probleme, 50) }}</td>
                                        <td>
                                            @if ($consultation->fichier)
                                                <a href="{{ asset('storage/' . $consultation->fichier) }}" target="_blank" class="text-primary">
                                                    📂 Voir le fichier
                                                </a>
                                            @else
                                                Aucun fichier
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge {{ strtolower($consultation->paiement_status) == 'payé' ? 'bg-success' : 'bg-warning' }}">
                                                {{ ucfirst($consultation->paiement_status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('consultations.show', $consultation->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i> Détails
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger delete-btn" data-id="{{ $consultation->id }}">
                                                <i class="fas fa-trash"></i> Supprimer
                                            </button>
                                            <form id="delete-form-{{ $consultation->id }}" action="{{ route('consultations.destroy', $consultation->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {{ $consultations->links('pagination::bootstrap-5')  }}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                let consultationId = this.getAttribute('data-id');
                Swal.fire({
                    title: "Êtes-vous sûr ?",
                    text: "Cette action est irréversible !",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Oui, supprimer !",
                    cancelButtonText: "Annuler"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`delete-form-${consultationId}`).submit();
                    }
                });
            });
        });
    });
</script>
@endsection