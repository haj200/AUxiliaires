<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AUxiliaire-DashboardAdmin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('welcome/images/favi.jpg') }}" type="image/gif" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e04a0d333b.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e04a0d333b.js" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('users/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="{{ asset('dashboard/img/logo.png') }}" alt="#">AUxiliaire
                    </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('dashboard/img/logol.jpg') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">EN-NOURY Hajar</h6>
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href=" {{route('admin.dashboard')}} " class="nav-item nav-link   "><i class="fa fa-tachometer-alt me-2 "></i>Dashboard</a>
                    <a href=" {{route('users.index')}} " class="nav-item nav-link "><i class="fa fa-user me-2"></i>Users</a>
                    <a href="" class="nav-item nav-link active   "><i class="fa-solid fa-book-atlas me-2"></i>Entités Territorielles</a>
                    <a href=" {{route('auxiliaires.index')}}" class="nav-item nav-link  "><i class="fa-solid fa-users-line me-2"></i>Auxiliaire d'autorité</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">familles des auxiliaires</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('conjoints.index')}}" class="dropdown-item">Leurs Conjoints</a>
                            <a href="{{route('enfants.index')}}" class="dropdown-item">Leurs Enfants</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Exportation Exel</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('entiteterritorielles.export')}}" class="dropdown-item">Entités Territorielles</a>
                            <a href="{{route('users.export')}}" class="dropdown-item">Managers</a>
                            <a href="{{route('auxiliaires.export')}}" class="dropdown-item">Auxiliaires</a>
                            <a href="{{route('enfants.export')}}" class="dropdown-item"> Enfants</a>
                            <a href="{{route('conjoints.export')}}" class="dropdown-item">Conjoints</a>
                            <a href="{{route('auxiliaires.exportGlob')}}" class="dropdown-item">Exportation Globale</a>
                            <a href="{{route('auxiliaires.exportCard')}}" class="dropdown-item">Exportation Des Cartes</a>
                        </div>
                    </div>

                </div>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><img src="{{ asset('dashboard/img/logo.png') }}" alt="#"></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form action="{{ route('search.index') }}" method="GET" class="d-none d-md-flex ms-4">
                    <input type="text" class="form-control bg-dark border-0" name="keyword" placeholder="Rechercher..." required>
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('dashboard/img/logol.jpg') }}"
                                alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">EN-NOURY Hajar</span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('admin.logout') }}" class="btn btn-primary m-2">Log out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Content Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top m-3 p-4 d-flex justify-content-between align-items-center">
                    <h4>Entités Territoriales</h4>
                    <a href="{{ route('entiteterritorielles.create') }}" class="btn btn-primary">Ajouter une entité
                        territoriale</a>
                </div>
            </div>

            @if(session('success'))
            <div class="alert alert-success m-4">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger m-4">
                {{ session('error') }}
            </div>
        @endif
        
            <div class="container py-4">
                @if ($entites->count())
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Nom en Arabe</th>
                                <th scope="col">Type</th>
                                <th scope="col">Géré par</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entites as $entite)
                                <tr>
                                    <th scope="row">{{ $entite->id }}</th>
                                    <td>{{ $entite->Nom }}</td>
                                    <td>{{ $entite->Nom_Ar }}</td>
                                    <td>{{ $entite->type }}</td>
                                    <td>{{ $entite->manager->name }}</td>
                                    <td>
                                        <a href="{{ route('entiteterritorielles.show', $entite->id) }}"
                                            class="btn btn-info btn-sm">Voir</a>
                                        <a href="{{ route('entiteterritorielles.edit', $entite->id) }}"
                                            class="btn btn-warning btn-sm">Éditer</a>
                                        <form action="{{ route('entiteterritorielles.destroy', $entite->id) }}"
                                            method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette entité ?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>

            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm">
                        {{ $entites->links('pagination::bootstrap-4') }}
                    </ul>
                </nav>
            </div>
        @else
            <p>Aucune entité territoriale trouvée.</p>
            @endif


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Auxiliaire</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>




        <!-- Footer Start -->



        <!-- Footer End -->

        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <script src="{{ asset('users/script.js') }}"></script>
</body>

</html>
