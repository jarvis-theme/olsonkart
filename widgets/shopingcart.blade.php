<a  href="{{url('checkout')}}"><i class="icon-shopping-cart"></i> {{Shpcart::cart()->total_items()}} Items - {{ price(Shpcart::cart()->total() )}}</a>