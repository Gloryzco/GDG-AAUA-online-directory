@extends('layout2')
    @section('title')
        members
    @endsection

    @section('menuname')
        Members
    @endsection

    @section('content')
    <div class="row">
        @foreach($members as $member)
            <div class="col-sm-6 col-xl-3">

              <div class="c-card is-animated u-text-center">
                <div class="c-avatar u-inline-flex u-mb-small">
                  <img class="c-avatar__img" src="img/avatar1-72.jpg" alt="Clark">
                </div>
                <h4>{{$member -> firstname}} {{$member -> lastname}}</h4>
                <p class="u-pb-small u-mb-small u-border-bottom">{{$member -> specification}}</p>

                <p class="u-h4">
                  <a class="u-mr-xsmall" href="#">
                    <i class="feather icon-facebook"></i>
                  </a>
                  <a class="u-mr-xsmall" href="#">
                    <i class="feather icon-twitter"></i>
                  </a>
                  <a class="u-mr-xsmall" href="#">
                    <i class="feather icon-github"></i>
                  </a>
                </p>
              </div>

            </div>
            @endforeach
          <div class="row">
    @endsection

