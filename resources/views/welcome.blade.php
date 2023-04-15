@extends('layouts.app')
@section('content')
    <section class="blog">
        <div class="container">
            <h2 class="heading-40 large-heading">OUR BLOG</h2>
           
                <div class="blog-post">
                    <div class="row">
                        @php
                            $blog=DB::select('select * from blogs');
                        @endphp

                        @foreach ($blog as $blog)
                            <div class="col-lg-4 col-md-6">
                                <div class="blog-post-area">
                                    <div class="blog-image">
                                        <img src="https://shenandoahcountyva.us/bos/wp-content/uploads/sites/4/2018/01/picture-not-available-clipart-12.jpg" class="img-fluid w-50" alt="Blog Image">
                                    
                                    </div>
                            

                                    <p>{!! \Str::limit($blog->content, 20) !!}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
         
        </div>
    </section>
@endsection