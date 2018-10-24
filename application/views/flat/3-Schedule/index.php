<script type="text/javascript">
    $(document).ready(function() {

        var mTop = $('.navbar').height() - 10;
        $('#grid').css('margin-top', mTop + 'px');
        $('.schedule-text').hide();

        var hloc = window.location.href;

        var tab = 'day1';
        if(hloc.match('#')){ tab = hloc.split("#")[1]; }

        $('#' + tab).show(function(){

            $('a[href="#' + tab + '"').parent().addClass('active');
            $("html, body").animate({scrollTop: 0}, 1);
        });

        $('.schedule .nav li a').on('click', function(event){

            event.preventDefault();
            tab = $(this).attr('href');
            $('.schedule-text').hide();
            $(tab).show(function(){

                window.location.hash = tab;
                $("html, body").animate({scrollTop: 0}, 1);
            });
            $('.schedule .nav li').removeClass('active');
            $(this).parent().addClass('active');
        });
    });
</script>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1>Programme Schedule</h1>
            <div class="schedule">
                <ul class="nav nav-justified">
                    <li><a href="#day1">Day 1</a></li>
                    <li><a href="#day2">Day 2</a></li>
                    <li><a href="#day3">Day 3</a></li>
                    <li><a href="#allied">Allied Events</a></li>
                    <li><a href="#spouses">Spouses Programme</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>2<sup>nd</sup> November 2018 (Friday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0930
                            </dt>
                            <dd>
                                <span class="talk">Registration</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1A: Inauguration &amp; Presidential Address</span><br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1100<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540372867249">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ram Ramaswamy</span><br />
                                JNU, New Delhi<br />
                                <span class="talk">The Uses Of Chance</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1100 - 1115
                            </dt>
                            <dd>
                                <span class="speaker">Venue: Swatantrata Bhawan</span><br />
                                <span class="talk">Group Photograph</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1B: Inaugural Lectures by Fellows</span><br />
                        Chairperson: Dhananjai Pandey, BHU, Varanasi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1200 -1220<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540373324054">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Sanjay Kumar</span><br />
                                BHU, Varanasi<br />
                                <span class="talk">DNA inspired physics</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1225 - 1245<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375442172">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">S M Yusuf</span><br />
                                BARC, Mumbai<br />
                                <span class="talk">Low-dimensional spin systems and quantum magnetism</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1250 - 1400 
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1C: Inaugural Lectures by Associates</span><br />
                        Chairperson: V C Thakur, Dehradun
                        <dl class="dl-horizontal">
                            <dt>
                                1400 - 1420<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540373795893">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Swati Tripathi</span><br />
                                BSIP, Lucknow<br />
                                <span class="talk">Multiproxy studies on dung of endangered Sangai (Rucervus eldii eldii ) and Hog deer (Axis porcinus) from Manipur, India: Implications to paleoherbivory and paleoecology</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1425 - 1445<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540373867478">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Debanjan Bhowmik</span><br />
                                IIT Delhi, New Delhi<br />
                                <span class="talk">Hardware implementation of neural network algorithms, based on machine learning and neuroscience models, using spintronic devices as non-volatile memory elements</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1450 - 1530
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>                    
                    <div class="session">
                        <span class="type">Session 1D: Symposium: Materials of Today and Tomorrow</span><br />
                        Chairpersons: A K Ganguli, IIT Delhi, New Delhi, and Giridhar Kulkarni, CeNS, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1530 - 1550
                            </dt>
                            <dd>
                                <span class="speaker">A K Ganguli and Giridhar Kulkarni</span><br />
                                <span class="talk">Introduction</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1555 - 1615<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374154987">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">K Vijayamohanan</span><br />CECRI, Karaikudi<br />
                                <span class="talk">Battery materials for electric vehicles: Today and tomorrow</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1620 - 1640<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374256388">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">A K Tyagi</span>
                                BARC, Mumbai<br />
                                <span class="talk">Rational design of materials with tailored functionalities</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1645 - 1705<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374348730">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Bikramjit Basu</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Biomaterialomics: Data-driven accelerated pathways for next generation biomaterials</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1710 - 1730<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374408121">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Kanishka Biswas</span><br />
                                JNCASR, Bengaluru<br />
                                <span class="talk">Low thermal conductive chalcogenides for high performance thermoelectric energy conversion</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1735 - 1800
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1E: Public Lecture and Cultural Event</span><br />
                        Chairperson: Ram Ramaswamy, JNU, New Delhi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374459251">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Geshe Ngawang Samten</span><br />
                                Central Institute of Higher Tibetan Studies, Varanasi<br />
                                <span class="talk">Public Lecture: Buddhism and science</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1900 - 2000
                            </dt>
                            <dd>
                                <span class="speaker">Smt N Rajam and group</span><br />
                                <span class="talk">Cultural Event: Concert - Three generations on the violin</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                2000 - 2100
                            </dt>
                            <dd>Dinner Break</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="day2">
                    <h3>3<sup>rd</sup> November 2018 (Saturday)</h3>
                    <div class="session">
                        <span class="type">Session 2A: Special Lecture</span><br />
                        Chairperson: N Sathyamurthy, JNCASR, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0940<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374511921">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Imran Siddiqi</span><br />
                                CCMB, Hyderabad<br />
                                <span class="talk">GM crops in the Indian context: Looking back, looking forward</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2B: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: E D Jemmis, IISc, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0940 - 1000<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374562804">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Aninda J Bhattacharyya</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Electrochemical energy storage via batteries: Prospects and limitations</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1005 - 1025<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374616279">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Deepa Agashe, NCBS, Bengaluru</span><br />
                                <span class="talk">Host–microbial associations in a changing world</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1030 - 1050
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2C: Symposium: Community Health - A Genomic Perspective</span><br />
                        Chairperson: Rajiva Raman, BHU, Varanasi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1050 - 1115<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374675174">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Alok Bhattacharya</span><br />
                                JNU, New Delhi<br />
                                <span class="talk"> Genetics and biology of neuromuscular disorders: Unmet scientific need</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1120 - 1145<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374743466">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">D Balasubramanian</span><br />
                                L V Prasad Eye Institute, Hyderabad<br />
                                <span class="talk">Translational research approach: Primary congenital glaucoma - Prevalence, genetics and collaboration between scientists and clinicians for successful treatment</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1150 - 1215<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374797094">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Bhudev C Das</span><br />
                                Amity University, Noida<br />
                                <span class="talk">Public health genomics to innovative targeted therapeutic approaches for relapse-free survival of cancer patients</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1220 -  1245<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374855957">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">C S Yajnik</span><br />
                                KEM Hospital Research Centre, Pune<br />
                                <span class="talk">Early life origins of diabetes in Indians</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1250 -  1300
                            </dt>
                            <dd>
                                <span class="talk">Discussion</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1300 - 1400
                            </dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2D: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: R K Srivastava, BHU, Varanasi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1400 - 1420<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374911562">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Bhisma K Patel</span><br />
                                IIT, Guwahati<br />
                                <span class="talk">Fluorescent, AIEgen and cytotoxic behaviour of annulated polcyclic heteroaromatics</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1425 - 1445<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540374966779">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">S Dayananda</span><br />
                                University of Hyderabad, Hyderabad<br />
                                <span class="talk">Organophosphate hydrolase (OPH) exists as part of Ton complex in Sphingobium fuliginis ATCC27551 and plays a role in active transport of nutrients across energy deprived outer membrane</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1450 - 1510<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375013691">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Jeevanjyoti Chakraborty</span><br />
                                IIT, Kharagpur<br />
                                <span class="talk">Diffusion, growth, and elasticity in batteries - A mathematical modelling perspective</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1515 - 1535<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375072692">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Srubabati Goswami</span><br />
                                PRL, Ahmedabad<br />
                                <span class="talk">Discovering CP violation in the lepton sector: Challenges and possibilities</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1540 - 1600
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type"></span><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1600 -  1730
                            </dt>
                            <dd>
                                <span class="speaker">Venue: Senate Hall, Swatantrata Bhawan</span><br />
                                <span class="talk">Business Meeting of Fellows</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1730 - 1800
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2E: Public Lecture</span><br />
                        Chairperson: Ram Ramaswamy, JNU, New Delhi<br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375123715">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Shabana Azmi</span><br />
                                Mumbai<br />
                                <span class="talk">Changing faces of women in Hindi cinema</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1900 - 2030
                            </dt>
                            <dd>Dinner</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="day3">
                    <h3>4<sup>th</sup> November 2018 (Sunday)</h3>
                    <div class="session">
                        <span class="type">SESSION 3A: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: S Ananthakrishnan, Savitribai Phule Pune University, Pune<br />
                        <dl class="dl-horizontal">
                            <dt>
                                0900 - 0920<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375179053">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Suvendra N Bhattacharyya</span><br />
                                IICB, Kolkata<br />
                                <span class="talk">Importance of cellular organelles in controlling miRNA-mediated gene expression in mammalian cells</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0925 - 0945<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540373516049">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">N B Ramachandra</span><br />
                                University of Mysore, Mysuru<br />
                                <span class="talk">Impact of copy number variations in genome organization, evolution and diseases</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0950 - 1010<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375703291">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Riddhipratim Basu</span><br />
                                ICTS, Bengaluru<br />
                                <span class="talk">Large scale geometry of randomly growing interfaces</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1015 - 1045
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">SESSION 3B: Inaugural Lectures by Fellows/Associates</span><br />
                        Chairperson: R L Karandikar, Chennai Mathematical Institute, Chennai<br />
                        <dl class="dl-horizontal">
                            <dt>
                                1045 - 1105<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375783758">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">P Dastidar</span><br />
                                IACS, Kolkata<br />
                                <span class="talk">From serendipity to designing molecular gels for drug delivery</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1110 - 1130<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375860211">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Jayanth Vyasanakere</span><br />
                                Azim Premji University, Bengaluru<br />
                                <span class="talk">Cold fermions in artificial gauge fields</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1135 - 1155<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540375013691">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Partha S Chakraborty, IMSc, Chennai</span><br />
                                <span class="talk">Local index formula– Where do we stand today?</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">SESSION 3C: Special Lecture</span><br />
                        Chairperson: N Viswanadham, IISc, Bengaluru<br />
                        <dl class="dl-horizontal">
                            <dt>
                                1200 - 1240<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1540376044624">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Vijay Chandru</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">The sciences of the artificial: Promise and reality</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1240 - 1400
                            </dt>
                            <dd>Lunch</dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="allied">
                    <br /><br /><span class="type">Workshop on “Advances in Earth System Science”</span><br />
                    <p>Venue: Mahamana Centennial Hall, Seminar Complex, Institute of Science, BHU, Varanasi</p>
                    <h3>31 October 2018</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                09:00 am- 10:00 am
                            </dt>
                            <dd>
                                <span class="talk">Inauguration</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Technical Session I</span><br /><br />
                        Chairperson: Profs Somnath Dasgupta and A.K. Singhvi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                10:00 am - 10:30 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof  V.K. Gaur</span><br />
                                CSIR-Fourth Paradigm Institue, Bangalore<br />
                                <span class="talk">First principles approaches to address fundamental problems in Planetary Sciences Research, Education and Practice</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                10:30 - 11:00 am
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                11:00 - 11:30 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof J.N. Goswami</span><br />
                                PRL, Ahmedabad<br />
                                <span class="talk">Origin of the Solar System </span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                11:30 am - 12:00 pm
                            </dt>
                            <dd>
                                <span class="speaker">Dr M.Rajeevan</span><br />
                                MoES<br />
                                <span class="talk">Earth Science Services for Societal and Economic Benefits</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Technical Session II</span><br /><br />
                        Chairperson: Profs A.K. Kamra &amp; Anil K Gupta<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                12:00 - 12:20 pm
                            </dt>
                            <dd>
                                <span class="speaker">Dr. V.C. Thakur</span><br />
                                Formerly of Wadia Institute of Himalayan Geology, Dehradun<br />
                                <span class="talk">Seismotectonics of the Himalaya: Plate boundary and wedge thrust earthquakes</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                12:20 - 12:40  pm 
                            </dt>
                            <dd>
                                <span class="speaker">Dr. R.N.Singh</span><br />
                                IIT-Gandhinagar<br />
                                <span class="talk">Rise of earth system science</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                12:40 - 01:00  pm
                            </dt>
                            <dd>
                                <span class="speaker">Dr. B.R.Arora</span><br />
                                Formerly of Wadia Institute of Himalayan Geology, Dehradun<br />
                                <span class="talk">Seismotectonic and Seismogenesis of Earthquakes in the Himalaya: Constraint from Electrical Resistivity Imaging</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                01:00 - 01:20 pm 
                            </dt>
                            <dd>
                                <span class="speaker">Prof K.S.Krishna</span><br />
                                University of Hyderabad<br />
                                <span class="talk">Crustal architecture and Moho topography beneath the eastern Indian and Bangladesh margins - new insights on rift evolution</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                01:20 - 02:00 pm
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                02:00 - 02:45 pm
                            </dt>
                            <dd>
                                <span class="talk">Visit to the laboratories of the  Department of Geology, BHU</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                03:00 - 05:30 pm
                            </dt>
                            <dd>
                                <span class="talk">Editorial Board meeting of the Journal of Earth System Science at Committee room of Director’s office, Institute of Science, BHU [Only for editorial board members]</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                06:30 - 08:30 pm
                            </dt>
                            <dd>
                                <span class="talk">Cruise on the River Ganges (Dinner) : All delegates and their spouses/accompanying persons are requested to be ready at their guesthouses by 5:45 pm  (sharp). Vehicles will pick you up and take you to Assi ghat where the wonderful journey begins! Ganga aarti can be seen from frontal (river) side.</span>
                            </dd>
                        </dl>
                    </div>
                    <h3>1<sup>st</sup> November 2018</h3>
                    <div class="session">
                        <span class="type">Technical Session III</span><br /><br />
                        Chairperson: Drs V.C.Thakur &amp; B.R.Arora<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                09.30 - 09:50 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof S.K. Bhowmick </span><br />
                                IIT-Kharagpur<br />
                                <span class="talk">Pulsed Tectonic Patterns in Early Earth Hot Orogens: Insights from Diffusion Chronometry</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                09:50 - 10:10 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof Saibal Gupta</span><br />
                                IIT-Kharagpur<br />
                                <span class="talk">Mars in India?</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                10:10 - 10:30 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof R. Bhutani</span><br />
                                Pondicherry University<br />
                                <span class="talk">Origin and evolution of land: Clues from radiogenic isotopes</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                10:30 - 10:50 am
                            </dt>
                            <dd>
                                <span class="speaker">Dr. Arkoprovo Biswas</span><br />
                                Banaras Hindu University<br />
                                <span class="talk">Self-Potential method: In quest for subsurface mineral exploration</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                10:50 - 11:15 am
                            </dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Technical Session IV</span><br /><br />
                        Profs M. M. Sarin &amp; Pulak Sengupta<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                11:15 - 11:35 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof M.M.Sarin</span><br />
                                Physical Research Laboratory, Ahmedabad<br />
                                <span class="talk">Carbonaceous aerosols from biomass burning emissions in Northern India: Implications to atmospheric radiative forcing and climate </span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                11:35 - 11;55 am
                            </dt>
                            <dd>
                                <span class="speaker">Prof S.K.Bhattacharya</span><br />
                                Formerly of Physical Research Laboratory, Ahmedabad<br />
                                <span class="talk">Variation in oxygen isotope ratio of waters from Himalayan Rivers: decrease in snow/glacier melt contribution during 2002 to 2004</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                11:55 - 12:15 pm 
                            </dt>
                            <dd>
                                <span class="speaker">Dr. A.K.Sahai</span><br />
                                IMD, New Delhi<br />
                                <span class="talk">Challenges and Advances in Subseasonal Prediction</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                12;15 - 12:35 pm 
                            </dt>
                            <dd>
                                <span class="speaker">Dr V.V.V.S.Sarma</span><br />
                                CSIR-NIO, Vizag<br />
                                <span class="talk">Modification of coastal waters due to atmospheric deposition pollutants</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                12:35 - 12:55 pm
                            </dt>
                            <dd>
                                <span class="speaker">Dr. Abhijit Mukherjee</span><br />
                                IIT-Kharagpur<br />
                                <span class="talk">Delineating groundwater security of India</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                12:55- 1:15 pm
                            </dt>
                            <dd>
                                <span class="speaker">Dr. C. Gnanaseelan</span><br />
                                IITM, Pune<br />
                                <span class="talk">Tropical Indian Ocean warming and its impact on the regional climate</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1:15 - 1:35 pm 
                            </dt>
                            <dd>
                                <span class="speaker">Dr. Rajib Maity </span><br />
                                IIT-Kharagpur<br />
                                <span class="talk">Temporal evolution of hydroclimatic teleconnection and long-lead prediction of Indian summer monsoon rainfall using a time varying model</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                01:35 - 02:15 pm
                            </dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Technical Session V (Young Associates of IASc)</span><br /><br />
                        Drs R. Navalgund &amp; P.C.Pandey<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                2:15 - 2:35
                            </dt>
                            <dd>
                                <span class="speaker">Dr Riddhi Singh</span><br />
                                IIT-Bombay<br />
                                <span class="talk">Estimating spatio-temporal variations of surface water availability at regional scales: challenges and opportunities</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                2:35 - 2:55
                            </dt>
                            <dd>
                                <span class="speaker">Dr Kedovikho Yhoshu</span><br />
                                Nagaland University, Kohima<br />
                                <span class="talk">Lunar surface morphology and its dating</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                2:55 - 3:15 
                            </dt>
                            <dd>
                                <span class="speaker">Dr Arvind Singh</span><br />
                                Physical Research Laboratory, Ahmedabad<br />
                                <span class="talk">High Rates of Nitrogen Fixation in the Arabian Sea</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                3:15- 3:35 
                            </dt>
                            <dd>
                                <span class="speaker">Dr. Nabajit Hazarika</span><br />
                                Nagaland University, Lumami<br />
                                <span class="talk">A methodological crossover for flood risk assessment</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                04:00 - 04:30 pm
                            </dt>
                            <dd>
                                <span class="talk">Valedictory Function (Profs Ram Ramaswamy, President IASc; R.Bhatnagar VC, BHU Chairpersons)</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                04:30 pm
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <h3>1<sup>st</sup> November 2018</h3>
                        <span class="type">Forum: Expanding Frontiers in Chemical Sciences</span><br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                09:00 - 09:30 AM
                            </dt>
                            <dd>
                                <span class="talk">Registration</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                09:30 - 09:45 AM
                            </dt>
                            <dd>
                                <span class="talk">Welcome and Introduction</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                09:45 - 10:30 AM
                            </dt>
                            <dd>
                                <span class="speaker">Prof. Paul Weiss</span><br />
                                <span class="talk">Plenary Talk 1</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                10:30 - 11:15 AM
                            </dt>
                            <dd>
                                <span class="speaker">Prof. Swagata Dasgupta</span><br />
                                <span class="talk">Plenary Talk 2</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                11:15 - 11:45 AM
                            </dt>
                            <dd>Coffee and Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                11:45 - 01:00 PM
                            </dt>
                            <dd>
                                <span class="talk">Short Lectures by Invited Delegates</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                01:00 - 02:00 PM
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>
                                02:00 - 02:45 PM
                            </dt>
                            <dd>
                                <span class="speaker">Prof. Anne Milasincic Andrews</span><br />
                                <span class="talk">Plenary Talk 3</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                02:45 - 03:30 PM
                            </dt>
                            <dd>
                                <span class="speaker">Prof. Sandeep Verma</span><br />
                                <span class="talk">Plenary Talk 4</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                03:30 - 04:00 PM
                            </dt>
                            <dd>
                                <span class="talk">Coffee and Tea Break</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                04:00 - 05:00 PM
                            </dt>
                            <dd>
                                <span class="talk">Short Lectures &amp; Panel Discussion</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                05:00 - 06:00 PM
                            </dt>
                            <dd>
                                <span class="speaker">Prof. C.N.R. Rao</span><br />
                                <span class="talk">Special Lecture</span>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="schedule-text" id="spouses">
                    <br /><br /><span class="type">Spouses Programme</span><br />
                    <h3>2<sup>nd</sup> &amp; 3<sup>rd</sup> November 2018</h3>
                    <ul>
                        <li>Vishwanath Temple, BHU</li>
                        <li>Bharat Kala Bhavan, Museum, BHU</li>
                        <li>Ramnagar Fort</li>
                        <li>Sarnath</li>
                    </ul>
                    <h3>4<sup>th</sup> November 2018</h3>
                    <ul>
                        <li>Ganga Aarti, Dashashwamedh Ghat</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
