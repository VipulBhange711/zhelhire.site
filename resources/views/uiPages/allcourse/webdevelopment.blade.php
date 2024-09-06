@include('uiPages.include.uihead')

@include('uiPages.include.navbar')


<style>
    .navigation {
        position: relative;
        min-width: 540px;
        min-height: 120px;
        border-radius: 30px;
        background: #ee9ca7;
        background: -webkit-linear-gradient(to right, #ffdde1, #ee9ca7);
        background: linear-gradient(to right, #ffdde1, #ee9ca7);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navigation li {
        position: relative;
        list-style: none;
        width: 90px;
        margin: 0 5px;
    }

    .navigation li::before {
        content: "";
        position: absolute;
        top: 35px;
        left: 50%;
        transform: translateX(-50%);
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #222;
        transition: 0.5s;
    }

    .navigation li.active::before {
        background: #ff4463;
        box-shadow: 0 0 5px #ff4463, 0 0 10px #ff4463, 0 0 20px #ff4463,
            0 0 30px #ff4463, 0 0 40px #ff4463, 0 0 50px #ff4463;
    }

    .navigation li a {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-decoration: none;
    }

    .navigation li a .icon {
        position: absolute;
        font-size: 1.75em;
        width: 80px;
        height: 80px;
        display: flex;
        color: #aaa;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
        transition-delay: 0.2s;
    }

    .navigation li.active a .icon {
        transform: translateY(-55px);
        background: #ff4463;
        color: #c6c6c6;
        box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
            inset 2px 2px 3px rgba(255, 255, 255, 0.25),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        transition-delay: 0s;
    }

    .navigation li.active a .icon i {
        z-index: 22;
    }

    .navigation li a .icon::before {
        content: "";
        position: absolute;
        inset: 10px;
        background: #2f363e;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5),
            inset 2px 2px 3px rgba(255, 255, 255, 0.25),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        transform: scale(0);
        transition: 0.5s;
    }

    .navigation li.active a .icon::before {
        transform: scale(1);
    }

    .navigation li a .text {
        position: absolute;
        font-size: 0.75em;
        opacity: 0;
        transform: translateY(20px);
        transition: 0.5s;
        padding: 2px 10px;
        background: #fff;
        border-radius: 15px;
        color: #2f363e;
        box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);
        transition-delay: 0s;
    }

    .navigation li.active a .text {
        opacity: 1;
        transform: translateY(10px);
        transition-delay: 0.2s;
    }

    @media screen and (max-width: 668px) {
        .navigation {
            min-width: 100%;
        }

        .navigation li {
            width: 70px;
        }

        .navigation li a .icon {
            height: 60px;
            width: 60px;
            font-size: 19px;
        }
    }
</style>



<section class="our-courses" id="courses">

    <div class="container">

        <div class="row border border-info  ">

            <div class="col-3 border border-dark  text-white " style="background: #0f0c29; ">
                <h3 class="text-center " style="align-items: center; margin-top:15%; padding-bottom:20%">Javascript </h3>
                <div>
                    <img src="./Nagpur Job Placement Consultants _ ZhelHire Services &amp; Bhange Job Placement_files/webdevlopment.jpg" alt="">
                </div>
            </div>

            <div class="col-9 " style="background: #ece9e6;">

                <div class="row">
                    <div class="col-12">
                        <h2 class="text-dark display-4 header-text mt-5 p-5" style="font-weight:800">
                            <b>Certificate Program in Full Stack <em> Web Development </em></b>
                        </h2>
                        <p class="mt-3 h5">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This program provides a robust foundation in full stack web development, combining theoretical knowledge with practical skills. Whether you are new to web development or looking to enhance your expertise, this certificate program will prepare you for a successful career in full stack web development.
                        </p>
                    </div>

                    <div class="row mt-2 pb-3">
                        <div class="col-3 ">Duration: 4 Months &nbsp; <i class="fa fa-calendar"></i></div>
                        <div class="col-3 offset-1">Interview Preparation &nbsp; <i class="fa fa-thumbs-up"></i></div>
                        <div class="col-3 offset-1">Finish at your Own Pace &nbsp; <i class="fa fa-book"></i></div>
                    </div>

                    <div class="row pb-5 mt-4">
                        <div class="col-3 offset-1">
                            <button class="btn btn-lg btn-danger p-3 ml-5 mr-5">
                                &nbsp;&nbsp;&nbsp; Enroll Now &nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="col-3 offset-1">
                            <button class="btn btn-lg btn-warning ml-5  mr-5" >
                                Download <br> Brochure &nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-down"></i>
                            </button>
                        </div>

                        <!-- Button trigger modal -->


                        <div class="col-3 offset-1">

                            <button type="button" class="btn btn-primary btn-lg  p-3 ml-5 mr-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                View Demo &nbsp;&nbsp;&nbsp; <i class="fa fa-arrow-up"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>






<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Video title</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <iframe width="100%" height="300px" src="https://www.youtube-nocookie.com/embed/tzc0BVx6k7w?si=F3DvdcgrhcaLRkfr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-4">
                        <iframe width="100%" height="300px" src="https://www.youtube-nocookie.com/embed/tzc0BVx6k7w?si=F3DvdcgrhcaLRkfr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-4">
                        <iframe width="100%" height="300px" src="https://www.youtube-nocookie.com/embed/tzc0BVx6k7w?si=F3DvdcgrhcaLRkfr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn " data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





<div class="container">
    <section class="our-courses" id="courses">
        <ul class="navigation">
            <li>
                <a>
                    <span class="icon" id="HTML">
                        <i class="fa-brands fa-html5"></i>

                    </span>
                    <div class="text">HTML:5</div>
                </a>
            </li>
            <li class="active">
                <a>
                    <span class="icon" id="CSS">
                        <i class="fa-brands fa-css3-alt"></i>
                    </span>
                    <span class="text">CSS:3</span>
                </a>
            </li>

            <li>
                <a>
                    <span class="icon" id="Javascript">
                        <i class="fa-brands fa-js" style="color: #63E6BE;"></i>
                    </span>
                    <span class="text">Javascript</span>
                </a>
            </li>
            <li>
                <a>
                    <span class="icon" id="React">
                        <i class="fa-brands fa-react"></i>
                    </span>
                    <span class="text">React</span>
                </a>
            </li>
            <li>
                <a>
                    <span class="icon" id="Node">
                        <i class="fa-brands fa-node"></i>
                    </span>
                    <span class="text">Node</span>
                </a>
            </li>

            <li>
                <a>
                    <span class="icon" id="Laravel">
                        <i class="fa-brands fa-laravel"></i>
                    </span>
                    <span class="text">Laravel</span>
                </a>
            </li>
            <!-- <div class="indicator"></div> -->
        </ul>
    </section>


</div>
<div class="container" id="test"></div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@include('uiPages.include.uifoot')





<script>
    $(document).ready(function() {
        const $list = $(".navigation li");

        function activelink() {
            console.log("Clicked:", $(this).find('.text').text()); // Debug: See if this logs when clicked
            $list.removeClass("active");
            $(this).addClass("active");
        }

        $list.on("click", activelink);
    });
</script>

<script>
    $(document).ready(function() {

        $("#HTML").click(function() {
            $("#jquery").remove();

            $("#test").html('<div class="row" id="jquery"><table class="table table-bordered data-table table-primary"><thead><tr><th>No</th><th>Topic_name</th><th>Duration_Time</th><th>Requirement</th><th>Image</th><th>Video</th><th>time</th></tr></thead><tbody></tbody></table></div>');
            $(function() {


                var table = $('.data-table').DataTable({
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,

                    ajax: "{{route('Web.course')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'Topic_name',
                            name: 'Topic_name'
                        },
                        {
                            data: 'Duration_Time',
                            name: 'Duration_Time'
                        },
                        {
                            data: 'Requirement',
                            name: 'Requirement'
                        },
                        {
                            data: 'Image',
                            name: 'Image'
                        },
                        {
                            data: 'Video',
                            name: 'Video'
                        },
                        {
                            data: 'time',
                            name: 'time'
                        },

                    ]
                });
                return false;


            });


        });

        $("#CSS").click(function() {
            //   var check =   $("#test").val();
            //   console.warn(check);

            $("#test").html('<div class="row" id="jquery"><table class="table table-bordered data-table table-dark"><thead><tr><th>No</th><th>Topic_name</th><th>Duration_Time</th><th>Requirement</th><th>Image</th><th>Video</th><th>time</th></tr></thead><tbody></tbody></table></div>');


            $(function() {


                var table = $('.data-table').DataTable({
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,

                    ajax: "{{route('Web.course')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'Topic_name',
                            name: 'Topic_name'
                        },
                        {
                            data: 'Duration_Time',
                            name: 'Duration_Time'
                        },
                        {
                            data: 'Requirement',
                            name: 'Requirement'
                        },
                        {
                            data: 'Image',
                            name: 'Image'
                        },
                        {
                            data: 'Video',
                            name: 'Video'
                        },
                        {
                            data: 'time',
                            name: 'time'
                        },

                    ]
                });
                return false;


            });

        });


        $("#React").click(function() {
            //   var check =   $("#test").val();
            //   console.warn(check);

            $("#test").html('<div class="row" id="jquery"><table class="table table-bordered data-table table-info"><thead><tr><th>No</th><th>Topic_name</th><th>Duration_Time</th><th>Requirement</th><th>Image</th><th>Video</th><th>time</th></tr></thead><tbody></tbody></table></div>');


            $(function() {


                var table = $('.data-table').DataTable({
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,

                    ajax: "{{route('Web.course')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'Topic_name',
                            name: 'Topic_name'
                        },
                        {
                            data: 'Duration_Time',
                            name: 'Duration_Time'
                        },
                        {
                            data: 'Requirement',
                            name: 'Requirement'
                        },
                        {
                            data: 'Image',
                            name: 'Image'
                        },
                        {
                            data: 'Video',
                            name: 'Video'
                        },
                        {
                            data: 'time',
                            name: 'time'
                        },

                    ]
                });
                return false;


            });

        });
        $("#Node").click(function() {
            //   var check =   $("#test").val();
            //   console.warn(check);

            $("#test").html('<div class="row" id="jquery"><table class="table table-bordered data-table table-success"><thead><tr><th>No</th><th>Topic_name</th><th>Duration_Time</th><th>Requirement</th><th>Image</th><th>Video</th><th>time</th></tr></thead><tbody></tbody></table></div>');




            $(function() {


                var table = $('.data-table').DataTable({
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,

                    ajax: "{{route('Web.course')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'Topic_name',
                            name: 'Topic_name'
                        },
                        {
                            data: 'Duration_Time',
                            name: 'Duration_Time'
                        },
                        {
                            data: 'Requirement',
                            name: 'Requirement'
                        },
                        {
                            data: 'Image',
                            name: 'Image'
                        },
                        {
                            data: 'Video',
                            name: 'Video'
                        },
                        {
                            data: 'time',
                            name: 'time'
                        },

                    ]
                });
                return false;


            });



        });
        $("#Laravel").click(function() {
            //   var check =   $("#test").val();
            //   console.warn(check);

            $("#test").html('<div class="row" id="jquery"><table class="table table-bordered data-table table-danger"><thead><tr><th>No</th><th>Topic_name</th><th>Duration_Time</th><th>Requirement</th><th>Image</th><th>Video</th><th>time</th></tr></thead><tbody></tbody></table></div>');


            $(function() {


                var table = $('.data-table').DataTable({
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,

                    ajax: "{{route('Web.course')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'Topic_name',
                            name: 'Topic_name'
                        },
                        {
                            data: 'Duration_Time',
                            name: 'Duration_Time'
                        },
                        {
                            data: 'Requirement',
                            name: 'Requirement'
                        },
                        {
                            data: 'Image',
                            name: 'Image'
                        },
                        {
                            data: 'Video',
                            name: 'Video'
                        },
                        {
                            data: 'time',
                            name: 'time'
                        },

                    ]
                });
                return false;


            });

        });

        $("#Javascript").click(function() {
            //   var check =   $("#test").val();
            //   console.warn(check);

            $("#test").html('<div class="row" id="jquery"><table class="table table-bordered data-table table-warning"><thead><tr><th>No</th><th>Topic_name</th><th>Duration_Time</th><th>Requirement</th><th>Image</th><th>Video</th><th>time</th></tr></thead><tbody></tbody></table></div>');


            $(function() {


                var table = $('.data-table').DataTable({
                    "searching": false,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,


                    ajax: "{{route('Web.course')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'Topic_name',
                            name: 'Topic_name'
                        },
                        {
                            data: 'Duration_Time',
                            name: 'Duration_Time'
                        },
                        {
                            data: 'Requirement',
                            name: 'Requirement'
                        },
                        {
                            data: 'Image',
                            name: 'Image'
                        },
                        {
                            data: 'Video',
                            name: 'Video'
                        },
                        {
                            data: 'time',
                            name: 'time'
                        },

                    ]
                });
                return false;


            });

        });
    });
</script>