  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p class="copyright text-muted">
                         {{trans('arabic.Copyright')}}
                         &copy; Nice 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{url('public/front-end')}}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('public/front-end')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{url('public/front-end')}}/js/jqBootstrapValidation.js"></script>
    <script src="{{url('public/front-end')}}/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="{{url('public/front-end')}}/js/clean-blog.min.js"></script>
    <script src="{{url('public/front-end')}}/js/app.js"></script>
@yield('js')
</body>

</html>