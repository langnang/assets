<div class="list-group list-group-sm mb-3">
	@foreach ($data as $item)
		<a href="/{{ $prefix }}/content/{{ $item['uid'] }}" class="list-group-item list-group-item-action">
			<div class="row">
				<div class="col">{{ $item['name'] }} </div>
				<div class="col col-auto small align-self-center">{{ $item['updated_at'] }}</div>
			</div>
		</a>
	@endforeach
</div>
