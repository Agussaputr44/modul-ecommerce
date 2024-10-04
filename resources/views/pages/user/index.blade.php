@extends('layouts.user.main')

@section('content')
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="">
                    <!-- single-slide -->
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{ asset('assets/templates/user/img/banner/banner-img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start product Area -->
<section class="section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Latest Products</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single product -->
            @forelse ($products as $item)
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <img class="img-fluid" src="{{ asset('images/' . $item->image) }}" alt="">
                    <div class="product-details">
                        <h6>{{ $item->name }}</h6>
                        <div class="price">
                            <h6>Harga: {{ $item->price }} Points</h6>
                        </div>
                        <div class="prd-bottom">
                            <a class="social-info" href="javascript:void(0);"
                                onclick="confirmPurchase('{{ $item->id }}', '{{ Auth::user()->id }}')">
                                <span class="fas fa-shopping-cart"></span> <!-- Ikon untuk 'Beli' -->
                                <p class="hover-text">Beli</p>
                            </a>
                            <a href="{{ route('user.detail.product', $item->id) }}" class="social-info">
                                <span class="fas fa-info-circle"></span> <!-- Ikon untuk 'Detail' -->
                                <p class="hover-text">Detail</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-lg-12 col-md-12">
                <div class="single-product">
                    <h3 class="text-center">Tidak ada produk</h3>
                </div>
            </div>
        @endforelse
        
        </div>
    </div>
</section>
<!-- end product Area -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmPurchase(productId, userId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan membeli produk ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Beli!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/product/purchase/' + productId + '/' + userId;
            }
        });
    }
</script>

<style>
    .prd-bottom {
        display: flex;
        justify-content: space-between; /* Distributes space between items */
        align-items: center; /* Vertically aligns items */
        margin-top: 10px; /* Adds space between the product details and buttons */
    }

    .social-info {
        display: flex;
        align-items: center; /* Aligns icon and text vertically */
        text-decoration: none; /* Removes underline */
        color: #333; /* Change this to your preferred color */
    }

    .social-info span {
        margin-right: 5px; /* Adds space between icon and text */
        font-size: 20px; /* Adjust icon size */
    }

    .hover-text {
        font-size: 14px; /* Adjust font size if needed */
    }
</style>
@endsection
