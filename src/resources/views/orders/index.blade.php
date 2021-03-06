@extends('layouts.shop', ['menu' => 'orders'])
@section('title', 'Orders')
@section('content')
<div class="text-end mb-2">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderManagement">
		Make
	</button>
</div>
<div class="mb-3 text-center">
	<table class="table mb-2">
		<thead>
			<tr>
				<th>#</th>
				<th>Product</th>
				<th>Comment</th>
				<th>Created at</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>
				<td>{{ $order->id }}</td>
				<td>
					<ul class="text-start">
						@foreach($order->products as $product)
						<li>{{ $product->name }} : {{ $product->pivot->quantity }}</li>
						@endforeach
					</ul>
				</td>
				<td>{{ $order->comment }}</td>
				<td>{{ $order->created_at }}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $orders->links() }}
</div>
@include('orders.save')
@endsection