@extends('admins.layouts.master')

@section('title', __('messages.consultations'))
@section('title_2', __('messages.gérer_les_consultations'))

@section('content')
    <div class="content-wrapper">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.liste_des_consultations') }}</h4>
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
                                    <th>{{ __('messages.id') }}</th>
                                    <th>{{ __('messages.nom') }}</th>
                                    <th>{{ __('messages.pack') }}</th>
                                    <th>{{ __('messages.email') }}</th>
                                    <th>{{ __('messages.telephone') }}</th>
                                    <th>{{ __('messages.probleme') }}</th>
                                    <th>{{ __('messages.fichier') }}</th>
                                    <th>{{ __('messages.paiement') }}</th>
                                    <th>{{ __('messages.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($consultations as $consultation)
                                    <tr>
                                        <td>{{ $consultation->id }}</td>
                                        <td>{{ ucfirst($consultation->nom) }} {{ ucfirst($consultation->prenom) }}</td>
                                        <td>{{ $consultation->pack->name }}</td>
                                        <td>{{ $consultation->email }}</td>
                                        <td>{{ $consultation->telephone ?? __('messages.n_a') }}</td>
                                        <td>{{ Str::limit($consultation->probleme, 50) }}</td>
                                        <td>
                                            @if ($consultation->fichier)
                                                <a href="{{ asset('storage/' . $consultation->fichier) }}" target="_blank"
                                                    class="text-primary">
                                                    📂 {{ __('messages.voir_le_fichier') }}
                                                </a>
                                            @else
                                                {{ __('messages.aucun_fichier') }}
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
                                                <i class="fas fa-eye"></i> {{ __('messages.détails') }}
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger delete-btn"
                                                data-id="{{ $consultation->id }}">
                                                <i class="fas fa-trash"></i> {{ __('messages.supprimer') }}
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
                                                <i class="fas fa-reply"></i> {{ __('messages.répondre') }}
                                            </button>
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
                    <h5 class="modal-title" id="replyModalLabel">{{ __('messages.répondre_à_la_consultation') }}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea id="replyText" class="form-control" rows="4" placeholder="{{ __('messages.écrivez_votre_réponse_ici') }}"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.annuler') }}</button>
                    <button type="button" class="btn btn-primary" id="submitReplyBtn">{{ __('messages.envoyer') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- SweetAlert CDN -->
    <script>
        function showReplyAlert(replyText) {
            if (replyText === '{{ __('messages.pas_de_réponse_encore') }}') {
                // Show a warning if there's no reply
                Swal.fire({
                    icon: 'warning',
                    title: '{{ __('messages.pas_de_réponse_encore') }}',
                    text: replyText,
                    confirmButtonText: '{{ __('messages.ok') }}',
                });
            } else {
                // Show the reply in a success-style alert
                Swal.fire({
                    title: '{{ __('messages.réponse') }}',
                    text: replyText,
                    confirmButtonText: '{{ __('messages.ok') }}',
                });
            }
        }

        $(document).ready(function() {
            // Delete Consultation Logic
            $('.delete-btn').on('click', function() {
                let consultationId = $(this).data('id');
                Swal.fire({
                    title: "{{ __('messages.êtes_vous_sûr') }}",
                    text: "{{ __('messages.cette_action_est_irréversible') }}",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "{{ __('messages.oui_supprimer') }}",
                    cancelButtonText: "{{ __('messages.annuler') }}"
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
                                Swal.fire('{{ __('messages.réponse_envoyée') }}',
                                    '{{ __('messages.votre_réponse_a_été_envoyée') }}',
                                    'success');
                            },
                            error: function(error) {
                                Swal.fire('{{ __('messages.erreur') }}',
                                    '{{ __('messages.une_erreur_est_survenue') }}',
                                    'error');
                            }
                        });
                    } else {
                        Swal.fire('{{ __('messages.erreur') }}', '{{ __('messages.veillez_entrer_une_réponse') }}', 'warning');
                    }
                });
            });
        });
    </script>
@endsection
