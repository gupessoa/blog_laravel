@extends("admin_dashboard.layouts.app")

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tags</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Todas Tags</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>#</th>
										<th>Nome</th>
                                        <th>Posts Relacionados</th>
										<th>Criado em</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($tags as $tag)
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#P-{{ $tag->id }}</h6>
												</div>
											</div>
										</td>
										<td>{{ $tag->name }} </td>
                                        <td>
                                            <a class='btn btn-primary btn-sm' href="{{ route('admin.tags.show', $tag) }}">Posts Relacionados</a>
                                        </td>
                                        <td>{{ $tag->created_at->diffForHumans() }}</td>
                                        <td>
											<div class="d-flex order-actions">
												<a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $tag->id }}').submit();" class="ms-3"><i class='bx bxs-trash'></i></a>

                                                <form method='post' action="{{ route('admin.tags.destroy', $tag) }}" id='delete_form_{{ $tag->id }}'>@csrf @method('DELETE')</form>
                                            </div>
										</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>

                        <div class='mt-4'>
                        {{ $tags->links() }}
                        </div>

					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection


    @section("script")

    <script>
        $(document).ready(function () {

            setTimeout(() => {
                $(".general-message").fadeOut();
            }, 5000);
        });
    </script>
    @endsection
