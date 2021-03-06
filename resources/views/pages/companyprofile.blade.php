@extends('layouts.master')
    @section('banner')
        <header>
            <div class="banner"><h3 class="responsive-div">Ministry Profile</h3></div>
        </header>
        <div class="logo-banner">
            <div class="responsive-div">
                <img src="{{ asset('img/juliuslogo.svg') }}" alt="">
            </div>
            <div class="container">
            <div class="tab-trigger">
                <ul>
                    <li><a href="#" id="onlink">Profile</a></li>
                    <li><a href="#">Company Board</a></li>
                    <li><a href="{{route('company_report')}}">Projects</a></li>
                </ul>
            </div>
        </div>    
    @endsection

    @section('content')
        <div class="main-container">
            <table class="table-div">
                <tr class="table-row">
                    <td class="td1">Est: 1970 Lagos, Nigeria</td>
                    <td class="td2">|&nbsp;&nbsp;&nbsp;Entity Type: Public Limited Company</td>
                    <td class="td3">|&nbsp;&nbsp;&nbsp;Nature of Business: Construction</td>
                    <td class="td4">|&nbsp;&nbsp;&nbsp;Website: <a href="#">www.julius-berger.com</a></td>
                </tr>
            </table>
        </div>
        <div class="main-container">
            <article>
            <h2>Overview</h2><br>
            <p>Julius Berger is a leading Nigerian company offering integrated construction solutions and related services. We specialize in executing complex works that require the highest levels of technical expertise and excel in the implementation of state-of-the-art construction methods and technologies. Core competencies cover all project phases, including planning, design, engineering, construction, maintenance and operation, for building, infrastructure and industry projects. The International Organization for Standardization certification (ISO) demonstrates that our Quality Management Systems are well equipped to consistently meet clients’ needs and that quality is continuously improved. Combined with our collaborative approach, our drive towards innovation, expansive experience and resources underpin project success. With a proven record of delivering quality results on-time we stand out as a choice partner. </p><br>
            <h2>Achievement</h2><br>
            <p>Julius Berger has played an integral role in building the foundations for progress and development in Nigeria through construction of major industrial and civil infrastructure. We have built important road networks, essential bridges, vital buildings and key landmarks, all of which augment the achievement of a modern-day Nigeria. We have established numerous manufacturing facilities, which promote local content, increase domestic production and ultimately contribute to Nigeria’s economic growth. And through it all, we have empowered our staff through investments in long term training and education, which not only sharpen their skills, but also contribute to the human capital development of Nigeria. </p>
            </article>
            
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    @endsection

</div>
</body>
</html>