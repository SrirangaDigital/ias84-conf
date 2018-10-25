<script type="text/javascript">
    $(document).ready(function() {

        var htmlWidth = $('html').outerWidth();

        if(htmlWidth >= 768)
            $('#social .info-icon i').css("line-height", $('#twitterContainer').height() + "px");

        var containerWidth = $('.container').outerWidth();

        var gutter = $('.fancy .text').css('margin-left').replace("px", "");

        $('.fancy .text').each(function(){

            $(this).before('<span class="before">&nbsp;</span>');
            $(this).after('<span class="after">&nbsp;</span>');

            var fancyWidth = Math.round((containerWidth - $(this).outerWidth() - (4 * gutter)) / 2);

            $(this).prev('.before').css("width", fancyWidth);
            $(this).next('.after').css("width", fancyWidth);
        });    
    });
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="container clear-paddings">
    <!-- <div class="row first-row">
        <div class="col-md-12 clear-paddings">
            <div class="fixOverlayDivHome">
               <div class="override-carousel-caption pos-c-full scheme-dark">
                <div class="caption-content">
                    <h3>29<sup>th</sup> Mid Year Meeting</h3>
                    <p>
                        29<sup>th</sup> &amp; 30<sup>th</sup> June 2018<br /> 
                        Venue: Mahatma Gandhi Hall, Infosys Leadership Institute,<br />Mysore Development Centre, Mysuru<br>
                    </p>
                </div>
            </div>
        </div>
    </div> -->
</div>
</div>

<div class="container clear-paddings">
    <div class="row">
        <div class="col-md-2 col-xs-12">
            <div class="intro logos">
                <p>
                    <img src="<?=PUBLIC_URL?>images/logo.png" alt="IAS Logo" />
                </p>
            </div>
        </div>
        <div class="col-md-10">
            <div class="intro">
                <p>The Indian Academy of Sciences, Bengaluru, through many scientific meetings, symposia, and public lectures it organizes, aims to facilitate exchange of scientific insights among researchers and to highlight novel findings both within the scientific community and the public. The Mid-Year Meetings held during June/July at Bengaluru and the Annual Meetings held during November at different scientific institutions in the country are the two major annual events of the Academy in this context. The events every year see enthusiastic participation of the Fellowship of the Academy along with researchers, teachers, students and other invitees across the nation.</p>
                <p>The <strong>84th Annual Meeting of the Academy</strong> is being organized during <strong>2<sup>nd</sup> November 2018 &mdash; 4<sup>th</sup> November 2018, at Banaras Hindu University, Varanasi.</strong></p>
            </div>
        </div>
    </div>        
</div>


<!-- Registration -->
<!-- <div class="container clear-paddings" id="registration">
    <div class="row">
        <div class="col-md-12">
           <p class="subtitle fancy"><span class="text">Registration</span></p>
       </div>
   </div>
   <div class="row">
    <div class="col-md-12">
        <p class="reg">All registered participants are requested to collect the registration kit at the meeting venue on Friday, 29 June at 9.00 am.</p>
    </div>
</div>
</div> -->

<!--Speakers -->
<div class="container clear-paddings" id="speakers">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Speakers</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="speaker-type">Presided by</p>
            <a href="<?=BASE_URL?>Speakers/Ram_Ramaswamy">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540372867249/profile.jpg" class="speaker-thumbnail" alt="Ramakrishna Ramaswamy" title="Ramakrishna Ramaswamy" />
                <figcaption class="figure-caption text-xs-right">Ramakrishna Ramaswamy</figcaption>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="speaker-type">Inaugural Lectures of Fellows &amp; Associates / Special Lectures / Public Lectures / Symposia Lectures</p>
            <a href="<?=BASE_URL?>describe/profile/1540373324054">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540373324054/profile.jpg" class="speaker-thumbnail" alt="Sanjay Kumar" title="Sanjay Kumar" />
                <figcaption class="figure-caption text-xs-right">Sanjay Kumar</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540373516049">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540373516049/profile.jpg" class="speaker-thumbnail" alt="N B Ramachandra" title="N B Ramachandra" />
                <figcaption class="figure-caption text-xs-right">N B Ramachandra</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540373795893">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540373795893/profile.jpg" class="speaker-thumbnail" alt="Swathi Tripathi" title="Swathi Tripathi" />
                <figcaption class="figure-caption text-xs-right">Swathi Tripathi</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540373867478">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540373867478/profile.jpg" class="speaker-thumbnail" alt="Debanjan Bhowmick" title="Debanjan Bhowmick" />
                <figcaption class="figure-caption text-xs-right">Debanjan Bhowmick</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374154987">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374154987/profile.jpg" class="speaker-thumbnail" alt="K Vijayamohanan" title="K Vijayamohanan" />
                <figcaption class="figure-caption text-xs-right">K Vijayamohanan</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374256388">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374256388/profile.jpg" class="speaker-thumbnail" alt="Avesh K Tyagi" title="Avesh K Tyagi" />
                <figcaption class="figure-caption text-xs-right">Avesh K Tyagi</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374348730">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374348730/profile.jpg" class="speaker-thumbnail" alt="Bikramjit Basu" title="Bikramjit Basu" />
                <figcaption class="figure-caption text-xs-right">Bikramjit Basu</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374408121">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374408121/profile.jpg" class="speaker-thumbnail" alt="Kanishka Biswas" title="Kanishka Biswas" />
                <figcaption class="figure-caption text-xs-right">Kanishka Biswas</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374459251">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374459251/profile.jpg" class="speaker-thumbnail" alt="Geshe Samten" title="Geshe Samten" />
                <figcaption class="figure-caption text-xs-right">Geshe Samten</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374511921">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374511921/profile.jpg" class="speaker-thumbnail" alt="Imran Siddiqi" title="Imran Siddiqi" />
                <figcaption class="figure-caption text-xs-right">Imran Siddiqi</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374562804">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374562804/profile.jpg" class="speaker-thumbnail" alt="A J Bhattacharyya" title="A J Bhattacharyya" />
                <figcaption class="figure-caption text-xs-right">A J Bhattacharyya</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374616279">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374616279/profile.jpg" class="speaker-thumbnail" alt="Deepa Agashe" title="Deepa Agashe" />
                <figcaption class="figure-caption text-xs-right">Deepa Agashe</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374675174">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374675174/profile.jpg" class="speaker-thumbnail" alt="Alok Bhattacharya" title="Alok Bhattacharya" />
                <figcaption class="figure-caption text-xs-right">Alok Bhattacharya</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374743466">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374743466/profile.jpg" class="speaker-thumbnail" alt="D Balasubramanian" title="D Balasubramanian" />
                <figcaption class="figure-caption text-xs-right">D Balasubramanian</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374797094">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374797094/profile.jpg" class="speaker-thumbnail" alt="BhudevDas" title="BhudevDas" />
                <figcaption class="figure-caption text-xs-right">BhudevDas</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374855957">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374855957/profile.jpg" class="speaker-thumbnail" alt="C S Yajnik" title="C S Yajnik" />
                <figcaption class="figure-caption text-xs-right">C S Yajnik</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374911562">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374911562/profile.jpg" class="speaker-thumbnail" alt="Bhisma K Patel" title="Bhisma K Patel" />
                <figcaption class="figure-caption text-xs-right">Bhisma K Patel</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540374966779">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540374966779/profile.jpg" class="speaker-thumbnail" alt="Dayananda Siddavattam" title="Dayananda Siddavattam" />
                <figcaption class="figure-caption text-xs-right">Dayananda Siddavattam</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375013691">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375013691/profile.jpg" class="speaker-thumbnail" alt="Jeevanjyoti chakraborty" title="Jeevanjyoti chakraborty" />
                <figcaption class="figure-caption text-xs-right">Jeevanjyoti chakraborty</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375072692">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375072692/profile.jpg" class="speaker-thumbnail" alt="Srubabti Goswami" title="Srubabti Goswami" />
                <figcaption class="figure-caption text-xs-right">Srubabti Goswami</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375123715">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375123715/profile.jpg" class="speaker-thumbnail" alt="Shabana Azmi" title="Shabana Azmi" />
                <figcaption class="figure-caption text-xs-right">Shabana Azmi</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375179053">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375179053/profile.jpg" class="speaker-thumbnail" alt="Suvendra Bhattacharyya" title="Suvendra Bhattacharyya" />
                <figcaption class="figure-caption text-xs-right">Suvendra Bhattacharyya</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375442172">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375442172/profile.jpg" class="speaker-thumbnail" alt="S M Yusuf" title="S M Yusuf" />
                <figcaption class="figure-caption text-xs-right">S M Yusuf</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375703291">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375703291/profile.jpg" class="speaker-thumbnail" alt="Riddhipratim Basu" title="Riddhipratim Basu" />
                <figcaption class="figure-caption text-xs-right">Riddhipratim Basu</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375783758">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375783758/profile.jpg" class="speaker-thumbnail" alt="P Dastidar" title="P Dastidar" />
                <figcaption class="figure-caption text-xs-right">P Dastidar</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375860211">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375860211/profile.jpg" class="speaker-thumbnail" alt="Jayanth Vyasanakere" title="Jayanth Vyasanakere" />
                <figcaption class="figure-caption text-xs-right">Jayanth Vyasanakere</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540375976736">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540375976736/profile.jpg" class="speaker-thumbnail" alt="Partha Chakraborty" title="Partha Chakraborty" />
                <figcaption class="figure-caption text-xs-right">Partha Chakraborty</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1540376044624">
                <img src="<?=CMS_URL?>public/data/meetings/AM2018/1540376044624/profile.jpg" class="speaker-thumbnail" alt="Vijay Chandru" title="Vijay Chandru" />
                <figcaption class="figure-caption text-xs-right">Vijay Chandru</figcaption>
            </a>
        </div>
    </div>
</div>

<!-- Schedule -->
<div class="container-fluid clear-paddings text-center" id="schedule">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Schedule</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?=BASE_URL?>Schedule#day1">
                <div id="block1" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 1</p>
                    <p class="date">2<sup>nd</sup> November 2018</p>
                    <p class="day">Friday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#day2">
                <div id="block2" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 2</p>
                    <p class="date">3<sup>rd</sup> November 2018</p>
                    <p class="day">Saturday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#day3">
                <div id="block3" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 3</p>
                    <p class="date">4<sup>th</sup> November 2018</p>
                    <p class="day">Sunday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#allied">
                <div id="block4" class="col-md-3 schedule-block" style="padding: 43px 0 42px">
                    <p class="date">Allied Events</p>
                    <p class="day">31<sup>st</sup> Oct &amp; 1<sup>st</sup> Nov 2018</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#spouses">
                <div id="block5" class="col-md-3 schedule-block" style="padding: 43px 0 43px">
                    <p class="date" style="width: 80%">Spouses Programme</p>
                    <p class="day">2<sup>nd</sup> - 4<sup>th</sup> Nov 2018</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Information for participants -->
<div class="container clear-paddings" id="information">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">For Participants</span></p>
        </div>
    </div>
    <div class="row" style="line-height: 150px">
        <div class="col-md-12">
            <a href="javascript:void(0);" class="info-icon"><i class="fa fa-list-ul"></i><br />List of Participants</a><!-- <?=BASE_URL?>Information/List_of_Participants -->
            <a href="<?=BASE_URL?>Information/Venue" class="info-icon"><i class="fa fa-map-marker"></i><br />Venue</a>
            <a href="<?=BASE_URL?>Information/Accommodation" class="info-icon"><i class="fa fa-bed"></i><br />Hospitality</a>
            <a href="<?=BASE_URL?>Information/Transport" class="info-icon"><i class="fa fa-bus"></i><br />Logistics</a><br />
            <a href="<?=BASE_URL?>Information/Contact" class="info-icon"><i class="fa fa-phone"></i><br />Contact</a>
            <a href="<?=BASE_URL?>Information/Downloads" class="info-icon"><i class="fa fa-download"></i><br />Downloads</a><!-- Information/Downloads -->
            <a href="<?=BASE_URL?>Information/Other" class="info-icon"><i class="fa fa-ellipsis-h"></i><br />Other information</a>
        </div>
    </div>
</div>

<!-- Information for participants -->
<div class="container clear-paddings" id="social">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Follow</span></p>
        </div>
    </div>
    <div class="row" id="twitterContainer">
        <div class="col-md-6 col-sm-12">
            <h3><a target="_blank" href="javascript:void(0);">Tweets about 84th annual meeting will be Coming soon</a></h3>
            <!-- <h3><a target="_blank" href="https://twitter.com/search?q=%2329MYM%20from%3AIAScBng&src=savs">Click here to view tweets about #29MYM by @IAScBng</a></h3> -->
        </div>
        <div class="col-md-6 text-center col-sm-12">
            <a target="_blank" title="YouTube" href="javascript:void(0)" class="info-icon"><i class="fa fa-youtube"></i></a>
            <a target="_blank" title="Twitter" href="https://twitter.com/IAScBng" class="info-icon"><i class="fa fa-twitter"></i></a>
            <a target="_blank" title="Facebook" href="https://www.facebook.com/IAScBng" class="info-icon"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>
