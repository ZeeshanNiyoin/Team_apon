@extends('layouts.app')

@section('title', 'Dashboard')

@section('style')
<style>
    .position-relative img {
        /* border-radius: 16px; */
        /* border-bottom-radius: 25px; */
        border-bottom-left-radius: 26px;
        border-bottom-right-radius: 26px;
    }

    /* model start */
    .modal-content1 {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        /* border: 1px solid #888; */
        border-radius: 4px;
        width: 70%;
    }

    .para {
        color: rgb(52, 51, 51);
    }

    #myModal .m .modal-content1 {
        margin-top: 60px;
        /* background-color: red; */
    }

    #myModal {
        background-color: rgba(203, 200, 200, 0.658);
        /* z-index: -1; */


    }

    #myBtn {
        border: none;
        background-color: #fff;
        color: rgb(119, 118, 118);
    }

    #colorr_nav {
        color: rgb(96, 96, 96);
        border: none;
        background-color: #fff;
    }

    .modal-content1 {
        background-color: white;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /* model ends */

    .banner {
        background-image: url("img/posterssimg.jpeg");
        background-size: cover;
        background-position: center;
        color: #ffffff;
        padding: 100px 0;
        text-align: center;
        margin-bottom: 60px;
        /* margin-top: -120px; */
    }
</style>
@endsection
@section('content')

@include('partials.sidebar')
<section class="main_content dashboard_part large_header_bg " style="background-color: #fff;">

<div class="container-fluid g-0">
  <div class="row">
    <div class="col-lg-12 p-0">
      <div class="header_iner d-flex justify-content-between align-items-center">
        <div class="sidebar_icon d-lg-none">
          <i class="ti-menu"></i>
        </div>
        <div class="line_icon open_miniSide d-none d-lg-block">
          <img src="img/icon_3lines.png" alt="">
        </div>
        <div class="header_right d-flex justify-content-between align-items-center">
          <div class="header_notification_warp d-flex align-items-center">
            <li>
              <!-- <a class="CHATBOX_open nav-link-notify" href="#">
                <img src="img/Apon msg-05 (1).png" alt="">
              </a> -->
            </li>
            <li>
              <a class="bell_notification_clicker nav-link-notify" href="#">
                <img src="img/Apon bell-06 (1).png" alt="">
              </a>

              <div class="Menu_NOtification_Wrap">
                <div class="notification_Header">
                  <h4>Notifications</h4>
                </div>
                <div class="Notification_body">
                  <div class="single_notify d-flex align-items-center">
                    <div class="notify_thumb">
                      <a href="#"><img src="img/staf/2.png" alt=""></a>
                    </div>
                    <div class="notify_content">
                      <a href="#">
                        <h5>Cool Marketing</h5>
                      </a>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>

                  <div class="single_notify d-flex align-items-center">
                    <div class="notify_thumb">
                      <a href="#"><img src="img/staf/4.png" alt=""></a>
                    </div>
                    <div class="notify_content">
                      <a href="#">
                        <h5>Awesome packages</h5>
                      </a>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>

                  <div class="single_notify d-flex align-items-center">
                    <div class="notify_thumb">
                      <a href="#"><img src="img/staf/3.png" alt=""></a>
                    </div>
                    <div class="notify_content">
                      <a href="#">
                        <h5>what a packages</h5>
                      </a>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>

                  <div class="single_notify d-flex align-items-center">
                    <div class="notify_thumb">
                      <a href="#"><img src="img/staf/2.png" alt=""></a>
                    </div>
                    <div class="notify_content">
                      <a href="#">
                        <h5>Cool Marketing</h5>
                      </a>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>

                  <div class="single_notify d-flex align-items-center">
                    <div class="notify_thumb">
                      <a href="#"><img src="img/staf/4.png" alt=""></a>
                    </div>
                    <div class="notify_content">
                      <a href="#">
                        <h5>Awesome packages</h5>
                      </a>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>

                  <div class="single_notify d-flex align-items-center">
                    <div class="notify_thumb">
                      <a href="#"><img src="img/staf/3.png" alt=""></a>
                    </div>
                    <div class="notify_content">
                      <a href="#">
                        <h5>what a packages</h5>
                      </a>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="nofity_footer">
                  <div class="submit_button text-center pt_20">
                    <a href="#" class="btn_1 green">See More</a>
                  </div>
                </div>
              </div>
            </li>
          </div>
          <div class="profile_info d-flex align-items-center">
            <div class="profile_thumb mr_20">
              <img src="img/transfer/4.png" alt="#">
            </div>
            <div class="author_name">
              <h4 class="f_s_15 f_w_500 mb-0">zubeen garg</h4>
              <p class="f_s_12 f_w_400">User</p>
            </div>
            <div class="profile_info_iner">
              <div class="profile_author_name">
                <p>User</p>
                <h5>zubeen garg</h5>
              </div>
              <div class="profile_info_details">
                <!-- <a href="#">My Profile </a>
                <a href="#">Settings</a> -->
                <a href="#">Log Out </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="banner">
  <div class="container">
    <h2>New: Backstage Rights Manager Title</h2>
    <!-- <p class="mb-10" style="font-size: 20px">
      Discover a new feature to optimize your rights management and
      maximize the monetization of your catalog on YouTube!
    </p> -->
    <!-- <button type="button" style="
        background-color: #ce1266;
        border: none;
        color: white;
        padding: 10px;
        border-radius: 6px;
      ">
    <a href="index.html" style="color: white;">  TRY IT NOW!</a>
    </button> -->
  </div>
</div>
<!-- model start from here -->
<!-- banner end -->
<!-- FRONT WELCOME ENDS -->
<div class="main_content_iner">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="dashboard_header mb_50">
          <div class="row justify-content-between">
            <div class="col-lg-6">
              <div class="dashboard_header_title">
                <!-- <h4 class="text-start">CATALOG PERFORMANCE</h4> -->
              </div>
            </div>

            <div class="col-lg-6">
              <div class="dashboard_breadcam text-end">
                <p class="december">

                  <!-- December 21, 2023 - January 17, 2024 -->
                  <!-- <i class="fa-solid fa-calendar-days"></i> -->

                  <!-- <i
                        class="fa-solid fa-filter"
                        class="btn btn-link collapsed"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"

                        class="advanced-btn px-3 py-2" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseAdvance"
                        aria-expanded="false" aria-controls="collapseExample
                      ></i> -->
                  <!-- <i  style="font-size: 24px" class="fa" ></i> -->
                  <!-- i icon -->
                  <!-- <p>          <i style="font-size: 20px" class="fa" id="myDIV">&#xf05a;</i>  -->
                  <!-- <div class="hide">I am shown when someone hovers over the div above.</div> -->
                  <!-- </p> -->
                  </button>

                  <!-- <div id="myDIV"> <i style="font-size: 20px" class="fa" id="myDIV">&#xf05a;</i> </div> 
            <div class="hide"> <br> I am shown when someone hovers over the div above.</div> -->
                </p>
              </div>
            </div>

            <!-- collepse start -->
            <!-- <div class="collapse" id="collapseAdvance" style="background-color: red;"> -->
            <div class="collapse" id="collapseAdvance">
              <!-- <p>lorem10</p> -->
              <!-- from start -->

              <div class="container">
                <div class="row my-5">
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label required">Product information</label>
                    <!-- <input type="date" class="form-control" id="validationCustom03" required=""> -->
                  </div>

                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label required">Product identifier</label>
                    <!-- <input type="date" class="form-control"  required=""> -->
                  </div>

                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label required">Additional Information</label>

                    <!-- <input type="date" class="form-control"  required=""> -->
                  </div>
                  <!-- next -->
                  <div class="col-md-4 mt-3 ml-5">
                    <label for=" validationCustom04" class="form-label d-flex">Labels:
                    </label>
                    <div class="text-start">
                      <input type="text" id="fname" name="fname" value="John" />
                    </div>
                  </div>

                  <div class="col-md-4 mt-3 ml-5">
                    <label for=" validationCustom04" class="form-label d-flex">UPC:
                    </label>
                    <div class="text-start">
                      <input type="text" id="fname" name="fname" value="John" />
                    </div>
                  </div>

                  <div class="col-md-4 mt-3 ml-5">
                    <label for=" validationCustom04" class="form-label d-flex">Stores:
                    </label>
                    <div class="text-start">
                      <input type="text" id="fname" name="fname" value="John" />
                    </div>
                  </div>

                  <div class="col-md-4 mt-3">
                    <label for=" validationCustom04" class="form-label d-flex">Artists:
                    </label>
                    <div class="text-start">
                      <input type="text" id="fname" name="fname" value="John" />
                    </div>
                  </div>

                  <div class="col-md-4 mt-3">
                    <div class="col-lg-8">
                      <label for=" validationCustom04" class="form-label d-flex">ISRC:</label>
                      <div class="text-start">
                        <input type="text" id="fname" name="fname" value="John" />
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 mt-3">
                    <div class="col-lg-8">
                      <label for=" validationCustom04" class="form-label d-flex">Territories:
                      </label>
                      <div class="text-start">All</div>
                    </div>
                  </div>
                  <div class="col-md-4 mt-3">
                    <div class="col-lg-8">
                      <label for=" validationCustom04" class="form-label d-flex">Albums:
                      </label>
                      <div class="text-start">
                        <input type="text" id="fname" name="fname" value="John" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mt-3">
                    <div class="col-lg-8">
                      <!-- <label for=" validationCustom04" class="form-label d-flex">Albums:
  </label>
  <div class="text-start">  <input type="text" id="fname" name="fname" value="John"></div> -->
                    </div>
                  </div>
                  <div class="col-md-4 mt-3">
                    <div class="col-lg-8">
                      <!-- <label for=" validationCustom04" class="form-label d-flex">Albums:
</label>
<div class="text-start">  <input type="text" id="fname" name="fname" value="John"></div>
-->
                    </div>
                  </div>

                  <div class="col-md-4 mt-3">
                    <div class="col-lg-8">
                      <label for=" validationCustom04" class="form-label d-flex">Tracks:
                      </label>
                      <div class="text-start">
                        <input type="text" id="fname" name="fname" value="John" />
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end" id="twobtn">
                    <button>Clear filters</button> &nbsp;
                    <button class="apply_button">Apply</button>
                  </div>
                </div>
              </div>
              <!-- form end -->
            </div>
            <!-- collepse end -->

            <!-- i button hover click -->

            <!-- i buton click -->

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <!-- <div class="card-body container-fluid " style="background-color: red;">
                Anim pariatur cliche reprehenderit, enim eiusmod
                high life accusamus terry richardson ad squid. 3
                wolf moon officia aute, non cupidatat skateboard
                dolor brunch. Food truck quinoa nesciunt laborum
                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                put a bird on it squid single-origin coffee nulla
                assumenda shoreditch et. Nihil anim keffiyeh
                helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur
                butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt
                you probably haven't heard of them accusamus
                labore sustainable VHS.
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="white_box mb_30">
        <div class="box_header">
          <div class="d-flex justify-content-between" style="width: 98%">
            <div>
              <h3>Area Chart</h3>
            </div>
            <!-- <div class="iconn">
                <i class="fa-brands fa-apple"></i> &nbsp;
                <i class="fa-solid fa-music"></i> &nbsp;

                <i class="fa-solid fa-headphones"></i> &nbsp;
                <i class="fa-brands fa-spotify"></i> &nbsp;
                <img src="img/jio_savan.png" alt="" /> &nbsp;
                <img src="img/WynkMusic.webp" alt="" /> &nbsp;
                <i class="fa-brands fa-apple"></i> &nbsp;
                <i class="fa-solid fa-music"></i> &nbsp;

                <i class="fa-solid fa-headphones"></i>
                <i class="fa-brands fa-spotify"></i>
                <img src="img/jio_savan.png" alt="" />
                <img src="img/WynkMusic.webp" alt="" />
                <i class="fa-brands fa-apple"></i>
                <i class="fa-solid fa-music"></i>

                <i class="fa-solid fa-headphones"></i>
                <i class="fa-brands fa-spotify"></i>
              </div> -->
          </div>
        </div>
        <!-- <canvas id="highlights"></canvas> -->
        <!-- chart start -->
        <div id="chart"></div>
        <!-- chart end -->
      </div>
    </div>
    <table class="table">
      <tbody>
        <tr>
          <th scope="row">
            <a href="" id=" AUDIO_STREAMS" style="color: #ce1266;">119 <br />
              <p>AUDIO STREAMS</p>
            </a>
          </th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">
            0 <br />
            TRACK DOWNLOADS
          </th>
          <td></td>
          <td></td>
          <td>
            <p>No data</p>
          </td>
        </tr>
        <tr>
          <th scope="row">
            0 <br />
            ALBUM DOWNLOADS
          </th>
          <td></td>
          <td></td>
          <td>
            <p>No data</p>
          </td>
        </tr>
        <tr>
          <th scope="row">
            0 <br />
            RINGTONES
          </th>
          <td colspan="2"></td>
          <td>
            <p>No data</p>
          </td>
        </tr>
        <tr>
          <th scope="row">
            0 <br />
            SHAZAM
          </th>
          <td></td>
          <td></td>
          <td>
            <p>No data</p>
          </td>
        </tr>

        <tr>
          <th scope="row">
            0 <br />
            VIDEO STREAMS
          </th>
          <td></td>
          <td></td>
          <td>
            <p>No data</p>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="row d-flex">
      <div class="col-lg-6">
        <div class="white_box mb_30">
          <h3 class="mb-0">Bar Chart</h3>
          <div class="box_header">
            <div id="chartt"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="white_box mb_30">
          <h3 class="mb-0">Bar Chart</h3>
          <div class="box_header">
            <!-- <div class="main-title">

              </div> -->
            <div id="chartr"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- -------------------- -->
<!-- 



    
   -->

<!-- DEMO SRAERT -->
<!-- <div class="container mt-3">
    <h2>Toggleable Tabs</h2>
    <br />
    Nav tabs
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#home">
          <i class="fa-solid fa-circle-stop"></i> &nbsp; Top tracks</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu1">
          <i class="fa-solid fa-box"></i> &nbsp; Top releases</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu2">
          <i class="fa-sharp fa-solid fa-palette"></i> &nbsp; Top artists</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu3">
          <i class="fa-solid fa-tags"></i> &nbsp; Top labels</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu4">
          <i class="fa-solid fa-video"></i> &nbsp; Top Videos</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu5">
          <i class="fa-solid fa-satellite-dish"></i> &nbsp; Top ringtones</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu6">
          <i class="fa-solid fa-music"></i> &nbsp; Top Stores</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu7">
          <i class="fa-solid fa-location-dot"></i> &nbsp; Top territories</a
        >
      </li>
    </ul>

    Tab panes
    <div class="tab-content">
      <div id="home" class="container tab-pane active">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Title</th>
              <th scope="col">Artists</th>
              <th scope="col">Releases</th>

              <th scope="col">Release date</th>
              <th scope="col">Audio Streams</th>
              <th scope="col">% Stream</th>

              <th scope="col">Unique listeners</th>
              <th scope="col">Stream per user</th>
              <th scope="col">Track downloads</th>
              <th scope="col">Shazam</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <img src="img/chart_table.jpg" alt="" />
              </td>
              <td>
                <a href="#">
                  Junaki Khyon
                  <p>FR-2X4-23-41840</p>
                </a>
              </td>
              <td>
                <a href=""> Amlan Saharia </a>
              </td>
              <td>
                <a href="">
                  Junaki Khyon
                  <p>3617055851432</p>
                </a>
              </td>
              <td>
                <p>02/01/2023</p>
              </td>
              <td>
                <p>113</p>
              </td>
              <td>
                <p>100%</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
      </div>
      complete home
      start menu1
      <div id="menu1" class="container tab-pane fade">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Releases</th>
              <th scope="col">Artists</th>

              <th scope="col">Release date</th>
              <th scope="col">Audio Streams</th>
              <th scope="col">% Stream</th>

              <th scope="col">Unique listeners</th>
              <th scope="col">Stream per user</th>
              <th scope="col">Release downloads</th>
              <th scope="col">Shazam</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <img src="img/chart_table.jpg" alt="" />
              </td>
              <td>
                <a href="#">
                  Junaki Khyon
                  <p>3617055851432</p>
                </a>
              </td>
              <td>
                <a href=""> Amlan Saharia </a>
              </td>

              <td>
                <p>02/01/2023</p>
              </td>
              <td>
                <p>113</p>
              </td>
              <td>
                <p>100%</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      end menu1
      start menu 2
      <div id="menu2" class="container tab-pane fade">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Artists</th>
              <th scope="col">Audio Streams</th>
              <th scope="col">% Stream</th>

              <th scope="col">Unique listeners</th>
              <th scope="col">Stream per user</th>
              <th scope="col">Track downloads</th>
              <th scope="col">Releases downloads</th>

              <th scope="col">Ringtones</th>
              <th scope="col">Video streams</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <p style="font-size: 30px">
                  <i class="fa-solid fa-user"></i>
                </p>
              </td>
              <td>
                <a href="#"> Amlan Saharia </a>
              </td>
              <td>
                <a href="">
                  <p>113</p>
                </a>
              </td>
              <td>
                <a href="">
                  <p>100%</p>
                </a>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      end menu 2
      start menu 3
      <div id="menu3" class="container tab-pane fade">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">label</th>
              <th scope="col">Audio Streams</th>
              <th scope="col">% Stream</th>
              <th scope="col">Track downloads</th>
              <th scope="col">Releases downloads</th>
              <th scope="col">Ringtones</th>
              <th scope="col">Video Stream</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <p style="font-size: 20px">
                  <i class="fa-solid fa-tag"></i>
                </p>
              </td>
              <td>
                <a href="#">
                  <a href=""> Spring City Records </a>
                </a>
              </td>
              <td>
                <a href="">
                  <p>113</p>
                </a>
              </td>
              <td>
                <a href="">
                  <p>100%</p>
                </a>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      end menu 3
      st5art menu 4
      <div id="menu4" class="container tab-pane fade">
        <br />
        <h1 style="text-align: center; padding: 20px">
          <i class="fa-solid fa-face-meh"></i> Sorry, nothing came up this
          time
        </h1>
      </div>
      end menu 4
      start menu 5
      <div id="menu5" class="container tab-pane fade">
        <br />
        <h1 style="text-align: center; padding: 20px">
          <i class="fa-solid fa-face-meh"></i> Sorry, nothing came up this
          time
        </h1>
      </div>
      start menu 5
      start menu 6
      <div id="menu6" class="container tab-pane fade">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Title</th>
              <th scope="col">Artists</th>
              <th scope="col">Releases</th>

              <th scope="col">Release date</th>
              <th scope="col">Audio Streams</th>
              <th scope="col">% Stream</th>

              <th scope="col">Unique listeners</th>
              <th scope="col">Stream per user</th>
              <th scope="col">Track downloads</th>
              <th scope="col">Shazam</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <img
                  src="img/jio_savana-removebg-preview.png"
                  width="40px"
                  alt=""
                />
              </td>
              <td>
                <a href="#">
                  Junaki Khyon
                  <p>FR-2X4-23-41840</p>
                </a>
              </td>
              <td>
                <a href=""> Amlan Saharia </a>
              </td>
              <td>
                <a href="">
                  Junaki Khyon
                  <p>3617055851432</p>
                </a>
              </td>
              <td>
                <p>02/01/2023</p>
              </td>
              <td>
                <p>113</p>
              </td>
              <td>
                <p>100%</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>
                <p>-</p>
              </td>
              <td>0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
      </div>
      end menu 6
      start menu 7
      <div id="menu7" class="container tab-pane fade">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Stores</th>
              <th scope="col">%</th>
              <th scope="col">Audio Streams</th>

              <th scope="col">Track downloads</th>
              <th scope="col">Release downloads</th>
              <th scope="col">Ringtones</th>

              <th scope="col">Video streams</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <img src="img/IN_chart.png" alt="" />
              </td>
              <td>
                <a href="#">
                  <p>Saavn</p>
                </a>
              </td>
              <td>
                <p>100</p>
              </td>
              <td>
                <a href="">
                  <p>113</p>
                </a>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      end menu 7 
      start menu 8
      <div id="menu8" class="container tab-pane fade">
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Territories</th>
              <th scope="col">%</th>
              <th scope="col">Audio Streams</th>
              <th scope="col">Track downloads</th>
              <th scope="col">Release downloads</th>
              <th scope="col">Ringtones</th>
              <th scope="col">Video streams</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                <img src="img/IN_chart.png" alt="" />
              </td>
              <td>
                <a href="#">
                  <p>India</p>
                </a>
              </td>
              <td>
                <p>100</p>
              </td>
              <td>
                <a href="">
                  <p>113</p>
                </a>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
              <td>
                <p>0</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      end menu 8
    </div>
  </div> -->
<!-- DEMO END -->
</section>
  <!-- model start -->

  <section>
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="m">
        <div class="modal-content1">
          <div class="d-flex justify-content-between">
            <div>
              <p class="para"><b> Promotion & pitching </b></p>
            </div>
            <div> <span class="close">&times;</span></div>
          </div>
          <hr>
          <p class="para">A few points to keep in mind before sending releases for promotion & pitching.</p>
          <br>
          <h4>PLEASE GO THROUGH THE ENTIRE PROCESS THOROUGHLY.</h4>
          <br>
          <ul>
            <p class="para">1) Potential content can be highlighted for promotion.</p>
            <p class="para">2) It must be a proper song (no cover song/devotional/ recitation/lofi/remixes) from an
              artist which you are dealing with.</p>
            <p class="para">3) The song should not be released on any <b>SATURDAY</b> OR <b>SUNDAY</b> or Any Holiday,
              as there will be no promotions on these days. <b> NO exceptions. Please do not request to pitch the same
                on the following workday/Monday.</b> </p>
            <p class="para">4) Any artist who has good follower base can be considered.</p>
            <p class="para">5) Please highlight the song at least 14 days before the release date.</p>
            <p class="para">6) For tracks releasing in the coming week, please send the details by Thursday 12pm of the
              current week. Post which we will not be able to accommodate any recommendations.</p>
            <p class="para">For every week, the release details should be sent to us the previous week, by Thursday
              12pm. Post which we will not be able to accommodate any recommendations.</p>
            <br>
            <hr>
            <div class="d-flex justify-content-between">
              <div></div>
              <div> <button
                  style="background-color: #ce1266; color: white !important; text-decoration: none; border: none; padding: 4px; width: 60px; justify-content: end; border-radius: 4px;"><a
                    href="./promotion1.html" style="color: white;">Next</a></button>
              </div>
            </div>
          </ul>
        </div>
      </div>

    </div>
    <!-- model ends -->
    <div class="CHAT_MESSAGE_POPUPBOX">
      <div class="CHAT_POPUP_HEADER">
        <div class="MSEESAGE_CHATBOX_CLOSE">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
              fill="white" />
          </svg>
        </div>
        <h3>Chat with us</h3>
        <div class="Chat_Listed_member">
          <ul>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="img/staf/1.png" alt />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="img/staf/2.png" alt />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="img/staf/3.png" alt />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="img/staf/4.png" alt />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <img src="img/staf/5.png" alt />
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="member_thumb">
                  <div class="more_member_count">
                    <span>90+</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="CHAT_POPUP_BODY">
        <p class="mesaged_send_date">Sunday, 12 January</p>
        <div class="CHATING_SENDER">
          <div class="SMS_thumb">
            <img src="img/staf/1.png" alt />
          </div>
          <div class="SEND_SMS_VIEW">
            <p>Hi! Welcome . How can I help you?</p>
          </div>
        </div>
        <div class="CHATING_SENDER CHATING_RECEIVEr">
          <div class="SEND_SMS_VIEW">
            <p>Hello</p>
          </div>
          <div class="SMS_thumb">
            <img src="img/staf/1.png" alt />
          </div>
        </div>
      </div>
      <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username"
              aria-describedby="basic-addon2" />
            <div class="input-group-append">
              <button class="btn" type="button">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                    fill="#707DB7" />
                </svg>
              </button>
              <button class="btn" type="button">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                    fill="#707DB7" />
                </svg>

                <input type="file" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="back-top" style="display: none">
      <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
      </a>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
      style="top: 20%;">
      <div class="modal-dialog">
        <div class="modal-content" id="page-1" style="display: block;">
          <div class="modal-header">
            <h5 class="modal-title">1/3
              New release</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- model page one start -->
          <div class="modal-body">
            <h6 class="py-4">What is the type of your new release?</h6>
            <!-- Email input -->
            <div class="px-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="media_type" id="audio">
                <label class="form-check-label" for="audio">
                  Audio
                </label>
              </div>
              <!-- <div class="form-check">
              <input class="form-check-input" type="radio" name="media_type" id="video" checked>
              <label class="form-check-label" for="video">
                Video
              </label>
            </div> -->
              <!-- <div class="form-check">
              <input class="form-check-input" type="radio" name="media_type" id="ringtoon" checked>
              <label class="form-check-label" for="ringtoon">
                Ringtoon
              </label>
            </div> -->
            </div>

            <div class="modal-footer mt-4">
              <button id="cancelBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
              <button type="button" class="btn btn-primary nextBtn-page-1">NEXT</button>
            </div>
          </div>


        </div>

        <!-- model page one end -->

        <!-- model page second start  -->
        <div class="modal-content" id="page-2" style="display: none;">
          <div class="modal-header">
            <h5 class="modal-title">2/3
              New audio release</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- model page one start -->
          <div class="modal-body">
            <h6 class="py-4">What is the genre of your new audio release?</h6>
            <p class="info">Releases of Western Classical or Jazz genre require different informations</p>
            <!-- Email input -->
            <div class="check">
              <div>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" />
                <label for="vehicle1">&nbsp; &nbsp; &nbsp; Any genre</label>
              </div>
              <div>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car" />
                <label for="vehicle2">&nbsp; &nbsp; &nbsp; Western classical</label>
              </div>
              <div>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat" />
                <label for="vehicle3">&nbsp; &nbsp; &nbsp; Jazz</label><br /><br />
              </div>
            </div>

            <div class="modal-footer">
              <button id="cancelBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK</button>
              <button type="button" class="btn btn-primary nextBtn-page-1">NEXT</button>
            </div>
          </div>
        </div>
        <!-- model page second end  -->

        <!-- model page third start  -->
        <div class="modal-content" id="page-3" style="display: none;">
          <div class="modal-header">
            <h5 class="modal-title">3/3
              New audio release</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- model page one start -->
          <div class="modal-body">
            <h6 class="py-4">What is the title of your new release?</h6>
            <!-- Email input -->
            <div class="check">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Fill in your release title" aria-label="Username"
                  aria-describedby="basic-addon1">
              </div>
              <div>
                <input type="checkbox" id="title" name="title" value="true" />
                <label for="title">&nbsp; &nbsp; &nbsp; Contains at least one track already existing within my
                  catalog</label><br /><br />
              </div>
            </div>

            <div class="modal-footer">
              <button id="cancelBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK</button>
              <!-- <button type="button" class="btn btn-primary nextBtn-page-1">NEXT</button> -->
              <button type="button" class="btn btn-primary nextBtn-page-1"><a href="realease_information_Pages.html"
                  style="color: white;">NEXT</a></button>
            </div>
          </div>
        </div>
      </div>
      <!-- model page third end  -->
    </div>
    <!-- model page one end -->

  </section>

  <div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
      <div class="MSEESAGE_CHATBOX_CLOSE">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z"
            fill="white" />
        </svg>
      </div>
      <h3>Chat with us</h3>
      <div class="Chat_Listed_member">
        <ul>
          <li>
            <a href="#">
              <div class="member_thumb">
                <img src="img/staf/1.png" alt />
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="member_thumb">
                <img src="img/staf/2.png" alt />
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="member_thumb">
                <img src="img/staf/3.png" alt />
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="member_thumb">
                <img src="img/staf/4.png" alt />
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="member_thumb">
                <img src="img/staf/5.png" alt />
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="member_thumb">
                <div class="more_member_count">
                  <span>90+</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="CHAT_POPUP_BODY">
      <p class="mesaged_send_date">Sunday, 12 January</p>
      <div class="CHATING_SENDER">
        <div class="SMS_thumb">
          <img src="img/staf/1.png" alt />
        </div>
        <div class="SEND_SMS_VIEW">
          <p>Hi! Welcome . How can I help you?</p>
        </div>
      </div>
      <div class="CHATING_SENDER CHATING_RECEIVEr">
        <div class="SEND_SMS_VIEW">
          <p>Hello</p>
        </div>
        <div class="SMS_thumb">
          <img src="img/staf/1.png" alt />
        </div>
      </div>
    </div>
    <div class="CHAT_POPUP_BOTTOM">
      <div class="chat_input_box d-flex align-items-center">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username"
            aria-describedby="basic-addon2" />
          <div class="input-group-append">
            <button class="btn" type="button">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z"
                  fill="#707DB7" />
              </svg>
            </button>
            <button class="btn" type="button">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z"
                  fill="#707DB7" />
              </svg>

              <input type="file" />
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="back-top" style="display: none">
    <a title="Go to Top" href="#">
      <i class="ti-angle-up"></i>
    </a>
  </div>

@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Target elements with a specific style attribute
        var elementsWithStyleAttribute = document.querySelectorAll("[style]");

        // Loop through the selected elements
        elementsWithStyleAttribute.forEach(function(element) {
            // Do something with each element
            console.log(element);
        });
    });
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection