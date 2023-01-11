@extends('layouts.sistema')

@section('content')
    @component('components.show')
        @slot('title', 'Detalhes da Equipe')
        @slot('content')
            @include('campeonatos.form', ['create'=> false, 'show'=> true])
        @endslot
        @slot('back')
            <a href="{{ route('campeonatos.edit', $campeonato->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('campeonatos.index') }}" class="btn btn-warning float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $(".form-control").attr("disabled", true);
    </script>
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush