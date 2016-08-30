@extends('main')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Nouvel terrain</h1>
			<hr>
			<form class="form-horizontal" role="form" method="POST" action="{{ route('fields.store') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-4 control-label">Titre</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                	<label for="description" class="col-md-4 control-label">Description</label>
					<div class="col-md-6">
						<textarea class="form-control" id="description" name="description" rows="5" style="resize:none;"></textarea>

						@if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
					</div>
				</div>

				<div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                    <label for="size" class="col-md-4 control-label">Taille (en mCarré)</label>

                    <div class="col-md-6">
                        <input id="size" type="text" class="form-control" name="size" value="{{ old('size') }}">

                        @if ($errors->has('size'))
                            <span class="help-block">
                                <strong>{{ $errors->first('size') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="type" class="col-md-4 control-label">Type</label>

                    <div class="col-md-6">
                        <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}">

                        @if ($errors->has('type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="address" class="col-md-4 control-label">Adresse</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                        @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('geolocalisation') ? ' has-error' : '' }}">
                    <label for="geolocalisation" class="col-md-4 control-label">Géolocalisation</label>

                    <div class="col-md-6">
                        <input id="geolocalisation" type="text" class="form-control" name="geolocalisation" value="{{ old('geolocalisation') }}">

                        @if ($errors->has('geolocalisation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('geolocalisation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Ajouter terrain
                        </button>
                    </div>
                </div>
            </form>
		</div>
	</div>
@endsection