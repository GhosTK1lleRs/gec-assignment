@extends('layouts.app')

@section('content')
@include('components.reviewbox_mordal')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <label class="font-weight-bold">
                {{ __('Store Rating :') }}
            </label>
            <label class="color-orange" style="font-size: 1.25rem;">
                {{ __('4.8 Out of 5') }}
            </label>
            <label>
                {{ __('(32.6 Ratings)') }}
            </label>

        </div>
        <div class="col">
            <button type="button" data-toggle="modal" data-target="#reviewBoxMordal"
            class="btn btn-sm btn-wide color-orange-bg text-light float-right">
                {{ __('Review') }}
            </button>
        </div>
    </div>
    <div class="border-bottom mb-2"></div>

    <div class="color-orange-bg">
        <div class="row">
            <div class="col-md-3 text-center my-3">
                <div class="container">
                    <label class="text-light font-weight-bold" style="font-size: 1.5rem;">
                        {{ __('4.4 of 5') }}
                    </label>
                </div>
                <div class="__starrating">
                    @php $rating = 4.4; @endphp

                    @foreach(range(1,5) as $i)
                    <span class="fa-stack" style="width:1.25em">
                        <i class="fa fa-star-o fa-stack-1x text-light"></i>

                        @if($rating >0)
                        @if($rating >0.5)
                        <i class="fa fa-star fa-stack-1x text-light"></i>
                        @else
                        <i class="fa fa-star-half-o fa-stack-1x text-light"></i>

                        @endif
                        @endif
                        @php $rating--; @endphp
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 my-auto">
                <div class="container text-center my-3" id="filterBtnContainer">
                    <button type="button" id="all"
                        class="btn btn-light btn-sm btn-wide color-orange my-1 _filter-btn active">
                        {{ __('All') }}
                    </button>
                    <button type="button" id="5star"
                        class="btn btn-light btn-sm btn-wide color-orange my-1 _filter-btn">
                        {{ __('5 Star') }}
                        <small class="text-dark">
                            (54.4)
                        </small>
                    </button>
                    <button type="button" id="4star"
                        class="btn btn-light btn-sm btn-wide color-orange my-1 _filter-btn">
                        {{ __('4 Star') }}
                        <small class="text-dark">
                            (44.5)
                        </small>
                    </button>
                    <button type="button" id="3star"
                        class="btn btn-light btn-sm btn-wide color-orange my-1 _filter-btn">
                        {{ __('3 Star') }}
                        <small class="text-dark">
                            (35.4)
                        </small>
                    </button>
                    <button type="button" id="2star"
                        class="btn btn-light btn-sm btn-wide color-orange my-1 _filter-btn">
                        {{ __('2 Star') }}
                        <small class="text-dark">
                            (1.8)
                        </small>
                    </button>
                    <button type="button" id="1star"
                        class="btn btn-light btn-sm btn-wide color-orange my-1 _filter-btn">
                        {{ __('1 Star') }}
                        <small class="text-dark">
                            (2.9)
                        </small>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container _content">
        @php $rating = 4; @endphp
        <div class="container mt-3 _contentItem all 4star">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 542.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>



        @php $rating = 3; @endphp
        <div class="container mt-3 _contentItem all 3star">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 543.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>



        @php $rating = 1; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 544.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 3; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 545.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 2; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 546.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown h</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 2; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 547.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 2; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 548.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 1; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 549.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 4; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 550.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 4; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 551.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>
        @php $rating = 4; @endphp
        <div class="container mt-3 _contentItem all 4star">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 542.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>



        @php $rating = 3; @endphp
        <div class="container mt-3 _contentItem all 3star">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 543.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>



        @php $rating = 1; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 544.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 5; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 545.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 2; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 546.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown h</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 2; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 547.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 2; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 548.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 1; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 549.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, remaining essentially unch</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 4; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 550.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>


        @php $rating = 4; @endphp
        <div class="container mt-3 _contentItem all <?php echo $rating.'star'; ?>">
            <div class="row">
                <div class="col-5 mb-3">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <img src="{{ asset('storage/img/Ellipse 551.png') }}" alt="profilepic"
                                class="rounded-circle mt-2">
                        </div>
                        <div class="col-12 col-md-8 center-block">
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                <a href="#" class="text-decoration-none text-dark">{{ __('Honey') }}</a>
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">

                                @foreach(range(1,5) as $i)
                                <span class="fa-stack" style="width:1.25em">
                                    <i class="fa fa-star-o fa-stack-1x color-orange"></i>

                                    @if($rating >0)
                                    <i class="fa fa-star fa-stack-1x color-orange"></i>
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                                @endforeach
                            </div>
                            <div class="row d-flex justify-content-center justify-content-md-start">
                                2020-05-19
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="border-bottom mb-2"></div>
        </div>

        <div id="loadMore" class="row justify-content-center my-5">
            <button id="loadMore"
                class="btn btn-sm btn-wide color-darkblue-bg rounded-0 text-light">{{ __('LOAD MORE') }}</button>
        </div>
    </div>
</div>
