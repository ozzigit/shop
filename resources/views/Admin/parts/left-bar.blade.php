@section('left-bar')
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="{{ route('shop') }}">
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				Shop
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
                @if(isset(auth()->user()->photo))
					<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="{{ auth()->user()->name }} photo" />
                        @else
                    <img src="{{ asset('storage/img/no_image.jpg') }}" class="rounded-circle my-n1" alt="Avatar" width="32" height="32">
                        @endif
					<div class="fw-bold">{{ auth()->user()->email }}</div>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-item active">
						<a data-bs-target="#commerce" data-bs-toggle="collapse" class="sidebar-link">
							<i class="align-middle me-2 fas fa-fw fa-money-check-alt"></i> <span class="align-middle">Commerce</span>
						</a>
						<ul id="commerce" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item active"><a class="sidebar-link" href="{{ route('admin.transactions.index')}}">Transactions</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.orders.index') }}">Orders</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.favorites.index') }}">Favorites products</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#products" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-shopping-bag"></i> <span class="align-middle">Products</span>
						</a>
						<ul id="products" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.products.index') }}">All products</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.products.create') }}">Add product</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.categories.index') }}">Categories</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.categories.create') }}">Add categorie</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#users" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-users"></i> <span class="align-middle">Users</span>
						</a>
						<ul id="users" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.users.index')}}">All users</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.users.create')}}">Add user</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</nav>
@endsection
