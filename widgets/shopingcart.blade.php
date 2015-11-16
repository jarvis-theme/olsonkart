<a  href="{{url('checkout')}}"><i class="icon-shopping-cart"></i> {{Shpcart::cart()->total_items()}} Items - {{ price(Shpcart::cart()->total() )}}</a>
<!-- data-toggle="modal" <div class="btn-group">
	<button class="btn dropdown-toggle" data-toggle="dropdown">
		<i class="icon-shopping-cart"></i> 
		({{Shpcart::cart()->total_items()}}) 
		<span class="caret"></span>
	</button>
	<div class="dropdown-menu cart-content pull-right">
		<table class="table-cart">
			<tbody>
				@foreach (Shpcart::cart()->contents() as $key => $cart)
					<tr>
						<td class="cart-product-info">
							<a href=""><img src="{{url(getPrefixDomain().'/produk/'.$cart['image'])}}" alt="product image"></a>
							<div class="cart-product-desc">
								<p><a class="invarseColor" href="#">{{$cart['name']}}</a></p>
							</div>
						</td>
						<td class="cart-product-setting">
							<p><strong>{{ $cart['qty']}}x-{{ price($cart['price'])}}</strong></p>
						</td>
					</tr>
				@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td class="cart-product-info">
					<a href="{{url('checkout')}}" class="btn btn-small btn-primary">Checkout</a>
				</td>
				<td>
					<h3>{{ price(Shpcart::cart()->total() )}}</h3>
				</td>
			</tr>
		</tfoot>
		</table>
	</div>
</div> -->
@if(Shpcart::cart()->total_items()!=0)
<!-- Shopping cart Modal -->
<div class="modal fade" id="shoppingcart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Shopping Cart</h4>
			</div>
			<div class="modal-body">
				<!-- Items table -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						@foreach (Shpcart::cart()->contents() as $key => $cart)
						<tr>
							<td><a href="#">{{$cart['name']}}</a></td>
							<td>{{ $cart['qty']}}</td>
							<td>{{ price($cart['price'])}}</td>
						</tr>
						@endforeach
						<tr>
							<th></th>
							<th>Total</th>
							<th>{{ price(Shpcart::cart()->total() )}}</th>
						</tr>
				  </tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
				<button type="button" <button onclick="window.location.href='{{url('checkout')}}'" class="btn btn-primary btn-small btn-block"> class="btn btn-info">Checkout</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif