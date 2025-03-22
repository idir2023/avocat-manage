@extends('admins.layouts.master')

@section('title', 'Détails de la Consultation')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Détails de la Consultation #{{ $consultation->id }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Nom :</strong> {{ $consultation->nom }} {{ $consultation->prenom }}</p>
            <p><strong>Email :</strong> {{ $consultation->email }}</p>
            <p><strong>Téléphone :</strong> {{ $consultation->telephone ?? 'N/A' }}</p>
            <p><strong>Problème :</strong> {{ $consultation->probleme }}</p>
            <p><strong>Paiement :</strong> 
                <span class="badge {{ $consultation->paiement_status == 'payé' ? 'bg-success' : 'bg-warning' }}">
                    {{ ucfirst($consultation->paiement_status) }}
                </span>
            </p>
            <p><strong>Fichier :</strong> 
                @if ($consultation->fichier)
                    <a href="{{ asset('storage/' . $consultation->fichier) }}" target="_blank" class="text-primary">
                        📂 Voir le fichier
                    </a>
                @else
                    Aucun fichier
                @endif
            </p>
            <a href="{{ route('consultations.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
