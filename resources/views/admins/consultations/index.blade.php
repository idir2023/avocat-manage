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
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-2" role="alert"
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
                                    <th>Pack</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    @if (auth()->user()->is_admin)
                                        <th>Problème</th>
                                    @else
                                        <th>Réponse</th>
                                    @endif
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
                                        <td>{{ $consultation->pack->name }}</td>
                                        <td>{{ $consultation->email }}</td>
                                        <td>{{ $consultation->telephone ?? 'N/A' }}</td>
                                        @if (auth()->user()->is_admin)
                                            <td>{{ Str::limit($consultation->probleme, 50) }}</td>
                                        @else
                                            <td>
                                                <button class="btn btn-info btn-sm"
                                                    onclick="showReplyAlert('{{ addslashes($consultation->reply_text ?? 'Pas de réponse encore') }}')">
                                                    <i class="fas fa-comment"></i> Voir réponse
                                                </button>
                                            </td>
                                        @endif
                                        <td>
                                            @if ($consultation->fichier)
                                                <a href="{{ asset('storage/' . $consultation->fichier) }}" target="_blank"
                                                    class="text-primary">
                                                    📂 Voir le fichier
                                                </a>
                                            @else
                                                Aucun fichier
                                            @endif
                                        </td>
                                        <td>
                                            <span
                                                class="badge {{ strtolower($consultation->paiement_status) == 'payé' ? 'bg-success' : 'bg-warning' }}">
                                                {{ ucfirst($consultation->paiement_status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('consultations.show', $consultation->id) }}"
                                                class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i> Détails
                                            </a>
                                            @if (auth()->user()->is_admin)
                                                <button type="button" class="btn btn-sm btn-danger delete-btn"
                                                    data-id="{{ $consultation->id }}">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                                <form id="delete-form-{{ $consultation->id }}"
                                                    action="{{ route('consultations.destroy', $consultation->id) }}"
                                                    method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <!-- Button to trigger the reply modal -->
                                                <button type="button" class="btn btn-sm btn-warning reply-btn"
                                                    data-id="{{ $consultation->id }}">
                                                    <i class="fas fa-reply"></i> Répondre
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {{ $consultations->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Reply Modal -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="replyModalLabel">Répondre à la Consultation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea id="replyText" class="form-control" rows="4" placeholder="Écrivez votre réponse ici..."></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="submitReplyBtn">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- SweetAlert CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function showReplyAlert(replyText) {
            if (replyText === 'Pas de réponse encore') {
                // Show a warning if there's no reply
                Swal.fire({
                    icon: 'warning',
                    title: 'Pas de réponse encore',
                    text: replyText,
                    confirmButtonText: 'Ok',
                });
            } else {
                // Show the reply in a success-style alert
                Swal.fire({
                    title: 'Réponse',
                    text: replyText,
                    confirmButtonText: 'Ok',
                });
            }
        }

        $(document).ready(function() {
            // Delete Consultation Logic
            $('.delete-btn').on('click', function() {
                let consultationId = $(this).data('id');
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
                        $('#delete-form-' + consultationId).submit();
                    }
                });
            });

            // Reply Consultation Pop-up Logic
            $('.reply-btn').on('click', function() {
                let consultationId = $(this).data('id');
                // Open the modal when reply button is clicked
                $('#replyModal').modal('show');

                // Handle the submit button inside the modal
                $('#submitReplyBtn').on('click', function() {
                    let replyText = $('#replyText').val();
                    if (replyText.trim() !== '') {
                        // You can make an AJAX request here to send the response to the server
                        $.ajax({
                            url: '/consultations/' + consultationId +
                                '/reply', // Replace with your actual route
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                reply: replyText,
                            },
                            success: function(response) {
                                $('#replyModal').modal('hide');
                                Swal.fire('Réponse envoyée',
                                    'Votre réponse a été envoyée avec succès.',
                                    'success');
                            },
                            error: function(error) {
                                Swal.fire('Erreur',
                                    'Une erreur est survenue lors de l\'envoi de votre réponse.',
                                    'error');
                            }
                        });
                    } else {
                        Swal.fire('Erreur', 'Veuillez entrer une réponse.', 'warning');
                    }
                });
            });
        });
    </script>
@endsection
