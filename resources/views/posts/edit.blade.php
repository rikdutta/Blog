@extends('main')

@section('title', '| Edit Post')

@section('content')

	<div class="row">

		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

			<div class="col-md-7">

				{{ Form::label('title', 'Title: ') }}
				{{ Form::text('title', null, ["class" => "form-control input-lg"]) }}

				{{ Form::label('slug', 'Slug: ', ['style' => 'margin-top:20px']) }}
				{{ Form::text('slug', null, ["class" => "form-control input-lg"]) }}

				{{ Form::label('body', 'Body: ', ['style' => 'margin-top:20px']) }}
				{{ Form::textarea('body', null, ["class" => "form-control"]) }}

			</div>

			<div class="col-sm-5">

				<div class="well">

					<dl class="dl-horizontal">
						<dt>Created At: </dt>
						<dd>{{ date('jS M Y h:ia', strtotime($post->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Last Updated: </dt>
						<dd>{{ date('jS M Y h:ia', strtotime($post->updated_at)) }}</dd>
					</dl>

					<div class="row">

						<div class="col-sm-6">
							{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
						</div>

						<div class="col-sm-6">
							{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
						</div>

					</div>

				</div>

			</div>

		{!! Form::close() !!}

	</div>

@endsection