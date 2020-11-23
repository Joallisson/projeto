@extends('layouts.app-admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.compras') }}">
                            @csrf

                            <!--+++++++++++++ Código Bagunçado ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                            <div class="form-group row">
                                <label for="valor_total" class="col-md-4 col-form-label text-md-right">{{ __('Valor Total') }}</label>

                                <div class="col-md-6">
                                    <input id="valor_total" type="number" class="form-control @error('valor_total') is-invalid @enderror" name="valor_total" value="{{ old('valor_total') }}" required autocomplete="valor_total" autofocus>

                                    @error('valor_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quant_tot_comprada" class="col-md-4 col-form-label text-md-right">{{ __('Quantidade') }}</label>

                                <div class="col-md-6">
                                    <input id="quant_tot_comprada" type="numer" class="form-control @error('quant_tot_comprada') is-invalid @enderror" name="quant_tot_comprada" value="{{ old('quant_tot_comprada') }}" required autocomplete="quant_tot_comprada" autofocus>

                                    @error('quant_tot_comprada')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpf_gerente" class="col-md-4 col-form-label text-md-right">{{ __('CPF Gerente') }}</label>

                                <div class="col-md-6">
                                    <input id="cpf_gerente" type="text" class="form-control @error('cpf_gerente') is-invalid @enderror" name="cpf_gerente" value="{{ old('cpf_gerente') }}" required autocomplete="cpf_gerente" autofocus>

                                    @error('cpf_gerente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> 

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
