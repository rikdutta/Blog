@extends('main')

@section('title', '| Show')

@section('content')

	<div class="row">

		<div class="col-md-7">

			<h3>{{ $post->title }}</h3>
			<p class="lead">{{ $post->body }}</p>

		</div>

		<div class="col-sm-5">

			<div class="well">

				<dl class="dl-horizontal">
					<dt>Url: </dt>
					<dd><a href="{{ route('blog.single', $post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
				</dl>

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
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>

					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>

				</div>

				<div class="row">
					<div class="col-sm-12">
						{{ Html::linkRoute('posts.index', '<<  See all posts', [], ['class' => 'btn btn-default btn-block', 'style' => 'margin-top:20px']) }}
					</div>
				</div>

			</div>

		</div>

	</div>

@endsection