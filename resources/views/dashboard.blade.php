@extends('layout2')

    @section('title')
    Dashboard
    @endsection

    @section('menuname')
      My dashboard
    @endsection

        @section('content')
        <div class="container">
        <div class="row u-justify-center">
          <div class="col-lg-6 u-text-center">
            <h2 class="u-mb-small">Hello, welcome to GDG directory</h2>
            <p class="u-text-large u-mb-large">Start using Neat by exploring features included, we built a complete documentation just for you to help get up and running as quickly as possible.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-xl-4 u-ml-auto">
            <div class="c-card is-animated">
              <span class="c-icon c-icon--large u-mb-small">
                <i class="feather icon-home"></i>
              </span>

              <h5 class="u-mb-xsmall">Explore Your Dashboard</h5>
              <p class="u-mb-medium">Start using our app by exploring the various features that our apps give you </p>
              <a class="c-btn c-btn--info has-arrow" href="dashboard01.html">
                Explore<i class="feather icon-chevron-right"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 u-mr-auto">
            <div class="c-card is-animated">
              <span class="c-icon c-icon--large u-mb-small">
                <i class="feather icon-anchor"></i>
              </span>

              <h5 class="u-mb-xsmall">Start A Project</h5>
              <p class="u-mb-medium">Start a new project from scratch or import a project from your favourite app.</p>
              <a class="c-btn c-btn--info has-arrow" href="dashboard01.html">Start<i class="feather icon-chevron-right"></i></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-xl-4 u-ml-auto">
            <div class="c-card is-animated">
              <span class="c-icon c-icon--large u-mb-small">
                <i class="feather icon-users"></i>
              </span>

              <h5 class="u-mb-xsmall">Add Team Members</h5>
              <p class="u-mb-medium">Invite your team members to Neat and work on your projects together.</p>
              <a href="members.html" class="c-btn c-btn--info has-arrow">
                Add a member<i class="feather icon-chevron-right"></i>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 u-mr-auto">
            <div class="c-card is-animated">
              <span class="c-icon c-icon--large u-mb-small">
                <i class="feather icon-book"></i>
              </span>

              <h5 class="u-mb-xsmall">Read Docs</h5>
              <p class="u-mb-medium">A little confused, don't worry, learn how to use Neat by reading our starter guide.</p>
              <a href="dashboard01.html" class="c-btn c-btn--info has-arrow">Read More<i class="feather icon-chevron-right"></i></a>
            </div>
          </div>
        </div>
          @endsection

  